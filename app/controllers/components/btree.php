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
			$total_placeholders += pow(2,$i);
		}
		echo $this->placeholder_counts = $total_placeholders;

		// create default stack
		$placeholders_stack  = $used_places = array();
		// minimum counter
		$min_counter = 1;

		// start shuffling stack array according to position
		// loop for number of levels
		for ($i=1; $i<=$level; $i++) {
			$current_level_diff = pow(2,$i);
			$dup_min_counter = $min_counter;
			// loop to increase counter in each level
			for ($j=$dup_min_counter; $j<=$total_placeholders; $j=$j+$current_level_diff) {
				$placeholders_stack[] = $j;
				$used_places[$j] = $j;
				if ($j==$min_counter) {
					// check available non used min counter
					for ($k=$j+1; $k<=$total_placeholders; $k++) {
						if (!in_array($k, $used_places)) {
							$min_counter = $k;
							break;
						}
					}
				}
			}
		}
		$this->id_stack = $placeholders_stack;

	}

}

