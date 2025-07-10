<?php

namespace App;

class ToasterPro extends Toaster {
	public int   $size   = 4;

	public function toastBagel(): void {
		foreach ( $this->slices as $i => $slice ) {
			echo ( $i + 1 ) . ": Toasting: " . $slice . " with bagels option <br>" . PHP_EOL;
		}
	}
}