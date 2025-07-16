<?php

declare( strict_types = 1 );


require __DIR__ . '/vendor/autoload.php';

//$collector = new \App\CollectAgency();
//
//echo $collector->collect( 1000.00 ) . PHP_EOL;

$service = new \App\DebtCollectionService();

$service->collectDebt(new \App\CollectAgency());