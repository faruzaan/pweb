<?php 
 
include '../config.php';
 
session_start();
 
// if (isset($_SESSION['username'])) {
//     header("Location: ../home/index.php");
// }
$id = $_SESSION['id'];
$sql = "SELECT id FROM tb_cart WHERE id_user = '$id' ";
$idcart = mysqli_query($mysqli, $sql);

$idcart1 = mysqli_fetch_array($idcart);
$idcartt = $idcart1[0];


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "INSERT INTO tb_detail_cart(id_cart,id_barang,jml) VALUES ('$idcartt','$id','1') ";
    $result = mysqli_query($mysqli, $sql);
}

$sql = "SELECT * FROM tb_barang";
$result = mysqli_query($mysqli, $sql);
 
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
        <title>Katalog</title>
    </head>
    <body>
        <div class="modal-custom">
            <div class="main-modal">
                <div class="row d-flex justify-content-between rounded-top p-2">
                    <h5 class="w-auto">Tambahkan Ke Keranjang</h5>
                    <p
                        class="w-auto me-3"
                        style="cursor: pointer"
                        onclick="onClose()"
                    >
                        X
                    </p>
                </div>
                <hr />
                <div class="row mt-3">
                    <div class="col d-flex justify-content-center">
                        <img id="img-modal" class="rounded" alt="image" />
                    </div>
                    <div
                        class="col-6 d-flex flex-column justify-content-between flex-nowrap"
                    >
                        <div class="row mt-3">
                            <h5 id="name"></h5>
                        </div>
                        <div class="row">
                            <p>harga</p>
                        </div>
                    </div>
                    <div class="col d-flex justify-content-end align-items-end">
                        <div class="d-flex justify-content-between">
                            <button class="counter rounded-circle" id="decres">
                                -
                            </button>
                            <input
                                class="mt-auto mb-auto text-dark border-0"
                                id="counter"
                                readonly
                                placeholder="0"
                            />
                            <button class="counter rounded-circle" id="increse">
                                +
                            </button>
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-center mt-4">
                    <button class="btn btn-brown w-75">Tambah</button>
                </div>
            </div>
        </div>
        <div id="header"></div>
        <div
            class="container-fluid w-100 d-flex justify-content-center flex-column"
        >
            <!-- <div class="row mt-5">
                <div
                    class="container d-flex kategori w-75 justify-content-around"
                >
                    <a href="#" id="semua" class="active-">Semua</a>
                    <a href="#" id="kopi">Biji Kopi</a>
                    <a href="#" id="peralatan">Peralatan Kopi</a>
                </div>
            </div> -->

            <!-- <div class="row w-100" id="main"></div> -->

            <div class="col-lg-12">
                <div class="d-flex flex-wrap justify-content-center">
                    <?php
                        while($barang = mysqli_fetch_array($result)):
                    ?>
                    <div
                        class="card mt-3 me-4 shadow border border-0 mx-5"
                        style="width: 17rem"
                    >
                        <img src="../home/img/kopi1.png" class="card-img-top" alt="" />
                        <div class="card-body">
                            <h3 class="card-title"><?= $barang['nama']?></h3>
                            <p class="card-text"><?= $barang['desc']?></p>
                            <span class="d-flex justify-content-between">
                                <h4 class="card-title">IDR <?= $barang['harga']?></h4>
                                <a class="btn btn-brown" href="?id=<?= $barang['id']?>">
                                    Beli
                                </a>
                            </span>
                        </div>
                    </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>

        <hr id="copyright w-100" />
        <p class="text-center">Copyright 2022 © BELIKOPI by Cuan.</p>

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
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="./index.js"></script>
    </body>
</html>
