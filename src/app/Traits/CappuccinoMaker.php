<?php

namespace App\Traits;

class CappuccinoMaker extends CoffeeMaker {
	use CappuccinoTrait;

	// # Esempio di overriding del metodo presente nel trait
	// public function makeCappuccino() {
	// 	echo 'Making Cappuccino (UPDATED)' . PHP_EOL;
	// }
}