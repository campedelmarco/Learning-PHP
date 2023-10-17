<?php

namespace App\Traits;

trait CappuccinoTrait {
	public function makeCappuccino() {
		echo static::class . ' is making cappuccino' . PHP_EOL;
	}
}