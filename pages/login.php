<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
</head>
<body>
	<div class="square">
		<div class="content">
		</div>
	</div>
	<div class="container">
		<div class="kotak_login">
			<h1>BELIKOPI.</h1>
			<form id="loginform">
				<input type="text" name="username" class="form_login" placeholder="Username / Email">
				<input type="password" name="password" class="form_login" placeholder="Password"> 
				<h6>Forgot password?</h6>
				<center>
					<!-- <input type="submit" class="tombol_login" value="submit"> -->
					<button type="submit" class="tombol_login" onclick="validateForm()">Login</button>
				</center>
				</br>
				<center><a href="register.html">Create Account</a></center>
			</form>
		</div>
	</div>
</body>
</html>