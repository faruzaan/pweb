<?php
   include("../process/config.php");
   session_start();
   $error = "Please Login";
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT * FROM t_user WHERE username = '$myusername' and passcode = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

	  setcookie("email", $$row["email"], time() + 86400, "/");

      $count = mysqli_num_rows($result);
		
      if($count == 1) {
         $_SESSION['login_user'] = $myusername;
         
         header("location: index.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/credential.css">
</head>
<body>
	<div class="square">
		<div class="content">
		</div>
	</div>
	<div class="container">
		<div class="kotak_login">
			<h1>BELIKOPI.</h1>
			<h3><?= $error ?></h3>
			<form id="loginform" method="post">
				<input type="text" name="username" class="form_login" placeholder="Username / Email">
				<input type="password" name="password" class="form_login" placeholder="Password"> 
				<h6>Forgot password?</h6>
				<center>
					<!-- <input type="submit" class="tombol_login" value="submit"> -->
					<button type="submit" class="tombol_login" onclick="validateForm()">Login</button>
				</center>
				</br>
				<center><a href="register.php">Create Account</a></center>
			</form>
		</div>
	</div>
</body>
</html>