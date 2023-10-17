<?php

namespace App;

class Invoice {
	// public ?Invoice $linkedInvoice = null;

	// public function __construct(public Customer $customer, public float $amount, public string $description) {
		
	// }

	// private string $id;

	// public function __construct() {
	// 	$this->id = uniqid('invoice_');
	// }

	// // public static function create(): static {
	// // 	return new static();
	// // }

	// public function __clone() {
	// 	$this->id = uniqid('invoice_');
	// }

	// public string $id;

	// public function __construct(public float $amount, public string $description, public string $creditCardNumber) {
	// 	$this->id = uniqid('invoice_');
	// }

	// // public function __sleep(): array {
	// // 	return ['id', 'amount'];
	// // }

	// public function __serialize(): array {
	// 	return [
	// 		'id' => $this->id,
	// 		'amount' => $this->amount,
	// 		'description' => $this->description,
	// 		'creditCardNumber' => base64_encode($this->creditCardNumber),
	// 		'foo' => 'bar'
	// 	];
	// }

	// public function __unserialize(array $data): void {
	// 	$this->id = $data['id'];
	// 	$this->amount = $data['amount'];
	// 	$this->description = $data['description'];
	// 	$this->creditCardNumber = base64_decode($data['creditCardNumber']);
	// 	var_dump($data);
	// }


	// public function __construct(public Customer $customer) {

	// }

	// public function process(float $amount): void {
	// 	if ($amount <= 0) {
	// 		// throw new \Exception('Invalid invoice amount');
	// 		// throw new \InvalidArgumentException('Invalid invoice amount');
	// 		throw Exception\InvoiceException::invalidAmount();
	// 	}

	// 	if (empty($this->customer->getBillingInfo())) {
	// 		// throw new MissingBillingInfoException();
	// 		throw Exception\InvoiceException::missingBillingInfo();
	// 	}

	// 	echo 'Processing $' . $amount . ' invoice - ';
	// 	sleep(1);
	// 	echo 'OK' . PHP_EOL;
	// }


	public string $id;

	public function __construct(public float $amount) {
		$this->id = random_int(10000, 9999999);
	}
}