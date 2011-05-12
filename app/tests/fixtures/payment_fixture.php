<?php
/* Payment Fixture generated on: 2011-05-12 14:05:24 : 1305192204 */
class PaymentFixture extends CakeTestFixture {
	public $name = 'Payment';

	public $fields = array(
		'id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => '', 'key' => 'primary'),
		'member' => array('type' => 'string', 'null' => true, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'doi' => array('type' => 'date', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'amount' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => '16,2', 'collate' => NULL, 'comment' => ''),
		'note' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'indexes' => array(),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	public $records = array(
		array(
			'id' => 1,
			'member' => 'Lorem ipsum dolor ',
			'doi' => '2011-05-12',
			'amount' => 1,
			'note' => 'Lorem ipsum dolor sit amet'
		),
	);
}
