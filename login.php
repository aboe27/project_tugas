
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="/img/logo.png">
    
    <title>LOGIN | BPTN SYARIAH</title>
</head>

<body>
<link rel="stylesheet" href="login.css">
    <div class="hero">
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Log in</button>
                <button type="button" class="toggle-btn" onclick="register()">Register</button>
            </div>
            <div class="social-icons">
                <img src="/img/logo.png">
            </div>
            <form id="login" class="input-group" method="post" action="cek_login.php">
                <input type="text" class="input-field" name="username" placeholder="User Id" required>
                <input type="password" class="input-field" name="password" placeholder="Enter Password" required>
                <button type="submit" class="submit-btn">Log In</button>
            </form>
            <form id="register" class="input-group"  method="post" action="register.php">
                <input type="text" class="input-field" name="nama" placeholder="name" required>
                <input type="text" class="input-field" name="username" placeholder="username" required>
                <input type="text" class="input-field" name="email" placeholder="email" required>
                <input type="text" class="input-field" name="password" placeholder="Enter Password" required>
                <button type="submit" class="submit-btn">Register</button>
            </form>
        </div>
    </div>

    <script>
        var x = document.getElementById("login");
        var y = document.getElementById("register");
        var z = document.getElementById("btn");

        function register() {
            x.style.left = "-400px";
            y.style.left = "50px";
            z.style.left = "110px";
        }

        function login() {
            x.style.left = "50px";
            y.style.left = "450px";
            z.style.left = "0";
        }
    </script>


</body>

</html>