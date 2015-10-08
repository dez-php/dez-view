<?php

    namespace Dez\View;

    /**
     * Class Engine
     * @package Dez\View
     */
    abstract class Engine implements EngineInterface {

        /**
         * @var null
         */
        protected $view                 = null;

        /**
         * @var array
         */
        protected $data                 = [];

        /**
         * @var array
         */
        protected $sections             = [];

        /**
         * @var array
         */
        static protected $openedSections    = [];

        /**
         * Engine constructor.
         * @param ViewInterface $view
         */
        public function __construct( ViewInterface $view ) {
            $this->setView( $view );
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
         * @param string $name
         * @return $this
         */
        public function layout( $name = '' ) {
            $this->getView()->setMainLayout( $name );
            return $this;
        }

    }