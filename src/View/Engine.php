<?php

    namespace Dez\View;

    abstract class Engine implements EngineInterface {

        protected $rendered     = false;

        protected $view         = null;

        protected $layout       = 'layout';

        protected $data         = [];

        protected $sections     = [];

        public function __construct( ViewInterface $view, array $data = [] ) {
            $this->setView( $view );
            $this->addData( $data );
        }

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
            if( ! isset( $this->sections[$name] ) ) {
                $this->sections[$name]  = '';
            }
            ob_start();
            return $this;
        }

        /**
         * @return $this
         */
        public function stop() {
            end( $this->sections );
            $this->sections[ key( $this->sections ) ]   = ob_get_clean();
            return $this;
        }

        /**
         * @return $this
         */
        public function append() {
            end( $this->sections );
            $this->sections[ key( $this->sections ) ]   .= ob_get_clean();
            return $this;
        }

        /**
         * @return $this
         */
        public function prepend() {
            end( $this->sections );
            $this->sections[ key( $this->sections ) ]   = ob_get_clean() . $this->sections[ key( $this->sections ) ];
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