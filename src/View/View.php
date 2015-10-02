<?php

    namespace Dez\View;

    use Dez\DependencyInjection\Injectable;
    use Dez\EventDispatcher\Exception;

    class View extends Injectable implements ViewInterface {

        protected $engines          = [];

        protected $loadedEngines    = false;

        protected $data             = [];

        protected $viewDirectory    = '';

        protected $content          = null;

        public function render( $name, array $data = [] ) {

            $engines    = $this->getLoadedEngines();
            $ext        = $this->extractExtention( $name );

            if( ! isset( $engines[ $ext ] ) ) {
                throw new Exception( "Template engine for extension '$ext' not registered" );
            }

            /** @var $engine EngineInterface */
            $engine     = $engines[ $ext ];

            $engine->render( $name );

            return $this;
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
                throw new Exception( 'View dir is not exists '. $viewDirectory );
            }
            $this->viewDirectory = $viewDirectory;
            return $this;
        }

        protected function extractExtention( $name ) {
            list( $ext )    = array_reverse( explode( '.', $name ) );
            return ".$ext";
        }

        public function __toString() {
            return $this->getContent();
        }

    }