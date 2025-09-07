<?php

namespace App\Classes;

class Invoice {
	public function show(): void {
		echo 'Invoice Page';
	}

	public static function create(): void {
		?>
		<form action="/invoice/create" method="post">
			<label for="price">Provide Price</label>
			<input type="text" name="price">
			<button>Submit</button>
		</form>
		<?php
	}

	public static function store(): void {
		var_dump($_POST);
	}
}