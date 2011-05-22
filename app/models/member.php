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

				if (strtolower($data['Member']['sponcerid']) == strtolower($member_id)) {
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
					if (strtolower($data['Member']['id']) != strtolower($member_id)) {
						if ($data['Member']['paid'] == 'y') {
							$data['Member']['status'] = 'ip';
						} else {
							$data['Member']['status'] = 'iu';
						}
					} else {
						$data['Member']['status'] = 'up';
					}

				}
				$downline[] = $data;

			} else {
				$downline[] = array('Member' => array('id'=>false,'status'=>'bp'));
				$str_downline .= "NULL~NULL~";
			}

		}
		return $downline;
	}

	function getaboveid($introducer, &$aboveid, &$loc, &$spillname) //>Done
	{
		$data = $this->read("*",$introducer);
		$aboveid = $data['Member']['id'];
		$spillname = $data['Member']['name'];
		$tempdownline = "";

		if ($loc == "r") {
			if ($data['Member']["rightid"] == "") {
				$aboveid = $introducer;
				$loc = "r";
				return;
			} elseif($data['Member']["leftid"] == "") {
				$aboveid = $introducer;
				$loc = "l";
				return;
			}
		} else {
			if ($data['Member']["leftid"] == "") {
				$aboveid = $introducer;
				$loc = "l";
				return;
			} elseif ($data['Member']["rightid"] == "") {
				$aboveid = $introducer;
				$loc = "r";
				return;
			}
		}

		//spills can go anywhere on extreme left and right
		$tempdownline = $introducer . "~"; // Starts from introducer
		while($tempdownline <> "") {
			//Taking each node for extreme left & extreme right
			$node = substr($tempdownline,0,strpos($tempdownline,"~"));
			$tempdownline = substr($tempdownline,strpos($tempdownline,"~") + 1);

			if($loc == "l") {
				$data = $this->find('first',array('fields'=>array('id','leftid as sideid','name'),'conditions'=>array('id'=>$node)));
			} else {
				$data = $this->find('first',array('fields'=>array('id','rightid as sideid','name'),'conditions'=>array('id'=>$node)));
			}

			if(empty($data['Member']['sideid'])) {
				$aboveid = $data['Member']['id'];
				$spillname = $data['Member']['name'];
				return;
			}
			else {
				$tempdownline = $tempdownline . $data['Member']['sideid'] . "~" ;
			}
		} // while
	}




}
