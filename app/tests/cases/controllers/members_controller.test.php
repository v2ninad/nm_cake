<?php
/* Members Test cases generated on: 2011-05-12 15:05:38 : 1305193178*/
App::import('Controller', 'Members');

class TestMembersController extends MembersController {
	public $autoRender = false;

	public function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class MembersControllerTestCase extends CakeTestCase {
	public $fixtures = array('app.member', 'app.package', 'app.income', 'app.payment', 'app.payout', 'app.pin', 'app.feedback');

	public function startTest() {
		$this->Members = new TestMembersController();
		$this->Members->constructClasses();
	}

	public function endTest() {
		unset($this->Members);
		ClassRegistry::flush();
	}

}
