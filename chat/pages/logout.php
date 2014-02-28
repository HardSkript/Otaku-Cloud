<?php
	require 'conn.php';
	session_destroy();
	
	header('Location: ../index.php');
?>