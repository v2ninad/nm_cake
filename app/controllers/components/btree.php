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
	public $placeholder_count;

/**
* Model name to refer for connection
*
* @var string
*/
	Public $model_name = "Member";


//	public function initialize(&$controller, $settings = array()) {
//		//$this->settings = array_merge($this->defaults, $settings);
//		$this->controller = &$controller;
//	}


/**
* id stack index of very first member
*
* @var string
*/
	public $root_id_index;

	private function _create_stack($level=0) {
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
		$this->placeholder_count = $total_placeholders;

		// create default stack
		$placeholders_stack  = $used_places = array();
		// minimum counter
		$min_counter = 0;
		$level_stack = array();
		// start shuffling stack array according to position
		// loop for number of levels
		for ($i=1; $i<=$level; $i++) {
			$current_level_diff = pow(2,$i);
			$dup_min_counter = $min_counter;

			// loop to increase counter in each level
			for ($j=$dup_min_counter; $j<=$total_placeholders; $j=$j+$current_level_diff) {
				//$placeholders_stack[] = $j;
				$level_stack[$i-1][] = $j;
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
		//echo "LEVEL STACK === ";pr($level_stack);

		// take all level stacks in single array in reverse order .. coz ...
		// 13579 will be in level1 .. but in reality that would be bottom layer .. i.e. level4 by default
		for ($i=(count($level_stack)-1); $i>=0; $i--) {
			//for every element ineach level
			for($j=0; $j<count($level_stack[$i]);$j++) {
				$placeholders_stack[] = $level_stack[$i][$j];
			}

		}
		$this->root_id_index = $placeholders_stack[0];
		$this->id_stack = $placeholders_stack;
	}


	// get model function to load model for database connection
	public function &getModel($name = null) {
		$model = null;
		if (!$name) {
			$name = $this->model_name;
		}

		$model = ClassRegistry::init($name);

		if (empty($model)) {
			trigger_error(__('Auth::getModel() - Model is not set or could not be found'), E_USER_WARNING);
			return null;
		}

		return $model;
	}

	// core function which build tree based on number of level and member id
	public function build_tree($member_id, $level) {
		$this->_create_stack($level);
		$this->Member = $this->getModel();
		$member_downline = $member_downline = $this->Member->getDownlineData($member_id, $this->placeholder_count);
		$ids1 = $ids2 = array();
		$counter = 0;
		foreach($member_downline as $key => $members) {
			$ids1[] = $members['Member']['id'];
		}
		return $this->_shuffle_array_stackwise($member_downline);
	}

	private function _shuffle_array_stackwise($data) {
		$stack = $this->id_stack;
		$updated_downline = array();
		for($i=0; $i < $this->placeholder_count; $i++) {
			$updated_downline[$stack[$i]] = $data[$i];
		}
		return $updated_downline;
	}

}

