<?php
class RegistrationController extends AppController {

//	public $name = 'Admin';
//	var $components = array('RequestHandler','Cookie','Session',
//		'Auth' => array(
//			'loginAction' => array('controller' => 'admin', 'action' => 'login'),
//			'fields' => array('username' => 'email', 'password' => 'password'),
//		),
//	);
	var $uses = array('User','Setup','Member','Package','Franchisee');
	var $layout = 'registration';


	function index() {
		// set paidflag -- if user can be registered as paid entry
		$paidflag = false;
		$adminname = $this->Session->read('adminname');
		$username = $this->Session->read('username');
		if (!empty($adminname)) {
			$paidflag = true;
		} else {
			if(isset($username) && $this->Session->read('userregistration') == "y") {
				$data = $this->Member->read('credits',$this->Session->read('userregistration'));
				if((int)$data['Member']['credits'] <= 0) {
					$paidflag = false;
				} else {
					$paidflag = true;
				}
			}
		}// end if
		$this->set('paidflag',$paidflag);

		// get all packges available
		$this->set('packages',$this->Package->get_all_packages());

		//get all franchisees
		$this->set('franchisees',$this->Franchisee->get_all_franchisees());

		// set autoid
		$this->set('autoid',$this->Setup->getValue('autoid'));





	}
}