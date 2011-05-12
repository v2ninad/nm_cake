<?php
/* Pin Test cases generated on: 2011-05-12 15:05:34 : 1305192694*/
App::import('Model', 'Pin');

class PinTestCase extends CakeTestCase {
	public $fixtures = array('app.pin');

	public function startTest() {
		$this->Pin = ClassRegistry::init('Pin');
	}

	public function endTest() {
		unset($this->Pin);
		ClassRegistry::flush();
	}

}
