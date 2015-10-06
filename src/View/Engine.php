<?php

    namespace Dez\View;

    abstract class Engine implements EngineInterface {

        protected $rendered             = false;

        protected $view                 = null;

        protected $layout               = 'layout';

        protected $middlewareLayouts    = [];

        protected $data                 = [];

        protected $sections             = [];

        static protected $openedSections    = [];

        public function __construct( ViewInterface $view, array $data = [] ) {
            $this->setView( $view );
            $this->addData( $data );
        }

        /**
         * @param array $data
         * @return $this
         */
        public function addData( array $data = [] ) {
            if( count( $data ) > 0 ) {
                $this->data = array_merge($this->data, $data);
            }
            return $this;
        }

        /**
         * @param $name string
         * @param $default string
         * @return string
         */
        public function get( $name, $default = null ) {
            return isset( $this->data[ $name ] ) ? $this->data[ $name ] : $default;
        }

        /**
         * @param $name
         * @param $source
         * @return $this
         * @throws Exception
         */
        public function setSection( $name, $source ) {
            if( $source instanceof \Closure || is_string( $source ) ) {
                if( ! is_string( $source ) ) {
                    $this->sections[ $name ]    = call_user_func_array( $source, [ $this ] );
                } else {
                    $this->sections[ $name ]    = $source;
                }
                static::$openedSections[]   = $name;
            } else {
                throw new Exception( 'Bad section source' );
            }
            return $this;
        }

        /**
         * @param $name
         * @return bool
         */
        public function isSection( $name ) {
            return isset( $this->sections[ $name ] );
        }

        /**
         * @param $name string
         * @return string
         */

        public function section( $name ) {
            if( isset( $this->sections[ $name ] ) ) {
                return $this->sections[ $name ];
            } else {
                return false;
            }
        }

        /**
         * @param $name string
         * @return $this
         */
        public function start( $name ) {
            static::$openedSections[]   = $name;
            if( ! isset( $this->sections[ $name ] ) ) {
                $this->sections[ $name ]    = '';
            }
            ob_start();
            return $this;
        }

        /**
         * @return $this
         */
        public function stop() {
            $this->sections[ array_pop( static::$openedSections ) ]   = ob_get_clean();
            return $this;
        }

        /**
         * @return $this
         */
        public function append() {
            $this->sections[ array_pop( static::$openedSections ) ]   .= ob_get_clean();
            return $this;
        }

        /**
         * @return $this
         */
        public function prepend() {
            $key    = array_pop( static::$openedSections );
            $this->sections[ $key ]   = ob_get_clean() . $this->sections[ $key ];
            return $this;
        }

        /**
         * @param $name string
         * @return $this
         */
        public function layout( $name ) {
            $this->layout   = $name;
            return $this;
        }

        /**
         * @return View
         */
        public function getView() {
            return $this->view;
        }

        /**
         * @param mixed $view
         * @return static
         */
        public function setView( ViewInterface $view ) {
            $this->view = $view;
            return $this;
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

    }