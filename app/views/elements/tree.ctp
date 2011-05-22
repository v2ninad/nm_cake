<link href="/css/jquery.btree.css" rel="stylesheet" type="text/css" />
<link href="/css/jquery.cluetip.css" rel="stylesheet" type="text/css" />
<link href="/css/jquery-ui-1.8.13.custom.css" rel="stylesheet" type="text/css" />
<br>
<center>

	<label for="amount">Tree Level :</label>
	<input type="text" id="amount" style="border:0; color:#f6931f; font-weight:bold;" />
	<div id="slider" style="width: 300px"></div><br>

	<div id="tree_content">
		<? echo $this->element('core_tree'); ?>

	</div>
	<br>
	<br>

</center>
<script type="text/javascript" src="/js/jquery.btree.js"></script>
<script type="text/javascript" src="/js/ws_jsgraphics.js"></script>
<script type="text/javascript" src="/js/jquery.cluetip.js"></script>
<script type="text/javascript" src="/js/jquery.cluetip.js"></script>
<script type="text/javascript" src="/js/jquery-ui-1.8.13.custom.min.js"></script>
<script type="text/javascript">
	var myTree;
	var currentId = "<?=$current_id?>";
	$(function(){
		//myTree.clear();
		myTree = $("#treeDiv").btree({
			branchColor: "#000000",
			branchStroke: 5,
			hSpace: 20,
			vSpace: 50,
			borderWidth: 2,
			horizontal: false,
			flip: true
		})[0];

		$('.img_tip').cluetip({
			showTitle: false,
			tracking:true,
			waitImage:true,
	//		cluetipClass: 'rounded'
		});

		$('.img_tip').live ('dblclick',function(){
			var id = $(this).attr('id').substr(4);
			rebuild_tree(id);

		});

		$( "#slider" ).slider({
			value:4,
			min: 1,
			max: 10,
			step: 1,
			slide: function( event, ui ) {
				$( "#amount" ).val( ui.value );
				rebuild_tree(currentId);
			}
		});
		$( "#amount" ).val( $( "#slider" ).slider( "value" ) );

		$(".aboveid").live('click',function(){
			var id = $(this).attr('id').substr(6);
			rebuild_tree(id);
		});

	});

	function rebuild_tree(id) {
		//alert('in');
		if (id == '') {
			alert ('Blank id');
		} else {
			var tree_url_format = "<? echo $this->Html->url('/ajax/tree/memberid/level'); ?>";
			var level = $( "#amount" ).val();
			var new_tree_url = String(tree_url_format).replace('memberid', id);
			var new_tree_url = String(new_tree_url).replace('level', level);
			var old_html = $("#tree_content").html();
			$("#tree_content").empty().html('<img src="/img/loading.gif" />');
			$.ajax({type: "POST", async:true, url: new_tree_url,
				success: function(msg) {
					if (msg == "false") {
						$("#site_message").html("Could not load requested tree.");
						$("#tree_content").html(old_html);
						//alert('something\'s wrong');
					} else {
						//alert(msg);
						currentId = id;
						$("#tree_content").html(msg);
						redraw();
						$('.img_tip').cluetip({
							showTitle: false,
							tracking:true,
							waitImage:true,
					//		cluetipClass: 'rounded'
						});
					}

				}
			});
		}
		//window.location = tree/
	}

	function redraw(){
		myTree.clear();
		myTree = $("#treeDiv").btree({
			branchColor: "#000000",
			branchStroke: 5,
			hSpace: 10,
			vSpace: 50,
			borderWidth: 2,
			horizontal: false,
			flip: true
		})[0];
	}


</script>
</html>