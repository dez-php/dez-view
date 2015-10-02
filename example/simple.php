<?php

error_reporting(1);
ini_set('display_errors', 1);

include_once '../vendor/autoload.php';

$di = \Dez\DependencyInjection\Container::instance();

$di->set( 'eventDispatcher', function() {
    return new \Dez\EventDispatcher\Dispatcher();
} );

$di->set( 'view', function() {
    return new \Dez\View\View();
} );

/** @var $view \Dez\View\View */
$view   = $di->get('view');

try {

    $view->setViewDirectory( __DIR__ . '/views' );

    $view->registerEngine( '.php', new \Dez\View\Engine\Php( $view ) );

    $view->render( 'users.php' );

    echo $view;

} catch ( \Exception $e ) {
    header('content-type: text/plain');
    die( get_class( $e ) . ': '. $e->getMessage() );
}