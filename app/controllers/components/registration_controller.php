<?php
class RegistrationController extends AppController {

//	public $name = 'Admin';
//	var $components = array('RequestHandler','Cookie','Session',
//		'Auth' => array(
//			'loginAction' => array('controller' => 'admin', 'action' => 'login'),
//			'fields' => array('username' => 'email', 'password' => 'password'),
//		),
//	);
	var $uses = array('User','Setup','Member','Package');
	var $layout = 'registration';


	function index() {
		
	}
}