<?php
class Payout extends AppModel {
	public $name = 'Payout';
	public $useDbConfig = 'nm';
	public $displayField = 'member';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	public $belongsTo = array(
		'member' => array(
			'className' => 'member',
			'foreignKey' => 'id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
