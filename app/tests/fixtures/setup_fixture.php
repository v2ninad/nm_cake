<?php
/* Setup Fixture generated on: 2011-05-12 14:05:32 : 1305190112 */
class SetupFixture extends CakeTestFixture {
	public $name = 'Setup';

	public $fields = array(
		'fieldname' => array('type' => 'string', 'null' => true, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'fieldvalue' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'indexes' => array(),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	public $records = array(
		array(
			'fieldname' => 'Lorem ipsum dolor sit amet',
			'fieldvalue' => 'Lorem ipsum dolor sit amet'
		),
	);
}
