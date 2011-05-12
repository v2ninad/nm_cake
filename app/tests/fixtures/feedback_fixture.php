<?php
/* Feedback Fixture generated on: 2011-05-12 14:05:29 : 1305190109 */
class FeedbackFixture extends CakeTestFixture {
	public $name = 'Feedback';

	public $fields = array(
		'id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => '', 'key' => 'primary'),
		'email' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'subject' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'text' => array('type' => 'string', 'null' => true, 'length' => 200, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'member' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'publish' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 1, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'indexes' => array(),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	public $records = array(
		array(
			'id' => 1,
			'email' => 'Lorem ipsum dolor sit amet',
			'subject' => 'Lorem ipsum dolor sit amet',
			'text' => 'Lorem ipsum dolor sit amet',
			'member' => 'Lorem ipsum dolor sit amet',
			'name' => 'Lorem ipsum dolor sit amet',
			'publish' => 'Lorem ipsum dolor sit ame'
		),
	);
}
