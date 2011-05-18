<?
class AjaxController extends AppController {

	public $name = 'Ajax';
	var $components = array('RequestHandler','Cookie','Session','Validate');
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
		if(empty($date)) {
			$date = $_POST['dt'];
		}
		error_reporting(E_ALL);
		ini_set("display_errors","on");
		App::import('component', 'Validate');
		$this->Validate->is_valid_date($date);
		if($this->Validate->is_valid_date($date)) {
			echo "1";exit;
		} else {
			echo "0";exit;
		}
	}
}