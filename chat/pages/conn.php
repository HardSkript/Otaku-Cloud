<?php 

	try{
	
		$bdd = new PDO("mysql:host=localhost;dbname=chat","root","");
		
	}catch(Exception $e){
		die("ERROR : ".$e->getMessage());
	}
	

	@$http_referer = $_SERVER['HTTP_REFERER'];
	
?>