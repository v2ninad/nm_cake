<?php
/* Income Test cases generated on: 2011-05-12 14:05:28 : 1305190888*/
App::import('Model', 'Income');

class IncomeTestCase extends CakeTestCase {
	public $fixtures = array('app.income', 'app.member');

	public function startTest() {
		$this->Income = ClassRegistry::init('Income');
	}

	public function endTest() {
		unset($this->Income);
		ClassRegistry::flush();
	}

}
