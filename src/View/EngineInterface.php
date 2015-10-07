<?php

    namespace Dez\View;

    /**
     * Interface EngineInterface
     * @package Dez\View
     */
    interface EngineInterface {

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
         * @param $name string
         * @return $this
         */
        public function fetch( $name );

    }