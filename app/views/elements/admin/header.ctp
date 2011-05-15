<table width="780" border="0" cellpadding="0" cellspacing="0" class="tabletextSimple">
  <tr>
    <td width="290"><a href="/admin/panel"><img src="/img/ecoLOGO.gif" width="192" height="83" border="0" /></a><a href="/admin/panel"></a></td>
    <td colspan="2"><img src="/img/disthead.jpg" width="554" height="120" /></td>
  </tr>
<?
	$adminname = $this->Session->read('adminrealname');
	if (!empty($adminname)) {
?>
  <tr>
    <th height="20">&nbsp;&nbsp;<b><font color="#666666">
      <?=$adminname?>
    </font></b>&nbsp; Logged In!! </th>
    <th width="470">&nbsp;</th>
    <th width="86"><a href="/admin/logout">Logout</a></th>
  </tr>
<?
	} else {
?>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<?  } ?>