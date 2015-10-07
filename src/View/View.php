<?php

    namespace Dez\View;

    use Dez\DependencyInjection\Injectable;
    use Dez\EventDispatcher\Exception;

    class View extends Injectable implements ViewInterface {

        protected $rendered         = false;

        protected $engines          = [];

        protected $loadedEngines    = false;

        protected $data             = [];

        protected $viewDirectory    = '';

        protected $layouts          = [];

        protected $layout           = 'layout.php';

        protected $content          = null;

        public function render( $path ) {
            if( $this->isRendered() ) {
                ob_clean();
                throw new Exception( 'Render can be called only once' );
            }

            $this->handleTemplate( $path );

            $layouts    = $this->getLayouts();
            if( count( $layouts ) > 0 ) while( $layout = array_pop( $layouts ) ) {
                $this->handleTemplate( $layout );
            } unset( $layout, $layouts );

            $this->handleTemplate( $this->getMainLayout() );

            $this->setRendered( true );
            return $this;
        }

        protected function handleTemplate( $path ) {
            if( $this->exists( $path ) ) {
                var_dump($path);
                $engine = $this->getEngine( $this->extractExtension( $path ) );
                $engine->setSection( 'content', $this->getContent() );
                $this->setContent( $engine->fetch( $path ) );
            }
            return $this;
        }

        public function exists( $path ) {
            return file_exists( $this->buildPath( $path ) );
        }

        public function registerEngine( $fileExtension, $engine = null ) {
            $this->engines[ $fileExtension ]   = $engine;
            $this->setLoadedEngines( false );
            return $this;
        }

        public function registerEngines( array $engines ) {
            foreach( $engines as $fileExtension => $engine ) {
                $this->registerEngine( $fileExtension, $engine );
            }
            return $this;
        }

        /**
         * @param $extension
         * @return Engine
         * @throws Exception
         */
        public function getEngine( $extension ) {
            $engines    = $this->getLoadedEngines();

            if( ! isset( $engines[ $extension ] ) ) {
                ob_clean();
                throw new Exception( "Template engine for extension '$extension' not registered" );
            }

            return $engines[ $extension ];
        }

        public function getLoadedEngines() {

            if( ! $this->isLoadedEngines() ) {

                foreach( $this->engines as $ext => $engine ) {
                    if( $engine instanceof \Closure ) {
                        $this->engines[ $ext ]  = call_user_func_array( $engine, [ $this ] );
                    } else if( is_object( $engine ) && $engine instanceof EngineInterface ) {
                        continue;
                    } else if( is_string( $engine ) && class_exists( $engine ) ) {
                        $this->engines[ $ext ]  = new $engine( $this );
                    } else {
                        ob_clean();
                        throw new Exception( 'Invalid template engine registered' );
                    }
                }

                $this->setLoadedEngines( true );
            }

            return $this->engines;
        }

        public function get( $name ) {
            return isset( $this->data[ $name ] ) ? $this->data[ $name ] : null;
        }

        public function set( $name, $value = '' ) {
            $this->data[ $name ]    = $value;
            return $this;
        }

        public function addLayout( $layoutPath = '' ) {
            $this->layouts[]    = $layoutPath;
            return $this;
        }

        public function getLayouts() {
            return $this->layouts;
        }

        public function hasLayouts() {
            return count( $this->layouts ) > 0;
        }

        /**
         * @return string
         */
        public function getMainLayout() {
            return $this->layout;
        }

        /**
         * @param string $layoutPath
         * @return static
         */
        public function setMainLayout( $layoutPath = 'index.php' ) {
            $this->layout = $layoutPath;
            return $this;
        }

        /**
         * @return array
         */
        public function getData() {
            return $this->data;
        }

        /**
         * @return boolean
         */
        public function isLoadedEngines() {
            return $this->loadedEngines;
        }

        /**
         * @param boolean $loadedEngines
         * @return static
         */
        public function setLoadedEngines( $loadedEngines ) {
            $this->loadedEngines = $loadedEngines;
            return $this;
        }

        /**
         * @return string
         */
        public function getViewDirectory() {
            return $this->viewDirectory;
        }

        /**
         * @return string
         */
        public function getContent() {
            return $this->content;
        }

        /**
         * @param null $content
         * @return static
         */
        public function setContent( $content ) {
            $this->content = $content;
            return $this;
        }

        /**
         * @param string $viewDirectory
         * @return static
         * @throws Exception
         */
        public function setViewDirectory( $viewDirectory ) {
            if( ! file_exists( $viewDirectory ) || ! is_dir( $viewDirectory ) ) {
                ob_clean();
                throw new Exception( 'View dir is not exists '. $viewDirectory );
            }
            $this->viewDirectory = $viewDirectory;
            return $this;
        }

        public function buildPath( $path ) {
            $path   = "{$this->getViewDirectory()}/$path";
            return file_exists( $path ) ? $path : false;
        }

        public function extractExtension( $name ) {
            return '.' . array_reverse( explode( '.', array_reverse( explode( '/', $name ) )[0] ) )[0];
        }

        /**
         * @return boolean
         */
        public function isRendered() {
            return $this->rendered;
        }

        /**
         * @param boolean $rendered
         * @return static
         */
        public function setRendered( $rendered ) {
            $this->rendered = $rendered;
            return $this;
        }

        public function __toString() {
            return $this->getContent();
        }

    }