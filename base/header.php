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
                <?php if (!isset($_SESSION['id'])) : ?>
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
