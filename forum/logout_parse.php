<?php 
session_start();
session_destroy();
//Returns to index page
header("Location: index.php.");
?>