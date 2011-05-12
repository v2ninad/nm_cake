<?php
/* Franchisee Fixture generated on: 2011-05-12 14:05:29 : 1305190109 */
class FranchiseeFixture extends CakeTestFixture {
	public $name = 'Franchisee';

	public $fields = array(
		'code' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'name' => array('type' => 'string', 'null' => false, 'length' => 200, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'city' => array('type' => 'string', 'null' => false, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'incharge' => array('type' => 'string', 'null' => false, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'address' => array('type' => 'string', 'null' => false, 'length' => 200, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'state' => array('type' => 'string', 'null' => false, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'indexes' => array('PRIMARY' => array('column' => 'code', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	public $records = array(
		array(
			'code' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'city' => 'Lorem ipsum dolor sit amet',
			'incharge' => 'Lorem ipsum dolor sit amet',
			'address' => 'Lorem ipsum dolor sit amet',
			'state' => 'Lorem ipsum dolor sit amet'
		),
	);
}
