				<br>
                <blockquote>
				<p align="center" class="pagetitle"><strong>User Account !</strong></p>
                <form name="officeday" action="useraccount.php" method="post" >
                    <font face="Verdana, Arial, Helvetica, sans-serif"><span class="style30"> </span></font>
                    <table width="400" border="1" align="center" cellpadding="1" cellspacing="0" bordercolor="#CCCCCC" class="tabletext">
                        <tr bordercolor="#CCCCCC" class="pagetext">
                            <td width="196"><font face="Verdana, Arial, Helvetica, sans-serif">Member Code <span class="style31"></span></font></td>
                            <td width="194"><div align="left"><font face="Verdana, Arial, Helvetica, sans-serif"><span class="style30">
                                    <input name="id" type="text" class="shadeform" id="id" value="<?=mysql_result($rssetup,0,"mm_id")?>" readonly="1">
                            </span></font></div></td>
                        </tr>
                        <tr bordercolor="#CCCCCC" class="pagetext">
                            <td><font face="Verdana, Arial, Helvetica, sans-serif">Member Name</font></td>
                            <td><div align="left"><font face="Verdana, Arial, Helvetica, sans-serif"><span class="style30">
                                    <input name="name" type="text" class="shadeform" id="name" value="<?=mysql_result($rssetup,0,"mm_name")?>">
                    * </span></font></div></td>
                        </tr>
                        <tr class="pagetext">
                          <td><font face="Verdana, Arial, Helvetica, sans-serif">Member Cheque Name</font></td>
                          <td><div align="left"><font face="Verdana, Arial, Helvetica, sans-serif"><span class="style30">
                              <input name="chequename" type="text" class="shadeform" id="chequename" value="<?=mysql_result($rssetup,0,"mm_chequename")?>">
      * </span></font></div></td>
                        </tr>
                        <tr class="pagetext">
                            <td><font face="Verdana, Arial, Helvetica, sans-serif">City<span class="style32"></span></font></td>
                            <td><div align="left"><font face="Verdana, Arial, Helvetica, sans-serif"><span class="style30">
                                    <input name="city" type="text" class="shadeform" value="<?=mysql_result($rssetup,0,"mm_city")?>">
                    * </span></font></div></td>
                        </tr>
                        <tr class="pagetext">
                            <td><font face="Verdana, Arial, Helvetica, sans-serif">PIN</font></td>
                            <td><div align="left"><font face="Verdana, Arial, Helvetica, sans-serif"><span class="style30">
                                    <input name="pin" type="text" class="shadeform" id="pin" value="<?=mysql_result($rssetup,0,"mm_pin")?>">
                            </span></font></div></td>
                        </tr>
                        <tr bordercolor="#CCCCCC" class="pagetext">
                            <td><font face="Verdana, Arial, Helvetica, sans-serif">Contact Number</font></td>
                            <td><div align="left"><font face="Verdana, Arial, Helvetica, sans-serif"><span class="style30">
                                <input name="phone" type="text" class="shadeform" id="phone" value="<?=mysql_result($rssetup,0,"mm_phone")?>">
</span></font></div></td>
                        </tr>
                        <tr class="pagetext">
                            <td><font face="Verdana, Arial, Helvetica, sans-serif">Member Address <span class="style32"></span></font></td>
                            <td><div align="left"><font face="Verdana, Arial, Helvetica, sans-serif"><span class="style30">
                                    <input name="address" type="text" class="shadeform" id="address" value="<?=mysql_result($rssetup,0,"mm_address")?>">
                    * </span></font></div></td>
                        </tr>
                        <tr class="pagetext">
                            <td><font face="Verdana, Arial, Helvetica, sans-serif">Challan Details </font></td>
                            <td><div align="left"><font face="Verdana, Arial, Helvetica, sans-serif"><span class="style30">
                                    <input name="challandetails" type="text" class="shadeform" id="challandetails" value="<?=mysql_result($rssetup,0,"mm_challandetails")?>">
                            </span></font></div></td>
                        </tr>
                        <tr class="pagetext">
                            <td><font face="Verdana, Arial, Helvetica, sans-serif">Bill Details </font></td>
                            <td><div align="left"><font face="Verdana, Arial, Helvetica, sans-serif"><span class="style30">
                                    <input name="billdetails" type="text" class="shadeform" id="billdetails" value="<?=mysql_result($rssetup,0,"mm_billdetails")?>">
                            </span></font></div></td>
                        </tr>
						<?php
							$str = "select pm_price from packagemaster where pm_code =".mysql_result($rssetup,0,"mm_product");
							$rsProduct = mysql_query($str);

							$str = "select * from packagemaster where pm_price >=".mysql_result($rsProduct,0,0);
							$rsprice = mysql_query($str);

						 ?>
                        <tr class="pagetext">
                          <td>Product</td>
                          <td><label>
                            <select name="product" id="product">
							<?php
								for($i=0; $i < mysql_num_rows($rsprice); $i++)
								{
									if(mysql_result($rssetup,0,"mm_product") == mysql_result($rsprice,$i,"pm_code"))
										echo "<option value='".mysql_result($rsprice,$i,"pm_code")."' selected='selected'>".mysql_result($rsprice,$i,"pm_name")."</option>";
									else
										echo "<option value='".mysql_result($rsprice,$i,"pm_code")."'>".mysql_result($rsprice,$i,"pm_name")."</option>";
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