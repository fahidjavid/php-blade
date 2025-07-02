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

new PaddleTransaction();

