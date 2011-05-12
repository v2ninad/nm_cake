<?php
/* Users Test cases generated on: 2011-05-12 15:05:12 : 1305193272*/
App::import('Controller', 'Users');

class TestUsersController extends UsersController {
	public $autoRender = false;

	public function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class UsersControllerTestCase extends CakeTestCase {
	public $fixtures = array('app.user');

	public function startTest() {
		$this->Users = new TestUsersController();
		$this->Users->constructClasses();
	}

	public function endTest() {
		unset($this->Users);
		ClassRegistry::flush();
	}

}
