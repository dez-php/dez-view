<?php

    namespace Dez\View;

    abstract class Engine implements EngineInterface {

        protected $view;

        public function __construct( ViewInterface $view ) {
            $this->setView( $view );
        }

        /**
         * @param $name string
         * @param $default string
         * @return string
         */
        public function get( $name, $default );

        /**
         * @param $name string
         * @return $this
         */
        public function start( $name );

        /**
         * @return $this
         */
        public function stop();

        /**
         * @return $this
         */
        public function append();

        /**
         * @return $this
         */
        public function prepend();

        /**
         * @param $name string
         * @return $this
         */
        public function layout( $name );

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

    }