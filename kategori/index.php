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
        <title>Kategori</title>
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
        <div id="main" class="pb-5"></div>

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
            $(document).ready(function () {
                $('#footer').load('../base/footer.html');
                $('#header').load('../base/header.html');
            });
            let url = window.location.href;
            const getData = url.split('?')[1].split('=')[1];
            if (getData === 'peralatan') {
                $('#main').load('../katalog/kategori/peralatan.php');
            } else if (getData === 'kopi') {
                $('#main').load('../katalog/kategori/kopi.php');
            }
            const modal = (src, name) => {
                num = 0;
                $('#counter').val(num);
                $('#name').html(name);
                $('.modal-custom').addClass('show');
                $('body').addClass('lockscroll');
                $('#img-modal').attr('src', src);
            };

            const onClose = () => {
                num = 0;
                $('.modal-custom').removeClass('show');
                $('body').removeClass('lockscroll');
            };

            // counter function
            $('#increse').click(function () {
                num += 1;
                $('#counter').val(num);
            });
            $('#decres').click(function () {
                num -= 1;
                $('#counter').val(num);
            });

            var num;
        </script>
    </body>
</html>
