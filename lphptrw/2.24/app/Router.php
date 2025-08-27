<?php

declare( strict_types = 1 );

namespace App;

use App\Exceptions\RouteNotFoundException;

class Router {

	private array $routes;

	public function register( string $requestMethod, string $route, callable|array $action ): self {
		$this->routes[ $requestMethod ][ $route ] = $action;

		return $this;
	}

	public function get( string $route, callable|array $action ): self {
		$this->register( 'get', $route, $action );

		return $this;
	}

	public function post( string $route, callable|array $action ): self {
		$this->register( 'post', $route, $action );

		return $this;
	}

	public function routes(): array {
		return $this->routes;
	}

	/**
	 * @throws RouteNotFoundException
	 */
	public function resolve( $requestUri, $requestMethod ) {
		$route  = explode( '?', $requestUri )[0];

		$action = $this->routes[ $requestMethod ][ $route ] ?? null;

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