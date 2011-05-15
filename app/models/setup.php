<?php
class Setup extends AppModel {
	public $name = 'Setup';
	public $primaryKey = 'fieldname';

	function getValue ($field) {
		if(empty($field)) return false;
		$params = array("conditions" => array("fieldname" => $field));
		$data = $this->find('first',$params);
		//print_r($data);
		return $data['Setup']['fieldvalue'];

	}

	function setValue ($field, $value) {
		if(empty($field)) return false;
		$data = array('fieldname'=>$field, 'fieldvalue'=>$value);

		return $this->save($data);

	}


}
