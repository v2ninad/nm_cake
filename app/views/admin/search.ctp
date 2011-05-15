<?
	//pr($search_data[0]);
	$pData = (isset($data['Member']))?$data['Member']:array('id'=>'','name'=>'','address'=>'','city'=>'');
	$url = "";

?>
				<br>
                <p align="center" class="pagetitle">Parameterised Search!</p>
                <form name="officeday" action="/admin/search" method="get" >
                    <table width="400" align="center" class="tabletext">
                        <tr>
                            <td width="196">Member Code</td>
                            <td width="194"><div align="center">
                                    <input name="data[Member][id]" type="text" class="shadeform" id="id" value="<?=$pData['id']?>">
                            </div></td>
                        </tr>
                        <tr>
                            <td>Member Name</td>
                            <td><div align="center">
                                    <input name="data[Member][name]" type="text" class="shadeform" id="name" value="<?=$pData['name']?>">
                            </div></td>
                        </tr>
                        <tr>
                            <td>City</td>
                            <td><div align="center">
                                    <input name="data[Member][city]" type="text" class="shadeform" id="city" value="<?=$pData['city']?>">
                            </div></td>
                        </tr>
                        <tr>
                            <td>Member Address</td>
                            <td><div align="center">
                                    <input name="data[Member][address]" type="text" class="shadeform" id="address" value="<?=$pData['address']?>">
                            </div></td>
                        </tr>
                    </table>
                    <input type="hidden" name="session_id" value="<?=strip_tags(session_id())?>">
                    <br>
					<div align="center">
						<input name="data[submit]" id="msearch_submit" type="submit" class="but" value="Search">
					</div>
                </form>
                <p>
                    <?php
			if ($thecount == 0) {
				echo "No records available for specified search." ;
			}
			else {
			?>
                <div align="center" class="pagetext">Parameterised search has found <?=$no_of_records?> results!</div>

				<div class="pagination">
<?php
	if (!empty($search_string)) {
		echo $this->Paginator->numbers(array('url'=>$search_string));
	}
?>
				</div>
                <br>
                <table width='98%' border="1" align='center' cellspacing="0"  class='tabletext'>
                    <tr>
                        <td align=center>No.<br>
            Type</td>
                        <td align=center>ID<br>
            Introduce<br>
            Above's ID</td>
                        <td align=center>Name<br>
                            (DOJ)</td>
                      <td align=center>L RP
                        <br>
                        R RP <br>
            L Bal<br>
            R Bal </td>
                        <td align=center>Current Income <br>
            Total Income <br>
            Payments</td>
                        <td align=center>Activities</td>
                    </tr>
                    <?php
			for($i = 0;$i<$thecount;$i++) {
				$search = $search_data[$i]['Member'];
				$package = $search_data[$i]['package'];

				?>
                    <tr>
                        <td width='6%' align=center><?=$i+1?><br><?=strtoupper($search["position"]) . " / " . strtoupper($search["spill"])?></td>
                        <td width='12%' align=center>
							<a target="_blank" title="Click for Tree Structure" href=tree.php?id=<?=$search['id']?>><?=$search["id"]?>
                            <br><?=$search["sponcerid"]?>
                            <br><?=$search["aboveid"]?></a>
						</td>
                        <td width='45%' align=center><a target="_blank" title="Click for User Account" href=useraccount.php?id=<?=$search["id"]?>>Name := <?=$search["name"]?></a><br>
                            >D.O.J. :=
                            <?=$search["doj"]?><br>
                      Package := <?=$package["name"] . "/-";?><br></td>
                      <td width='8%' align=center>
							<a target="_blank" title="Click for Detailed Statement Till Date" href="periodicstatement.php?username=<?=$search["id"]?>&Submit=1&fromdate=01-01-2000&todate=<?=date("d-m-Y");?>&session_id=<?=strip_tags(session_id())?>">
                            <?=$search["leftsv"]?><br>
                        <?=$search["rightsv"]?></a>
                            <br>
                        <a target="_blank" title="Click for Detailed Statement Till Date" href="periodicstatement.php?username=<?=$search["id"]?>&Submit=1&fromdate=01-01-2000&todate=<?=date("d-m-Y");?>&session_id=<?=strip_tags(session_id())?>">                        </a><a target="_blank" title="Click for Detailed Statement Till Date" href="periodicstatement.php?username=<?=$search["id"]?>&Submit=1&fromdate=01-01-2000&todate=<?=date("d-m-Y");?>&session_id=<?=strip_tags(session_id())?>">
                        <?=$search["leftsv"] - $search["leftpaidsv"]?>
                        <br>
                        <?=$search["rightsv"] - $search["rightpaidsv"]?>
                        </a></td>
                        <td width='17%' align=center>
							<a target="_blank" title="Click for Current Unbilled Earning Details" href="earningspecific.php?id=<?=$search["id"]?>&session_id=<?=strip_tags(session_id())?>">
                            <?=$search["totalcomission"]?>/-</a><br>
                            <a target="_blank" title="Click for Earning Details Till Date" href="earningdetails.php?id=<?=$search["id"]?>&session_id=<?=strip_tags(session_id())?>">
                            <?=$search["totalcomission"] + $search["currentdues"]?>/-</a><br>
                            <a target="_blank" title="Click for Payment Details" href="paymentdetails.php?id=<?=$search["id"]?>&session_id=<?=strip_tags(session_id())?>"><?=$search['paidcomission']?>/-</a>
						</td>
                        <td width='12%' align=center><?php
				if(strtoupper($search["paid"]) == 'Y')
					{
					?>
                          <img src="/img/paidid.gif" width="32" height="32">                          <?php
					}
				else
					{
					?>
                                <a href="setpaid.php?awbnox=<?=$search["id"]?>&page=search&set=y&<?=$url?>"> <img src="/img/unpaidid.gif" width="32" height="32" border="0"> </a>
                                <?php
					}

				if(strtoupper($search["productissued"]) <> 'Y' and strtoupper($search["paid"]) == 'Y' )
					{
					?>
                                <a href="setissued.php?awbnox=<?=$search["id"]?>&set=a&<?=$url?>"> <img height='25' width='25' src='/img/activate.gif' border=0  alt="Product Pending - Click to Clear"> </a>
                                <?php
					}
				?>
                                <br>
                      <a target="_blank" href="virtualoffice.php?id=<?php echo $search["id"]?>"><img src="/img/id.gif" width="50" border="0" height="42" alt='Go to User Virtual Office'></a> <img height='25' width='25' src='/img/invoice.gif' border=0  alt="Receipt"> <a target="_blank" href="userpayouts.php?id=<?=$search["id"] . "&session_id=" . strip_tags(session_id())?>"><img height='25' width='25' src='/img/payslip.gif' border=0  alt="Payout Details & PaySlips"></a></td>
                    </tr>
                    <?php
				}
			?>
                </table>
          <?php
			}
	?>
<!-- Shows the page numbers -->
				<br clear="all" />
				<div class="pagination">

<?php
	if (!empty($search_string)) {
		echo $this->Paginator->numbers(array('url'=>$search_string));
	}
?>
				</div>
<!-- Shows the next and previous links -->
<?php //echo $this->Paginator->prev('« Previous', null, null, array('class' => 'disabled')); ?>
<?php //echo $this->Paginator->next('Next »', null, null, array('class' => 'disabled')); ?>
<!-- prints X of Y, where X is current page and Y is number of pages -->
<?php //echo $this->Paginator->counter(); ?>

<script>
	$(function(){
		$(document).ready(function(){
			$("#msearch_submitx").click(function() {
				if(($("#id").val()=='') && ($("#name").val()=='') && ($("#city").val()=='') && ($("#address").val()=='') ) {
					$("#site_message").html('Please specify search criteria.');
					return false;
				}
			});
		});
	});
</script>
