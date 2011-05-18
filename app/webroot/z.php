<html>
	<head>
 
<script type="text/javascript" src="js/jquery-1.6.1.min.js"></script>
<script type="text/javascript" src="js/jquery.validate.min.js"></script>
	</head>
	<body>

<form action="validateregistration.php" method="post" id="form1" name="form1" >
	<input type="text" id="username" name="username">
	<input type="text" id="doj" name="doj">
	<input type="text" id="email" name ="email">
	<input type="Submit" name="submit">
</form>

<script type="text/javascript">
	$(function(){
		$(document).ready(function(){

$('#form1').validate({
				
				submitHandler: function(form) {
					// check valid date
					$.ajax({type: "POST", async:false, url: "/ajax/is_valid_date", data: "dt="+escape($("#doj").val()),
						success: function(msg) {
							if (msg == "1") {
								form.submit();
							} else {
								$("#site_message").html('Please enter valid date.');
							}

						}
					});


				}

			});
			$("#email").rules("add", { required: true, email:true, messages: { required: "Please enter valid date.", email: "INvalid email. Please enter valid date."}});
			$("#username").rules("add", { required: true, minlength:5, messages: { required: "Please enter valid name.", email: "Minimum 5 characters."}});

			

		});
	});

</script>


	</body>
</html>
