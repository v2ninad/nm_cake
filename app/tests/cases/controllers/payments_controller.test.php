<?php
/* Payments Test cases generated on: 2011-05-12 15:05:17 : 1305193217*/
App::import('Controller', 'Payments');

class TestPaymentsController extends PaymentsController {
	public $autoRender = false;

	public function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class PaymentsControllerTestCase extends CakeTestCase {
	public $fixtures = array('app.payment', 'app.member', 'app.package', 'app.income', 'app.payout', 'app.pin', 'app.feedback');

	public function startTest() {
		$this->Payments = new TestPaymentsController();
		$this->Payments->constructClasses();
	}

	public function endTest() {
		unset($this->Payments);
		ClassRegistry::flush();
	}

}
