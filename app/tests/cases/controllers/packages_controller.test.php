<?php
/* Packages Test cases generated on: 2011-05-12 15:05:05 : 1305193205*/
App::import('Controller', 'Packages');

class TestPackagesController extends PackagesController {
	public $autoRender = false;

	public function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class PackagesControllerTestCase extends CakeTestCase {
	public $fixtures = array('app.package', 'app.member', 'app.income', 'app.payment', 'app.payout', 'app.pin', 'app.feedback');

	public function startTest() {
		$this->Packages = new TestPackagesController();
		$this->Packages->constructClasses();
	}

	public function endTest() {
		unset($this->Packages);
		ClassRegistry::flush();
	}

}
