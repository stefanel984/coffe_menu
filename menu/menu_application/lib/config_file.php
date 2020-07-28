<?php
	function dbConnect(){	
	$db_host     = "localhost";
	$db_user     = "root";
	$db_password = "";
	$db_name     = "restoran";
	
	
	$connection=mysqli_connect($db_host,$db_user,$db_password);
	mysqli_set_charset($connection, "SET NAMES utf8");
    if(!$connection){
	  die("Database connection failed:");
    }
    $db_select=mysqli_select_db($connection, $db_name);
    if (!$db_select){
	   die("Database selection failed");
    }
    return $connection;
	}
?>

