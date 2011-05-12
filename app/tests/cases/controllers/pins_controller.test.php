<?php
/* Pins Test cases generated on: 2011-05-12 15:05:41 : 1305193241*/
App::import('Controller', 'Pins');

class TestPinsController extends PinsController {
	public $autoRender = false;

	public function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class PinsControllerTestCase extends CakeTestCase {
	public $fixtures = array('app.pin');

	public function startTest() {
		$this->Pins = new TestPinsController();
		$this->Pins->constructClasses();
	}

	public function endTest() {
		unset($this->Pins);
		ClassRegistry::flush();
	}

}
