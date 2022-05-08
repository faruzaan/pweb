<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/base.css">
    <link rel="stylesheet" href="../assets/css/index.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <div class="header">
        <header>
            <a href="index.html"><img src="../assets/img/belikopi.png" alt="logo belikopi" class="logo" height="30px"></a>
            <nav>
                <a href="../katalog/index.html" class="link">Product</a>
                <a href="#" class="link">Category</a>
                <a href="#feature" class="link">Feature</a>
                <a href="#" class="link">Contact</a>
            </nav>
            <div class="profile">
                <img src="../assets/img/shopping-cart.png" alt="keranjang" width="30px">
                <a href="../profile/index.html"><img src="../assets/img/profile-logo.png" alt="profile logo" width="25px"></a>
            </div>
        </header>
    </div>

    <div class="bg-img">
        <div class="bg-left">
            <div class="text-left">
                <h1 data-aos="fade-right" data-aos-duration="2000">Make Your Day With Coffee <br>
                    In BELIKOPI.</h1>
                <p data-aos="fade-right" data-aos-duration="2000">When it Absolutely, Positively Has to be Coffee Overnight</p>
                <hr data-aos="fade-right" data-aos-duration="2000">
                <div class="text-desc-left" data-aos="fade-up" data-aos-duration="2000">
                    <div class="text">
                        <h2>Mocca</h2>
                        <h3>Lorem Ipsum</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Beatae, quam molestias eius vitae libero consequatur iste error minima eligendi</p>
                    </div>
                    <div class="text">
                        <h2>Latte</h2>
                        <h3>Lorem Ipsum</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Beatae, quam molestias eius vitae libero consequatur iste error minima eligendi</p>
                    </div>
                    <div class="text">
                        <h2>Milk</h2>
                        <h3>Lorem Ipsum</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Beatae, quam molestias eius vitae libero consequatur iste error minima eligendi</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-right">
        </div>

    </div>
</div>
<div class="container" id="feature">
    <div class="content">
        <h1>OUR SPECIAL FEATURE THAT MAKE YOU HAPPY AND CHEERUP</h1>

        <div class="content-detail">
            <div class="detail">
                <img src="../assets/img/icon1.png" alt="" width="160px" height="160px">
                <h2>Premium Quality</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <div class="detail">
                <img src="../assets/img/icon2.png" alt="" width="160px" height="160px">
                <h2>Premium Quality</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <div class="detail">
                <img src="../assets/img/icon3.png" alt="" width="160px" height="160px">
                <h2>Premium Quality</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="content">
        <h1>Let's see our collection coffee</h1>
        
        <div class="content-detail">
            <div class="detail">
                <img src="../assets/img/kopi1.png" alt="" width="250px" height="250px">
                <div class="detail-text">
                    <h2>Arabika Java</h2>
                    <p>nutty, full body, chocolate</p>
                </div>
            </div>
            <div class="detail">
                <img src="../assets/img/kopi1.png" alt="" width="250px" height="250px">
                <div class="detail-text">
                    <h2>Arabika Java</h2>
                    <p>nutty, full body, chocolate</p>
                </div>
            </div>
            <div class="detail">
                <img src="../assets/img/kopi1.png" alt="" width="250px" height="250px">
                <div class="detail-text">
                    <h2>Arabika Java</h2>
                    <p>nutty, full body, chocolate</p>
                </div>
            </div>
            <div class="detail">
                <img src="../assets/img/kopi1.png" alt="" width="250px" height="250px">
                <div class="detail-text">
                    <h2>Arabika Java</h2>
                    <p>nutty, full body, chocolate</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
            <div class="content">
            <h1>not only coffee beans we also provide stylish toosls</h1>

            <div class="content-detail row">
                <div class="detail" id="item1">
                    <img src="../assets/img/tools.png" alt="">
                </div>
                <div class="detail desc-tool">
                    <h3>V60 Dripper</h3>
                    <h4 class="text-light">Made of Ceramicc</h4>
                    <div class="price">
                        <h3>$99.99</h3>
                        <h3>5 Colors</h3>
                    </div>
                    <div class="price">
                        <p class="text-light">Special Price</p>
                        <p class="text-light">Red, Green, Black, Blue</p>
                    </div>
                    <p class="text-light larger">With so many innovations popping up, there have been various types of coffee drippers. Hario brand from Japan is one that is not infrequently used by coffee shops because of its good quality. Hario V60 Plastic Dripper design is made of special plastic that is heat resistant. Therefore, this V60 dripper is perfect for those of you who like to be creative when making your own coffee.</p>
                </div>
                <div class="btn-desc">
                    <button onclick="orderAdd()" id="order">Order Now</button>
                    <button id="detail-modal">Detail</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal">
        <div class="modal-content">
            <span class="close-btn" style="cursor: pointer;">&times;</span>
            <img src="../assets/img/tools.png" alt="" width="300px">
            <div class="modal-text">
                <h3>V60 Dripper</h3>
                <table>
                    <tr class="text-light">
                        <td>Made From</td>
                        <td>:</td>
                        <td>Best Local Ceramic</td>
                    </tr>
                    <tr class="text-light">
                        <td>Made In</td>
                        <td>:</td>
                        <td>Indonesia</td>
                    </tr>
                    <tr class="text-light">
                        <td>Price</td>
                        <td>:</td>
                        <td>$99.99</td>
                    </tr>
                    <tr class="text-light">
                        <td>Brand</td>
                        <td>:</td>
                        <td>Kopi Kita</td>
                    </tr>
                    <tr class="text-light">
                        <td>Colours</td>
                        <td>:</td>
                        <td>Red, Green, Black, Blue</td>
                    </tr>
                </table>
                <p class="text-light">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aperiam suscipit culpa blanditiis illum optio repudiandae nihil nesciunt cumque odio molestias amet animi, sit architecto aliquam id tempora vitae voluptates omnis.</p>
            </div>
        </div>
    </div>
    <hr id="copyright">
    <p>Copyright 2022 © BELIKOPI by Cuan.</p>
    <!-- modal -->
    <div class="modal-content">
        <div class="modal-header">
            <span class="close">&times;</span>
            <h2>Modal Header</h2>
        </div>
        <div class="modal-body">
            <p>Some text in the Modal Body</p>
            <p>Some other text...</p>
        </div>
        <div class="modal-footer">
            <h3>Modal Footer</h3>
        </div>
    </div>
    <!-- modal -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        console.log(sessionStorage.getItem("Username"))
        AOS.init();
        function orderAdd(){
            alert('order has been add to chart')
        }

        let modalBtn = document.getElementById("detail-modal")
        let modal = document.querySelector(".modal")
        let closeBtn = document.querySelector(".close-btn")

        modalBtn.onclick = function(){
        modal.style.display = "block"
        }
        closeBtn.onclick = function(){
        modal.style.display = "none"
        }
        window.onclick = function(e){
        if(e.target == modal){
            modal.style.display = "none"
        }
    }
    </script>
</body>

</html>