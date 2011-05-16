<?
class AjaxController extends AppController {

//	public $name = 'Admin';
//	var $components = array('RequestHandler','Cookie','Session',
//		'Auth' => array(
//			'loginAction' => array('controller' => 'admin', 'action' => 'login'),
//			'fields' => array('username' => 'email', 'password' => 'password'),
//		),
//	);
	var $uses = array('User','Setup','Member','Package','Franchisee');
	var $layout = 'ajax';

	public function is_valid_date($date=null) {
		if(empty($date)) {
			$date = $_POST['dt'];
		}
		if (empty($date)) {
			echo "0"; exit;
		}
		if(strlen($date) < 10) {
			echo "0";
			exit;
		}
		if ( checkdate(intval(substr($date,3,2)),intval(substr($date,0,2)),intval(substr($date,6))) == false) {
			echo "0";
			exit;
		}
		echo "1";
		exit;
	}
}