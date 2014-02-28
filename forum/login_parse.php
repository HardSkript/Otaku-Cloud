<?php 

session_start();

include_once "connect.php";
//Script for logging the user in
//meow
if(isset($_POST['username'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$sql = "SELECT * FROM users WHERE username='".$username."' AND password='".$password."' LIMIT 1";
	$res = mysql_query($sql) or die(mysql_error());
	if(mysql_num_rows($res) == 1){
		$row = mysql_fetch_assoc($res);
		$_SESSION['uid'] = $row['id'];
		$_SESSION['username'] = $row['username'];
		header("Location: index.php");
	}else{
		echo 'Invalid Login Information! Redirecting...';
		header('Refresh: 3; URL=../index.php');
	}
}
?>
