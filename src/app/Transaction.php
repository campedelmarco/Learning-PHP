<?php

namespace App;

// /**
//  * @property int $x
//  * @property float $y
//  * @property-read int $xx
//  * @property-write float $yy
//  */
/**
 * @method int foo(string $x)
 * @method static int foo(string $x)
 */
class Transaction {

	public function __call($name, $arguments) {
		
	}

	public static function __callStatic($name, $arguments) {
		
	}

	// public function __get(string $name) {

	// }

	// public function __set(string $name, $value): void {

	// }


	// /** @var Customer */	# prima di PHP 7.4 era necessario usare il docblock per specificare il tipo della proprietà
	// private Customer $customer;	# da PHP 7.4 si può fare type hinting anche sulle proprietà

	// /** @var float */
	// private float $amount;

	// /**
	//  * @param Customer[] $arr
	//  */
	// public function foo(array $arr) {
	// 	/** @var Customer $obj */	# ridondante se presente docblock della funzione che indica un array di Customer
	// 	foreach($arr as $obj) {
	// 		$obj->name;
	// 	}
	// }


	// /**
	//  * Descrizione
	//  * 
	//  * @param Customer $customer
	//  * @param float $amount
	//  * 
	//  * @throws \RuntimeException
	//  * @throws \InvalidArgumentException
	//  * 
	//  * @return bool
	//  */
	// public function process(Customer $customer, float $amount): bool {
	// 	# Elaborazione transazione

	// 	# Se fallisce, return false
	// 	# altrimenti return true
	// 	return true;
	// }
}