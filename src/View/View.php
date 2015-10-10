<?php

    namespace Dez\View;

    use Dez\DependencyInjection\Injectable;

    /**
     * Class View
     * @package Dez\View
     */
    class View extends Injectable implements ViewInterface {

        /**
         * @var bool
         */
        protected $rendered         = false;

        /**
         * @var array
         */
        protected $engines          = [];

        /**
         * @var bool
         */
        protected $loadedEngines    = false;

        /**
         * @var array
         */
        protected $data             = [];

        /**
         * @var string
         */
        protected $viewDirectory    = '';

        /**
         * @var array
         */
        protected $layouts          = [];

        /**
         * @var string
         */
        protected $layout           = 'layout.php';

        /**
         * @var null
         */
        protected $content          = null;

        /**
         * @param $path
         * @return $this
         * @throws \Exception
         */
        public function render( $path ) {

            try {

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
            } catch ( \Exception $e ) {
                ob_clean();
                throw $e;
            }

            $this->setRendered( true );
            return $this->getContent();
        }

        /**
         * @param $path
         * @param array $data
         * @return $this
         * @throws Exception
         */
        public function fetch( $path, array $data = [] ) {
            $engine = $this->getEngine( $this->extractExtension( $path ) );
            return $engine->fetch( $path );
        }

        /**
         * @param $path
         * @return $this
         * @throws Exception
         * @throws \Dez\View\Exception
         */
        protected function handleTemplate( $path ) {
            if( $this->exists( $path ) ) {
                $engine = $this->getEngine( $this->extractExtension( $path ) );
                if( $previousContent = $this->getContent() ) {
                    $engine->setSection( 'content', $previousContent );
                }
                $this->setContent( $engine->fetch( $path ) );
            }
            return $this;
        }

        /**
         * @param $path
         * @return bool
         */
        public function exists( $path ) {
            return file_exists( $this->buildPath( $path ) );
        }

        /**
         * @param $fileExtension
         * @param null $engine
         * @return $this
         */
        public function registerEngine( $fileExtension, $engine = null ) {
            $this->engines[ $fileExtension ]   = $engine;
            $this->setLoadedEngines( false );
            return $this;
        }

        /**
         * @param array $engines
         * @return $this
         */
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

        /**
         * @return array
         * @throws Exception
         */
        public function getLoadedEngines() {

            if( ! $this->isLoadedEngines() ) {

                foreach( $this->engines as $extension => $engine ) {
                    if( $engine instanceof \Closure ) {
                        $this->engines[ $extension ]  = call_user_func_array( $engine, [ $this ] );
                    } else if( is_object( $engine ) && $engine instanceof EngineInterface ) {
                        continue;
                    } else if( is_string( $engine ) && class_exists( $engine ) ) {
                        $this->engines[ $extension ]  = new $engine( $this );
                    } else {
                        ob_clean();
                        throw new Exception( 'Invalid template engine registered for extension '. $extension );
                    }
                }

                $this->setLoadedEngines( true );
            }

            return $this->engines;
        }

        /**
         * @param $name
         * @return null
         */
        public function get( $name ) {
            return isset( $this->data[ $name ] ) ? $this->data[ $name ] : null;
        }

        /**
         * @param $name
         * @param string $value
         * @return $this
         */
        public function set( $name, $value = '' ) {
            $this->data[ $name ]    = $value;
            return $this;
        }

        /**
         * @param string $layoutPath
         * @return $this
         */
        public function addLayout( $layoutPath = '' ) {
            $this->layouts[]    = $layoutPath;
            return $this;
        }

        /**
         * @return array
         */
        public function getLayouts() {
            return $this->layouts;
        }

        /**
         * @return bool
         */
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

        /**
         * @param $path
         * @return bool|string
         */
        public function buildPath( $path ) {
            $path   = "{$this->getViewDirectory()}/$path";
            return file_exists( $path ) ? $path : false;
        }

        /**
         * @param $name
         * @return string
         */
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

        /**
         * @return string
         */
        public function __toString() {
            return $this->getContent();
        }

    }