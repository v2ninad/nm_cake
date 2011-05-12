<?php
/* Franchisee Test cases generated on: 2011-05-12 14:05:29 : 1305190109*/
App::import('Model', 'Franchisee');

class FranchiseeTestCase extends CakeTestCase {
	public $fixtures = array('app.franchisee');

	public function startTest() {
		$this->Franchisee = ClassRegistry::init('Franchisee');
	}

	public function endTest() {
		unset($this->Franchisee);
		ClassRegistry::flush();
	}

}
