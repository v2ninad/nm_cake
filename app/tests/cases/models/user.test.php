<?php
/* User Test cases generated on: 2011-05-12 15:05:22 : 1305192742*/
App::import('Model', 'User');

class UserTestCase extends CakeTestCase {
	public $fixtures = array('app.user');

	public function startTest() {
		$this->User = ClassRegistry::init('User');
	}

	public function endTest() {
		unset($this->User);
		ClassRegistry::flush();
	}

}
