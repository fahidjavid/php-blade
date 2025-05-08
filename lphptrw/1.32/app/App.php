<?php

declare( strict_types = 1 );

function getTransactionFiles( string $dirPath ) {
	$files = [];

	foreach ( scandir( $dirPath ) as $file ) {
		if ( is_dir( $file ) ) {
			continue;
		}

		$files[] = $dirPath . $file;
	}

	return $files;
}

function getTransactions( string $fileName, ?callable $extractTransaction = null ): array {

	if ( ! file_exists( $fileName ) ) {
		trigger_error( 'File "' . $fileName . '" does not exist.', E_USER_ERROR );
	}

	$file = fopen( $fileName, 'r' );
	fgetcsv( $file );

	$transactions = [];

	while ( ( $transaction = fgetcsv( $file ) ) !== false ) {
		if ( null !== $extractTransaction ) {
			$transactions[] = $extractTransaction( $transaction );
		} else {
			$transactions[] = extractTransaction( $transaction );
		}
	}

	return $transactions;
}

function extractTransaction( $transaction ) {

	[ $date, $checkNumber, $description, $amount ] = $transaction;
	$amount = str_replace( [ '$', ',' ], '', $amount );

	return [
		'date'        => $date,
		'checkNumber' => $checkNumber,
		'description' => $description,
		'amount'      => $amount,
	];
}

function calculateTotals( $transactions ) {
	$totals = [ 'netTotal' => 0, 'totalIncome' => 0, 'totalExpense' => 0 ];

	foreach ( $transactions as $transaction ) {
		$totals['netTotal'] += $transaction['amount'];

		if ( $transaction['amount'] >= 0 ) {
			$totals['totalIncome'] += $transaction['amount'];
		} else {
			$totals['totalExpense'] += $transaction['amount'];
		}
	}

	return $totals;
}

function dump( $data ) {
	echo '<pre>';
	print_r( $data );
	echo '</pre>';
}