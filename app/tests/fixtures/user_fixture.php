<?php
/* User Fixture generated on: 2011-05-12 15:05:19 : 1305192739 */
class UserFixture extends CakeTestFixture {
	public $name = 'User';

	public $fields = array(
		'id' => array('type' => 'string', 'null' => false, 'length' => 20, 'key' => 'primary', 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'realname' => array('type' => 'string', 'null' => false, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'password' => array('type' => 'string', 'null' => false, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'registration' => array('type' => 'string', 'null' => false, 'default' => 'n', 'length' => 1, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'repurchase' => array('type' => 'string', 'null' => false, 'default' => 'n', 'length' => 1, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'paid' => array('type' => 'string', 'null' => false, 'default' => 'n', 'length' => 1, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'accounts' => array('type' => 'string', 'null' => false, 'default' => 'n', 'length' => 1, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'closing' => array('type' => 'string', 'null' => false, 'default' => 'n', 'length' => 1, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'cms' => array('type' => 'string', 'null' => false, 'default' => 'n', 'length' => 1, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'admin' => array('type' => 'string', 'null' => false, 'default' => 'n', 'length' => 1, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'company' => array('type' => 'string', 'null' => false, 'default' => 'n', 'length' => 1, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	public $records = array(
		array(
			'id' => 'Lorem ipsum dolor ',
			'realname' => 'Lorem ipsum dolor sit amet',
			'password' => 'Lorem ipsum dolor sit amet',
			'registration' => 'Lorem ipsum dolor sit ame',
			'repurchase' => 'Lorem ipsum dolor sit ame',
			'paid' => 'Lorem ipsum dolor sit ame',
			'accounts' => 'Lorem ipsum dolor sit ame',
			'closing' => 'Lorem ipsum dolor sit ame',
			'cms' => 'Lorem ipsum dolor sit ame',
			'admin' => 'Lorem ipsum dolor sit ame',
			'company' => 'Lorem ipsum dolor sit ame'
		),
	);
}
