<?php
     
include '../../config.php';
 
session_start();

$iduser = $_SESSION['id'];

if (isset($_GET['checkout'])) {
    $total_bayar = $_SESSION['total_bayar'] + 2000;
    $cash = $_SESSION['cash'];
    $cash -= $total_bayar;
    $_SESSION['cash'] = $cash;
    $sql = "UPDATE users SET cash='$cash' WHERE id='$iduser'";
    $result = mysqli_query($mysqli, $sql);

    $idcart = $_SESSION['id_cart'];
    

    $cariidpenjualan = mysqli_query($mysqli, "SELECT COUNT(*) FROM tb_penjualan");
    $idpenjualan1 = mysqli_fetch_array($cariidpenjualan);
    $idpenjualan = $idpenjualan1[0]+1;

    $cariidalamat = mysqli_query($mysqli, "SELECT id FROM tb_alamat WHERE id_user = '$iduser'");
    $idalamat1 = mysqli_fetch_array($cariidalamat);
    $idalamat = $idalamat1[0];

    $insertpenjualan = mysqli_query($mysqli, "INSERT INTO tb_penjualan(id,id_user,jns_pembayaran,id_alamat) VALUES ('$idpenjualan','$iduser','Cash','$idalamat')");

    $caricart = mysqli_query($mysqli, "SELECT * FROM tb_detail_cart WHERE id_cart = '$idcart'");
    while ($cart = mysqli_fetch_array($caricart)){
        
        $idbarang = $cart['id_barang'];
        echo $idbarang;
        $sql = "INSERT INTO tb_detail_penjualan(id_penjualan,id_barang,jml) VALUES ('$idpenjualan','$idbarang','1')";
        mysqli_query($mysqli, $sql);
    }

    $result = mysqli_query($mysqli, "DELETE FROM tb_detail_cart WHERE id_cart=$idcart");
    header('Location: ../index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="../style.css" />
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
        <title>Checkout</title>
    </head>
    <body>
        <div id="form-alamat"></div>
        <!--  -->
        <div class="container-fluid position-absolute bg-form hide">
            <div
                class="formAlamat container rounded-2"
                style="width: 30vw !important"
            >
                <div
                    class="row d-flex justify-content-between p-3 border-bottom"
                >
                    <h5 class="w-auto text-center">Pemabayaran</h5>
                    <p
                        onclick="closeModal()"
                        style="cursor: pointer"
                        class="w-auto"
                    >
                        X
                    </p>
                </div>
                <div
                    class="row p-3 d-flex justify-content-between border-bottom border-5"
                >
                    <span class="w-auto">
                        <h6>Pakai Cash Anda</h6>
                        <p class="fw-light">Rp.<?= $_SESSION['cash'] ?></p>
                    </span>
                    <div
                        class="form-check form-switch w-auto d-flex align-items-center"
                    >
                        <input
                            class="form-check-input"
                            type="checkbox"
                            id="flexSwitchCheckDefault"
                        />
                    </div>
                </div>
                <div class="row p-3 border-bottom border-5">
                    <h6>Metode Pembayaran</h6>
                    <span class="d-flex justify-content-between mt-3">
                        <p class="align-self-center">
                            <i class="bi bi-wallet2 me-3 fs-5"></i>Wallet
                        </p>
                        <input
                            class="form-check-input"
                            type="radio"
                            name="flexRadioDefault"
                            id="flexRadioDefault1"
                        />
                    </span>
                    <span class="d-flex justify-content-between mt-3">
                        <p><i class="bi bi-credit-card me-3 fs-5"></i>Debit</p>
                        <select
                            class="form-select w-50 h-75"
                            aria-label="Default select example"
                        >
                            <option selected>Pilih Debit</option>
                            <option value="1">Mandiri</option>
                            <option value="2">BCA</option>
                            <option value="3">BNI</option>
                        </select>
                    </span>
                </div>
                <div class="row p-3">
                    <h6>Ringkasan Pembayaran</h6>
                    <span class="d-flex justify-content-between mt-2">
                        <p class="fw-semibold text-secondary">
                            Total Belanjaan
                        </p>
                        <p class="fw-semibold text-secondary">Rp. <?= $_SESSION['total_bayar'] ?></p>
                    </span>
                    <span class="d-flex justify-content-between mt-2">
                        <p class="fw-semibold text-secondary">Biaya Admin</p>
                        <p class="fw-semibold text-secondary">Rp. 2000</p>
                    </span>
                </div>
                <div
                    class="row p-3 position-absolute bottom-0 d-flex justify-content-between w-100"
                >
                    <span class="w-auto align-items-centers d-flex">
                        <h6>Total Bayar :</h6>
                        <p class="ms-2 fw-light">Rp. <?= $_SESSION['total_bayar']+2000 ?></p>
                    </span>
                    <a href="?checkout" class="btn btn-brown w-25">Bayar</a>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-dark w-100">
            <div class="container-fluid">
                <a class="navbar-brand" href="../../home/index.php"
                    ><img
                        src="../../img/belikopi.png"
                        alt="logo belikopi"
                        class="logo"
                        height="30px"
                /></a>
                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div
                    class="collapse navbar-collapse"
                    id="navbarSupportedContent"
                >
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a
                                href="../../katalog/index.php"
                                class="nav-link active"
                                >Product</a
                            >
                        </li>
                        <li class="nav-item">
                            <a
                                href="#"
                                class="nav-link active"
                                id="drop-kategori"
                                >Category</a
                            >
                            <div class="drop">
                                <a href="../../kategori/index.php?a=kopi"
                                    >Kopi</a
                                >
                                <br />
                                <a href="../../kategori/index.php?a=peralatan"
                                    >Peralatan Kopi</a
                                >
                            </div>
                        </li>
                    </ul>
                    <div>
                        <span>
                            <a
                                href="../index.php"
                                style="text-decoration: none"
                            >
                                <img
                                    src="../../img/shopping-cart.png"
                                    alt="keranjang"
                                    width="30px"
                                />
                            </a>
                        </span>
                        <span>
                            <a href="../../profile/index.php"
                                ><img
                                    src="../../img/profile-logo.png"
                                    alt="profile logo"
                                    width="25px"
                            /></a>
                        </span>
                        <a
                            href="../loginregist/login.php"
                            style="
                                color: #fff;
                                cursor: pointer;
                                text-decoration: none;
                            "
                            >Logout</a
                        >
                    </div>
                </div>
            </div>
        </nav>

        <div class="container mt-5 pb-5">
            <div class="row">
                <div class="col-8 border">
                    <div class="row border-bottom p-3">
                        <p class="fw-semibold">Alamat Pengiriman</p>
                    </div>
                    <div class="row p-3 d-flex justify-content-cent w-100">
                        <!-- Mun can aya Alamat -->
                        <!-- <div class="alert alert-danger">
                            Alamat pengiriman belum diatur
                        </div> -->
                        <div class="container-fluid">
                            <p><b><?= $_SESSION['nama'] ?></b> </p>
                            <p><?= $_SESSION['notelp'] ?></p>
                            <p class="fw-light">
                                <?php
                                    $sql = "SELECT alamat FROM tb_alamat WHERE id_user = '$iduser'";
                                    $result = mysqli_query($mysqli, $sql);
                                    while($hasil = mysqli_fetch_array($result)){
                                        echo $hasil[0];
                                    }
                                ?>
                            </p>
                        </div>
                    </div>
                    <!-- <div class="row p-3">
                        <button class="btn btn-brown" id="tambah">
                            Tambah Alamat Baru
                        </button>
                    </div> -->
                </div>
                <div
                    class="col-3 border ms-3 p-3 rounded-2 shadow-sm d-flex flex-column justify-content-between"
                    style="width: 30%; height: 30vh"
                >
                    <p class="border-bottom pb-3">Detail Pembayaran</p>
                    <span class="d-flex justify-content-between">
                        <p class="delete">Total Harga Produk</p>
                        <p class="delete">Rp.<?= $_SESSION['total_bayar'] ?></p>
                    </span>
                    <span class="d-flex justify-content-between">
                        <p class="fw-semibold">Total Pembayaran</p>
                        <p class="delete">Rp.<?= $_SESSION['total_bayar'] ?></p>
                    </span>
                    <button
                        class="btn btn-brown w-100"
                        style="height: 20%"
                        id="checkout"
                    >
                        Checkout
                    </button>
                </div>
            </div>
        </div>

        <div class="position-absolute bottom-0 w-100">
            <hr id="copyright w-100" />
            <p class="text-center">Copyright 2022 © BELIKOPI by Cuan.</p>
        </div>

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
            $('#tambah').click(function () {
                $('#form-alamat').load('./formAlamat.php');
            });

            const closeAlamat = () => {
                $('#form-alamat').empty();
            };

            const closeModal = () => {
                $('.bg-form').removeClass('show');
            };
            $('#checkout').click(function () {
                $('.bg-form').addClass('show');
            });
        </script>
    </body>
</html>
