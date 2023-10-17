<?php

// declare(strict_types=1);

// require_once '../Transaction.php';

// $amount = (new Transaction(100, 'Transaction 1'))
// 				->addTax(8)
// 				->applyDiscount(10)
// 				->getAmount();

// var_dump($amount);


// require_once '../PaymentProfile.php';
// require_once '../Customer.php';
// require_once '../Transaction.php';

// $transaction = new Transaction(5, 'Test');

// $transaction->customer?->paymentProfile->id;


// require_once '../PaymentGateway/Stripe/Transaction.php';
// require_once '../app/PaymentGateway/Paddle/Transaction.php';

// var_dump(new PaymentGateway\Stripe\Transaction());

// require_once '../app/PaymentGateway/Paddle/CustomerProfile.php';

// spl_autoload_register(function($class) {
// 	$path = __DIR__ . '/../' . lcfirst(str_replace('\\', '/', $class)) . '.php';
// 	require $path;
// });

// use App\Customer;
// use App\Exception\MissingBillingInfoException;

require __DIR__ . '/../vendor/autoload.php';

// use App\PaymentGateway\Paddle\Transaction;

// $paddleTransaction = new Transaction();

// $id = new \Ramsey\Uuid\UuidFactory();
// echo $id->uuid4();

// var_dump($paddleTransaction);

// echo Transaction::STATUS_PAID;
// echo (new Transaction())::STATUS_PAID;

// use App\Enums\Status;

// $transaction = new Transaction();
// $transaction->setStatus(Status::PAID);
// var_dump($transaction);


// $transaction = new Transaction(25, 'Transaction 1');
// $transaction = new Transaction(25, 'Transaction 1');

// var_dump($transaction::$count);
// var_dump(Transaction::$count);
// var_dump(Transaction::getCount());


// use App\DB;

// $db = DB::getInstance([]);
// $db = DB::getInstance([]);
// $db = DB::getInstance([]);

// $transaction = new Transaction(25);
// $transaction->amount = 125;
// $transaction->process();


// use App\Toaster;
// use App\ToasterPro;

// $toaster = new ToasterPro();

// $toaster->addSlice('bread');
// $toaster->addSlice('bread');
// $toaster->addSlice('bread');
// $toaster->addSlice('bread');
// $toaster->addSlice('bread');
// $toaster->toastBagel();


// $fields = [
// 	new \App\Text('textField'),
// 	new \App\Checkbox('checkboxField'),
// 	new \App\Radio('radioField'),
// ];

// foreach ($fields as $field) {
// 	echo $field->render() . '<br />';
// }


// $service = new \App\DebtCollectionService();
// echo $service->collectDebt(new \App\Rocky());
// echo $service->collectDebt(new \App\CollectionAgency());.


// $coffeeMaker = new \App\Traits\CoffeeMaker();
// $coffeeMaker->makeCoffee();

// $latteMaker = new \App\Traits\LatteMaker();
// $latteMaker->makeCoffee();
// $latteMaker->makeLatte();

// $cappuccinoMaker = new \App\Traits\CappuccinoMaker();
// $cappuccinoMaker->makeCoffee();
// $cappuccinoMaker->makeCappuccino();

// $allInOneCoffeeMaker = new \App\Traits\AllInOneCoffeeMaker();
// $allInOneCoffeeMaker->makeCoffee();
// $allInOneCoffeeMaker->makeLatte();
// $allInOneCoffeeMaker->makeCappuccino();


// use App\AnonymousClasses;
// use App\AnonymousClasses\ClassA;

// $obj = new ClassA(1, 2);
// var_dump($obj->bar());


// use App\CustomInvoice;
// use App\Invoice;

// $invoice1 = new Invoice(new App\Customer('Customer'), 25, 'My Invoice');
// $invoice2 = new Invoice(new App\Customer('Customer'), 25, 'My Invoice');

// $invoice1->linkedInvoice = $invoice2;
// $invoice2->linkedInvoice = $invoice1;

// echo 'invoice1 == invoice2' . PHP_EOL;
// var_dump($invoice1 == $invoice2);

