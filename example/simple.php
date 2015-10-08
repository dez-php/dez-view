<?php

error_reporting(1);
ini_set('display_errors', 1);

include_once '../vendor/autoload.php';

include_once '../smarty-3.1.27/libs/Smarty.class.php';

$di = \Dez\DependencyInjection\Container::instance();

$di->set( 'eventDispatcher', function() {
    return new \Dez\EventDispatcher\Dispatcher();
} );

$di->set( 'view', function() {

    $view   = new \Dez\View\View();
    $view->setViewDirectory( __DIR__ . '/views' );

    $view->registerEngine( '.php', new \Dez\View\Engine\Php( $view ) );
    $view->registerEngine( '.phtml', new \Dez\View\Engine\Php( $view ) );
    $view->registerEngine( '.tpl', new \Dez\View\Engine\Smarty( $view ) );

    return $view;
} );

/** @var $view \Dez\View\View */
$view   = $di->get('view');

$view->addLayout( 'wrap.php' )->addLayout( 'wrap.php' )
    ->addLayout( 'wrap.php' )->addLayout( 'wrap.php' )
    ->addLayout( 'wrap.php' );

$view->setContent( '<h1>Content from '. __FILE__ .'</h1>' );

try {

    $view->render( 'users.php' );
    echo $view;

} catch ( \Exception $e ) {
    header('content-type: text/plain');
    die( get_class( $e ) . ': '. $e->getMessage() );
}