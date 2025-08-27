<?php

namespace App\Classes;

class Invoice {
	public function show(): void {
		echo 'Invoice Page';
	}

	public static function create(): void {
		echo 'Invoice Create Page';
	}
}