<?php

$dbhost="localhost";
$dbuser="root";
$dbpassword="";
$dbname="dolardb";
//1. Create a database connection
$connection=mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);

//test if the connection occured
	if(mysqli_connect_errno()){
		die("Database connection failed: " . mysqli_connect_errno() . "(".mysqli_connect_errno() .")"
	);
}

?>