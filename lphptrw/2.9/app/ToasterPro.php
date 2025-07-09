<?php

namespace App;

class ToasterPro {
	public array $slices = [];
	public int   $size   = 4;

	public function addSlide( string $slice ): void {
		if ( count( $this->slices ) < $this->size ) {
			$this->slices[] = $slice;
		} else {
			echo "Toaster is full, please remove a slice before adding a new one." . PHP_EOL;
		}
	}

	public function toast(): void {
		foreach ( $this->slices as $i => $slice ) {
			echo ( $i + 1 ) . ": Toasting: " . $slice . " <br>" . PHP_EOL;
		}
	}

	public function toastBagel(): void {
		foreach ( $this->slices as $i => $slice ) {
			echo ( $i + 1 ) . ": Toasting: " . $slice . " with bagels option <br>" . PHP_EOL;
		}
	}
}