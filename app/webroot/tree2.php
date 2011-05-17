<html>
	<head>
		<script type="text/javascript" src="/js/jquery-1.4.min.js"></script>
		<script type="text/javascript" src="/js/jquery.btree.js"></script>
		<script type="text/javascript" src="/js/ws_jsgraphics.js"></script>

		<link href="/css/jquery.btree.css" rel="stylesheet" type="text/css" />
	</head>
	<body>

<div id="treeDiv" style="overflow: hidden; height: 10px; border-style: solid; border-width: 3px; border-color: #000000;">
	<div style="border-style: inset;" id="box1">
		<span>Box1</span>
	</div>
	<div style="border-style: inset;">
		<span>Box2</span>
	</div>
	<div style="border-style: inset;">
		<span>Box3</span>
	</div>
	<div style="border-style: inset;">
		<span>Box4</span>
	</div>
	<div style="border-style: inset;">
		<span>Box5</span>
	</div>
	<div style="border-style: inset;">
		<span>Box6</span>
	</div>
	<div style="border-style: inset;">
		<span>Box7</span>
	</div>
	<div style="border-style: inset;">
		<span>Box8</span>
	</div>
	<div style="border-style: inset;">
		<span>Box9</span>
	</div>
	<div style="border-style: inset;">
		<span>Box10<br/></span>
	</div>
	<div style="border-style: inset;">
		<span>Box11</span>
	</div>
	<div style="border-style: inset;">
		<span>Box12</span>
	</div>
	<div style="border-style: inset;">
		<span>Box13</span>
	</div>
	<div style="border-style: inset;">
		<span>Box14</span>
	</div>
	<div style="border-style: inset;">
		<span>Box15</span>
	</div>
<!--	<div style="border-style: inset;">
		<span>Box16</span>
	</div>
	<div style="border-style: inset;">
		<span>Box17</span>
	</div>
	<div style="border-style: inset;">
		<span>Box18</span>
	</div>
	<div style="border-style: inset;">
		<span>Box19</span>
	</div>
	<div style="border-style: inset;">
		<span>Box20</span>
	</div>
	<div style="border-style: inset;">
		<span>Box21</span>
	</div>
	<div style="border-style: inset;">
		<span>Box22</span>
	</div>
	<div style="border-style: inset;">
		<span>Box23</span>
	</div>
	<div style="border-style: inset;">
		<span>Box24</span>
	</div>
	<div style="border-style: inset;">
		<span>Box25</span>
	</div>
	<div style="border-style: inset;">
		<span>Box26</span>
	</div>
	<div style="border-style: inset;">
		<span>Box27</span>
	</div>
	<div style="border-style: inset;">
		<span>Box28</span>
	</div>
	<div style="border-style: inset;">
		<span>Box29</span>
	</div>
	<div style="border-style: inset;">
		<span>Box30</span>
	</div>
	<div style="border-style: inset;">
		<span>Box31</span>
	</div>
-->
</div> 

	</body>

	<script type="text/javascript">
var myTree;
$(function(){
	myTree = $("#treeDiv").btree()[0];

	$("#lnk").click(function(){
		redraw();
	});
});

function redraw(){
	myTree.clear();
	myTree = $("#treeDiv").btree({
		branchColor: "#000000",
		branchStroke: 5,
		hSpace: 50,
		vSpace: 50,
		borderWidth: 2,
		horizontal: false,
		flip: true
	})[0];
}

function mich(){
	$("#box1").css("left", "");
	alert($("#box1").css("left") + " - " + $("#box1").css("right"));
}
</script>
	<a href="#." id ="lnk">redraw</a>
</html>