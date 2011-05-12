<?php
/* Member Test cases generated on: 2011-05-12 14:05:34 : 1305191374*/
App::import('Model', 'Member');

class MemberTestCase extends CakeTestCase {
	public $fixtures = array('app.member');

	public function startTest() {
		$this->Member = ClassRegistry::init('Member');
	}

	public function endTest() {
		unset($this->Member);
		ClassRegistry::flush();
	}

}
