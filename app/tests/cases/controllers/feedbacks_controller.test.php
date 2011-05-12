<?php
/* Feedbacks Test cases generated on: 2011-05-12 15:05:19 : 1305192799*/
App::import('Controller', 'Feedbacks');

class TestFeedbacksController extends FeedbacksController {
	public $autoRender = false;

	public function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class FeedbacksControllerTestCase extends CakeTestCase {
	public $fixtures = array('app.feedback');

	public function startTest() {
		$this->Feedbacks = new TestFeedbacksController();
		$this->Feedbacks->constructClasses();
	}

	public function endTest() {
		unset($this->Feedbacks);
		ClassRegistry::flush();
	}

}
