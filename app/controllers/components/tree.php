<?php
/**
 * Tree component
 *
 * Manages user downline tree calculations and display logic.
 *
 * PHP 5
 *
 * @copyright     Copyright 2010-2011 @ Ninad
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
class BtreeComponent extends Component {

/**
* Number of levels of tree
*
* @var int
*/
	public $level=2;


/**
* stack order of placeholders, by which jquery plugin would handle;
*
* @var array
*/
	public $id_stack = array();

/**
* total number of placeholders, in current tree;
*
* @var number
*/
	public $placeholder_counts;

	public function create_stack($level=0) {
		if (empty($level) || $level < 2) {
			$level = $this->level;
		} else {
			$this->level = $level;
		}

		// find total number of placeholders
		$total_placeholders = 0;
		for ($i=0; $i<$level; $i++) {
			$total_placeholders += (2^$i);
		}
		$this->placeholder_counts = $total_placeholders;

		// create default stack
		$raw_stack = array();
		for ($i=1; $i<$this->placeholder_counts; $i++) {
			$raw_stack[] = $i;
		}

		// start shuffling stack array according to position
		for ($i=1; $i<=$level; $i++) {
			$current_level_diff = (2^$i);

//			for () {

//			}
			
		}

	}

}

