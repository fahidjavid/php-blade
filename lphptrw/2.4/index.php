<?php

declare(strict_types = 1);

require_once "stripe/Transaction.php";
require_once "paddle/Transaction.php";

//new \GateWay\Paddle\Transaction();

// OR

//use \GateWay\Paddle\Transaction;
//new Transaction();

// OR

use \GateWay\Paddle\Transaction as PaddleTransaction;
use \GateWay\Stripe\Transaction as StripeTransaction;
//
new PaddleTransaction();
new StripeTransaction();


require __DIR__ . '/vendor/autoload.php';

$uuid =  new \Ramsey\Uuid\UuidFactory();

echo $uuid->uuid4()->toString() . PHP_EOL;

