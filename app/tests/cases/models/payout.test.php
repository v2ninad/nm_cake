<?php
/* Payout Test cases generated on: 2011-05-12 14:05:40 : 1305192580*/
App::import('Model', 'Payout');

class PayoutTestCase extends CakeTestCase {
	public $fixtures = array('app.payout', 'app.member', 'app.package', 'app.income', 'app.payment', 'app.pin', 'app.feedback');

	public function startTest() {
		$this->Payout = ClassRegistry::init('Payout');
	}

	public function endTest() {
		unset($this->Payout);
		ClassRegistry::flush();
	}

}
