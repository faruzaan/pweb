<?php
    include "../config.php";
    session_start();
    $id = $_SESSION['id'];
    $result = mysqli_query($mysqli, "SELECT * FROM tb_alamat WHERE id_user = '$id'");
    $dvoucher = mysqli_query($mysqli, "SELECT COUNT(id) FROM tb_detail_voucher WHERE id_user = '$id'");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="../base.css" />
        <link rel="stylesheet" href="style.css" />
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
            crossorigin="anonymous"
        />
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
            crossorigin="anonymous"
        ></script>
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css"
        />
        <title>Profile</title>
    </head>
    <body>
        <div id="header"></div>

        <div class="container pb-5">
            <div class="row mt-5">
                <div class="col-3 border shadow-sm rounded-4 p-5">
                    <div class="d-flex flex-column align-items-center">
                        <img
                            src="../img/Group 32.png"
                            alt="profile"
                            width="200px"
                            height="200px"
                            class="img-thumbnail rounded-circle"
                        />
                        <input
                            type="file"
                            name="file"
                            id="file"
                            class="d-none"
                        />
                        <button id="foto" class="btn btn-primary mt-3">
                            Select Picture
                        </button>
                        <p class="text-center mt-5 w-75">
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Deserunt ipsam vitae commodi!
                        </p>
                    </div>
                </div>
                <div class="ms-4 col">
                    <div class="row p-2 border shadow-sm rounded-2">
                        <img
                            src="../img/profile-logo.png"
                            alt="profile"
                            width="35px"
                            height="35px"
                            id="st"
                        />
                        <span>
                            <h3 id="fullname">Jhon Doe</h3>
                            <p>
                                <img src="../img/Member-logo.png" />Silver
                                member
                            </p>
                        </span>
                        <hr />
                        <table class="w-25">
                            <tr>
                                <td>Voucher</td>
                                <td><?php while($detailvoucher = mysqli_fetch_array($dvoucher)){
                                            echo $detailvoucher[0];
                                        } ?></td>
                            </tr>
                            <tr>
                                <td>Cash</td>
                                <td><?= $_SESSION['cash'] ?></td>
                            </tr>
                        </table>
                    </div>
                    <div class="row border shadow-sm rounded-2 p-2 mt-3">
                        <h2 class="pb-2">Biodata</h2>
                        <hr />
                        <table class="w-50">
                            <tr>
                                <td class="text-secondary pt-3">Nama</td>
                                <td class="text-secondary pt-3"><?= $_SESSION['nama'] ?></td>
                            </tr>
                            <tr>
                                <td class="text-secondary pt-3">
                                    Tanggal Lahir
                                </td>
                                <td class="text-secondary pt-3">
                                    <?= $_SESSION['tgl_lahir'] ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-secondary pt-3">
                                    Jenis Kelamin
                                </td>
                                <td class="text-secondary pt-3"><?= $_SESSION['gender'] ?></td>
                            </tr>
                            <tr>
                                <td class="text-secondary pt-3">Alamat</td>
                                <td class="text-secondary pt-3">
                                    <?php
                                        while($alamat = mysqli_fetch_array($result)){
                                            echo $alamat['alamat'];
                                            echo "<br>";
                                        }
                                    ?>
                                </td>
                            </tr>
                        </table>
                        <h2 class="mt-5">Kontak</h2>
                        <hr />
                        <table class="w-50">
                            <tr>
                                <td class="text-secondary pt-3">No</td>
                                <td class="text-secondary pt-3">
                                    <?= $_SESSION['notelp'] ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-secondary pt-3">Email</td>
                                <td class="text-secondary pt-3">
                                    <?= $_SESSION['email'] ?>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div id="footer"></div>
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
            integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
            integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://code.jquery.com/jquery-3.2.1.min.js"
            crossorigin="anonymous"
        ></script>
        <script>
            $(document).ready(function () {
                $('#footer').load('../base/footer.php');
                $('#header').load('../base/header.php');
            });

            $('#foto').click(function () {
                $('#file').click();
            });
        </script>
        <script>
            //     if (sessionStorage.getItem("Status") != "Login") {
            //         alert("Login Terlebih Dahulu!")
            //         window.location.href = "../loginregist/login.html";
            //     }
            //     document.getElementById("headerfullname").innerHTML = sessionStorage.getItem("FirstName") + " " + sessionStorage.getItem("LastName");
            //     document.getElementById("fullname").innerHTML = sessionStorage.getItem("FirstName") + " " + sessionStorage.getItem("LastName");
            //     document.getElementById("firstname").innerHTML = sessionStorage.getItem("FirstName")
            //     document.getElementById("lastname").innerHTML = sessionStorage.getItem("LastName")
            //     document.getElementById("email").innerHTML = sessionStorage.getItem("Email")
            //     function logout(){
            //         sessionStorage.removeItem("Status");
            //         alert("Logout Berhasil")
            //         window.location.href = "../home/index.html";
            //     }
            //
        </script>
    </body>
</html>
