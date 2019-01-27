<?php

	require_once('includes/dbconnection.php');

?>


<?php
//Get the data from the subject.php form using post method
$username=$_POST["username"];
$password=$_POST["password"];
$contactNumber=$_POST["contactNumber"];
$address=$_POST["address"];
?>

<?php

if(isset($_REQUEST)){


//2. Perform database query
	$query="INSERT INTO tblcustomers (username,password,contactNumber,address) VALUES ('{$username}','{$password}','{$contactNumber}','{$address}')";	
	$result=mysqli_query($connection,$query);
	if($result){
		//Data insertion successful
		//header("Location: databases.php");
		alert("Data successfully save.");
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
