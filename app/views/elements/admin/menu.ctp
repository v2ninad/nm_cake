<?php
	if (isset($_SESSION['adminname']))
	{
?>

<script>
<!--
function enable_menu(str)
{
	if (str!= "")
	{
		var cur_style;
		cur_style = document.getElementById("tbl"+str).style.display;
//		alert(cur_style);
	}
	document.getElementById("tblsetup").style.display = "none";
	document.getElementById("tbldownline").style.display = "none";
	document.getElementById("tblprocessing").style.display = "none";
	document.getElementById("tblpinsystem").style.display = "none";
	document.getElementById("tblreports").style.display = "none";
	document.getElementById("tblmiscelleneous").style.display = "none";
	if (str!= "")
	{
		if(cur_style == "inline")
			document.getElementById("tbl"+str).style.display = "none";
		else
			document.getElementById("tbl"+str).style.display = "inline";
	}
}

function redirect2cleardb()
{
	var clear= confirm("This will clear the database and action can not be reverted. Do you really want to continue?");
	if(clear == true)
		window.location = 'cleardb.php';

}
//-->
</script>
<style type="text/css">
<!--
.style1 {
	color: #FFFFFF;
	font-weight: bold;
}
-->
</style>
<body onLoad="enable_menu('');">
		<table width="100%" border='0' align="center" cellpadding='2' cellspacing='0' class='adminMainPanelText'> <!--AdminMenuPaneltext-->
		    <tr>
              <th height="18"  align="center" valign="middle" background="/img/main.jpg"><div align="left"><img align="absmiddle" src="/img/setup.png" width="18" height="18">&nbsp;&nbsp; <a href="#." onClick="enable_menu('setup');"> Setup</a></div></th>
	        </tr>
          <tr>
            <td  align="center"><div align="left">
              <table width="100%" border="1" cellpadding="2" cellspacing="0" id="tblsetup" class='AdminSubMenuPaneltext'>
                <tr>
                  <td width="100%" background="/img/sub.jpg"><div align="left">&nbsp;&nbsp;<a href="userprofile.php">User Profile </a></div></td>
                </tr>
                <tr>
                  <td background="/img/sub.jpg"><div align="left">&nbsp;&nbsp;<a href="changepassword.php">Change Password</a></div></td>
                </tr>
                <tr>
                  <td background="/img/sub.jpg"><div align="left">&nbsp;&nbsp;<a href="companysetup.php">Company Setup</a></div></td>
                </tr>
              </table>
            </div></td>
          </tr>


          <tr>
            <th height="18" align="center" background="/img/main.jpg"><div align="left"><img align="absmiddle" src="/img/downline.png" width="18" height="18">&nbsp;&nbsp; <a href="#." onClick="enable_menu('downline');"> Downline </a></div></th>
          </tr>
          <tr>
            <td  align="center"><div align="left">
              <table width="100%" border="1" cellpadding="2" cellspacing="0" id="tbldownline" class="AdminSubMenuPaneltext">
                <tr>
                  <td width="100%" background="/img/sub.jpg"><div align="left">&nbsp;&nbsp;<a href="search.php">Search</a><a href="userprofile.php"></a></div></td>
                </tr>
                <tr>
                  <td background="/img/sub.jpg"><div align="left">&nbsp;&nbsp;<a href="../registration/registration.php" target="_blank">Registration</a><a href="changepassword.php"></a></div></td>
                </tr>
                <tr>
                  <td background="/img/sub.jpg"><div align="left">&nbsp;&nbsp;<a href="#.">Tree View </a></div></td>
                </tr>
              </table>
            </div></td>
          </tr>

          <tr>
            <th height="18" align="center" background="/img/main.jpg"><div align="left"><img align="absmiddle" src="/img/payouts.gif" width="18" height="18">&nbsp;&nbsp; <a href="#." onClick="enable_menu('processing');"> Payouts </a></div></th>
          </tr>
          <tr>
            <td  align="center"><div align="left">
              <table width="100%" border="1" cellpadding="2" cellspacing="0" id="tblprocessing" class="AdminSubMenuPaneltext">
                <tr>
                  <td width="100%" background="/img/sub.jpg"><div align="left">&nbsp;&nbsp;<a href="payoutprocessing1.php">Payout Processing </a><a href="grouppaid.php"></a><a href="search.php"></a><a href="userprofile.php"></a></div></td>
                </tr>
                <tr>
                  <td background="/img/sub.jpg"><div align="left">&nbsp;&nbsp;<a href="payouts.php">Payouts History</a></div></td>
                </tr>
                <tr>
                  <td background="/img/sub.jpg"><div align="left">&nbsp;&nbsp;<a href="paymententry.php">Payment Entry </a><a href="downlinepaid.php"></a><a href="#."></a></div></td>
                </tr>
              </table>
            </div></td>
          </tr>


          <tr>
            <th height="18" align="center" background="/img/main.jpg"><div align="left"><img align="absmiddle" src="/img/pin.png" width="18" height="18">&nbsp;&nbsp; <a href="#." onClick="enable_menu('pinsystem');"> Pin System </a></div></th>
          </tr>
          <tr>
            <td  align="center"><div align="left">
              <table width="100%" border="1" cellpadding="2" cellspacing="0" id="tblpinsystem" class="AdminSubMenuPaneltext">
                <tr>
                  <td width="100%" background="/img/sub.jpg"><div align="left">&nbsp;&nbsp;<a href="pingeneration.php">PIN Generation</a></div></td>
                </tr>
                <tr>
                  <td background="/img/sub.jpg"><div align="left">&nbsp;&nbsp;<a href="pinreport.php">PIN Report </a><a href="payouts.php"></a></div></td>
                </tr>

            </table>
            </div></td>
          </tr>

          <tr>
            <th height="18" align="center" background="/img/main.jpg"><div align="left"><img align="absmiddle" src="/img/reports.png" width="18" height="18">&nbsp;&nbsp; <a href="#." onClick="enable_menu('reports');"> Reports </a></div></th>
          </tr>
          <tr>
              <td  align="center"><div align="left">
                <table width="100%" border="1" cellpadding="2" cellspacing="0" id="tblreports" class="AdminSubMenuPaneltext">
                  <tr>
                    <td background="/img/sub.jpg"><div align="left">&nbsp;&nbsp;<a href="#.">Downline Statement </a></div></td>
                  </tr>
                  <tr>
                    <td width="100%" background="/img/sub.jpg"><div align="left">&nbsp;&nbsp;<a href="periodicstatement.php" target="_blank">Periodic Downline </a></div></td>
                  </tr>
                  <tr>
                    <td background="/img/sub.jpg"><div align="left">&nbsp;&nbsp;<a href="#.">Downline Spread </a><a href="payouts.php"></a></div></td>
                  </tr>
                </table>
              </div></td>
          </tr>

          <tr>
            <th height="18" align="center" background="/img/main.jpg"><div align="left"><img align="absmiddle" src="/img/miscelleneous.png" width="18" height="18">&nbsp;&nbsp; <a href="#." onClick="enable_menu('miscelleneous');"> Miscelleneous </a></div></th>
          </tr>
          <tr>
            <td  align="center"><div align="left">
              <table width="100%" border="1" cellpadding="2" cellspacing="0" id="tblmiscelleneous" class="AdminSubMenuPaneltext">
                <tr>
                  <td background="/img/sub.jpg"><div align="left">&nbsp;&nbsp;<a href="news.php">News Ticker </a></div></td>
                </tr>
                <tr>
                  <td width="100%" background="/img/sub.jpg"><div align="left">&nbsp;&nbsp;<a href="testimonial.php">Testimonial</a></div></td>
                </tr>

            </table>
            </div></td>
          </tr>
<!--		  <tr>
		  <td bgcolor="#FF0000"><a href='#.' onClick="redirect2cleardb();"><span class="style1">&nbsp;&nbsp;CLEAR DATA  BASE.</span></a></td>
		  </tr> -->
</table>
<?php
	}
else
	{
?>
<div align="center" class="tabletext">You must login to access this control panel!</div>
<?php
}
?>
</body>