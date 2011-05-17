<html>
	<head>
		<script type="text/javascript" src="/js/jquery-1.6.1.min.js"></script>
		<script type="text/javascript" src="/js/jquery.btree.js"></script>
		<link href="/css/jquery.btree.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<div id="tree"></div>
<div id='slider'></div>
	</body>
	<script>
		$(function(){
			$(document).ready(function() {
//				$("#tree")
//					.tree(elements);

var elements = [{
"id":1,
"content":"User 1",
"children": [
    {
        "id":2,
        "content":"User 2",
        "children": [
            {
                "id":11,
                "content":"User 3"
            },
            {
                "id":12,
                "content":"User 4",
                "children": [
                    {
                        "id":15,
                        "content":"User 5",
                    },
                    {
                        "id":16,
                        "content":"User 6"
                    }
                ]
            },
            {
                "id":12,
                "content":"User 7"
            }
        ]
    },
    {
        "id":3,
        "content":"User 9"
    }
]
}];
				$("#tree")
					.tree(elements, {
						boxWidth: 100,
						boxHeight: 100,
						boxBorder: 2,
						vSpace: 20,
						hSpace: 40,
						lineWidth: 2
					});

//$("#tree")
//    .draggable()
//    .css('cursor', 'move')
//    .tree(elements);

//var tree = $("#tree")
//    .tree(elements);
var slider = $('#slider').slider({
    min: 1,
    max: 3,
    range: "min",
    slide: function( event, ui ) {
        tree.resize(ui.value);
    },
    change: function( event, ui ) {
        tree.resize(ui.value);
    }
});


			});
		});
	</script>
</html>

