<?php
class AdminController extends AppController {

//	public $name = 'Admin';
//	var $components = array('RequestHandler','Cookie','Session',
//		'Auth' => array(
//			'loginAction' => array('controller' => 'admin', 'action' => 'login'),
//			'fields' => array('username' => 'email', 'password' => 'password'),
//		),
//	);
	var $uses = array('User','Setup','Member','Package');
	var $layout = 'admin';
	/*@var SessionComponent */ var $Session;

	function beforeFilter(){
		parent::beforeFilter();
		//print_r($_SESSION); die;
		$this->Auth->loginAction = array('controller' => 'admin', 'action' => 'login');
		//$this->Auth->loginRedirect = array('controller' => 'admin', 'action' => 'panel');
		$this->Auth->allow('display');
		$this->Auth->authorize = 'controller';
		$this->Auth->fields = array('username' => 'id', 'password' => 'password');
		$this->Auth->authenticate = ClassRegistry::init('User'); // prefer hashpasswords in User model than Securioty class - has key and all
		$this->Auth->autoRedirect = false;

	}

	function isAuthorized() {
		return true;
	}

	function login() {
		// dont remove this
		if($this->Auth->_loggedIn) {
			$data = $this->User->find('first',array('condition'=>array('id'=>$this->data['User']['id'])));
			$this->Session->write('adminname',$data['User']['id']);
			$this->Session->write('adminrealname',$data['User']['realname']);
			$this->redirect('panel');
		}
	}

	function panel() {

	}
//	var $helpers = array('Ajax');
//	var $components = array('Email');

	function profile() {
		
	}

	function changepassword() {
		if(!empty($this->params['form'])) {
			// check if all data is enetered
			if (empty($this->data['oldpass']) || empty($this->data['newpass']) || empty($this->data['repass']) ) {
				$this->Session->setFlash('Please enter the details.');
				$this->redirect('/admin/changepassword');
			}
			// check validity of old pass
			$data_pass = $this->User->getPassword($this->data['oldpass']);
			$arr = $this->User->find('first',array('conditions'=>array('id'=>$this->Session->read('adminname'),'password'=>$data_pass)));
			if($arr === false) {
				$this->Session->setFlash('Wrong old password. Please try again.');
				$this->redirect('/admin/changepassword');
			}
			// check if repass is entered correctly
			if ($this->data['newpass'] != $this->data['repass']) {
				$this->Session->setFlash('New Password and Re-entered password do not match. Please try again.');
				$this->redirect('/admin/changepassword');
			}

			$data = array('User'=>
				array(
					'id'=>$this->Session->read('adminname'),
					'password'=>$this->User->getPassword($this->data['newpass'])
				)
			);
			$this->User->saveAll($data);
			$this->Session->setFlash('Your password is updated successfully.');
		}
		
	}

	function chngetxnpass() {
		//yet to write
		
	}

	function setup() {
		//pr($this->data); die;
		if(!empty($this->data)) {
			if (isset($this->data['autoid'])) 
				$this->Setup->setValue('autoid','y');
			if (isset($this->data['randomid']))
				$this->Setup->setValue('randomid','y');
			if (isset($this->data['openregistration']))
				$this->Setup->setValue('openregistration','y');
			if (isset($this->data['userregistration']))
				$this->Setup->setValue('userregistration','y');
			if (isset($this->data['readonlyuseraccount']))
				$this->Setup->setValue('readonlyuseraccount','y');
			$this->Setup->setValue('memberid',$this->data['memberid']);
			$this->Setup->setValue('idprefix',$this->data['idprefix']);
			$this->Setup->setValue('companyname',$this->data['companyname']);
			$this->Setup->setValue('companyaddress',$this->data['companyaddress']);
			$this->Setup->setValue('companyphone',$this->data['companyphone']);
			$this->Setup->setValue('companyurl',$this->data['companyurl']);
			$this->Setup->setValue('companyemail',$this->data['companyemail']);
			$this->Session->setFlash('Setup valuea are saved successfully.');
			
		}

		$this->set('autoid',$this->Setup->getValue('autoid'));
		$this->set('randomid',$this->Setup->getValue('randomid'));
		$this->set('openregistration',$this->Setup->getValue('openregistration'));
		$this->set('userregistration',$this->Setup->getValue('userregistration'));
		$this->set('readonlyuseraccount',$this->Setup->getValue('readonlyuseraccount'));
		$this->set('memberid',$this->Setup->getValue('memberid'));
		$this->set('idprefix',$this->Setup->getValue('idprefix'));
		$this->set('companyname',$this->Setup->getValue('companyname'));
		$this->set('companyaddress',$this->Setup->getValue('companyaddress'));
		$this->set('companyphone',$this->Setup->getValue('companyphone'));
		$this->set('companyurl',$this->Setup->getValue('companyurl'));
		$this->set('companyemail',$this->Setup->getValue('companyemail'));
	}

