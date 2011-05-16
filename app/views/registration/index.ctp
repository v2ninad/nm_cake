 <p align="center" class="pagetitle style3">~ Purchase Order cum Distributorship Application Form&nbsp;~<br>
          [ Form 1A ]</p>
<form action="validateregistration.php" method="post" name="form1" >
	<table width="98%" border="0" align="center" cellpadding="3" cellspacing="0" class="formtext">
		<tr>
			<th align="center" colspan="4">- Contact Information -</th>
		</tr>
		<tr>
			<td>Date of Application </td>
			<td colspan="3" align="left">
			  <input name="data[Member][doj]" type="text" tabindex="1" value="<?php if(isset($doa)) echo $doa; else echo date('d/m/Y')?>" size="30" maxlength="10">
			  <span class="style1 style4">*</span>[dd/mm/yyyy]</span>
			</td>
		</tr>
		<tr>
			<td width="21%">Applicant's Name or<br>Enterprise Name</td>
			<td colspan="3"  align="left">
				<input name="data[Member][name'" type="text" id="name" tabindex="2" value="<?php if(isset($name)) echo $name; ?>" size="80">
				<span class="style20 style1 style4">*</span>
			</td>
		</tr>
		<tr>
			<td>Nominee Name</td>
			<td align="left">
				<input name="data[Member][nominee]" type="text" id="nominee" tabindex="3" value="<?php if(isset($nominee)) echo $nominee; ?>" size="30">
			</td>
			<td align="left">Nominee Relationship </td>
			<td align="left">
				<select name="data[Member][nomineerelation]" class="pagetext" id="relationship"  tabindex="4" >
					<option value="Mother">Mother</option>
					<option value="Father">Father</option>
					<option value="Sister">Sister</option>
					<option value="Wife">Wife</option>
					<option value="Son" selected>Son</option>
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
				<textarea name="data[Member][address]" cols="60" id="address"  tabindex="6"><?php if(isset($address)) echo $address; ?></textarea>
				<span class="style20 style1 style4">*</span>
			</td>
		</tr>
		<tr>
			<td>City</td>
			<td width="29%" align="left">
				<input name="data[Member][city]" type="text" id="city" tabindex="7" value="<?php if(isset($city)) echo $city; ?>" size="30">
				<span class="style20 style1 style4">*</span></td>
			<td width="21%" align="left">PIN Code</td>
			<td width="29%" align="left">
				<input name="data[Member][pin]" type="text"  id="pin" tabindex="8" value="<?php if(isset($pin)) echo $pin; ?>" size="30">
				<span class="style20 style1 style4">*</span>
			</td>
		</tr>
		<tr>
			<td>State</td>
			<td colspan="3" align="left">
				<input name="data[Member][state]" type="text" id="state" tabindex="9" value="<?php if(isset($country)) echo $country; ?>" size="30">
				<span class="style20 style1 style4">*</span>
			</td>
		</tr>
		<tr>
			<td>Phone</td>
			<td align="left">
				<input name="data[Member][email]" type="text" id="email" tabindex="10" value="<?php if(isset($email)) echo $email; ?>" size="30">
			</td>
			<td align="left">Mobile Number </td>
			<td align="left">
				<input name="data[Member][phone]" type="text" id="phone" tabindex="11" value="<?php if(isset($phone)) echo $phone; ?>" size="30">
			</td>
		</tr>
		<tr>
			<th align="center" colspan="4">- Banking Information -</th>
		</tr>
		<tr>
			<td>Name on Cheque/DD </td>
			<td align="left">
				<input name="data[Member][chequename]" type="text" id="chequename" tabindex="12" value="<?php if(isset($chequename)) echo $chequename; ?>" size="30">
			</td>
			<td align="left">Pan Number </td>
			<td align="left">
				<input name="data[Member][pan]" type="text" id="pan" tabindex="13" value="<?php if(isset($pan)) echo $pan; ?>" size="30">
			</td>
		</tr>
		<tr>
			<td>Additional Info If Any </td>
			<td colspan="3" align="left">
				<textarea name="data[Member][notes]" cols="60" id="notes" tabindex="14"><?php if(isset($notes)) echo $notes; ?></textarea>
			</td>
		</tr>
		<tr>
			<th align="center" colspan="4">- Office Information -</th>
		</tr>
		<tr>
			<td>Distributor ID</td>
			<td align="left"><span class="style20">
			  <input name="data[Member][id]" type="text" tabindex="15" value="<?php if($autoid == 'y') {echo "AUTOMATIC"; } else{if(isset($memberid)) echo $memberid;}?>" size="30" <?php if($autoid == 'y') echo "readonly";?>>
			  <span class="style20 style1 style4">*</span>
			  <?php
			$paidflag = false;
			if(isset($adminname))
				{
				$paidflag = true;
				}
			else
				{
				if(isset($username) and $userregistration == "y")
					{
					$rssetup = mysql_query("select mm_credits from membermaster where mm_id = '" . $username . "'",$cn);
					if(mysql_result($rssetup,0,"mm_credits") <= 0)
						{
						$paidflag = false;
						}
					else
						{
						$paidflag = true;
						}
					}
				}
			if($paidflag == true)
				{
				?>
			  <input name="data[Member][paid]" type="checkbox"  tabindex="16"  checked="1" readonly="1"><?php //if(isset($paid)) echo "checked";?>
			&nbsp;Paid?
			  <?php
				}
				?>
			</span></td>
			<td align="left">Leg/Side</td>
			<td align="left">
				<select name="data[Member][position]" class="pagetext" id="leg"  tabindex="17">
