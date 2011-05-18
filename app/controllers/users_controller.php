<?php
class UsersController extends AppController {

	public $name = 'Users';
	//public $scaffold;

//function isAuthorized() {
//        if (isset($this->params[Configure::read('Routing.admin')])) {
//            if ($this->Auth->user('admin') == 0) {
//                return false;
//            }
//        }
//
//        return true;
//   }

//	public function login() {
//		if ($this->Auth->user()) {
//            if (!empty($this->data)) {
//                if (empty($this->data['User']['remember_me'])) {
//                    $this->Cookie->del('User');
//                }
//                else {
//                    $cookie = array();
//                    $cookie['email'] = $this->data['User']['email'];
//                    $cookie['token'] = $this->data['User']['pasword'];
//                    $this->Cookie->write('User', $cookie, true, '+2 weeks');
//                }
//
//                unset($this->data['User']['remember_me']);
//            }
//
//            $this->redirect($this->Auth->redirect());
//        }
//
//	}
}
