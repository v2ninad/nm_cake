<?php
/* News Test cases generated on: 2011-05-12 15:05:53 : 1305193193*/
App::import('Controller', 'News');

class TestNewsController extends NewsController {
	public $autoRender = false;

	public function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class NewsControllerTestCase extends CakeTestCase {
	public $fixtures = array('app.news');

	public function startTest() {
		$this->News = new TestNewsController();
		$this->News->constructClasses();
	}

	public function endTest() {
		unset($this->News);
		ClassRegistry::flush();
	}

}