	function search() {
		$search_criteria = str_replace('url='.strtolower($this->name).'/search',"",$_SERVER['QUERY_STRING']);
		$search_criteria = preg_replace('/&session_id=[a-z 0-9]*/','', $search_criteria);
		$search_criteria = preg_replace('/\/page\:[0-9]*\//','', $search_criteria);
		$search_criteria = "?".$search_criteria;
		$search_criteria = preg_replace('/\?[&]*/','?', $search_criteria);
		
		//preg_match('/\?[&]*/', $search_criteria, $matches);
		//pr($matches);
		//$search_criteria = preg_replace('/\/page\:[0-9]*\//','', $search_criteria);
		//$search_criteria = str_replace('url=',"",$_SERVER['QUERY_STRING']);
		if (isset($this->params->query['data']['Member'])) {
			$user = $this->params->query['data']['Member'];
			if ($user['id']=='' && $user['name']=='' && $user['city']=='' && $user['address']=='') {
				$this->Session->setFlash('Please specify search criteria.');
				return false;
			}

			$construct_cond = array();
			if(!empty($user['id'])){
				$construct_cond[] = array('Member.id LIKE' => '%'.$user['id'].'%');
			}
			if(!empty($user['name'])){
				$construct_cond[] = array('Member.name LIKE' => '%'.$user['name'].'%');
			}
			if(!empty($user['city'])){
				$construct_cond[] = array('Member.city LIKE' => '%'.$user['city'].'%');
			}
			if(!empty($user['address'])){
				$construct_cond[] = array('Member.id LIKE' => '%'.$user['address'].'%');
			}

			$conditions = array(
				'AND' => array($construct_cond)
			);

			$data = $this->Member->find('first',array('conditions'=>$conditions, 'fields'=>'count(Member.id) as cnt'));
			$total_records = $data[0]['cnt'];
			$this->paginate = array(
				'conditions' => $conditions,
				'limit' => 10
			);
			$data = $this->paginate('Member');
			//pr($data);
			$this->set('data',$this->params->query['data']);
			$this->set('no_of_records',$total_records);
			$this->set('thecount',count($data));
			$this->set('search_data',$data);
			$this->set('search_string',$search_criteria);
		}
	}

	function useraccount($id=null) {
		if (empty($id)) {
			$this->Session->setFlash('Please provide Member Id');
			echo $this->referer();
			$this->redirect($this->referer());
		}

		if (isset($this->data['submit'])) {
			// check if password to update
			$data = $this->data['Member'];
			if (isset($this->data['Member']['changepass'])) {
				$data['password'] = $this->Member->getPassword($this->data['Member']['password']);
			} else {
				unset($data['password']);
			}

			if ($this->Member->save($data)) {
				$this->Session->setFlash('Account is saved successfully.');
			} else {
				$this->Session->setFlash('Account could not be saved. Please try again. If you are getting this error frequently, please contact web administratot.');
			}
		}

		$conditions = array('Member.id'=>$id);
		$data = $this->Member->find('all',array('conditions'=>$conditions));

		$packages = $this->Package->get_all_packages();
		$this->set('data', $data[0]);
		$this->set('packages',$packages);
	}

	function logout() {
		$this->Session->destroy();
		$this->Session->setFlash('You are logged out successfully!');
		$this->redirect('login');
	}

}
