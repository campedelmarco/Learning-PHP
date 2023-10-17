<?php

namespace App;

use Traversable;

// class InvoiceCollection implements \Iterator {
// class InvoiceCollection implements \IteratorAggregate {
class InvoiceCollection extends Collection {

	// private int $key;

	// public function __construct(public array $invoices) {

	// }

	// public function current() {
	// 	echo __METHOD__ . PHP_EOL;
	// 	// return current($this->invoices);
	// 	return $this->invoices[$this->key];
	// }

	// public function next() {
	// 	echo __METHOD__ . PHP_EOL;
	// 	// next($this->invoices);
	// 	++$this->key;
	// }

	// public function key() {
	// 	echo __METHOD__ . PHP_EOL;
	// 	// return key($this->invoices);
	// 	return $this->key();
	// }
	
	// public function valid() {
	// 	echo __METHOD__ . PHP_EOL;
	// 	// return current($this->invoices) !== false;
	// 	return isset($this->invoices[$this->key]);
	// }

	// public function rewind() {
	// 	echo __METHOD__ . PHP_EOL;
	// 	// reset($this->invoices);
	// 	$this->key = 0;
	// }

	// public function getIterator() {
	// 	return new \ArrayIterator($this->invoices);
	// }
}