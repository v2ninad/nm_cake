<?php
class RegistrationController extends AppController {

//	public $name = 'Admin';
//	var $components = array('RequestHandler','Cookie','Session',
//		'Auth' => array(
//			'loginAction' => array('controller' => 'admin', 'action' => 'login'),
//			'fields' => array('username' => 'email', 'password' => 'password'),
//		),
//	);
	var $components = array('RequestHandler','Cookie','Session','Validate','Btree');
	var $uses = array('User','Setup','Member','Package','Franchisee','Pin');
	var $layout = 'registration';

	function  beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('index');
	}

	function index() {
		$adminname = $this->Session->read('adminname');
		$username = $this->Session->read('username');
		// set paidflag -- if user can be registered as paid entry
		$paidflag = false;
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
		$autoid = $this->Setup->getValue('autoid');
		$this->set('autoid',$autoid);


		// validations starts here
		if (isset($this->data)) {
			$m = $this->data['Member'];
			//basic validation
			if($m['name'] == "" or $m['id'] == "" or $m['address'] == "" or $m['pin'] == ""  or $m['state'] == "" or $m['sponcerid'] == "" or $m['city'] == "" or $m['paydetails'] == "") {
				$this->Session->setFlash("All fields with red mark are compulsory! Please check before you submit.");
				return false;
			}
			// date validation
			if(!$this->Validate->is_valid_date($m['doj'])) {
				$this->Session->setFlash("Invalid date entered. Date should be in dd/mm/yyyy format.");
				return false;
			}

			if ($m['paymode'] == "Pin Number") {
				$m['pinno'] = $m['paydetails'];
			} else {
				$m['pinno'] = "NONE";
			}

			//check validity of pin if !admin
			if(empty($adminname) and $m['pinno'] <> "NONE") {
				$data = $this->Pin->find('first',array('conditions'=>array('pin'=>$m['pinno'])));
				if(count($data) <= 0) {
					$this->Session->setFlash("Incorrect Prepaid PIN specified!");
					return false;
				}
				if ($data['Pin']['status'] == 'y') {
					$this->Session->setFlash("Specified Prepaid PIN already in use. Try another PIN.");
					return false;
				}
				if ($data['Pin']['status'] == 'z') {
					$this->Session->setFlash("Specified Prepaid PIN currently LOCKED by Administrator. Try another PIN or contact H.O.");
					return false;
				}
				$m['pinvalue'] = $data['Pin']['value'];
				$m['paid'] = 'y';
			} else {
				$m['pinvalue'] = $data['Pin']['value'];
				$m['paid'] = 'n';
			}

			// validate member id if manually entered
 			if($autoid == 'n') {
				$data = $this->Member->find('first',array('conditions'=>array('id'=>$m['id'])));
				if(count($data) >= 1) {
					$this->Session->setFlash("ID already exists.");
					return false;
				}
			}
			// validate introducer validity
			$introducer = strtoupper($m['sponcerid']);
			$data = $this->Member->find('first',array('conditions'=>array('id'=>$introducer)));
			if (count($data) <= 0) {
				$this->Session->setFlash("Incorrect introducer specified.");
				return false;
			}

			$aboveid = $spillname = "";
			$loc = ($m['position'] == 'left')?"l":"r";
			$this->Member->getaboveid($introducer, &$aboveid, &$loc, &$spillname);
			$m['aboveid'] = $aboveid;
			$m['position']=$loc;
			$m['abovename'] = $spillname;
			$m['sponcername'] = $data['Member']['name'];

			$this->set('memberData',$m);
			
			$this->render('/registration/validate');
			
		}






	}
}