<?php
/* Payouts Test cases generated on: 2011-05-12 15:05:32 : 1305193232*/
App::import('Controller', 'Payouts');

class TestPayoutsController extends PayoutsController {
	public $autoRender = false;

	public function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class PayoutsControllerTestCase extends CakeTestCase {
	public $fixtures = array('app.payout', 'app.member', 'app.package', 'app.income', 'app.payment', 'app.pin', 'app.feedback');

	public function startTest() {
		$this->Payouts = new TestPayoutsController();
		$this->Payouts->constructClasses();
	}

	public function endTest() {
		unset($this->Payouts);
		ClassRegistry::flush();
	}

}
