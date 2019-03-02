<?php
   include('includes/dbconnection.php');

   session_start();

   
   //$user_check = $_SESSION['login_user'];
   
   //$ses_sql = mysqli_query($connection,"select username from tblcustomers where username = '$user_check' ");
   
  // $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   //$login_session = $row['username'];
   //$_SESSION["username"] = $_POST["username"];

   if(!isset($_SESSION['username'])){
      header("Location: index.php");
      die();
   }
?>