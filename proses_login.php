<?php
   session_start();
   

   $user=$_POST['user']; 
   $pass=$_POST['pass']; 

   if($user == "user" AND $pass == "pass")
   {
	   $_SESSION["username"] = $user;
	   header("location:index_admin.php");
   } else{
	   header("location:login.php?Login_error");
   }
?>
