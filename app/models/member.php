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
		$sponcercounter = 0;
		while(($counter < $count) && ($str_downline != "")) {
			++$counter;
			$current_member = substr($str_downline, 0,strpos($str_downline,"~"));
			$str_downline = substr_replace($str_downline, "",0,strlen($current_member)+1);
			if ($current_member != "NULL" ) {
				$data = $this->read("*",$current_member);
				$downline[] = $data;
				if (!empty($data['Member']['leftid'])) {
					$str_downline .= $data['Member']['leftid'] . "~";
				} else {
					$str_downline .= "NULL~";
				}
				if (!empty($data['Member']['rightid'])) {
					$str_downline .= $data['Member']['rightid'] . "~";
				} else {
					$str_downline .= "NULL~";
				}

				if ($data['Member']['sponcerid'] == $member_id) {
					$sponcercounter++;
					if ($sponcercounter <= 2) {
						// directs
						if ($data['Member']['paid'] == 'y') {
							$data['Member']['status'] = 'dp';
						} else {
							$data['Member']['status'] = 'du';
						}

					} else {
						//spills
						if ($data['Member']['paid'] == 'y') {
							$data['Member']['status'] = 'sp';
						} else {
							$data['Member']['status'] = 'su';
						}
						
					}
				} else {
					if ($data['Member']['id'] != $member_id) {
						if ($data['Member']['paid'] == 'y') {
							$data['Member']['status'] = 'ip';
						} else {
							$data['Member']['status'] = 'iu';
						}
					} else {
						$data['Member']['status'] = 'up';
					}

				}

			} else {
				$downline[] = array('Member' => array('id'=>false,'status'=>'bp'));
				$str_downline .= "NULL~NULL~";
			}

		}
		return $downline;
	}

}
