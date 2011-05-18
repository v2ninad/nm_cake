<?php

class AppController extends Controller
{

	//var $components = array('RequestHandler','Cookie','Session','Auth','Messages','Ssl');

	//var $helpers = array('Html','Form','Session','Javascript','Time','Number','Text','Role', 'Allcustom');
	var $components = array('RequestHandler','Cookie','Session','Auth');
	var $helpers = array('Html','Form','Session');

	var $sslSettings = array(
	);

	/**
	@var AuthComponent */ var $Auth;
	/**
	@var CookieComponent */ var $Cookie;
	/**
	@var MessagesComponent */ var $Messages;
	/**
	@var SessionComponent */ var $Session;
	/**
	@var RequestHandlerComponent */ var $RequestHandler;

	/**
	@var RoleHelper */ var $Role;
	/*@var RoleHelper */ var $html;

	/**
	* These actions have no Auth or Session attached to them...
	*/
	var $public_actions = array();

	function beforeFilter()
	{
		//App::import('component', 'Auth');

		//$ses_id = $this->params['get']['session_id'];
		if(!empty($_REQUEST['session_id'])) {
			$this->Session->id($_REQUEST['session_id']);
		}
		// Or failover to cookie
		else
		{
			$this->Session->id($this->Cookie->read('CAKEPHP'));
		}
		$this->Session->start();

		$this->testModel();
		//Security::setHash('md5');
		Configure::write('Session.start', true); // Necessary for getting SessionHelper to work!
		if(!in_array($this->action , $this->public_actions )) {
			
		}
		//echo "<pre>";print_r($this->Session);
		//die;
		//default values.
		if (empty($_SESSION['companyname'])) {
			$this->loadModel('Setup');
			$this->Session->write('companyname',$this->Setup->getValue('companyname'));
			$this->Session->write('companyaddress',$this->Setup->getValue('companyaddress'));
			$this->Session->write('companyphone',$this->Setup->getValue('companyphone'));
			$this->Session->write('openregistration',$this->Setup->getValue('openregistration'));
			$this->Session->write('userregistration',$this->Setup->getValue('userregistration'));
			$this->Session->write('companyurl',$this->Setup->getValue('companyurl'));
			$this->Session->write('companyemail',$this->Setup->getValue('companyemail'));
			$this->Session->write('companyvat',$this->Setup->getValue('companyvat'));
			$this->Session->write('companyroc',$this->Setup->getValue('companyroc'));
			$this->Session->write('companyaccount',$this->Setup->getValue('companyaccount'));
//			$this->Session->write('companypan',$this->Setup->getValue('companypan'));
//			$this->Session->write('companytan',$this->Setup->getValue('companytan'));
		}
	}

	function _log_access(){

	}

	function _setupContentTypes()
	{
		$this->RequestHandler->setContent('json', 'text/x-json');
	}

	function _render_response( $response )
	{
		Configure::write('debug' , 0);

		$this->autoLayout = false;
		$this->autoRender = false;

		echo json_encode($response);
		die();exit();
	}


 



/**
 * Authorisation scheme
 * --------------------
 *
 * Y = Full access permitted
 * p = Access permitted, but action has internal authorisation
 *
 * Actions							Public	Customer	Back-end users	Admin
 * --------------------------------------------------------------------------
 * /page-title						Y
 * /customer/*								Y
 * /admin/*																Y
 *
 * @param $action (optional) specify the action that we want to test (otherwise it will default to the current action)
 */
	function isAuthorized($action=null) {

		if(empty($action)){
			$action = $this->action;
		}else{
			//strip off the controller part of the action if present
			$action = array_pop(explode('/',$action));
		}

		$authorized = false;

		$currentRole = $this->Session->read('Auth.User.role');
		$is_active = $this->Session->read('Auth.User.is_active');

		return $authorized;
	}

	/*
	 * @param $message Allows customisation of the path in the message
	 */
	function errorUnauthorised($message=null)
	{
		if(empty($message)){
			$message = $this->here;
		}

		return $this->cakeError(
			'error401',
			array(
				'code' 		=> '401',
				'name' 	=> 'Not Authorised',
				'message' => $message,
//				'message' => sprintf("You are not authorised to access the requested address %s.", $this->here),
				'base' => $this->base
			)
		);
	}

	function errorInvalid()
	{
		return $this->cakeError(
			'error',
			array(
				'code' 		=> '400',
				'name' 	=> 'Invalid',
				'message' => sprintf("The server was unable to process your request. %s.", $this->here),
				'base' => $this->base
			)
		);
	}

	function error404() {
		return $this->cakeError('error404', array('message' => 'Not found'));
	}

	/**
	*  Prepares the action for an ajax response...
	*/
	function ajaxAction(){

		Configure::write('debug' , 0 );

		$this->autoLayout = false;
		$this->autoRender = false;
	}


/**
 * Handles automatic pagination of model records.
 * -Overrided to remove duplicated conditions
 *
 * @param mixed $object Model to paginate (e.g: model instance, or 'Model', or 'Model.InnerModel')
 * @param mixed $scope Conditions to use while paginating
 * @param array $whitelist List of allowed options for paging
 * @return array Model query results
 * @access public
 * @link http://book.cakephp.org/view/165/Controller-Setup
 */
	function paginate($object = null, $scope = array(), $whitelist = array()) {
	     if( is_array($this->paginate) &&
	         isset($this->paginate['conditions']) &&
	         is_array($this->paginate['conditions']))
	     {
	         if( ! is_array($scope) )
	             $scope = array($scope);

	         $scope = array_diff($scope, $this->paginate['conditions']);
	     }
	     return parent::paginate($object , $scope, $whitelist);
	}


	function testModel() {
	}


	function redirect($url, $status = null, $exit = true) {
		$url = $url."?session_id=".session_id();
		return parent::redirect($url, $status, $exit);
	}

	function flash($message, $url, $pause = 1, $layout = 'flash') {
		$url = $url."?session_id=".session_id();
		return parent::flash($message, $url, $pause, $layout);
	}


}

