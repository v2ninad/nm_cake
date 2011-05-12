<?php
/* Payment Test cases generated on: 2011-05-12 14:05:25 : 1305192205*/
App::import('Model', 'Payment');

class PaymentTestCase extends CakeTestCase {
	public $fixtures = array('app.payment', 'app.member');

	public function startTest() {
		$this->Payment = ClassRegistry::init('Payment');
	}

	public function endTest() {
		unset($this->Payment);
		ClassRegistry::flush();
	}

}
