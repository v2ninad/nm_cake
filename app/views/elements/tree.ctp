<?
	//print_r($data);
?>
		<script type="text/javascript" src="/js/jquery-1.4.min.js"></script>
		<script type="text/javascript" src="/js/jquery.btree.js"></script>
		<script type="text/javascript" src="/js/ws_jsgraphics.js"></script>

		<link href="/css/jquery.btree.css" rel="stylesheet" type="text/css" />
		<br>
		<br>
		<br>
		<center>
	<div id="treeDiv" align="center" style="overflow: hidden; height: 10px;">
<?
	for($i=0; $i<$placeholders_count;$i++) {
		$member = $data[$i]['Member'];

?>
	<div style="border-style: inset;">
		<span><?=$member['id']?></span>
	</div>
<?	}
?>
</div>
			<br>
			<br>

		</center>
	<script type="text/javascript">
var myTree;
$(function(){
	//myTree.clear();
	myTree = $("#treeDiv").btree({
		branchColor: "#000000",
		branchStroke: 5,
		hSpace: 50,
		vSpace: 50,
		borderWidth: 2,
		horizontal: false,
		flip: true
	})[0];

});

//function redraw(){
//	myTree.clear();
//	myTree = $("#treeDiv").btree({
//		branchColor: "#000000",
//		branchStroke: 5,
//		hSpace: 50,
//		vSpace: 50,
//		borderWidth: 2,
//		horizontal: false,
//		flip: true
//	})[0];
//}

function mich(){
	$("#box1").css("left", "");
	alert($("#box1").css("left") + " - " + $("#box1").css("right"));
}
</script>
</html>