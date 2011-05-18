<?php
class Member extends AppModel {
	public $name = 'Member';
	public $displayField = 'name';
	public $validate = array(
		'name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'address' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'gender' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'sponcerid' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'aboveid' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'position' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	public $hasMany = array(
		'income' => array(
			'className' => 'income',
			'foreignKey' => 'member',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'payment' => array(
			'className' => 'payment',
			'foreignKey' => 'member',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'payout' => array(
			'className' => 'payout',
			'foreignKey' => 'member',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'pin' => array(
			'className' => 'pin',
			'foreignKey' => 'assignee',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'feedback' => array(
			'className' => 'feedback',
			'foreignKey' => 'member',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

	public $hasOne = array(
		'package' => array(
			'className' => 'package',
			'foreignKey' => false,
			'conditions' => array ('Member.product = `package`.`code`'),
			'fields' => '',
			'order' => ''
		)
	);


	public function getDownlineData($member_id, $count) {
		$counter = 0;
		$str_downline = $member_id."~";
		$downline = array();
		while(($counter < $count) || ($str_downline != "")) {

			$current_member = substr($str_downline, 0,strpos($str_downline,"~"));
			$str_downline = str_replace($current_member."~", "", $str_downline);

			if ($current_member != "NULL" ) {
				$data = $this->read("*",$current_member);
				$downline[] = $data;
				if (!empty($data['Member']['leftid'])) {
					$str_downline .= $data['Member']['leftid'] . "~";
				} else {
					$str_downline .= "NULL~";
				}
				if (!empty($data['Member']['righttid'])) {
					$str_downline .= $data['Member']['righttid'] . "~";
				} else {
					$str_downline .= "NULL~";
				}
			} else {
				$downline[] = "false";
			}

			$counter++;
		}
		return $downline;
	}

}
