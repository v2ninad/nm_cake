<?php
$adminname = (!empty($this->Session->read('adminname'))) ? $this->Session->read('adminname') : false;
$username = (!empty($this->Session->read('username'))) ? $this->Session->read('username') : false;
if($adminname or $username) {
?>
          <table width="100%" class="paneltext">
            <tr>
              <th width="16%"><?php if($adminname) echo $adminname; else echo $username;?></th>
              <th width="71%" align="center"><?php if($adminname) echo $this->Session->read('adminrealname'); else echo $this->Session->read('userrealname');?></th>
              <th width="13%" align="right"><a href="../distributor/validateadmin.php?logout=true">Logout</a></th>
            </tr>
          </table>
<?php
}
?>