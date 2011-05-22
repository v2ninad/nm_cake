<?
	$member = (isset($this->data['Member']))?$this->data['Member']:array();
	$aminname = $this->Session->read('adminname');
?>
<p align="center" class="pagetitle style3">~ Purchase Order cum Distributorship Application Form&nbsp;~<br>
          [ Form 1A ]</p>
<form method="post" id="frm_registration" name="form" >
	<table width="98%" border="0" align="center" cellpadding="3" cellspacing="0" class="formtext">
		<tr>
			<th align="center" colspan="4">- Contact Information -</th>
		</tr>
		<tr>
			<td>Date of Application </td>
			<td colspan="3" align="left">
			  <input name="data[Member][doj]" id="doj" type="text" tabindex="1" value="<?php if(isset($member['doa'])) echo $member['doa']; else echo date('d/m/Y')?>" size="30" maxlength="10">
			  <span class="style1 style4">*</span>[dd/mm/yyyy]</span>
			</td>
		</tr>
		<tr>
			<td width="21%">Applicant's Name or<br>Enterprise Name</td>
			<td colspan="3"  align="left">
				<input name="data[Member][name]" type="text" id="name" tabindex="2" value="<?php if(isset($member['name'])) echo $member['name']; ?>" size="80">
				<span class="style20 style1 style4">*</span>
			</td>
		</tr>
		<tr>
			<td>Nominee Name</td>
			<td align="left">
				<input name="data[Member][nominee]" type="text" id="nominee" tabindex="3" value="<?php if(isset($member['nominee'])) echo $member['nominee']	; ?>" size="30">
			</td>
			<td align="left">Nominee Relationship </td>
			<td align="left">
				<select name="data[Member][nomineerelation]" class="pagetext" id="relationship"  tabindex="4" >
					<option value="Mother">Mother</option>
					<option value="Father">Father</option>
					<option value="Sister">Sister</option>
					<option value="Wife">Wife</option>
					<option value="Son">Son</option>
					<option value="Daughter">Daughter</option>
					<option value="Friend">Friend</option>
					<option value="Other">Other</option>
					<option value="Husband">Husband</option>
				</select>
			</td>
		</tr>
		<tr>
			<th align="center" colspan="4">- Contact Information -</th>
		</tr>
		<tr>
			<td>Address</td>
			<td colspan="3" align="left">
				<textarea name="data[Member][address]" cols="60" id="address"  tabindex="6"><?php if(isset($member['address'])) echo $member['address']; ?></textarea>
				<span class="style20 style1 style4">*</span>
			</td>
		</tr>
		<tr>
			<td>City</td>
			<td width="29%" align="left">
				<input name="data[Member][city]" type="text" id="city" tabindex="7" value="<?php if(isset($member['city'])) echo $member['city']; ?>" size="30">
				<span class="style20 style1 style4">*</span></td>
			<td width="21%" align="left">PIN Code</td>
			<td width="29%" align="left">
				<input name="data[Member][pin]" type="text"  id="pin" tabindex="8" value="<?php if(isset($member['pin'])) echo $member['pin']; ?>" size="30">
				<span class="style20 style1 style4">*</span>
			</td>
		</tr>
		<tr>
			<td>State</td>
			<td colspan="3" align="left">
				<input name="data[Member][state]" type="text" id="state" tabindex="9" value="<?php if(isset($member['state'])) echo $member['state']; ?>" size="30">
				<span class="style20 style1 style4">*</span>
			</td>
		</tr>
		<tr>
			<td>Phone</td>
			<td align="left">
				<input name="data[Member][email]" type="text" id="email" tabindex="10" value="<?php if(isset($member['email'])) echo $member['email']; ?>" size="30">
			</td>
			<td align="left">Mobile Number </td>
			<td align="left">
				<input name="data[Member][phone]" type="text" id="phone" tabindex="11" value="<?php if(isset($member['phone'])) echo $member['phone']; ?>" size="30">
			</td>
		</tr>
		<tr>
			<th align="center" colspan="4">- Banking Information -</th>
		</tr>
		<tr>
			<td>Name on Cheque/DD </td>
			<td align="left">
				<input name="data[Member][chequename]" type="text" id="chequename" tabindex="12" value="<?php if(isset($member['chequename'])) echo $member['chequename']; ?>" size="30">
			</td>
			<td align="left">Pan Number </td>
			<td align="left">
				<input name="data[Member][pan]" type="text" id="pan" tabindex="13" value="<?php if(isset($member['pan'])) echo $member['pan']; ?>" size="30">
			</td>
		</tr>
		<tr>
			<td>Additional Info If Any </td>
			<td colspan="3" align="left">
				<textarea name="data[Member][notes]" cols="60" id="notes" tabindex="14"><?php if(isset($member['notes'])) echo $member['notes']; ?></textarea>
			</td>
		</tr>
		<tr>
			<th align="center" colspan="4">- Office Information -</th>
		</tr>
		<tr>
			<td>Distributor ID</td>
			<td align="left"><span class="style20">
				<input name="data[Member][id]" type="text" id="id" tabindex="15" value="<?php if($autoid == 'y') {echo "AUTOMATIC"; } else{if(isset($member['id'])) echo $member['id'];}?>" size="30" <?php if($autoid == 'y') echo "readonly";?>>
				<span class="style20 style1 style4">*</span>