// echo 'invoice1 === invoice2' . PHP_EOL;
// var_dump($invoice1 === $invoice2);


// $invoice = new Invoice();
// $invoice2 = clone $invoice;

// var_dump($invoice, $invoice2, $invoice === $invoice2);


// echo serialize(true) . PHP_EOL;
// echo serialize(1) . PHP_EOL;
// echo serialize(2.5) . PHP_EOL;
// echo serialize('hello world') . PHP_EOL;
// echo serialize([1, 2, 3]) . PHP_EOL;
// echo serialize(['a' => 1, 'b' => 2]) . PHP_EOL;

// var_dump(unserialize(serialize(['a' => 1, 'b' => 2]))) . PHP_EOL;

// $invoice = new Invoice();
// echo serialize($invoice) . PHP_EOL;
// var_dump(unserialize(serialize($invoice)));

// $invoice = new Invoice(25, 'Invoice', '1234');
// $str = serialize($invoice);
// // echo $str . PHP_EOL;
// $invoice2 = unserialize($str);
// var_dump($invoice2);


// try {
// 	$invoice->process(-25);
// } catch (MissingBillingInfoException $e) {
// 	echo $e->getMessage() . PHP_EOL;
// } catch(InvalidArgumentException $e) {
// 	echo $e->getMessage() . PHP_EOL;
// }
// var_dump(process());

// function process()
// {
// 	$invoice = new Invoice(new Customer());

// 	try {
// 		$invoice->process(-25);
// 		return true;
// 	} catch (\Exception $e) {
// 		echo $e->getMessage() . PHP_EOL;
// 		return false;
// 	} finally {
// 		echo 'Finally block' . PHP_EOL;
// 		return -1;
// 	}
// }

// set_exception_handler(function(\Throwable $e) {
// 	var_dump($e->getMessage());
// });

// $invoice = new Invoice(new Customer());
// $invoice->process(-25);


// $datetime = new DateTime('now', new DateTimeZone('Europe/Rome'));
// var_dump($datetime);
// echo $datetime->getTimezone()->getName() . ' - ' . $datetime->format('m/d/Y g:i a') . PHP_EOL;

// $date = '15/05/2021 3:30PM';
// $dateTime = DateTime::createFromFormat('d/m/Y g:iA', $date);
// var_dump($dateTime);

// $dateTime1 = new DateTime('05/25/2021 9:15 AM');
// $dateTime2 = new DateTime('03/15/2021 3:25 AM');
// var_dump($dateTime1->diff($dateTime2)->format('%Y years, %m months, %d days, %H:%i:%s'));

// $period = new DatePeriod(new DateTime('05/01/2021'), new DateInterval('P3D'), 3, DatePeriod::EXCLUDE_START_DATE);
// foreach ($period as $date) {
// 	echo $date->format('m/d/Y') . PHP_EOL;
// }


// foreach (new App\Invoice(25) as $key => $value) {
// 	echo $key . ' = ' . $value . PHP_EOL;
// }

// use App\InvoiceCollection;
// use App\Invoice;

// $invoiceCollection = new InvoiceCollection([new Invoice(15), new Invoice(25), new Invoice(50)]);
// foreach ($invoiceCollection as $invoice) {
// 	echo $invoice->id . ' - ' . $invoice->amount . PHP_EOL;
// }



// echo '<pre>';
// print_r($_SERVER);
// echo '</pre>';


$router = new App\Router();

// $router->register(
// 	'/',
// 	function() {
// 		echo 'Home';
// 	}
// );

// $router->register('/', [App\Classes\Home::class, 'index']);

// $router->register(
// 	'/invoices',
// 	function() {
// 		echo 'Invoices';
// 	}
// );


$router
	->get('/', [App\Classes\Home::class, 'index'])
	->get('/invoices', [App\Classes\Invoice::class, 'index'])
	->get('/invoices/create', [App\Classes\Invoice::class, 'create'])
	->post('/invoices/create', [App\Classes\Invoice::class, 'store']);


echo $router->resolve($_SERVER['REQUEST_URI'], strtolower($_SERVER['REQUEST_METHOD']));