<?php

require 'vendor/autoload.php';

session_start();

define('STORAGE_PATH', __DIR__ . '/app/storage/');

$router = new App\Router();

$router->get( '/', [ App\Classes\Home::class, 'index' ] )
       ->post( '/upload', [ App\Classes\Home::class, 'upload' ] )
       ->get( '/invoice', [ App\Classes\Invoice::class, 'show' ] )
       ->get( '/invoice/create', [ App\Classes\Invoice::class, 'create' ] )
       ->post( '/invoice/create', [ App\Classes\Invoice::class, 'store' ] );

try {
	echo $router->resolve( $_SERVER['REQUEST_URI'], strtolower($_SERVER['REQUEST_METHOD']) );
} catch ( \App\Exceptions\RouteNotFoundException $e ) {
	echo $e->getMessage();
}

private func bar() {

}
