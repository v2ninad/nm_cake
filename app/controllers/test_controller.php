<?
class TestController extends AppController {

//	public $name = 'Admin';
	var $components = array('RequestHandler','Cookie','Session','Btree','Auth');
//		'Auth' => array(
//			'loginAction' => array('controller' => 'admin', 'action' => 'login'),
//			'fields' => array('username' => 'email', 'password' => 'password'),
//		),
//	);
	var $uses = array('User','Setup','Member','Package','Franchisee');
	var $layout = 'ajax';

	function beforeFilter(){
		parent::beforeFilter();
		$this->Auth->allow('test');
	}
	
	public function test () {
		$this->Btree->create_stack(4);
		pr($this->Btree->id_stack);
	}

	
}