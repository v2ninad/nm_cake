<?php
/* Member Fixture generated on: 2011-05-12 14:05:31 : 1305191371 */
class MemberFixture extends CakeTestFixture {
	public $name = 'Member';

	public $fields = array(
		'transactioncode' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'id' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1', 'key' => 'primary'),
		'doj' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'chequename' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'address' => array('type' => 'text', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'phone' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'workphone' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'mobile' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'email' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'gender' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'dob' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'joiningfranchisee' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'servicefranchisee' => array('type' => 'string', 'null' => true, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'sponcerid' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'aboveid' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'position' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 1, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'password' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'txnpassword' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'opassword' => array('type' => 'string', 'null' => true, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'pan' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'nominee' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'nomineerelation' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'bank' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'bankbranch' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'bankacno' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'paymode' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'payno' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'paydate' => array('type' => 'date', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'paydetails' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'amountpaid' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'credits' => array('type' => 'string', 'null' => true, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'city' => array('type' => 'string', 'null' => true, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'pin' => array('type' => 'string', 'null' => true, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'state' => array('type' => 'string', 'null' => true, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'directpeople' => array('type' => 'integer', 'null' => true, 'default' => '0', 'collate' => NULL, 'comment' => ''),
		'rightpaidpeople' => array('type' => 'integer', 'null' => true, 'default' => '0', 'collate' => NULL, 'comment' => ''),
		'leftpaidpeople' => array('type' => 'integer', 'null' => true, 'default' => '0', 'collate' => NULL, 'comment' => ''),
		'rightpeople' => array('type' => 'integer', 'null' => true, 'default' => '0', 'collate' => NULL, 'comment' => ''),
		'leftpeople' => array('type' => 'integer', 'null' => true, 'default' => '0', 'collate' => NULL, 'comment' => ''),
		'binaryof' => array('type' => 'integer', 'null' => true, 'default' => '0', 'collate' => NULL, 'comment' => ''),
		'1stratio' => array('type' => 'string', 'null' => true, 'length' => 1, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'rightid' => array('type' => 'string', 'null' => true, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'leftid' => array('type' => 'string', 'null' => true, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'currentdirectcomission' => array('type' => 'float', 'null' => true, 'default' => '0', 'collate' => NULL, 'comment' => ''),
		'currentratiocomission' => array('type' => 'float', 'null' => true, 'default' => '0', 'collate' => NULL, 'comment' => ''),
		'currentspillcomission' => array('type' => 'float', 'null' => true, 'default' => '0', 'collate' => NULL, 'comment' => ''),
		'currentcmagiccomission' => array('type' => 'float', 'null' => true, 'default' => '0', 'collate' => NULL, 'comment' => ''),
		'unilevelcomission' => array('type' => 'float', 'null' => true, 'default' => '0', 'collate' => NULL, 'comment' => ''),
		'unclaimed_unilevelcomission' => array('type' => 'float', 'null' => true, 'default' => '0', 'collate' => NULL, 'comment' => ''),
		'royalty' => array('type' => 'float', 'null' => true, 'default' => '0', 'collate' => NULL, 'comment' => ''),
		'currentadvances' => array('type' => 'float', 'null' => true, 'default' => '0', 'collate' => NULL, 'comment' => ''),
		'currentdues' => array('type' => 'float', 'null' => true, 'default' => '0', 'collate' => NULL, 'comment' => ''),
		'paidcomission' => array('type' => 'float', 'null' => true, 'default' => '0', 'collate' => NULL, 'comment' => ''),
		'totalcomission' => array('type' => 'float', 'null' => true, 'default' => '0', 'collate' => NULL, 'comment' => ''),
		'spill' => array('type' => 'string', 'null' => true, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'paid' => array('type' => 'string', 'null' => true, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'leftcount' => array('type' => 'integer', 'null' => true, 'default' => '0', 'collate' => NULL, 'comment' => ''),
		'rightcount' => array('type' => 'integer', 'null' => true, 'default' => '0', 'collate' => NULL, 'comment' => ''),
		'challandetails' => array('type' => 'string', 'null' => true, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'notes' => array('type' => 'string', 'null' => true, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'micrcode' => array('type' => 'string', 'null' => true, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'currentbv' => array('type' => 'integer', 'null' => true, 'default' => '0', 'length' => 20, 'collate' => NULL, 'comment' => ''),
		'rightpaidsv' => array('type' => 'integer', 'null' => true, 'default' => '0', 'length' => 20, 'collate' => NULL, 'comment' => ''),
		'leftpaidsv' => array('type' => 'integer', 'null' => true, 'default' => '0', 'length' => 20, 'collate' => NULL, 'comment' => ''),
		'rightsv' => array('type' => 'integer', 'null' => true, 'default' => '0', 'length' => 20, 'collate' => NULL, 'comment' => ''),
		'leftsv' => array('type' => 'integer', 'null' => true, 'default' => '0', 'length' => 20, 'collate' => NULL, 'comment' => ''),
		'billdetails' => array('type' => 'string', 'null' => true, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'photoname' => array('type' => 'string', 'null' => true, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'photo' => array('type' => 'binary', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'product' => array('type' => 'string', 'null' => true, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'productissued' => array('type' => 'string', 'null' => true, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'claim_timestamp' => array('type' => 'string', 'null' => true, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'productx' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'indexes' => array(),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	public $records = array(
		array(
			'transactioncode' => 'Lorem ipsum dolor sit amet',
			'id' => 'Lorem ipsum dolor sit amet',
			'doj' => '2011-05-12 14:39:31',
			'name' => 'Lorem ipsum dolor sit amet',
			'chequename' => 'Lorem ipsum dolor sit amet',
			'address' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'phone' => 'Lorem ipsum dolor sit amet',
			'workphone' => 'Lorem ipsum dolor sit amet',
			'mobile' => 'Lorem ipsum dolor sit amet',
			'email' => 'Lorem ipsum dolor sit amet',
			'gender' => 'Lorem ipsum dolor sit amet',
			'dob' => 'Lorem ipsum dolor sit amet',
			'joiningfranchisee' => 'Lorem ipsum dolor sit amet',
			'servicefranchisee' => 'Lorem ipsum dolor sit amet',
			'sponcerid' => 'Lorem ipsum dolor sit amet',
			'aboveid' => 'Lorem ipsum dolor sit amet',
			'position' => 'Lorem ipsum dolor sit ame',
			'password' => 'Lorem ipsum dolor sit amet',
			'txnpassword' => 'Lorem ipsum dolor sit amet',
			'opassword' => 'Lorem ipsum dolor sit amet',
			'pan' => 'Lorem ipsum dolor sit amet',
			'nominee' => 'Lorem ipsum dolor sit amet',
			'nomineerelation' => 'Lorem ipsum dolor sit amet',
			'bank' => 'Lorem ipsum dolor sit amet',
			'bankbranch' => 'Lorem ipsum dolor sit amet',
			'bankacno' => 'Lorem ipsum dolor sit amet',
			'paymode' => 'Lorem ipsum dolor sit amet',
			'payno' => 'Lorem ipsum dolor sit amet',
			'paydate' => '2011-05-12',
			'paydetails' => 'Lorem ipsum dolor sit amet',
			'amountpaid' => 1,
			'credits' => 'Lorem ipsum dolor sit amet',
			'city' => 'Lorem ipsum dolor sit amet',
			'pin' => 'Lorem ipsum dolor sit amet',
			'state' => 'Lorem ipsum dolor sit amet',
			'directpeople' => 1,
			'rightpaidpeople' => 1,
			'leftpaidpeople' => 1,
			'rightpeople' => 1,
			'leftpeople' => 1,
			'binaryof' => 1,
			'1stratio' => 'Lorem ipsum dolor sit ame',
			'rightid' => 'Lorem ipsum dolor sit amet',
			'leftid' => 'Lorem ipsum dolor sit amet',
			'currentdirectcomission' => 1,
			'currentratiocomission' => 1,
			'currentspillcomission' => 1,
			'currentcmagiccomission' => 1,
			'unilevelcomission' => 1,
			'unclaimed_unilevelcomission' => 1,
			'royalty' => 1,
			'currentadvances' => 1,
			'currentdues' => 1,
			'paidcomission' => 1,
			'totalcomission' => 1,
			'spill' => 'Lorem ipsum dolor sit amet',
			'paid' => 'Lorem ipsum dolor sit amet',
			'leftcount' => 1,
			'rightcount' => 1,
			'challandetails' => 'Lorem ipsum dolor sit amet',
			'notes' => 'Lorem ipsum dolor sit amet',
			'micrcode' => 'Lorem ipsum dolor sit amet',
			'currentbv' => 1,
			'rightpaidsv' => 1,
			'leftpaidsv' => 1,
			'rightsv' => 1,
			'leftsv' => 1,
			'billdetails' => 'Lorem ipsum dolor sit amet',
			'photoname' => 'Lorem ipsum dolor sit amet',
			'photo' => 'Lorem ipsum dolor sit amet',
			'product' => 'Lorem ipsum dolor sit amet',
			'productissued' => 'Lorem ipsum dolor sit amet',
			'claim_timestamp' => 'Lorem ipsum dolor sit amet',
			'productx' => 'Lorem ipsum dolor sit amet'
		),
	);
}
