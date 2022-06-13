<?php
// Create database connection using config file
include_once("../config.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM tb_barang");
?>
<div class="col-lg-12">
    <div class="d-flex flex-wrap justify-content-center">
        <div
            class="card mt-3 me-4 shadow border border-0 mx-5"
            style="width: 17rem"
        >
            <img
                src="https://tse1.mm.bing.net/th/id/OIP.8jp5hWzk4RuWAmuwqpa8DAHaHa?pid=ImgDet&rs=1"
                class="card-img-top"
                alt=""
            />
            <div class="card-body">
                <h3 class="card-title">Arabika Java</h3>
                <p class="card-text">Medium Body, Nutty, Berry</p>
                <span class="d-flex justify-content-between">
                    <h4 class="card-title">$99.99</h4>
                    <button
                        onclick="modal('https://tse1.mm.bing.net/th/id/OIP._TmpGPSTpHAOOXy94N8NMQHaE8?pid=ImgDet&rs=1', 'Kopi Arabica Lintong')"
                        class="btn btn-brown"
                    >
                        +
                    </button>
                </span>
            </div>
        </div>
        
    </div>
</div>
