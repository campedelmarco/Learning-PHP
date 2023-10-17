<?php

declare(strict_types=1);

namespace App\PaymentGateway\Paddle;

// use App\Enums\Status;

class Transaction {

	// private string $status;
	
	// public function __construct() {
	// 	// var_dump(new CustomerProfile());
	// 	$this->setStatus(Status::PENDING);
	// }

	// public function setStatus(string $status): self {
	// 	if (! isset(Status::ALL_STATUSES[$status])) {
	// 		throw new \InvalidArgumentException('Invalid status');
	// 	}
	// 	$this->status = $status;

	// 	return $this;
	// }


	// private static int $count = 0;

	// public function __construct(
	// 	public float $amount,
	// 	public string $description
	// ) {
	// 	self::$count++;
	// }

	// public static function getCount(): int {
	// 	return self::$count;
	// }

	// public function process() {
	// 	echo 'Processing paddle transaction...';
	// }


	private float $amount;

	public function __construct(float $amount) {
		$this->amount = $amount;
	}

	// public function getAmount(): float {
	// 	return $this->amount;
	// }

	// public function setAmount(float $amount): float {
	// 	$this->amount = $amount;
	// }

	public function process() {
		echo 'Processing $' . $this->amount . ' transaction';
	}
	
}