<?php
				if($paidflag == true) {
?>
				  <input name="data[Member][paid]" type="checkbox"  tabindex="16"  checked="1" readonly="1"><?php if(isset($member['paid'])) echo "checked";?> &nbsp;Paid?
<?php
				}
?>
			</span></td>
			<td align="left">Leg/Side</td>
			<td align="left">
				<select name="data[Member][position]" class="pagetext" id="leg"  tabindex="17">
<?php				if(isset($member['position']))	{	?>
						<option value="<?=$member['position']?>" selected><?=ucfirst($member['position'])?> Leg</option>
<?php				} else {	?>
						<option value="left" selected>Left Leg</option>
						<option value="right">Right Leg</option>
<?php				}	?>
				</select>
			</td>
		</tr>
		<tr>
			<td>Introducer's ID<br></td>
			<td align="left">
				<input name="data[Member][sponcerid]" type="text" id="introducer" tabindex="18" value="<?php if(isset($member['sponcerid'])) echo $member['sponcerid']; ?>" size="30">
			  <span class="style20 style1 style4">*</span>
			</td>
			<td align="left">Password</td>
			<td align="left">
				<input name="data[Member][password]" type="password" id="password" tabindex="19" value="<?php if(isset($member['password'])) echo $member['password']; else { if(isset($leg)) echo "123456789987654321"; else echo "123456";}?>" size="30" >
			</td>
		</tr>
		<tr>
			<td>Payment Mode <br></td>
			<td align="left">
				<select name="data[Member][paymode]" id="paymode" tabindex="20" onChange="menuselected()" onFocus="menuselected()" >
					<option value="Pin Number">Pin Number</option>
				</select>
				<span class="style20 style1 style4">*</span>
			</td>
			<td align="left" valign="middle">Pin Number</td>
			<td align="left" valign="middle">
				<textarea name="data[Member][paydetails]" cols="30"  id="paydetails"  tabindex="21"><?php if(isset($member['paydetails'])) echo $member['paydetails']; ?></textarea>
			</td>
		</tr>
		<SCRIPT LANGUAGE="javascript">
		function menuselected()
		{

		if (document.form1.paymode.value == "Demand Draft")
			{
			document.getElementById("banknamecaption").style.display = 'inline';
			document.getElementById("bankname").style.display = 'inline';
			document.getElementById("ddcaption").style.display = 'inline';
			document.getElementById("dd").style.display = 'inline';
			}
		else
			{
			if (document.form1.paymode.value == "Bank Transfer")
				{
				document.getElementById("banknamecaption").style.display = 'inline';
				document.getElementById("bankname").style.display = 'inline';
				document.getElementById("ddcaption").style.display = 'none';
				document.getElementById("dd").style.display = 'none';
				}
			else
				{
				document.getElementById("banknamecaption").style.display = 'none';
				document.getElementById("bankname").style.display = 'none';
				document.getElementById("ddcaption").style.display = 'none';
				document.getElementById("dd").style.display = 'none';
				}
			}
		}
		</SCRIPT>

		<tr>
			<td id="banknamecaption" style="display:none">Bank Name </td>
			<td align="left" id="bankname" style="display:none">
				<input name="data[Member][bank]" type="text" id="bank" tabindex="18" value="<?php if(isset($member['bank'])) echo $member['bank']; ?>" size="30">
				<span class="style20 style1 style4">*</span>
			</td>
			<td id="ddcaption" style="display:none">DD Number </td>
			<td align="left" id="dd" style="display:none">
				<input name="data[Member][dd]" type="text" id="dd" tabindex="18" value="<?php if(isset($member['dd'])) echo $member['dd']; ?>" size="30">
				<span class="style20 style1 style4">*</span>
			</td>
		</tr>
		<tr>
			<td>Product</td>
			<td colspan="3" align="left">
