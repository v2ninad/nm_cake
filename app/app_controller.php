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

	function beforeFilter()
	{
		// Enable Custom Content Types
		$this->_setupContentTypes();

/*
		if(!isset($_COOKIE['CAKEPHP']))
		{
			debug('cookie cakephp not set!');
			$_COOKIE[$_POST['CAKEPHP']] = $_POST['PHPSESSID'];
}

		session_id('CAKEPHP');
		session_start();

		debug($_SESSION);
*/
		/**
		* Disable Sessions for the Solver
		*/
		if(!in_array($this->action , $this->public_actions ))
		{
			$this->Session->activate('/');
			Configure::write('Session.start', true); // Necessary for getting SessionHelper to work!
		}


		// allow manual disable of debug mode on dev machines
		/*
		if(Configure::read('App.location') == 'dev' && isset($this->params['url']['debug']))
		{
			Configure::write('debug', 0);
		}
		*/

		if(!in_array($this->action , $this->public_actions ))
		{
			//save the first inbound referer link to the session for tracking purposes
			if(!$this->Session->check('referer')){
				$this->Session->write('referer',$this->referer());
			}

			//save referer code
			if(isset($this->passedArgs['referer_code'])){
				App::import('Model','Quote'); $Quote = new Quote();
				$Quote->saveReferalCode($this->passedArgs['referer_code'],$this->Session,$this->Messages);
			}

			//	Check for forced setting of Partner, used in the iQuote process
			if (!empty($this->passedArgs['partner'])) {
				$partnerId = $this->passedArgs['partner'];
				$Partner = ClassRegistry::init('Partner', 'Model');
				if ($Partner->isActive($partnerId)) {
					$this->Session->write('Session.partner_id', $partnerId);
				}
			}

			//	Check for forced setting of AffiliatePartner, used in the iQuote process
			if (!empty($this->passedArgs['affiliate'])) {
				$affiliatePartnerId = $this->passedArgs['affiliate'];
				$Partner = ClassRegistry::init('Partner', 'Model');
				if ($Partner->isActive($affiliatePartnerId)) {
					$this->Session->write('Session.affiliate_partner_id', $affiliatePartnerId);
				}
			}



		}

		//allow logging in through swx in addition to the normal method (swx cannot send data, so instead
		$this->_setAuth();

		if (Configure::read('debug') == 2) {
			array_push($this->helpers, 'Firecake');
		}

		if (isset($this->params['admin'])) {
			$this->layout = 'extranet';
		}

		$this->layout = 'extranet';
	}

	function _log_access(){

		$action = $this->action;
		$controller = $this->name;
		$user_id = $this->Session->read('Auth.User.id');
		$url = print_r($this->params['url']['url'],true);
		$time = date("Y-m-d H:i:s");
		$ip = $_SERVER['REMOTE_ADDR'];
		$this->log("Security Log: Controller: {$controller} Action: {$action} User: {$user_id} Time: {$time} IP: {$ip} URL: {$url}", 'security');

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

	function _setCustomerSidebar($user_id)
	{
		//Preventing the view of customer data for rsd role
		$role = $this->Session->read('Auth.User.role');
		if ($role != 'rsd'){
			$Quote = ClassRegistry::init('Quote', 'Model');
			if (false) { $Quote = new Quote(); }

			$this->viewVars['second_content'] = array(
					'customer_overview' => $Quote->User->find('first',array('fields'=>array('id','first_name','last_name'),'conditions'=>array('User.id'=>$user_id),'contain'=>array('Quote')))
			);
		}
	}

	function _setCustomerSidebarByQuoteId($quote_id){
		$Quote = ClassRegistry::init('Quote', 'Model');
		if (false) { $Quote = new Quote(); }

		$quote = $Quote->find('first',array('fields'=>array('Quote.user_id'),'conditions'=>array('id'=>$quote_id),'contain'=>array()));
		if(!empty($quote)){
			$user_id = $quote['Quote']['user_id'];

			$this->_setCustomerSidebar($user_id);
		}
	}

	function _setSecondContentUser()
	{
		if ( ! isset($this->viewVars['second_content']) )
			$this->viewVars['second_content'] = array();

		$this->viewVars['second_content']['user_nav']	=	array();

	}

    /**
     *
     * Removes identifying information from the array. For use with controllers and views that
     * display user information by default, but are granted to users with roles that are not alowed to
     * see customer information.  Be sure to pass the array by reference to this function.
     * @param array $user
     */
    function _obfuscate_quote_user($user){
            foreach (array('first_name','last_name','email','email_alternate','phone_home','phone_cell','phone_work','fax') as $value) {
                $user[$value] = '';
            }
    }

	function _requireRoleOrRedirect($roles,$redirect=null,$message=null){

		if(!is_array($roles)){
			$roles = array($roles);
		}

		if(!in_array($this->Session->read('Auth.User.role'),$roles)){
			if(empty($id)){
				if(!empty($message)){
					$this->Messages->add($message,'error');
				}else{
					$this->Messages->add('Permission denied','error');
				}
				if(!empty($redirect)){
					$this->redirect($redirect);
				}else{
					$this->redirect($this->referer());
				}
				return false;
			}
		}

		return true;

	}
	function beforeRender() {

		$this->_setWebsiteOptimizer();

	}

	function _setWebsiteOptimizer(){

		$test_url_regex = "/^\/$/i";
		$goal_url_regex = "/iquote\/choose_roof/i";

		if( preg_match($test_url_regex, $this->here) ){
			$this->set('website_optimizer', array('action'=>'test') );
		}else if( preg_match($goal_url_regex, $this->here) ){
			$this->set('website_optimizer', array('action'=>'goal') );
		}else{
			$this->set('website_optimizer', array('action'=>false) );
		}

	}

	/*
	 * Applies a segment to this session for AB split testing in Google Analytics for a particular dimension of interest.
	 * Randomly assigns one of the supplied values as the segment for this session.
	 * To set a particular segment instead of randomly choosing a segment from multiple options, simply pass a $values array with only one value that you wish to assign.
	 *
	 * @param $dimension String. This describes the item being tested. e.g. form_length, branding_style, page_layout etc
	 * @param $values Array. One of these values will be randomly chosen and assigned to the session
	 * @return String. Returns the name of the chosen segment for the supplied dimension.
	 */
	function _setAnalyticsSegment($dimension,$values){

		if(!is_array($values) || empty($values)){
			return false;
		}

		//assign to a group if not already assigned
		if($this->Session->check('Analytics.segments')){
			$analytics_segment = $this->Session->read('Analytics.segments');
		}else{
			$analytics_segment = array();
		}

		if(empty($analytics_segment[$dimension])){

			//Always use the long form, disable short form entirely
			$analytics_segment[$dimension] = 'long';	//100%
			/*
			//Randomize value: short form = 10%, long form =90%
			$chance=rand(1,10);
			if ($chance==1){
				$analytics_segment[$dimension] = 'short'; 	//10%
			}else{
				$analytics_segment[$dimension] = 'long';	//90%
			}
			*/
			$this->Session->write('Analytics.segments', $analytics_segment);

			//notify google analytics of the segment update (the element send this once automatically and then clears the variable)
			$this->Session->write('Analytics.update',true);

		}

		return $analytics_segment[$dimension];

	}

	function _setAuth() {

		//Also see: SatsizerController->login_swx() for swx login method

		App::import('Helper', 'Html');

		if (!isset($this->Auth)) {
			return;
		}

		if (isset($this->params['requested']) && $this->params['requested']) {
			$this->Auth->allow();
			return;
		}

		$this->Auth->userModel = 'User';
		$this->Auth->fields = array('username' => 'email', 'password' => 'pass');
		$this->Auth->autoRedirect = false;
		$this->Auth->loginAction = array('admin' => false, 'prefix' => false, 'controller' => 'users', 'action' => 'login');
		$this->Auth->logoutRedirect = '/';
		$this->Auth->loginError = 'Invalid email or password. Please try again.';
		$this->Auth->authorize = 'controller';

		//@todo: check what this was being used for and check it didn't just get broken
		if(!$this->Session->check('Auth.redirect')){
			if (!in_array($this->action, array('login','logout'), true)) {
				$this->Session->write('Auth.redirect', $this->here);
			}
		}

		if ($this->isAuthorized()) {
			$this->Auth->allow();
		}

		// 	Save role into params
		$this->params['role'] = $this->Session->read('Auth.User.role');
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


}

