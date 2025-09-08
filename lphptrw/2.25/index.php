<?php

require 'vendor/autoload.php';

session_start();

$router = new App\Router();

$router->get( '/', [ App\Classes\Home::class, 'index' ] )
       ->get( '/invoice', [ App\Classes\Invoice::class, 'show' ] )
       ->get( '/invoice/create', [ App\Classes\Invoice::class, 'create' ] )
       ->post( '/invoice/create', [ App\Classes\Invoice::class, 'store' ] );

echo $_SESSION['count'];

try {
	echo $router->resolve( $_SERVER['REQUEST_URI'], strtolower($_SERVER['REQUEST_METHOD']) );
} catch ( \App\Exceptions\RouteNotFoundException $e ) {
	echo $e->getMessage();
}