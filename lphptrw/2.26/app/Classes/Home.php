<?php

namespace App\Classes;

class Home {
	public function index(): string {
		return <<<FORM
<form action="/upload" method="post" enctype="multipart/form-data">
	Select image to upload:
	<input type="file" name="receipt" id="receipt">
	<input type="submit" value="Upload" name="submit">
</form>
FORM;
	}

	public function upload(): void {
		echo '<pre>';
		print_r( $_FILES );
		echo '</pre>';
	}
}