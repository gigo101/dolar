<?php
//1. Create a database connection
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="dolardb";
$connection=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

//test if the connection occured
	if(mysqli_connect_errno()){
		die("Database connection failed: " . mysqli_connect_errno() . "(".mysqli_connect_errno() .")"
	);
}

?>