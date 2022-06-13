<?php
session_start();
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
            href="https://unpkg.com/aos@2.3.1/dist/aos.css"
            rel="stylesheet"
        />
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css"
        />
        <title>BELIKOPI</title>
    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-dark w-100">
    <div class="container-fluid">
        <a class="navbar-brand" href="../home/index.php"
            ><img
                src="../img/belikopi.png"
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
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a href="../katalog/index.php" class="nav-link active"
                        >Product</a
                    >
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link active" id="drop-kategori"
                        >Category</a
                    >
                    <div class="drop">
                        <a href="../kategori/index.php?a=kopi">Kopi</a>
                        <br />
                        <a href="../kategori/index.php?a=peralatan"
                            >Peralatan Kopi</a
                        >
                    </div>
                </li>
            </ul>
            <div>
                <?php if (isset($_SESSION['id'])) : ?>
                    <span>
                        <a href="../chart/index.php" style="text-decoration: none">
                            <img
                                src="../img/shopping-cart.png"
                                alt="keranjang"
                                width="30px"
                            />
                        </a>
                    </span>
                    <span>
                        <a href="../profile/index.php"
                            ><img
                                src="../img/profile-logo.png"
                                alt="profile logo"
                                width="25px"
                        /></a>
                    </span>
                    <a
                        href="../loginregist/logout.php"
                        style="color: #fff; cursor: pointer; text-decoration: none"
                        >Logout</a
                    >
                <?php else : ?>
                    <a
                        href="../loginregist/login.php"
                        style="color: #fff; cursor: pointer; text-decoration: none"
                        >login</a
                    >
                <?php endif; ?>
            </div>
        </div>
    </div>
