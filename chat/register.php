<!DOCTYPE html>
<html>
<head>
		<title>Otaku Chat</title>
		<script type="text/javascript" src="js/jquery.js"></script>
		<link href="../chat/style/style.css" type="text/css" rel="stylesheet" />

</head>
<body>
	<center><a href="/Otaku-Cloud"><img src="/Otaku-Cloud/images/signature.png" alt="Otaku Cloud" /></a></center>
<div id="wrapper">
	<center><h2>Registration Form</h2></center>
	<div id="SignUpDiv">
		<form method="POST" action="pages/InsertUser.php">
			<table>
				<tr>
					<td>Username: </td><td><input type="text" name="UserName" /></td>
				</tr>
				<tr>
					<td>Email: </td><td><input type="email" name="UserMail" /></td>
				</tr>
				<tr>
					<td>Password: </td><td><input type="password" name="UserPassword" /></td>
				</tr>
				<tr>
					<td></td><td><center><input type="submit" value="Register" /></center></td>
				</tr>
			</table>
	</form>


	</div>
</div>
</body>
</html>