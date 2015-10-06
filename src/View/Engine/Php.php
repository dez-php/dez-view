<?php

    namespace Dez\View\Engine;

    use Dez\View\Engine;
    use Dez\View\EngineInterface;
    use Dez\View\Exception;

    class Php extends Engine {

        public function render( $name ) {
            if( $this->isRendered() ) {
                throw new Exception( 'Render can be called only once' );
            }

            $this->setRendered( true );

            $file = $this->getView()->getViewDirectory() . '/' . $name;

            if( ( $content = $this->getView()->getContent() ) !== '' ) {
                $this->setSection( 'content', function( EngineInterface $engine ) use ( $content ) {
                    return $content;
                } );
            }

            $this->start( 'content' );
                extract( $this->data );
                require $file;
            $this->stop();

            $layoutFile = $this->getView()->getViewDirectory() . '/' . $this->layout;

            ob_start();
                require $layoutFile;
            $this->getView()->setContent( ob_get_clean() );

            return $this;
        }

    }