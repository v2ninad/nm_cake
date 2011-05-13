                <span class="pagetitle">Administrator Login!</span>
                <blockquote>
                  <table width="408" height="248" border="0" align="center" cellpadding="0" cellspacing="0" background="/img/loginbg2.gif">
                    <tr>
                      <td><form name="form1" method="post">
                        <br>
                        <table width="80%" align="center" class="pagetext">
                          <tr>
                            <td width="50%" align="center"><span class="Bold">Admin UserName</span></td>
                            <td width="50%" align="left">
								<? $this->Form->text('User.first_name'); ?>
								<input name="txtuser" type="text" size="20" maxlength="20" class="shadeform">
							</td>
                          </tr>
                          <tr>
                            <td align="center"><span class="Bold">Password</span></td>
                            <td align="left"><input name="txtpass" type="password" size="20" maxlength="20" class="shadeform"></td>
                          </tr>
                          <tr>
                            <td colspan="2"  align="center" height="25" valign="middle"><input type="image" src="/img/login.jpg" width="80" height="23" style="cursor:hand"></td>
                          </tr>
                          <tr>
                            <td colspan="2"  align="center" height="25" style="display:none"><input name="submit" type="submit" value="Sign In" class="but"></td>
                          </tr>
                        </table>
                      </form></td>
                    </tr>
                  </table>
              </blockquote>
