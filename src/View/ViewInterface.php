<?php

    namespace Dez\View;

    interface ViewInterface {

        public function fetch( $templateName, array $data = [] );

        public function render( $templateName, array $data = [] );

    }