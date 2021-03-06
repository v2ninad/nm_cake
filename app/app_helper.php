<?php
/**
 * Application level View Helper
 *
 * This file is application-wide helper file. You can put all
 * application-wide helper-related methods here.
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
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
App::import('View', 'Helper', false);

/**
 * This is a placeholder class.
 * Create the same file in app/app_helper.php
 *
 * Add your application-wide methods in the class below, your helpers
 * will inherit them.
 *
 * @package       cake.libs.view.helpers
 */
class AppHelper extends Helper {

	function url($url = null, $full = false) {
		$tmp_url = parent::url($url, $full);
		if (!strstr($tmp_url,"session_id")) {
			//return  parent::url($url, $full)."/?session_id=".session_id();;
			if (! strstr($tmp_url, "?")) {
				$tmp_url =  parent::url($url, $full)."/?session_id=".session_id();
			} else {
				$tmp_url = parent::url($url, $full)."&session_id=".session_id();
			}
		}
		//
		return $tmp_url;
	}
}
