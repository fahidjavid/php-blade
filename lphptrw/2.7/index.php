<?php

declare(strict_types = 1);


require __DIR__ . '/vendor/autoload.php';

use \App\PaymentGateway\Paddle\Transaction as PaddleTransaction;

//echo PaddleTransaction::STATUS_PENDING;

// OR

$transaction = new PaddleTransaction();
//
//echo $transaction::STATUS_PAID . PHP_EOL;


// TO get fully qualified class name
//echo get_class($transaction) . PHP_EOL;

// OR

//echo PaddleTransaction::class . PHP_EOL;

// Setting up the status

try {
	$transaction->setStatus(\App\Enums\Status::PENDING);
} catch (\InvalidArgumentException $e) {
	echo 'Error: ' . $e->getMessage() . PHP_EOL;
}