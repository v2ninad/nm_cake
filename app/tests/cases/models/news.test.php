<?php
/* News Test cases generated on: 2011-05-12 14:05:40 : 1305191560*/
App::import('Model', 'News');

class NewsTestCase extends CakeTestCase {
	public $fixtures = array('app.news');

	public function startTest() {
		$this->News = ClassRegistry::init('News');
	}

	public function endTest() {
		unset($this->News);
		ClassRegistry::flush();
	}

}
