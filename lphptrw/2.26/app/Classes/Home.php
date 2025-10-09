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

		$file_path = STORAGE_PATH . $_FILES['receipt']['name'];
		move_uploaded_file( $_FILES['receipt']['tmp_name'], $file_path );

		echo '<pre>';
		print_r( $file_path );
		echo '</pre>';
	}
}