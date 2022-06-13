<?php 
 
include '../config.php';
 
session_start();

$iduser = $_SESSION['id'];

$sql = "SELECT id FROM tb_cart WHERE id_user = '$iduser'";
$result = mysqli_query($mysqli, $sql);

$idcart = mysqli_fetch_array($result);
$_SESSION['id_cart'] = $idcart[0];

$sql = "SELECT dc.*,tb.* FROM tb_detail_cart dc join tb_barang tb on tb.id = dc.id_barang WHERE id_cart = '$idcart[0]'";
$result = mysqli_query($mysqli, $sql);
 
$jml_harga = 0;

if (isset($_GET['id_detail'])) {
    $id = $_GET['id_detail'];
    $result = mysqli_query($mysqli, "DELETE FROM tb_detail_cart WHERE id=$id");
    header("Location:index.php");
}
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
        <title>Chart</title>
    </head>
    <body>
        <div id="header"></div>
        <div class="container mt-5 pb-5">
            <div class="row">
                <div class="col-8 border">
                    <div class="row border-bottom p-3">
                        <p class="fw-semibold">Keranjang Belanja</p>
                    </div>
                    <!-- <div
                        class="row p-3 d-flex justify-content-between w-100 border-bottom"
                    >
                        <span class="w-auto">
                            <input type="checkbox" name="all" id="all" />
                            <label for="all" class="form-label fw-semibold"
                                >Pilih Semua</label
                            >
                        </span>
                        <label class="w-auto"
                            ><a href="#" class="fw-semibold delete"
                                >Hapus</a
                            ></label
                        >
                    </div> -->
                    <div class="row p-3">
                        <!-- Order -->
                        <?php while ($hasil = mysqli_fetch_array($result)):?>
                            <?php 
                                $jml_harga += $hasil['harga'];   
                            ?>
                        <div class="row mt-3">
                            <div
                                class="col-1 d-flex align-items-center justify-content-center p-0"
                            >
                                <input type="checkbox" name="" id="" />
                            </div>
                            <div class="col-2">
                                <img
                                    class="order img-fluid"
                                    src="https://s-ecom.ottenstatic.com/original/624f1478c806d329764988.jpg"
                                    alt=""
                                />
                            </div>
                            <div class="col-5 d-flex align-items-center">
                                <p class="fw-semibold text-warp">
                                    <?= $hasil['nama'] ?>
                                </p>
                            <!-- </div>
                            <div
                                class="col-4 d-flex align-items-center justify-content-center"
                            >
                                <div class="d-flex">
                                    <button
                                        class="counter rounded-circle"
                                        id="decres"
                                    >
                                        -
                                    </button>
                                    <input
                                        class="mt-auto mb-auto text-dark border-0"
                                        id="counter"
                                        readonly
                                        placeholder="0"
                                    />
                                    <button
                                        class="counter rounded-circle"
                                        id="increse"
                                    >
                                        +
                                    </button>
                                </div> -->
                                <p class="fs-6 ms-3 m-0">Rp.<?= $hasil['harga'] ?></p>
                                <a href="?<?= "id_detail=".$hasil[0]; ?>"><i class="bi bi-trash-fill ms-5 delete"></i></a>
                            </div>
                        </div>
                        <?php endwhile;?>
                        <!-- order -->
                    </div>
                </div>
                <div
                    class="col-3 border ms-3 p-3 rounded-2 shadow-sm d-flex flex-column justify-content-between"
                    style="width: 30%; height: 25vh"
                >
                    <p class="border-bottom pb-3">Subtotal(0 Produk)</p>
                    <span class="d-flex justify-content-between">
                        <p class="fw-semibold">Total Harga Produk</p>
                        <p class="delete">Rp.<?=$jml_harga?></p>
                        <?php
                            $_SESSION['total_bayar'] = $jml_harga;
                        ?>
                    </span>
                    <button
                        class="btn btn-brown w-100"
                        style="height: 30%"
                        id="checkout"
                    >
                        Pesan
                    </button>
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
        <script
            src="https://code.jquery.com/jquery-3.2.1.min.js"
            crossorigin="anonymous"
        ></script>
        <script>
            $('#footer').load('../base/footer.php');
            $('#header').load('../base/header.php');
            $('#checkout').click(function () {
                location.href = './checkout/index.php';
            });
        </script>
    </body>
</html>
