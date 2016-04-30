<?php
   include("config.php");
   session_start();
   
  // username and password sent from form 
  
  $nombre = mysqli_real_escape_string($db,$_POST['nombre']);
  $apellido = mysqli_real_escape_string($db,$_POST['apellido']); 
  $tel = mysqli_real_escape_string($db,$_POST['tel']);
  $email = mysqli_real_escape_string($db,$_POST['email']); 
  $password = mysqli_real_escape_string($db,$_POST['password']);
  $password2 = mysqli_real_escape_string($db,$_POST['password2']); 
  $checkbox = mysqli_real_escape_string($db,$_POST['checkbox']); 
  
  if($checkbox)
  {
	  $sql = mysqli_query($db,"INSERT INTO usuario (nombre, apellido, tel, email, password, activo, news) VALUES ('$nombre', '$apellido', '$tel', '$email', '$password', 'si', 'si')");  
  }
  else
  {
	  $sql = mysqli_query($db,"INSERT INTO usuario (nombre, apellido, tel, email, password, activo, news) VALUES ('$nombre', '$apellido', '$tel', '$email', '$password', 'si', 'no')");
  }

  $sql = "SELECT id FROM usuario WHERE email = '$email' and password = '$password'";
  $result = mysqli_query($db,$sql);
  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
  
  $count = mysqli_num_rows($result);
  
  // If result matched $myusername and $mypassword, table row must be 1 row
  
  if($count == 1) {
	 $_SESSION['login_user'] = $email;
	 echo "<script languague='JavaScript'>window.location='../index.php';</script>";
  }else {
	 echo "<script languague='JavaScript'>window.location='../login.php?err=2';</script>";
  }
?>