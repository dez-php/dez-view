<?php

    namespace Dez\View\Engine;

    use Dez\View\Engine;
    use Dez\View\ViewInterface;

    /**
     * Class Smarty
     * @package Dez\View\Engine
     */
    class Smarty extends Engine {

        protected $smarty   = null;

        public function __construct( ViewInterface $view ) {
            $this->configureSmarty();
            parent::__construct( $view );
        }

        public function fetch( $path ) {
            return $this->getSmarty()->fetch( $this->getView()->buildPath( $path ) );
        }

        /**
         * @return \Smarty
         */
        public function getSmarty() {
            return $this->smarty;
        }

        /**
         * void
         */
        protected function configureSmarty() {

            $this->smarty   = new \Smarty();

            $this->smarty->debugging        = false;
            $this->smarty->caching          = true;
            $this->smarty->cache_lifetime   = 120;

            $this->smarty->assign( 'view', $this );

        }

    }