</nav>
        <div class="container-fluid ps-0"style="padding-right: 12px; z-index: 2">
        <div class="row">
            <div class="col-lg-9 left">
                <div class="text-left">
                    <h1 data-aos="fade-right" data-aos-duration="2000">
                        Make Your Day With Coffee <br />
                        In BELIKOPI.
                    </h1>
                    <p data-aos="fade-right" data-aos-duration="2000">
                        When it Absolutely, Positively Has to be Coffee
                        Overnight
                    </p>
                    <hr data-aos="fade-right" data-aos-duration="2000" />
                    <div class="text-desc-left" data-aos="fade-up" data-aos-duration="2000" >
                        <div class="text">
                            <h2>Mocca</h2>
                            <h3>Lorem Ipsum</h3>
                            <p>
                                Lorem ipsum dolor sit amet consectetur,
                                adipisicing elit. Beatae, quam molestias
                                eius vitae libero consequatur iste error
                                minima eligendi
                            </p>
                        </div>
                        <div class="text">
                            <h2>Latte</h2>
                            <h3>Lorem Ipsum</h3>
                            <p>
                                Lorem ipsum dolor sit amet consectetur,
                                adipisicing elit. Beatae, quam molestias
                                eius vitae libero consequatur iste error
                                minima eligendi
                            </p>
                        </div>
                        <div class="text">
                            <h2>Milk</h2>
                            <h3>Fresh Milk</h3>
                            <p>
                                Susu adalah makanan cair kaya nutrisi yang
                                diproduksi oleh kelenjar susu mamalia. Ini
                                adalah sumber nutrisi utama bagi mamalia
                                muda (termasuk bayi manusia yang disusui)
                                sebelum mereka dapat mencerna makanan padat.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 right"></div>
        </div>
    </div>

    <div class="container-fluid mt-5" id="feature">
        <div class="d-flex flex-column align-items-center">
            <h1 class="mt-5 mb-5 title-text" data-aos="fade-right" data-aos-duration="1000" >
                OUR SPECIAL FEATURE THAT MAKE YOU HAPPY AND CHEERUP
            </h1>

            <div class="d-flex mt-5 pt-3 w-75 justify-content-between">
                <div
                    data-aos="fade-up"
                    data-aos-duration="1500"
                    class="detail text-center"
                >
                    <img
                        src="./img/icon1.png"
                        alt=""
                        width="160px"
                        class="mx-auto d-block"
                        height="160px"
                    />
                    <h2>Premium Quality</h2>
                    <p class="w-75 mx-auto">
                        Lorem ipsum dolor sit amet consectetur adipisicing
                        elit.
                    </p>
                </div>
                <div
                    data-aos="fade-up"
                    data-aos-duration="1500"
                    class="detail text-center"
                >
                    <img
                        src="./img/icon2.png"
                        alt=""
                        width="160px"
                        class="mx-auto d-block"
                        height="160px"
                    />
                    <h2>Premium Quality</h2>
                    <p class="w-75 mx-auto">
                        Lorem ipsum dolor sit amet consectetur adipisicing
                        elit.
                    </p>
                </div>
                <div
                    data-aos="fade-up"
                    data-aos-duration="1500"
                    class="detail text-center"
                >
                    <img
                        src="./img/icon3.png"
                        alt=""
                        width="160px"
                        class="mx-auto d-block"
                        height="160px"
                    />
                    <h2>Premium Quality</h2>
                    <p class="w-75 mx-auto">
                        Lorem ipsum dolor sit amet consectetur adipisicing
                        elit.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid mt-5 mb-5">
        <div class="d-flex flex-column align-items-center">
            <h1
                data-aos="fade-right"
                data-aos-duration="2000"
                class="title-text mt-5 mb-5"
            >
                Let's see our collection coffee
            </h1>

            <div
                class="d-flex mt-5 pt-3 w-75 justify-content-between flex-wrap"
            >
                <div
                    class="card"
                    style="width: 15rem"
                    data-aos="fade-up"
                    data-aos-duration="1500"
                >
                    <img src="./img/kopi1.png" alt=""
                    class="card-img-top width="250px" height="250px">
                    <div class="card-body">
                        <h2 class="card-title mt-1">Arabika Java</h2>
                        <p class="card-text pb-2">
                            nutty, full body, chocolate
                        </p>
                    </div>
                </div>
                <div
                    class="card"
                    style="width: 15rem"
                    data-aos="fade-up"
                    data-aos-duration="2000"
                >
                    <img src="./img/kopi1.png" alt=""
                    class="card-img-top width="250px" height="250px">
                    <div class="card-body">
                        <h2 class="card-title mt-1">Arabika Java</h2>
                        <p class="card-text pb-2">
                            nutty, full body, chocolate
                        </p>
                    </div>
                </div>
                <div
                    class="card"
                    style="width: 15rem"
                    data-aos="fade-up"
                    data-aos-duration="2500"
                >
                    <img src="./img/kopi1.png" alt=""
                    class="card-img-top width="250px" height="250px">
                    <div class="card-body">
                        <h2 class="card-title mt-1">Arabika Java</h2>
                        <p class="card-text pb-2">
                            nutty, full body, chocolate
                        </p>
                    </div>
                </div>
                <div
                    class="card"
                    style="width: 15rem"
                    data-aos="fade-up"
                    data-aos-duration="3000"
                >
                    <img src="./img/kopi1.png" alt=""
                    class="card-img-top width="250px" height="250px">
                    <div class="card-body">
                        <h2 class="card-title mt-1">Arabika Java</h2>
                        <p class="card-text pb-2">
                            nutty, full body, chocolate
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid pb-5 pt-5">
            <div class="d-flex flex-column align-items-center">
                <h1
                    data-aos="fade-right"
                    data-aos-duration="2000"
                    class="title-text mt-5 mb-5"
                >
                    not only coffee beans we also provide stylish toosls
                </h1>

                <div class="row w-75">
                    <div
                        class="col d-flex align-items-center me-5"
                        data-aos="fade-right"
                        data-aos-duration="1500"
                    >
                        <img
                            src="./img/tools.png"
                            class="img-fluid"
                            alt=""
                        />
                    </div>
                    <div class="col">
                        <div data-aos="fade-left" data-aos-duration="1500">
                            <h3>V60 Dripper</h3>
                            <h4 class="fw-light">Made of Ceramicc</h4>
                            <div class="price">
                                <h3>$99.99</h3>
                                <h3>5 Colors</h3>
                            </div>
                            <div class="price">
                                <p class="fw-light">Special Price</p>
                                <p class="fw-light">
                                    Red, Green, Black, Blue
                                </p>
                            </div>
                            <p class="fw-light larger">
                                With so many innovations popping up, there
                                have been various types of coffee drippers.
                                Hario brand from Japan is one that is not
                                infrequently used by coffee shops because of
                                its good quality. Hario V60 Plastic Dripper
                                design is made of special plastic that is
                                heat resistant. Therefore, this V60 dripper
                                is perfect for those of you who like to be
                                creative when making your own coffee.
                            </p>
                        </div>
                        <div
                            data-aos="fade-up"
                            data-aos-duration="1500"
                            class="btn-desc"
                        >
                            <button onclick="orderAdd()" id="order">
                                Order Now
                            </button>
                            <button id="detail-modal">Detail</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <hr id="copyright w-100" />
        <p class="text-center">Copyright 2022 © BELIKOPI by Cuan.</p>

        <div class="container-fluid w-100 footer">
            <div class="container d-flex h-100 justify-content-around align-items-center text-light">
                <span>
                    <h5><i class="bi bi-geo-alt-fill me-3"></i>Alamat</h5>
                    <p>Jl. Cibiru</p>
                </span>
                <span>
                    <h5><i class="bi bi-telephone me-3"></i>Kontak</h5>
                    <p>022-2308429</p>
                    <p>belikopipweb@test.com</p>
                </span>
                <span>
                    <h5><i class="bi bi-clock-fill me-3"></i>Jam Operasi</h5>
                    <p>08:00 - 21:00</p>
                </span>
            </div>
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
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script
            src="https://code.jquery.com/jquery-3.2.1.min.js"
            crossorigin="anonymous"
        ></script>
        <script>
            AOS.init();
            $('#footer').load('../base/footer.php');
            $('#header').load('../base/header.php');
        </script>
    </body>
</html>
