<?php
/* Setups Test cases generated on: 2011-05-12 15:05:47 : 1305193367*/
App::import('Controller', 'Setups');

class TestSetupsController extends SetupsController {
	public $autoRender = false;

	public function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class SetupsControllerTestCase extends CakeTestCase {
	public $fixtures = array('app.setup');

	public function startTest() {
		$this->Setups = new TestSetupsController();
		$this->Setups->constructClasses();
	}

	public function endTest() {
		unset($this->Setups);
		ClassRegistry::flush();
	}

}
