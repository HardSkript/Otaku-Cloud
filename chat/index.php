<!DOCTYPE html>
<html>
<head>
		<title>Otaku Chat</title>
		<script type="text/javascript" src="js/jquery.js"></script>
		<link href="../chat/style/style.css" type="text/css" rel="stylesheet" />

</head>
<body>
	<center><a href="/Otaku-Cloud/"><img src="/Otaku-Cloud/images/signature.png" alt="Otaku Cloud" /></a></center>
<div id="wrapper">
	<center><h2 style="color: white;">Login</h2></center>
	<div id="LoginDiv">
		<form method="POST" action="pages/UserLogin.php">
			<table>
				<tr>
					<td>Email: </td><td><input type="email" name="UserMailLogin" /></td>
				</tr>
				<tr>
					<td>Password: </td><td><input type="password" name="UserPasswordLogin" /></td>
				</tr>
				<tr>
					<td></td><td><center><input type="submit" value="LOG IN" /></center></td>
				</tr>
				<?php
					if(isset($_GET['error'])){
				?>
				<tr>
					<td></td><td><span style="color: red;">LOGIN ERROR</span></td>
				</tr>
				<?php
			}
			?>
			</table>
	</form>
	<center><a href="../chat/register.php">Register</a></center>

	</div>
				<?php 
				if(isset($_GET['success'])){
					?>
				
					<span style="color: green;">Registration Successful!</span>
				
				<?php
			}
			?>



	</div>
</div>
</body>
</html>