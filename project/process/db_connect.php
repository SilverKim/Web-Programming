<?php

$db_host = "localhost"; 
$db_user = "root"; 		
$db_passwd = "123456";	
$db_name = "project"; 
$link = mysqli_connect($db_host, $db_user, $db_passwd, $db_name);

if (mysqli_connect_errno($link)) {
	echo "Database connection failed: ".mysqli_connect_error();
}

?>
