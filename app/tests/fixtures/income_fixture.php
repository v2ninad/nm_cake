<?php
/* Income Fixture generated on: 2011-05-12 14:05:22 : 1305190882 */
class IncomeFixture extends CakeTestFixture {
	public $name = 'Income';

	public $fields = array(
		'id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => '', 'key' => 'primary'),
		'member' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'doi' => array('type' => 'date', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'amount' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => '16,2', 'collate' => NULL, 'comment' => ''),
		'joiningmember' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'note' => array('type' => 'string', 'null' => true, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'indexes' => array(),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	public $records = array(
		array(
			'id' => 1,
			'member' => 'Lorem ipsum dolor sit amet',
			'doi' => '2011-05-12',
			'amount' => 1,
			'joiningmember' => 'Lorem ipsum dolor sit amet',
			'note' => 'Lorem ipsum dolor sit amet'
		),
	);
}
