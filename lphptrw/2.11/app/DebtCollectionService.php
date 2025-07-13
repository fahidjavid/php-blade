<?php

namespace App;

class DebtCollectionService {
	public function collectDebt(CollectAgency $collector) {
		$ownedAmount = mt_rand(1000, 5000); // Random amount between 1000 and 5000
		$collectedAmount = $collector->collect($ownedAmount);

		echo 'Collected amount: $' . $collectedAmount . ' out of $ ' . $ownedAmount . PHP_EOL;
	}
}