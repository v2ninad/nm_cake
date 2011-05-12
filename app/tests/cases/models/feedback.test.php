<?php
/* Feedback Test cases generated on: 2011-05-12 14:05:29 : 1305190109*/
App::import('Model', 'Feedback');

class FeedbackTestCase extends CakeTestCase {
	public $fixtures = array('app.feedback');

	public function startTest() {
		$this->Feedback = ClassRegistry::init('Feedback');
	}

	public function endTest() {
		unset($this->Feedback);
		ClassRegistry::flush();
	}

}
