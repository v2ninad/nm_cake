                <span class="adminpagetitle">Welcome
                <?=$_SESSION['adminrealname']?>
                </span> <br>
			  <blockquote>
				  <p align="center" class="spnote">Online Admin Panel.</p>
			  </blockquote>
              <table width="100%" height="0%" border="0" cellpadding="10" cellspacing="20">
              <tr>
                <td width="50%" valign="middle" bgcolor="#F9F9F9"><div align="center">
                  <table width=100% cellpadding=0 cellspacing=0 border=0 height=0% class="adminPanelText">
                    <tr>
                      <td width="27%" height="100%" align=left valign=top><img src="/img/setup.png" width="48" height="48"></td>
                      <td width="73%" align=left valign=top><table width=70% cellpadding=0 cellspacing=0 border=0 class="adminPanelText" height="23%">
                          <tr>
                            <th align="center" height="18">SETUP</th>
                          </tr>

                          <tr>
                            <Td align=left height="18">&#187; <a href="<?=$this->Html->url('/admin/profile')?>">User Profile </a></td>
                          </tr>
                          <tr>
                            <Td align=left height="18">&#187; <a href="<?=$this->Html->url('/admin/changepassword/')?>">Change Password </a></td>
                          </tr>
                          <tr>
                            <Td align=left height="18">&#187;<a href="<?=$this->Html->url('/admin/setup')?>"> Company Setup </a></td>
                          </tr>
                      </table></td>
                    </tr>
                  </table>
                </div></td>
                <td width="50%" bgcolor="#F9F9F9"><div align="center">
                  <table width=100% cellpadding=0 cellspacing=0 border=0 height=0% class="adminPanelText">
                    <tr>
                      <td width="27%" height="100%" align=left valign=top><img src="/img/downline.png" width="48" height="48"></td>
                      <td width="73%" align=left valign=top><table width=70% cellpadding=0 cellspacing=0 border=0 class="adminPanelText" height="23%">
                          <tr>
                            <th align="center" height="18">Downline</th>
                          </tr>
                          <tr>
                            <Td align=left height="18">&#187; <a href="<?=$this->Html->url('/admin/search')?>">Search</a></td>
                          </tr>
                          <tr>
                            <Td align=left height="18">&#187; <a href="<?=$this->Html->url('../registration/registration.php')?>" target="_blank">Registration</a></td>
                          </tr>
                          <tr>
                            <Td align=left height="18">&#187;<a href="<?=$this->Html->url('tree.php')?>"> Tree View </a></td>
                          </tr>
                      </table></td>
                    </tr>
                  </table>
                </div></td>
              </tr>
              <tr>
                <td height="33%" bgcolor="#F9F9F9"><div align="center">
                  <table width=100% cellpadding=0 cellspacing=0 border=0 height=0% class="adminPanelText">
                    <tr>
                      <td width="27%" height="100%" align=left valign=top><img src="/img/payouts.gif" width="48" height="48"></td>
                      <td width="73%" align=left valign=top><table width=70% cellpadding=0 cellspacing=0 border=0 class="adminPanelText" height="23%">
                          <tr>
                            <th align="center" height="18">Payouts</th>
                          </tr>
                          <tr>
                            <Td align=left height="18">&#187; <a href="payoutprocessing1.php">Processing</a></td>
                          </tr>
                          <tr>
                            <Td align=left height="18">&#187; <a href="payouts.php">Payout History </a></td>
                          </tr>
                          <tr>
                            <Td align=left height="18">&#187;<a href="paymententry.php"> Payment Entry </a></td>
                          </tr>
                      </table></td>
                    </tr>
                  </table>
                </div></td>
                <td bgcolor="#F9F9F9" valign="top"><table width=100% cellpadding=0 cellspacing=0 border=0 height=0% class="adminPanelText">
                  <tr>
                    <td width="27%" height="100%" align=left valign=top><img src="/img/pin.png" width="48" height="48"></td>
                    <td width="73%" align=left valign=top><table width=70% cellpadding=0 cellspacing=0 border=0 class="adminPanelText" height="23%">
                        <tr>
                          <th align="center" height="18">Pin System </th>
                        </tr>
                        <tr>
                          <Td align=left height="18">&#187; <a href="pingeneration.php">Pin Generation </a></td>
                        </tr>
                        <tr>
                          <Td align=left height="18">&#187; <a href="pinreport.php">Pin Report </a></td>
                        </tr>
                    </table></td>
                  </tr>
                </table></td>
              </tr>
              <tr>
                <td height="33%" bgcolor="#F9F9F9"><div align="center">
                  <table width=100% cellpadding=0 cellspacing=0 border=0 height=0% class="adminPanelText">
                    <tr>
                      <td width="27%" height="100%" align=left valign=top><img src="/img/reports.png" width="48" height="48"></td>
                      <td width="73%" align=left valign=top><table width=70% cellpadding=0 cellspacing=0 border=0 class="adminPanelText" height="23%">
                          <tr>
                            <th align="center" height="18">Reports</th>
                          </tr>
                          <tr>
                            <Td align=left height="18">&#187; <a target="_blank" href="periodicstatement.php?fromdate=01/01/2000&amp;todate=<?=date("d-m-Y")?>&amp;Submit=submit&amp;username=company">Downline Statement </a></td>
                          </tr>
                          <tr>
                            <Td align=left height="18">&#187; <a href="periodicstatement.php">Periodic Downline </a></td>
                          </tr>
                          <tr>
                            <Td align=left height="18">&#187;<a href="#."> Downline Spread </a></td>
                          </tr>
                      </table></td>
                    </tr>
                  </table>
                </div></td>
                <td bgcolor="#F9F9F9" valign="top"><div align="center">
                  <table width=100% cellpadding=0 cellspacing=0 border=0 height=0% class="adminPanelText">
                    <tr>
                      <td width="27%" height="100%" align=left valign=top><img src="/img/miscelleneous.png" width="48" height="48"></td>
                      <td width="73%" align=left valign=top><table width=70% cellpadding=0 cellspacing=0 border=0 class="adminPanelText" height="23%">
                          <tr>
                            <th align="center" height="18">Miscelleneous </th>
                          </tr>
                          <tr>
                            <Td align=left height="18">&#187; <a href="news.php">News Ticker </a></td>
                          </tr>
                          <tr>
                            <Td align=left height="18">&#187; <a href="testimonialz.php">Testimonial</a></td>
                          </tr>
						  <tr>
						    <td bgcolor="#FF0000"><a href="#." onClick="redirect2cleardb();"><span class="white"><strong>&#187; Clear Database</strong></span></a> </td>
						  </tr>
                      </table></td>
                    </tr>
                  </table>
                </div></td>
              </tr>
            </table>
			<blockquote>
				<p align="center" class="copyrighttext">Some parts of this panel is still not functional due to upgradation in Server!</p>
			  </blockquote>	