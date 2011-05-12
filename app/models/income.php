<?php
class Income extends AppModel {
	public $name = 'Income';
	public $useDbConfig = 'nm';
	public $displayField = 'member';
	public $validate = array(
		'amount' => array(
			'decimal' => array(
				'rule' => array('decimal'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	public $belongsTo = array(
		'member' => array(
			'className' => 'Member',
			'foreignKey' => 'member',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
