<?php

namespace App;

class CollectAgency implements DebtCollector
{
	public function collect(float $ownedAmount): float
	{
		$guaranteedAmount = $ownedAmount * 0.5; // 50% of the owed amount is collected

		return mt_rand($guaranteedAmount, $ownedAmount);
	}
}