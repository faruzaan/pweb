<?php
   session_start();
   
   if(session_destroy()) {
      setcookie("email", "", time() - 3600);
      header("Location: ../pages/login.php");
   }
?>