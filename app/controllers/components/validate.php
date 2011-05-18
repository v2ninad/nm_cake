<?php
/**
 * Validation component
 *
 * Manages validations 
 *
 * PHP 5
 *
 * @copyright		Copyright 2005-2010, Vedant Infotech
 * @Author			Ninad Desai
 */

App::import('Core', 'Router', false);
App::import('Core', 'Security', false);

/**
 * Authentication control component class
 *
 * Binds access control with user authentication and session management.
 *
 * @package       cake.libs.controller.components
 * @link http://book.cakephp.org/view/1250/Authentication
 */
class ValidateComponent extends Component {

	public function is_valid_date($date) {
		if(empty($date)) {
			return false;
		}
		if(strlen($date) < 10) {
			return false;
		}
		return checkdate(intval(substr($date,3,2)),intval(substr($date,0,2)),intval(substr($date,6)));
	}
}
