<?php
/**
 * 
 * Assists with roles:
 * - generating role-based links 
 * 
 */
class RoleHelper extends HtmlHelper {
	
	var $roleTitles = null;
	var $rolePermissions = null;
	var $roleActionRegex = null;
	
	function cacheRoles() {
		$this->roleTitles = Configure::read('Roles.titles');
		$this->rolePermissions = Configure::read('Roles.permissions');
		
		$roleOptions = implode('|',array_keys($this->roleTitles));
		$this->roleActionRegex = "#^(" . $roleOptions . ")_#"; 
	}
	
	function getHome($user_role){
		
		$roles_homes = Configure::read('Roles.homes');
		
		if (isset($roles_homes[$user_role])) {
			return $roles_homes[$user_role];
		}
		else {
			return array('controller'=>'users','action'=>'login');
		}
	}
	
	function getRoleTitleFromKey($key){
		
		$roles = Configure::read('Roles.titles');
		
		if(isset($roles) && isset($roles[$key]))
		{
			return $roles[$key];
		}
		return "";
		
	}
	
	
	function getRoleFromAction($action) {
		if (is_null($this->roleTitles)) {
			$this->cacheRoles();
		}
		
		$roles = array_keys($this->roleTitles);			
		preg_match($this->roleActionRegex, $action, $matches);
		$desiredRole =  (!empty($matches[1])) ? $matches[1] : null;
		
		return $desiredRole;
	}
	
	function hasPermission($currentRole = false, $desiredRole = false) {
		if (is_null($this->roleTitles)) {
			$this->cacheRoles();
		}
		
		if (empty($desiredRole)) {
			return true;
		}
		
		if ($currentRole == $desiredRole) {
			return true;
		}
				
		if (isset($this->rolePermissions[$currentRole]) && in_array($desiredRole, $this->rolePermissions[$currentRole], true)) {
			return true;
		}
		
		return false;
	}
	
	/**
	 * To work, you must provide $url in array format
	 *
	 * @param unknown_type $title
	 * @param unknown_type $url
	 * @param unknown_type $htmlAttributes
	 * @param unknown_type $confirmMessage
	 * @param unknown_type $escapeTitle
	 * @return unknown
	 */
	function link($title, $url = null, $htmlAttributes = array(), $confirmMessage = false, $escapeTitle = true) {
			
		if (is_array($url)) {
			if (is_null($this->roleTitles)) {
				$this->cacheRoles();
			}
						
			$currentRole = isset($this->params['role']) ?  $this->params['role'] : false;
			
			$desiredRole = $this->getRoleFromAction($url['action']);
						
			if ($desiredRole == null) {
				return parent::link($title, $url, $htmlAttributes, $confirmMessage, $escapeTitle);
			}
			else if ($this->hasPermission($currentRole, $desiredRole)) {
				return parent::link($title, $url, $htmlAttributes, $confirmMessage, $escapeTitle);
			}
			else {
				if (!empty($htmlAttributes['visible'])) {
					return "<span class='role-disabled' title='This action requires higher authorization'>{$title}</span>";
				}
				else {
					return false;
				}
			}
						
		}
		else {
			return parent::link($title, $url, $htmlAttributes, $confirmMessage, $escapeTitle);
		}
	}
}

?>