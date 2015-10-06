<?php

error_reporting(1);
ini_set('display_errors', 1);

include_once '../vendor/autoload.php';

$di = \Dez\DependencyInjection\Container::instance();

$di->set( 'eventDispatcher', function() {
    return new \Dez\EventDispatcher\Dispatcher();
} );

$di->set( 'view', function() {
    $view   = new \Dez\View\View();
    $view->setViewDirectory( __DIR__ . '/views' );
    $view->registerEngine( '.php', function() use ( $view ) {
        return new \Dez\View\Engine\Php( $view );
    } );
    return $view;
} );

/** @var $view \Dez\View\View */
$view   = $di->get('view');

$view->setContent( '<h1>Content from '. __FILE__ .'</h1>' );

try {

    $view->render( 'users.php' );


    echo $view;

} catch ( \Exception $e ) {
    header('content-type: text/plain');
    die( get_class( $e ) . ': '. $e->getMessage() );
}