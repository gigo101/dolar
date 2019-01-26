
<?php
//Get the data from the subject.php form using post method
$username=$_POST["username"];
$password=$_POST["password"];
$contactNumber=$_POST["contactNumber"];
$address=$_POST["address"];
?>

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


<?php

if(isset($_REQUEST)){


//2. Perform database query
	$query="INSERT INTO tblcustomers (username,password,contactNumber,address) VALUES ('{$username}','{$password}','{$contactNumber}','{$address}')";
	$result=mysqli_query($connection,$query);
	if($result){
		//Data insertion successful
		header("Location: databases.php");
	}else
	{	
		//insertion is not sucessful
		die("Dabase query failed");
	}

}

?>

	<?php
	//4. Release returned data
		mysqli_free_result($result);
	?>

<?php
	//5. Close database connection
	mysqli_close($connection);
?>