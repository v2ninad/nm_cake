<?
	pr($memberData);
	$m = $memberData;
?>
<p align="center" class="pagetitle"><strong>Your ID is <span class="style1">not</span> registered yet!</strong></p>
<p align="center" class="pagetext">Please validate following information &amp; press <strong>Ok</strong> to continue or <strong>Cancel</strong> to go back!</p>
<table width="100%"  border="1" align="center" cellpadding="3" cellspacing="0" class="tabletext">
	<tr>
		<td>Member ID</td>
		<td>
			<div align="left">
				<span class="style20">
					<input name="memberid" tabindex="1" type="text" class="pagetext" value="<?=$m['id']?>" readonly="1">
					<?php if($m['paid']== 'n') { ?><span class="style1">Unpaid!</span><?php } ?></span></div></td>
	</tr>
	<tr>
		<td>Date of Application </td>
		<td><div align="left"><span class="style20">
				<input name="doa" type="text" class="pagetext"  tabindex="3"  id="doa" value="<?=$m['doj']?>" maxlength="10"  readonly="1">
		</span></div></td>
	</tr>
	<tr class="tabletext">
		<td width="45%">Applicant's  Name</td>
		<td width="55%"><div align="left">
			<input name="firstname" tabindex="6" type="text" class="pagetext" id="firstname" value="<?=$m['name']?>" readonly="1">
		</div></td>
	</tr>
	<tr>
		<td>Introducer's ID<br>
		</td>
		<td><div align="left">
			<input name="introducer" tabindex="15" type="text" class="pagetext" id="introducer" value="<?=$m['sponcerid']?>" readonly="1">
					<span class="style20">
					<?php if ($m['position'] == "left") echo "On Left"; else echo "On Right";?>
				</span></div></td>
	</tr>
	<tr>
		<td>Introducer's Name <br>
		</td>
		<td><div align="left">
			<input name="introducer" tabindex="15" type="text" class="pagetext" id="introducer" value="<?=$m['sponcername']?>" readonly="1">
		</div></td>
	</tr>
	<tr>
		<td>Placed Under ID <br>
	  </td>
		<td><div align="left">
			<input name="introducer" tabindex="15" type="text" class="pagetext" id="introducer" value="<?=$m['aboveid']?>" readonly="1">
				<span class="style20">*</span></div></td>
	</tr>
	<tr>
		<td>Name of Beneficiary/Above ID <br>
		</td>
		<td><div align="left">
			<input name="introducer" tabindex="15" type="text" class="pagetext" id="introducer" value="<?=$m['abovename']?>" readonly="1">
				<span class="style20">*</span></div></td>
	</tr>
	<tr>
		<td><div align="left">Prepaid PIN Number <br>
		</div></td>
		<td><div align="left">
				<input name="pinno" tabindex="15" type="text" class="pagetext" id="pinno" value="<?=$pinno?>" readonly="1">
		</div></td>
	</tr>
	<tr>
		<td><div align="left">Prepaid PIN Value <br>
		</div></td>
		<td><div align="left">
				<input name="introducer" tabindex="15" type="text" class="pagetext" id="introducer" value="<?=$pinvalue?>" readonly="1">
		</div></td>
	</tr>
	<tr class="tabletext">
		<td colspan="2"><div align="center">
				<p>- It will look like this under above ID - </p>
				<?php if($spilllocation == "l")
{
?>
				<img src="../images/LeftSpill.jpg">
				<?php
}
else
{
?>
				<img src="../images/RightSpill.jpg">
				<?php
}
?>
				<p>
					<textarea name="textfield" readonly=1 cols="60" rows="10" wrap="VIRTUAL" class="tabletext">Terms & Conditions :-
						The terms and condition as mentioned below constitute an agreement between <?=$companyname?> (hereinafter referred to as COMPANY) and its Independent Representative hereinafter referred to as I.R. An Independent Representative is one who duly purchased the products of the company and completes all other formalities laid down by the company.

						This agreement does not create an employee- employer relationship, partnership or joint venture between I.R and company. Company does not promise any kind of monitory gain in any way to I.R. Earnings of the I.R will be solely depend on his/ her own performance.

						The I.R must be of legal age of 18 years as on date of application The I.R's entering into this agreement with his free will and consent.

						The company will deduct tax at source as per income tax act 1961 as well as other government taxes / duties/ charges at the prevailing rate and Annual processing / license / service charge.

						All the I.R will use his / her best efforts to promote product and service of the company in a truthful and honest manner.
						The I.R should not use trademark, symbols, literature and slogans of the company for any other purpose other than as specified by the company.

						REGISTRATION
						The products now are for sale to people residing in India and for Indian nationals only.
						The registration of I.R will become effective from the date of acceptance of agreement valid upto one year against full payment towards the purchase of products to the company.

						FEES
						The purchase price is towards purchase of products of company.
						The amount paid towards company for the purchase of products is non transferable.
						Courier / Octroi / Local taxes should strictly be borne by distributor only.

						INCENTIVES
						The incentives will be paid by cheques only.
						The earning / incentives is on product / services sale only.
						The incentives due to I.R will be sent to his/ her mailing address provided that amount is more than 300/- if less, it would be carried forward for the next weekly incentives.
						5% will be deducted form every payout as Business promotion fund .
						Annual processing charges & license fees will be deducted from the incentive.
						TDS will be deducted from the incentive as per applicable rate as per income tax act, 1961.
						Every fortnightly incentive cheques will be issued on every fortnightly basis. From closure / cut off date.Cut off cycle is from 15nth and 31st .
						Simulation will be applied whenever applicable.

						PROMISES BY RECRUITING I.R.
						No I.R is authorized to make any promises to prospect. If applicant relies on any promise, made by I.R trying to recruit him or her that is not in this agreement and / or official material and that recruiting I.R fails to keep any such promise, the application only have recourse against such I.R and not the company.

						The I.R should understand that under any circumstances company is not responsible for any unauthorized acts / incentives committed by him. This said is responsible to indemnify the company for his unauthorized act and he will be liable for all P.V and consequences according to law.

						All the I.R will use his / her best efforts to promote product and service of the company in a truthful and honest manner.

						PRODUCT / SERVICES
						Delivery of product is subject to availability of products.
						Products will be delivered within 45 days after company receives full payment towards products
						Company has sole right to change product / services/incentives/commission without prior notice.
						Though the care has been taken by the company while selecting the products and marketing plan, which the company intends to market. The company in case of any problem incurred by the user shall entertain "No" claims whatsoever. Such claims would be only directed to its respective manufacturer in no events shall the company be liable for any claims or damages of any kind arising from using product.

						RIGHTS
						The sales of products of company does not create or constitute a joint or collaborative venture or partnership of any kind between the company and a I.R. nor shall be construed or creating and such joint or collaborative venture or partnership between the company and a I.R.

						NOMINATION
						In case of death of registered I.R. the benefits and distributorship will be transferred in favour of the nominee as mentioned in the application from.

						RIGHT OF THE COMPANY
						The company reserves the sole right to change, rectify, and to amend the incentive structure, cancel and introduce rules and regulation, Policies and procedures, terms and condition from time to time and S.I.R shall abide by the same.

						JURISDICTION
						Any dispute arising between the company and a I.R will be decided according to Arbitration and Conciliation Act 1996 and subject to MUMBAI jurisdiction only.

						TERMINATION
						Any I.R. found to be working against the interest of the company, spoiling the name or the reputation of the company and found disturbing or diverting the distributor's from the company or misusing customers/potential Distributors or Distributors funds/money or contacts will be terminated without prior notice and explanation.


						CONTENTS
						The company will not be screening the contents:
						1) Provided by the user 2) Any material that is threatening, abusive, defamatory, obscene or otherwise unlawful 3) Any material that violates copy right, trademarks, patents or other property rights.

						MISCELLANEOUS
						The signature in the application form will be taken as the I.R specimen signature. The company will not be responsible in case communication / Payment is not received by the S I R due to incomplete address as given by him/her.</textarea>
					</p>
				<table width="48%" height="32" border="0" align="center">
					<tr>
						<td width="40%" bgcolor="#00CC99"><div align="center"><a href="savesubscription.php?<?=$url?>" accesskey="c">I Agree!</a></div></td>
						<td width="26%"><div align="center"></div></td>
						<td width="34%" bgcolor="#FF0000"><div align="center"><a href="registration.php?<?=$url?>" accesskey="n">I Deny!</a></div></td>
					</tr>
				</table>
		</div></td>
	</tr>
</table>
<p align="justify" class="pagetext">&nbsp;</p>