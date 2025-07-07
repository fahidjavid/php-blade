<?php

declare( strict_types = 1 );

namespace App\PaymentGateway\Paddle;

use App\Enums\Status;

class Transaction {

	private string $status;

	public function __construct() {
		echo 'Paddle transaction class initialized.' . '<br>';
	}


	public function setStatus( string $status ): void {
		if ( ! array_key_exists( $status, Status::ALL_STATUSES ) ) {
			throw new \InvalidArgumentException( "Invalid status: $status" );
		}
		$this->status = $status;
		echo "Status set to: " . Status::ALL_STATUSES[ $status ] . '<br>';
	}
}