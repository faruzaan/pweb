<?php 
 
include '../config.php';
 
session_start();
 
if (isset($_SESSION['username'])) {
    header("Location: ../home/index.php");
}
 
if (isset($_POST['submit'])) {
    // $nama = $_POST['nama'];
    // $email = $_POST['email'];
    // $password = $_POST['password'];
    // $tgl_lahir = $_POST['tgl_lahir'];
    // $gender = $_POST['gender'];
    // $notelp = $_POST['notelp'];
 
    // $sql = "INSERT INTO users (nama, email, password, tgl_lahir,gender,notelp) VALUES ('$nama', '$email', '$password','$tgl_lahir','$gender','$notelp')";
    // $result = mysqli_query($mysqli, $sql);
    // header('Location: login.php');
    // $result = mysqli_query($conn, $sql);
    // if ($password != NULL) {
    //     $sql = "SELECT * FROM users WHERE email='$email'";
    //     $result = mysqli_query($conn, $sql);
    //     if (!$result->num_rows > 0) {
    //         $sql = "INSERT INTO users (nama, email, password, tgl_lahir,gender,notelp)
    //                 VALUES ('$nama', '$email', '$password','tgl_lahir','gender','notelp')";
    //         $result = mysqli_query($conn, $sql);
    //         if ($result) {
    //             echo "<script>alert('Selamat, registrasi berhasil!')</script>";
    //             $username = "";
    //             $email = "";
    //             $_POST['password'] = "";
    //         } else {
    //             echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
    //         }
    //     } else {
    //         echo "<script>alert('Woops! Email Sudah Terdaftar.')</script>";
    //     }
         
    // } else {
    //     echo "<script>alert('Password Tidak Sesuai')</script>";
    // }
}
 
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Registrasi</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <div class="container-fluid d-flex align-items-center justify-content-center"
         style="width: 100vw; height: 100vh; background-image: url('./img/WhatsApp\ Image\ 2022-03-27\ at\ 11.54.31.jpeg'); background-size: cover;">
            <div class="container w-50 rounded p-5 glass">
                <h1>BELIKOPI.</h1>
                <form id="regis" action="register.php" method="post">
                    <div class="row mt-3">
                        <div class="col">
                            <input type="text" name="nama" class="first_name  form-control" placeholder="Name">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <input type="text" name="email" class="form-control" placeholder="Email">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <input type="password" name="password" class="form-control" placeholder="Password">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <input type="date" name="tgl_lahir" class="form-control" placeholder="">
                        </div> 
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <input type="text" name="gender" class="first_name  form-control" placeholder="Gender">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <input type="text" name="notelp" class="first_name  form-control" placeholder="notelp">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <center>
                                <input type="submit" name="Submit" value="Register" class="btn btn-primary w-50">
                                <!-- <button onclick="resgist()" class="btn btn-primary w-50" name="submit">Register </button> -->
                            </center>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <center>
                                <p> Have a account?
                                    <a href="login.php">Login here</a>
                                </p>
                                <div id="results"></div>
                            </center>
                        </div>
                    </div>
                </form>
                <?php
                    if(isset($_POST['Submit'])) {
                        // echo "submited";
                        $nama = $_POST['nama'];
                        $email = $_POST['email'];
                        $password = $_POST['password'];
                        $tgl_lahir = $_POST['tgl_lahir'];
                        $gender = $_POST['gender'];
                        $notelp = $_POST['notelp'];
                    
                        $sql = "INSERT INTO users (nama, email, password, tgl_lahir,gender,notelp) VALUES ('$nama', '$email', '$password','$tgl_lahir','$gender','$notelp')";
                        $result = mysqli_query($mysqli, $sql);
                        header('Location: login.php');
                    }
                
                ?>
            </div>
        </div>
        <!-- <script>
            if (sessionStorage.getItem("Password") != null) {
                alert("Registrasi telah berhasil, silahkan login dengan akun anda")
                window.location.href = "login.html";
            }
            console.log(sessionStorage.getItem("Username"));
            function resgist()
            {
                sessionStorage.setItem("FirstName", document.forms["regis"]["first_name"].value);
                sessionStorage.setItem("LastName", document.forms["regis"]["last_name"].value);
                sessionStorage.setItem("Email", document.forms["regis"]["email"].value);
                sessionStorage.setItem("Username", document.forms["regis"]["username"].value);
                sessionStorage.setItem("Password", document.forms["regis"]["password"].value);
                window.location.href = "login.html";
            }   
        </script> -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    </body>
</html>
