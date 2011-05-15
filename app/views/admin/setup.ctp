				<br>
                <span class="pagetitle">- Company Setup -</span>
                <form name="officeday" action="<?=$this->Html->url('/admin/setup')?>" method="post" >
                    <table width="400" align="center" class="tabletext">
                        <tr>
                            <td width="195">Auto ID</td>
                            <td width="193"><div align="center">
                                    <input name="data[autoid]" type="checkbox" id="auto" <?php if ($autoid == "y") echo "checked"?>>
                    Yes</div></td>
                        </tr>
                        <tr>
                            <td>Random ID</td>
                            <td><div align="center">
                                    <input name="data[randomid]" type="checkbox" id="random" <?php if ($randomid == "y") echo "checked"?>>
                    Yes</div></td>
                        </tr>
                        <tr>
                            <td>Open Registration </td>
                            <td><div align="center">
                                    <input name="data[openregistration]" type="checkbox" id="open" <?php if ($openregistration == "y") echo "checked"?>>
                    Yes</div></td>
                        </tr>
                        <tr>
                            <td>User Registration </td>
                            <td><div align="center">
                                    <input name="data[userregistration]" type="checkbox" id="user" <?php if ($userregistration == "y") echo "checked"?>>
                    Yes</div></td>
                        </tr>
                        <tr>
                            <td>Read Only User Account </td>
                            <td><div align="center">
                                    <input name="data[readonlyuseraccount]" type="checkbox" id="readonly" <?php if ($readonlyuseraccount == "y") echo "checked"?>>
                    Yes</div></td>
                        </tr>
                        <tr>
                            <td>Member ID to start with </td>
                            <td><div align="center">
                                    <input name="data[memberid]" type="text" class="shadeform" value="<?=$memberid?>">
                            </div></td>
                        </tr>
                        <tr class="pagetext">
                            <td>ID Prefix</td>
                            <td><div align="center">
                                    <input name="data[idprefix]" type="text" class="shadeform" value="<?=$idprefix?>">
                            </div></td>
                        </tr>
                        <tr class="pagetext">
                            <td>Company Name</td>
                            <td><div align="center">
                                    <input name="data[companyname]" type="text" class="shadeform" id="xcompanyname" value="<?=$companyname?>">
                            </div></td>
                        </tr>
                        <tr class="pagetext">
                            <td><p>Address</p></td>
                            <td><div align="center">
                                    <input name="data[companyaddress]" type="text" class="shadeform" id="xcompanyaddress" value="<?=$companyaddress?>">
                            </div></td>
                        </tr>
                        <tr class="pagetext">
                            <td>Phone No. </td>
                            <td><div align="center">
                                    <input name="data[companyphone]" type="text" class="shadeform" id="xcompanyphone" value="<?=$companyphone?>">
                            </div></td>
                        </tr>
                        <tr class="pagetext">
                            <td>URL</td>
                            <td><div align="center">
                                    <input name="data[companyurl]" type="text" class="shadeform" id="xcompanyurl" value="<?=$companyurl?>">
                            </div></td>
                        </tr>
                        <tr class="pagetext">
                            <td>Email</td>
                            <td><div align="center">
                                    <input name="data[companyemail]" type="text" class="shadeform" id="xcompanyemail" value="<?=$companyemail?>">
                            </div></td>
                        </tr>
                    </table>
                    <div align="center"><span class="pagetext">
                        <input type="hidden" name="session_id" value="<?=strip_tags(session_id())?>">
                        <br>
                        <input name="data[submit]" type="submit" class="but" value="Save">
                    </span></div>
                </form>
                <blockquote>
                    <p>&nbsp;</p>
				</blockquote>