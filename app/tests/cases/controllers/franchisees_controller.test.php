<?php
/* Franchisees Test cases generated on: 2011-05-12 15:05:09 : 1305192909*/
App::import('Controller', 'Franchisees');

class TestFranchiseesController extends FranchiseesController {
	public $autoRender = false;

	public function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class FranchiseesControllerTestCase extends CakeTestCase {
	public $fixtures = array('app.franchisee');

	public function startTest() {
		$this->Franchisees = new TestFranchiseesController();
		$this->Franchisees->constructClasses();
	}

	public function endTest() {
		unset($this->Franchisees);
		ClassRegistry::flush();
	}

}
