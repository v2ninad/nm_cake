<?php
/* Package Test cases generated on: 2011-05-12 14:05:52 : 1305191872*/
App::import('Model', 'Package');

class PackageTestCase extends CakeTestCase {
	public $fixtures = array('app.package', 'app.member');

	public function startTest() {
		$this->Package = ClassRegistry::init('Package');
	}

	public function endTest() {
		unset($this->Package);
		ClassRegistry::flush();
	}

}
