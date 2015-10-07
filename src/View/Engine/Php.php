<?php

    namespace Dez\View\Engine;

    use Dez\View\Engine;

    /**
     * Class Php
     * @package Dez\View\Engine
     */
    class Php extends Engine {

        /**
         * @param string $name
         * @return null|string
         */
        public function fetch( $name ) {
            $path       = $this->getView()->buildPath( $name );
            $this->data = $this->getView()->getData();

            ob_start();
                extract( $this->data );
                require $path;
            return ob_get_clean();
        }

    }