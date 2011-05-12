<?php
/* Pin Fixture generated on: 2011-05-12 15:05:33 : 1305192693 */
class PinFixture extends CakeTestFixture {
	public $name = 'Pin';

	public $fields = array(
		'package' => array('type' => 'integer', 'null' => false, 'default' => '0', 'collate' => NULL, 'comment' => ''),
		'pin' => array('type' => 'string', 'null' => false, 'length' => 100, 'key' => 'primary', 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'id' => array('type' => 'string', 'null' => false, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1', 'key' => 'primary'),
		'assignee' => array('type' => 'string', 'null' => false, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'status' => array('type' => 'string', 'null' => false, 'default' => 'n', 'length' => 1, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'note' => array('type' => 'string', 'null' => false, 'length' => 200, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'date' => array('type' => 'date', 'null' => false, 'default' => '0000-00-00', 'collate' => NULL, 'comment' => ''),
		'value' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 100, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'indexes' => array('PRIMARY' => array('column' => 'pin', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	public $records = array(
		array(
			'package' => 1,
			'pin' => 'Lorem ipsum dolor sit amet',
			'id' => 'Lorem ipsum dolor sit amet',
			'assignee' => 'Lorem ipsum dolor sit amet',
			'status' => 'Lorem ipsum dolor sit ame',
			'note' => 'Lorem ipsum dolor sit amet',
			'date' => '2011-05-12',
			'value' => 'Lorem ipsum dolor sit amet'
		),
	);
}
