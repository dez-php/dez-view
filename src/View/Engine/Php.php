<?php

    namespace Dez\View\Engine;

    use Dez\View\Engine;

    class Php extends Engine {

        public function render( $name ) {

            $file = $this->getView()->getViewDirectory() . '/' . $name;

            return require $file;

        }

    }