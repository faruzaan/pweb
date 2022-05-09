<?php
   include('../process/session.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/base.css">
    <link rel="stylesheet" href="../assets/css/profile.css">
    <title>Profile</title>
</head>
<body>
    <div class="header">
        <header>
            <a href="../home/index.php"><img src="../assets/img/belikopi.png" alt="logo belikopi" class="logo" height="30px"></a>
            <nav>
                <a href="../home/index.php" class="link">Home</a>
                <a href="../katalog/index.php" class="link">Product</a>
                <a href="#" class="link">Category</a>
                <a href="#" class="link">Feature</a>
                <a href="#" class="link">Contact</a>
            </nav>
            <div class="profile">
                <img src="../assets/img/shopping-cart.png" alt="keranjang" width="30px">
                <a href="../profile/index.php"><img src="../assets/img/profile-logo.png" alt="profile logo" width="25px"></a>
            </div>
        </header>
    </div>

    <div class="container">
        <div class="blank"></div>
        <h1 id="headerfullname"><?= $row["first_name"] . " " . $row["last_name"]?></h1>
        <center><form action="../process/logout.php"><button type="submit">Logout</button></form></center>
        <div class="section">
            <div class="left">
                <div class="left-box">
                    <div class="profile-left">
                        <img src="../assets/img/profile-logo.png" alt="profile"width="35px" height="35px" id="st">
                        <span>
                            <h3 id="fullname"><?= $row["first_name"] . " " . $row["last_name"]?></h3>
                            <p><img src="../assets/img/Member-logo.png" />Silver member</p>
                        </span>
                        <hr>
                        <table style="margin-left: 10px;">
                            <tr>
                                <td>Voucher</td>
                                <td class="td-blank"></td>
                                <td>293849</td>
                            </tr>
                            <tr>
                                <td>Cash</td>
                                <td class="td-blank"></td>
                                <td>23927493</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="main">
                <div class="profile-main">
                    <div class="profile-picture-main">
                        <img src="../assets/img/Group 32.png" alt="profile" width="250px" height="250px">
                        <button>Select Picture</button>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt ipsam vitae commodi!
                        </p>
                    </div>
                    <div class="biodata-main">
                        <h2>Biodata</h2>
                        <table>
                            <tr>
                                <td>Nama Depan</td>
                                <td class="td-blank"></td>
                                <td id="firstname"><?= $row["first_name"]?></td>
                            </tr>
                            <tr>
                                <td>Nama Belakang</td>
                                <td class="td-blank"></td>
                                <td id="lastname"><?= $row["last_name"]?></td>
                            </tr>
                            <tr>
                                <td>Tanggal Lahir</td>
                                <td class="td-blank"></td>
                                <td><?= $row["birth_date"]?></td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin</td>
                                <td class="td-blank"></td>
                                <td><?= $row["gender"]?></td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td class="td-blank"></td>
                                <td><?= $row["addres"]?></td>
                            </tr>
                            <tr>
                                <td><h2>Contact</h2></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td class="td-blank"></td>
                                <td id="email"><?= $row["email"]?></td>
                            </tr>
                            <tr>
                                <td>Phone Number</td>
                                <td class="td-blank"></td>
                                <td><?= $row["phone"]?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>