<?php 
	$host = "localhost";
	$user_name = "root";
	$password = "";
	$db_name = "blog";
	$db_connection = mysqli_connect($host, $user_name, $password, $db_name);	

	if (!$db_connection) {
		echo "error";
	}