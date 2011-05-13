<?php
class AdminController extends AppController {

	public $name = 'Admin';
	var $components = array('RequestHandler','Cookie','Session',
		'Auth' => array(
			'loginAction' => array('controller' => 'admin', 'action' => 'login'),
			'fields' => array('username' => 'email', 'password' => 'password'),
		),
	);
	var $uses = array('User');
	var $layout = 'admin';
	/*@var SessionComponent */ var $Session;

	function login() {
		//if (isset($this->)))
		//$this->layout = 'default';
		
	}

//	var $helpers = array('Ajax');
//	var $components = array('Email');

}
