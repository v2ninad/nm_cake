<?php
/* Package Fixture generated on: 2011-05-12 14:05:51 : 1305191871 */
class PackageFixture extends CakeTestFixture {
	public $name = 'Package';

	public $fields = array(
		'code' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'name' => array('type' => 'string', 'null' => false, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'vat' => array('type' => 'float', 'null' => false, 'default' => '12.50', 'length' => '5,2', 'collate' => NULL, 'comment' => ''),
		'price' => array('type' => 'float', 'null' => false, 'default' => '0.00', 'length' => '10,2', 'collate' => NULL, 'comment' => ''),
		'desc' => array('type' => 'string', 'null' => false, 'length' => 250, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'binaryfund' => array('type' => 'integer', 'null' => false, 'default' => '0', 'collate' => NULL, 'comment' => ''),
		'capping' => array('type' => 'integer', 'null' => false, 'default' => '0', 'collate' => NULL, 'comment' => ''),
		'bv' => array('type' => 'integer', 'null' => false, 'default' => '0', 'collate' => NULL, 'comment' => ''),
		'growth_plan' => array('type' => 'string', 'null' => false, 'default' => 'N', 'length' => 1, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'indexes' => array('PRIMARY' => array('column' => 'code', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	public $records = array(
		array(
			'code' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'vat' => 1,
			'price' => 1,
			'desc' => 'Lorem ipsum dolor sit amet',
			'binaryfund' => 1,
			'capping' => 1,
			'bv' => 1,
			'growth_plan' => 'Lorem ipsum dolor sit ame'
		),
	);
}
