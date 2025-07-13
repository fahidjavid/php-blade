<?php
/**
 * Another type of debt collector that collects a fixed percentage of the owed amount.
 */

declare(strict_types = 1);

namespace App;

class Rocky implements DebtCollector
{
	public function collect(float $ownedAmount): float
	{
		return $ownedAmount * 0.75; // Collects 75% of the owed amount
	}
}