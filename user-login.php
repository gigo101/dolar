<?php
   
   require_once('includes/dbconnection.php');
   session_start();
    if(isset($_SESSION['login_user'])){
      header("location:user-dashboard.php");
      die();
   }

   $error="";
   
if(isset($_REQUEST)){ 
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($connection,$_POST['username']);
      $mypassword = mysqli_real_escape_string($connection,$_POST['password']); 
      
      $sql = "SELECT customerId FROM tblcustomers WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($connection,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //ß$active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         //$_SESSION['myusername']="something";
         //session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         echo $_SESSION['login_user'];
         header("location: user-dashboard.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>

<!--
<html>
   
   <head>
      <title>Login Page</title>
      
      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         .box {
            border:#666666 solid 1px;
         }
      </style>
      
   </head>
   
   <body bgcolor = "#FFFFFF">
	
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>
				
            <div style = "margin:30px">
               
               <form action = "" method = "post">
                  <label>UserName  :</label><input type = "text" name = "username" class = "box"/><br /><br />
                  <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" value = " Submit "/><br />
               </form>
               
               <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php// echo $error; ?></div>
					
            </div>
				
         </div>
			
      </div>

   </body>
</html>

-->

