<?php

declare( strict_types = 1 );

namespace App\PaymentGateway\Paddle;

use App\Enums\Status;

class Transaction {

	public float $amount;

	public function __construct( float $amount ) {
		$this->amount = $amount;
	}


	public function process(): void {
		echo 'Processing $' . $this->amount . ' transaction via Paddle.' . PHP_EOL;
	}
}