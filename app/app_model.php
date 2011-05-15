<?php
/**
 * Application model for Cake.
 *
 * This file is application-wide model file. You can put all
 * application-wide model-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake.libs.model
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

/**
 * Application model for Cake.
 *
 * This is a placeholder class.
 * Create the same file in app/app_model.php
 * Add your application-wide methods to the class, your models will inherit them.
 *
 * @package       cake.libs.model
 */
class AppModel extends Model {

	public $useDbConfig;

	public function __construct($id = false, $table = null, $ds = null) {
		parent::__construct($id, $table, $ds);
		$this->useDbConfig = Configure::read('useDbConfig');
		if(empty($this->useDbConfig)) {
			$this->useDbConfig = "default";
		}
	}


	function hashPasswords($data) {
		if (isset($data['User']['password'])) {
			$result = $this->query("Select password('".$data['User']['password']."') as pass");

			$data['User']['password'] = $result[0][0]['pass'];
		}// end if
		if (isset($data['member']['password'])) {
			$result = $this->query("Select password('".$data['member']['password']."') as pass");

			$data['member']['password'] = $result[0][0]['pass'];
		}// end if
		return $data;
	}// end function hashPasswords



	function getPassword($string) {
			$result = $this->query("Select password('".$string."') as pass");
			return $result[0][0]['pass'];
	}// end function getPassword

}
