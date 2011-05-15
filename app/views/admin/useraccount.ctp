<?
	$member = $data['Member'];
	$package = $data['package'];
	//$packages;

?>
				<br>
                <blockquote>
				<p align="center" class="pagetitle"><strong>User Account !</strong></p>
                <form name="officeday" action="useraccount.php" method="post" >
                    <font face="Verdana, Arial, Helvetica, sans-serif"><span class="style30"> </span></font>
                    <table width="400" border="1" align="center" cellpadding="1" cellspacing="0" bordercolor="#CCCCCC" class="tabletext">
                        <tr bordercolor="#CCCCCC" class="pagetext">
                            <td width="196"><font face="Verdana, Arial, Helvetica, sans-serif">Member Code <span class="style31"></span></font></td>
                            <td width="194"><div align="left"><font face="Verdana, Arial, Helvetica, sans-serif"><span class="style30">
                                    <input name="id" type="text" class="shadeform" id="id" value="<?=$member["id"]?>" readonly="1">
                            </span></font></div></td>
                        </tr>
                        <tr bordercolor="#CCCCCC" class="pagetext">
                            <td><font face="Verdana, Arial, Helvetica, sans-serif">Member Name</font></td>
                            <td><div align="left"><font face="Verdana, Arial, Helvetica, sans-serif"><span class="style30">
                                    <input name="name" type="text" class="shadeform" id="name" value="<?=$member["name"]?>">
                    * </span></font></div></td>
                        </tr>
                        <tr class="pagetext">
                          <td><font face="Verdana, Arial, Helvetica, sans-serif">Member Cheque Name</font></td>
                          <td><div align="left"><font face="Verdana, Arial, Helvetica, sans-serif"><span class="style30">
                              <input name="chequename" type="text" class="shadeform" id="chequename" value="<?=$member["chequename"]?>">
      * </span></font></div></td>
                        </tr>
                        <tr class="pagetext">
                            <td><font face="Verdana, Arial, Helvetica, sans-serif">City<span class="style32"></span></font></td>
                            <td><div align="left"><font face="Verdana, Arial, Helvetica, sans-serif"><span class="style30">
                                    <input name="city" type="text" class="shadeform" value="<?=$member["city"]?>">
                    * </span></font></div></td>
                        </tr>
                        <tr class="pagetext">
                            <td><font face="Verdana, Arial, Helvetica, sans-serif">PIN</font></td>
                            <td><div align="left"><font face="Verdana, Arial, Helvetica, sans-serif"><span class="style30">
                                    <input name="pin" type="text" class="shadeform" id="pin" value="<?=$member["pin"]?>">
                            </span></font></div></td>
                        </tr>
                        <tr bordercolor="#CCCCCC" class="pagetext">
                            <td><font face="Verdana, Arial, Helvetica, sans-serif">Contact Number</font></td>
                            <td><div align="left"><font face="Verdana, Arial, Helvetica, sans-serif"><span class="style30">
                                <input name="phone" type="text" class="shadeform" id="phone" value="<?=$member["phone"]?>">
</span></font></div></td>
                        </tr>
                        <tr class="pagetext">
                            <td><font face="Verdana, Arial, Helvetica, sans-serif">Member Address <span class="style32"></span></font></td>
                            <td><div align="left"><font face="Verdana, Arial, Helvetica, sans-serif"><span class="style30">
                                    <input name="address" type="text" class="shadeform" id="address" value="<?=$member["address"]?>">
                    * </span></font></div></td>
                        </tr>
                        <tr class="pagetext">
                            <td><font face="Verdana, Arial, Helvetica, sans-serif">Challan Details </font></td>
                            <td><div align="left"><font face="Verdana, Arial, Helvetica, sans-serif"><span class="style30">
                                    <input name="challandetails" type="text" class="shadeform" id="challandetails" value="<?=$member["challandetails"]?>">
                            </span></font></div></td>
                        </tr>
                        <tr class="pagetext">
                            <td><font face="Verdana, Arial, Helvetica, sans-serif">Bill Details </font></td>
                            <td><div align="left"><font face="Verdana, Arial, Helvetica, sans-serif"><span class="style30">
                                    <input name="billdetails" type="text" class="shadeform" id="billdetails" value="<?=$member["billdetails"]?>">
                            </span></font></div></td>
                        </tr>
                        <tr class="pagetext">
                          <td>Product</td>
                          <td><label>
                            <select name="product" id="product">
							<?php
								for($i=0; $i <= count($packages); $i++)
								{
									if($package["code"] == $packages[$i]['packages']['code'])
										echo "<option value='".$packages[$i]['packages']["code"]."' selected='selected'>".$packages[$i]['packages']["name"]."</option>";
									else
										echo "<option value='".$packages[$i]['packages']["code"]."'>".$packages[$i]['packages']["name"]."</option>";
								}
							?>

                          </select>
                          </label></td>
                        </tr>
                        <tr class="pagetext">
                            <td><font face="Verdana, Arial, Helvetica, sans-serif">Member Password </font></td>
                            <td><div align="left"><font face="Verdana, Arial, Helvetica, sans-serif"><span class="style30">
                                    <input name="password" type="password" class="shadeform" id="password">
                                    <input name="changepass" type="checkbox">
                            </span></font></div></td>
                        </tr>
                    </table>
                    <br>
                    <input name="submit" type="submit" value="Save" class="but">
                </form>
                </blockquote>