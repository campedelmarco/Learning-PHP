<?php

namespace App;

class Collection implements \IteratorAggregate {

	public function __construct(private array $items) {

	}

	public function getIterator() {
		return new \ArrayIterator($this->items);
	}

}