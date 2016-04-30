<?php
   include("config.php");
   session_start();
   
  // username and password sent from form 
  
  $myusername = mysqli_real_escape_string($db,$_POST['username']);
  $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
  $sql = "SELECT id FROM usuario WHERE email = '$myusername' and password = '$mypassword'";
  $result = mysqli_query($db,$sql);
  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
  
  $count = mysqli_num_rows($result);
  
  // If result matched $myusername and $mypassword, table row must be 1 row
  
  if($count == 1) {	 
	 $_SESSION['login_user'] = $myusername;
	 echo "<script languague='JavaScript'>window.location='../index.php';</script>";
  }else {
	 echo "<script languague='JavaScript'>window.location='../login.php?err=1';</script>";
  }
?>