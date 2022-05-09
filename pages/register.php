<!DOCTYPE HTML>
<html>
    <head>
        <title>Registrasi</title>
        <link rel="stylesheet" href="../assets/css/style.css">
    </head>

    <body>
        <div class="container">
            <div class="kotak_regist">
            <h1>BELIKOPI.</h1>
                <form id="regis" action="">
                    <div class="col">
                        <input type="text" name="first_name" class="first_name form_regist" placeholder="First Name">
                        <input type="text" name="last_name" class="last_name form_regist" placeholder="Last Name">
                    </div>
                    <input type="text" name="email" class="form_regist" placeholder="Email">
                    <input type="text" name="username" class="form_regist" placeholder="Username">
                    <input type="text" name="password" class="form_regist" placeholder="Password">
                    <br>
                    <center>
                        <button onclick="resgist()" class="tombol_regist" value = "login">Register </button>
                    </center>
                    <br>
                    <center>
                        <p> Have a account?
                            <a href="login.html">Login here</a>
                        </p>
                        <div id="results"></div>
                    </center>
                </form>
            </div>
        </div>
    </body>
</html>
