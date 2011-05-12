<?php
/* Setup Test cases generated on: 2011-05-12 14:05:32 : 1305190112*/
App::import('Model', 'Setup');

class SetupTestCase extends CakeTestCase {
	public $fixtures = array('app.setup');

	public function startTest() {
		$this->Setup = ClassRegistry::init('Setup');
	}

	public function endTest() {
		unset($this->Setup);
		ClassRegistry::flush();
	}

}
