<?php

namespace App\Traits;

trait LatteTrait {
	public function makeLatte() {
		echo static::class . ' is making latte' . PHP_EOL;
	}
}