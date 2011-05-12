<?php
class AdminController extends AppController {

	public $name = 'Admin';

	var $uses = array('User');
	var $layout = 'admin';

	function login() {
		$this->layout = 'default';
		
	}

//	var $helpers = array('Ajax');
//	var $components = array('Email');

}
