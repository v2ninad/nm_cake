<br>
<span class="pagetitle">- Change Administrator Password -</span>
<blockquote>
	<form name="officeday" action="<?=$this->Form->url('/admin/changepassword/')?>" method="post" >
		<table width="400" border="1" align="center" cellpadding="1" cellspacing="0" class="tabletext">
			<tr>
				<td width="196">Member Code</td>
				<td width="194"><input name="id" type="text" class="shadeform" id="id" value="<?=$this->Session->read('adminname')?>" readonly="1"></td>
			</tr>
			<tr>
				<td>Old Password </td>
				<td><input name="data[oldpass]" type="password" class="shadeform" id="oldpass"></td>
			</tr>
			<tr>
				<td>New Password </td>
				<td><input name="data[newpass]" type="password" class="shadeform" id="newpass"></td>
			</tr>
			<tr>
				<td>Conform New Password </td>
				<td><input name="data[repass]" type="password" class="shadeform" id="repass"></td>
			</tr>
		</table>
		<div align="center"><br>
				<input name="submit" id="submit" type="submit" value="Save" class="but">
		</div>
	</form>
	<p></p>
	<p align="justify" class="pagetext">&nbsp;</p>
<p>&nbsp;</p>
</blockquote>

<script type="text/javascript">
$(function(){
	$(document).ready(function(){
		$("#submit").click(function(){
			if ($("#oldpass").val() == "") {
				$("oldpass").focus();
				$("#site_message").html('Please enter existing password.');
				return false;
			}
			if ($("#newpass").val() == "") {
				$("newpass").focus();
				$("#site_message").html('Please enter new password.');
				return false;
			}
			if ($("#repass").val() == "") {
				$("repass").focus();
				$("#site_message").html('Please Re-enter new password.');
				return false;
			}
			if ($("#newpass").val() != $("#repass").val()) {
				$("#site_message").html('Re-entered password do not match with new password.');
				return false
			}
			return true;
		});
	});
});
</script>