<?php
				if(count($packages) > 0) {
?>
					<select name="product" id="product" tabindex="22">
<?php
					for($i=0;$i<count($packages);$i++) {
?>
						<option value="<?=$packages[$i]['code']?>">
							<?=$packages[$i]['name']?>
						</option>
<?
					}// end for
?>
					</select>
<?php
				}// end if
				if(isset($adminname)) {
?>
					<input name="data[Member][productissued]" type="checkbox" id="productissued"  tabindex="23">Issued?
<?php
				}
?>
			</td>
		</tr>
		<tr>
			<td>Joining Franchisee </td>
<?php
			if(count($franchisees) > 0) {
?>
				<td align="left">
					<select name="data[Member][joiningfranchisee]" id="joiningfranchisee" tabindex="24">
<?php
					for($i=0;$i<count($franchisees);$i++) {
?>
						<option value="<?=$franchisees[$i]["code"]?>" <?php if(isset($member['joiningfranchisee']) and $member['joiningfranchisee']== $franchisees[$i]['code'] or ($franchisees[$i]['code'] == 0)) echo "selected" ?>><?=$franchisees[$i]['name']?></option>
<?
					}//end for
?>
					</select>
				</td>
				<td align="left">Service Franchisee </td>
				<td align="left">
					<select name="data[Member][servicefranchisee]" id="servicefranchisee" tabindex="25">
<?php
					for($i=0;$i<count($franchisees);$i++) {
?>
						<option value="<?=$franchisees[$i]["code"]?>" <?php if(isset($member['servicefranchisee']) and $member['servicefranchisee'] == $franchisees[$i]['code']  or ($franchisees[$i]['code'] == 0)) echo "selected" ?>><?=$franchisees[$i]['name']?></option>
<?
					}//end for
?>
					</select>
				</td>
<?php
			}//end if
?>
		</tr>
		<tr>
			<td colspan="4">
				<div align="center">
					<p>
						<input name="data[me]" type="submit" id="submitme" tabindex="26" value="Register Now">
					</p>
				</div>
			</td>
		</tr>
	</table>
</form>
<script src="/js/jquery.validate.min.js"></script>
<script type="text/javascript">
$(function(){
	$(document).ready(function(){
//		$("#doj").rules("add", { required: true, date:true, messages: { required: "Please enter valid date.", minlength: "INvalid date. Please enter valid date."}});

//check for solution == http://forum.jquery.com/topic/jquery-validate-validating-on-input-id-instead-of-name
		//http://docs.jquery.com/Plugins/Validation/validate#toptions
		$('#frm_registration').validate({
			submitHandler: function(form) {
				// check valid date
				$.ajax({type: "POST", async:true, url: "/ajax/is_valid_date", data: "dt="+escape($("#doj").val()),
					success: function(msg) {
						alert(msg);
						if (msg == "1") {
							form.submit();
						} else {
							alert('in');
							$("#site_message").html('Please enter valid date.');
							return false;
						}

					}
				});
//.responseText	property of $.ajax



			}

		});
		$("#doj").rules("add", { required: true, messages: { required: "Please enter valid date."}});
		$("#name").rules("add", { required: true, minlength:10, messages: { required: "Please enter Applicant's name.", minlength: "At least 10 characters required."}});
		$("#address").rules("add", { required: true, messages: { required: "Please enter address."}});
		$("#city").rules("add", { required: true, messages: { required: "Please enter city."}});
		$("#pin").rules("add", { required: true, digits:true,rangelength: [6, 6], messages: { required: "Please enter pin.", digits:"Please enter digits only.", rangelength:"Please enter 6 digits for valid pin."}});
		$("#state").rules("add", { required: true, messages: { required: "Please enter state."}});
		$("#id").rules("add", { required: true, messages: { required: "Please enter member id."}});
		$("#introducer").rules("add", { required: true, messages: { required: "Please enter introducer id."}});
		$("#paydetails").rules("add", { required: true, messages: { required: "Please enter Paydetails."}});

		
//		$("#submit").click(function() {
//			if($.trim($("#doj").val()) == "") {
//				$("#site_message").html('Please enter valid date');
//				//$(this).scrollTop($('a#site_message_link').position().top)
//				document.location.href = '#site_message_link';
//				return false;
//			}
//
//			if($.trim($("#name").val()) == "") {
//				$("#site_message").html('Please enter applicant\'s name.');
//				//$(this).scrollTop($('a#site_message_link').position().top)
//				document.location.href = '#site_message_link';
//				return false;
//			}
			
//		});
	});
});
</script>