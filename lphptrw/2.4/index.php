<?php

declare(strict_types = 1);


require __DIR__ . '/vendor/autoload.php';

//require_once "stripe/Transaction.php";
//require_once "paddle/Transaction.php";

//new \GateWay\Paddle\Transaction();

// OR

//use \GateWay\Paddle\Transaction;
//new Transaction();

// OR

use \App\PaymentGateway\Paddle\Transaction as PaddleTransaction;
use \App\PaymentGateway\Stripe\Transaction as StripeTransaction;
//
new PaddleTransaction();
echo '<br>';
new StripeTransaction();



$uuid =  new \Ramsey\Uuid\UuidFactory();

echo $uuid->uuid4()->toString() . PHP_EOL;