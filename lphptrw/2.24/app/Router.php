<?php

declare( strict_types = 1 );

namespace App;

use App\Exceptions\RouteNotFoundException;

class Router {

	private array $routes;

	public function register( string $route, callable|array $action ): self {
		$this->routes[ $route ] = $action;

		return $this;
	}

	/**
	 * @throws RouteNotFoundException
	 */
	public function resolve( $requestUri ) {
		$route  = explode( '?', $requestUri )[0];
		$action = $this->routes[ $route ] ?? null;

		if ( ! $action ) {
			throw new RouteNotFoundException();
		}

		if ( is_array( $action ) ) {
			[ $class, $method ] = $action;

			if ( class_exists( $class ) ) {
				if ( method_exists( $class, $method ) ) {
					$class = new $class( $method );

					return call_user_func_array( [ $class, $method ], [] );
				}
			}
		}

		if ( is_callable( $this->routes[ $route ] ) ) {
			return call_user_func( $this->routes[ $route ] );
		}

		throw new RouteNotFoundException();
	}
}