<?
////pr($data);
$status_img = array(
	'dp' => '/img/direct.gif',
	'du' => '/img/unpaid.gif',
	'ip' => '/img/indirect.gif',
	'iu' => '/img/unpaid.gif',
	'bp' => '/img/blank.gif',
	'up' => '/img/u.gif',
	'sp' => '/img/spill.gif',
	'su' => '/img/unpaid.gif',
);

$allow_access_parent = false;

$admin = $this->Session->read('adminname');
if(!empty($admin))	{
	$allow_access_parent = true;
} else {
	$username = $this->Session->read('username');

	if(!empty($username)) {
		if($current_id != $username ) {
			$allow_access_parent = true;
		}
	}
}

if (strtolower($data[$root_id_index]['Member']['id']) == 'company') {
	$allow_access_parent = false;
}
?>
		<div class="pagetitle">
			Tree structure for <?=$data[$root_id_index]['Member']['id']?>
		</div> <br>

<?
	if ($allow_access_parent) {
?>
		<div>
			<? //pr($data[7]['Member']); ?>
			<a class="aboveid" id="above_<?=$data[$root_id_index]['Member']['aboveid']?>" style="cursor: pointer" ><b>^</b></a>
			<br><br>
		</div>
<?
	}
?>
		<div id="treeDiv" align="center" style="overflow: hidden; height: 10px;">
<?
		for($i=0; $i<$placeholders_count;$i++) {
			$member = $data[$i]['Member'];

?>
			<div style="border-style: inset;">
				<span><img id="img_<?=$member['id']?>" class="img_tip" rel="<?echo $this->Html->url('/ajax/member_tip/'.$member['id']);?>" src="<?=$status_img[$member['status']]?>" title ="<?=$member['id']?>" /></span>
			</div>
<?
		}
?>
		</div>
