<?php 
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Otaku Chat</title>
		<link href="../chat//style/style.css" type="text/css" rel="stylesheet" />
		<script type="text/javascript" src="../chat/js/jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
					$("#ChatText").keyup(function(e){

					//When enter is pressed
					if(e.keyCode == 13){
						var ChatText = $("#ChatText").val();
						$.ajax({
							type: 'POST',
							url:'pages/InsertMessage.php',
							data:{ChatText:ChatText},
							success:function(){
								$("#ChatMessages").load("../chat/pages/DisplayMessages.php");
								$("#ChatText").val("");
							}
						});
					}


				});

					setInterval(function(){//Refresh Rate
						$("#ChatMessages").load("..chat/pages/DisplayMessages.php");
					}, 1500);

					$("#ChatMessages").load("../chat/pages/DisplayMessages.php");

		});
	</script>

	</head>	
	<body>
		<center><h2 style="font-size: 30px; color: #7cb9e8;">Welcome <span style="color: green"><?php echo $_SESSION['UserName'] ;?></span></h2></center>
		<br><br>

		<div id="ChatBig">
			<div id="ChatMessages">
			</div>

			<textarea id="ChatText" name="ChatText">Type Message Here...</textarea>


					</div>
					<br><br><br><br>
		<center><h1><a href="/Otaku-Cloud">Home</a> - <a href="../chat/pages/logout.php">Logout</a></h1></center>
	</body>
</html>