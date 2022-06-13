<?php
// Create database connection using config file
include_once("../../config.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM tb_barang WHERE jns_barang = 'Kopi'");
?>

<div class="col-lg-12">
    <div class="d-flex flex-wrap justify-content-center">
        <?php
            while($kopi = mysqli_fetch_array($result)){
                echo "<div class='card mt-3 me-4 shadow border border-0 mx-5' style='width: 17rem'>";
                echo "<img src='../home/img/kopi1.png' class='card-img-top' alt='' />";
                echo "<div class='card-body'>";
                echo "<h3 class='card-title'>".$kopi['nama']."</h3>";
                echo "<p class='card-text'>".$kopi['desc']."</p>";
                echo "<span class='d-flex justify-content-between'>";
                echo "<h4 class='card-title'>IDR ".$kopi['harga']."</h4>";
                echo "<button onclick='modal('https://tse1.mm.bing.net/th/id/OIP._TmpGPSTpHAOOXy94N8NMQHaE8?pid=ImgDet&rs=1', 'Kopi Arabica Lintong')' class='btn btn-brown' >+</button>";
                echo "</span>";
                echo "</div>";
                echo "</div>";
            }
        ?>

    </div>
</div>