<?php				if(isset($leg))	{	?>
						<option value="<?=$leg?>" selected><?=ucfirst($leg)?> Leg</option>
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
				<input name="data[Member][sponcerid]" type="text" id="introducer" tabindex="18" value="<?php if(isset($introducer)) echo $introducer; ?>" size="30">
			  <span class="style20 style1 style4">*</span>
			</td>
			<td align="left">Password</td>
			<td align="left">
				<input name="password" type="data[password][password]" id="password" tabindex="19" value="<?php if(isset($password)) echo $password; else { if(isset($leg)) echo "123456789987654321"; else echo "123456";}?>" size="30" >
			</td>
		</tr>
		<tr>
			<td>Payment Mode <br></td>
			<td align="left">
				<select name="paymode" id="paymode" tabindex="20" onChange="menuselected()" onFocus="menuselected()" >
					<option value="Pin Number">Pin Number</option>
				</select>
				<span class="style20 style1 style4">*</span>
			</td>
			<td align="left" valign="middle">Pin Number</td>
			<td align="left" valign="middle">
				<textarea name="paydetails" cols="30"  id="paydetails"  tabindex="21"><?php if(isset($paydetails)) echo $paydetails; ?></textarea>
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
				<input name="bank" type="text" id="bank" tabindex="18" value="<?php if(isset($introducer)) echo $introducer; ?>" size="30">
				<span class="style20 style1 style4">*</span>
			</td>
			<td id="ddcaption" style="display:none">DD Number </td>
			<td align="left" id="dd" style="display:none">
				<input name="dd" type="text" id="dd" tabindex="18" value="<?php if(isset($dd)) echo $dd; ?>" size="30">
				<span class="style20 style1 style4">*</span>
			</td>
		</tr>
		<tr>
			<td>Product</td>
			<td colspan="3" align="left">
<?php
				$rssetup = mysql_query("select * from packagemaster order by pm_price",$cn);
				if($rssetup and mysql_num_rows($rssetup) > 0) {
?>
					<select name="product" id="product" tabindex="22">
<?php
					for($i=0;$i<mysql_num_rows($rssetup);$i++) {
?>
						<option value="<?=mysql_result($rssetup,$i,"pm_code")?>">
							<?=mysql_result($rssetup,$i,"pm_name")?>
						</option>
<?
					}// end for
?>
					</select>
<?php
				}// end if
				if(isset($adminname)) {
?>
					<input name="productissued" type="checkbox" id="productissued"  tabindex="23">Issued?
<?php
				}
?>
			</td>
		</tr>
		<tr>
			<td>Joining Franchisee </td>
<?php
			$rssetup = mysql_query("select * from franchiseemaster order by fm_name",$cn);
			if($rssetup and mysql_num_rows($rssetup) > 0) {
?>
				<td align="left">
					<select name="beneficiaryfranchisee" id="beneficiaryfranchisee" tabindex="24">
<?php
					for($i=0;$i<mysql_num_rows($rssetup);$i++) {
?>
						<option value="<?=mysql_result($rssetup,$i,"fm_code")?>" <?php if(isset($beneficiaryfranchisee) and $beneficiaryfranchisee == mysql_result($rssetup,$i,"fm_code") or (mysql_result($rssetup,$i,"fm_code") == 0)) echo "selected" ?>><?=mysql_result($rssetup,$i,"fm_name")?></option>
<?
					}//end for
?>
					</select>
				</td>
				<td align="left">Service Franchisee </td>
				<td align="left">
					<select name="servicefranchisee" id="servicefranchisee" tabindex="25">
<?php
					for($i=0;$i<mysql_num_rows($rssetup);$i++) {
?>
						<option value="<?=mysql_result($rssetup,$i,"fm_code")?>" <?php if(isset($servicefranchisee) and $servicefranchisee == mysql_result($rssetup,$i,"fm_code")  or (mysql_result($rssetup,$i,"fm_code") == 0)) echo "selected" ?>><?=mysql_result($rssetup,$i,"fm_name")?></option>
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
						<input name="Submit" type="submit"  tabindex="26" value="Register Now">
					</p>
				</div>
			</td>
		</tr>
	</table>
</form>