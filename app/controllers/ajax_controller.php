<?
class AjaxController extends AppController {

	public $name = 'Ajax';
	var $components = array('RequestHandler','Cookie','Session','Validate','Btree');
//		'Auth' => array(
//			'loginAction' => array('controller' => 'admin', 'action' => 'login'),
//			'fields' => array('username' => 'email', 'password' => 'password'),
//		),
//	);
	var $uses = array('User','Setup','Member','Package','Franchisee');
	var $layout = 'ajax';

	function  beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('is_valid_date');
	}

	public function is_valid_date($date=null) {
		if(!$this->params['isAjax']) {
			die('Unauthorized action. Your ip has been recorded as an act of hacking.');
			return false;
		}
		if(empty($date)) {
			$date = $_POST['dt'];
		}
		error_reporting(E_ALL);
		ini_set("display_errors","on");
		App::import('component', 'Validate');
		if($this->Validate->is_valid_date($date)) {
			echo "1";exit;
		} else {
			echo "0";exit;
		}
	}

	function member_tip($member_id='') {
		if(!$this->params['isAjax']) {
			die('Unauthorized action. Your ip has been recorded as an act of hacking.');
			return false;
		}
		if (!empty($member_id)) {
			$data = $this->Member->read("*",$member_id);
		} else {
			$data = array();
			$data['Member']['Name'] = "Blank";
			$data['Member']['Address'] = "Blank";
			$data['Member']['Phone'] = "Blank";
			$data['Member']['sponcerid'] = "Blank";
			$data['Member']['leftpeople'] = "Blank";
			$data['Member']['rightpeople'] = "Blank";
		}
		$this->set('data',$data);
		//$data['Member']['leftid'];
		//echo "trial tool tip to check if it works.";
	}

	function tree($id=null,$level=4) {
		if (empty($id)) {
			die('false');
			return false;
		}
		$data = $this->Btree->build_tree($id,$level);
		$this->set('placeholders_count', $this->Btree->placeholder_count);
		$this->set('data',$data);
		$this->set('current_id',$id);
		$this->set('root_id_index',$this->Btree->root_id_index);
	}


}