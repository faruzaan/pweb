
<?php 
 
include '../config.php';
 
session_start();
 
// if (isset($_SESSION['username'])) {
//     header("Location: ../home/index.php");
// }
 
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
 
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($mysqli, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['id'] = $row['id'];
        $_SESSION['cash'] = $row['cash'];
        $_SESSION['nama'] = $row['nama'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['cash'] = $row['cash'];
        $_SESSION['tgl_lahir'] = $row['tgl_lahir'];
        $_SESSION['gender'] = $row['gender'];
        $_SESSION['notelp'] = $row['notelp'];
        header("Location: ../home/index.php");
    } else {
        echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
    }
}
 
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container-fluid d-flex align-items-center justify-content-center"
	style="width: 100vw; height: 100vh; background-image: url('./img/WhatsApp\ Image\ 2022-03-27\ at\ 11.54.31.jpeg'); background-size: cover;">
	   <div class="container w-50 h-50 rounded p-5 glass">
		   <h1>BELIKOPI.</h1>
			<form id="login" action="" method="post">
				<div class ="row mt-3">
					<div class="col">
						<input type="text" name="email" class="form-control" placeholder="Email">
					</div>	
				<div>
				<div class="row mt-3">
					<div class="col">
						<input type="password" name="password" class="form-control" placeholder="Password"> 
					</div>
				</div>
				<div class="row mt-3">
					<div class="col">
						<a href="forgotpassword.html" onclick="forgotpassword()">Forgot Password?</a>
						<center>
							<button name="submit" class="btn btn-primary w-50" onclick="validateForm()">Login</button>
						</center>
					</div>
				</div>
				<div class ="row mt-3">
					<div class="col">
						<center><a href="register.php">Create Account</a></center>
					</div>
				</div>
			</form>
		</div>
	</div>
	<script>
		// if (sessionStorage.getItem("Password") == null) {
		// 	alert("Tidak Ada Akun Tersimpan, Silahkan Registrasi")
		// 	window.location.href = "register.html";
        // }
		// if (sessionStorage.getItem("Status") != null) {
		// 	window.location.href = "../home/index.html";
		// }

		//  person = {
		// 	firstName: sessionStorage.getItem("FirstName"),
		// 	lastName: sessionStorage.getItem("LastName"),
		// 	email: sessionStorage.getItem("Email"),
		// 	username: sessionStorage.getItem("Username"),
		// 	password: sessionStorage.getItem("Password")
		// };
		// console.log(person,sessionStorage.getItem("Status"))
		// function validateForm() {
		// 	let username = document.forms["loginform"]["username"].value;
		// 	let password = document.forms["loginform"]["password"].value;
		// 	if (username != person.username || password != person.password) {
		// 		alert("Credential Salah!, silahkan ubah password");
		// 		return false;
		// 	}else{
		// 		sessionStorage.setItem("Status", "Login")
		// 		window.location.href = "../home/index.html";
		// 		alert("login berhasil")
		// 	}
		// }
	</script>
</body>
</html>