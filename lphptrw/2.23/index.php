<?php

require 'vendor/autoload.php';

$router = new App\Router();

$router->register( '/', [ App\Classes\Home::class, 'index' ] )
       ->register( '/invoice', [ App\Classes\Invoice::class, 'show' ] )
       ->register( '/invoice-create', [ App\Classes\Invoice::class, 'create' ] );

try {
	echo $router->resolve( $_SERVER['REQUEST_URI'] );
} catch ( \App\Exceptions\RouteNotFoundException $e ) {
	echo $e->getMessage();
}