<?php

    namespace Dez\View\Engine;

    use Dez\View\Engine;
    use Dez\View\Exception;

    class Php extends Engine {

        public function render( $name ) {
            if( $this->isRendered() ) {
                throw new Exception( 'Render can be called only once' );
            }

            $this->setRendered( true );

            $file = $this->getView()->getViewDirectory() . '/' . $name;

            ob_start();
                extract( $this->data );
                require $file;
            $this->sections['content']  = ob_get_clean();

            $layoutFile = $this->getView()->getViewDirectory() . '/' . $this->layout;

            ob_start();
                require $layoutFile;
            $this->getView()->setContent( ob_get_clean() );

            return $this;
        }

    }