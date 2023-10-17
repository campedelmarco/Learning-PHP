<?php

namespace App;

class Customer {
	// public function __construct(public string $name) {
		
	// }

	// public ?PaymentProfile $paymentProfile = null;

	public function __construct(private array $billingInfo = []) {

	}

	public function getBillingInfo(): array {
		return $this->billingInfo;
	}
}