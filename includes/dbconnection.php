<?php

define(DB_HOST, "localhost");
define(DB_USER, "root");
define(DB_PASSWORD, "");
define(DB_NAME, "dolardb");
//1. Create a database connection
$dbhost="localhost";
$connection=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

//test if the connection occured
	if(mysqli_connect_errno()){
		die("Database connection failed: " . mysqli_connect_errno() . "(".mysqli_connect_errno() .")"
	);
}

?>