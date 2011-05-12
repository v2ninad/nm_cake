<?php
/* Incomes Test cases generated on: 2011-05-12 15:05:00 : 1305193080*/
App::import('Controller', 'Incomes');

class TestIncomesController extends IncomesController {
	public $autoRender = false;

	public function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class IncomesControllerTestCase extends CakeTestCase {
	public $fixtures = array('app.income', 'app.member', 'app.package', 'app.payment', 'app.payout', 'app.pin', 'app.feedback');

	public function startTest() {
		$this->Incomes = new TestIncomesController();
		$this->Incomes->constructClasses();
	}

	public function endTest() {
		unset($this->Incomes);
		ClassRegistry::flush();
	}

}
