<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/2a421485f4.js" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="assets/css/form.css">
     <script src="assets/script/script.js"></script>
    <title>Login here</title>
</head>
<body>
<header>
        <a href="#" class="logo">Drive Me</a>
        <input type="checkbox" id="menu-bar">
        <label for="menu-bar"><i class="fa-solid fa-bars"></i></label>
        <div class="nav-bar">
            <ul>
                <li><a href="index.php"><i class="fa-solid fa-house"></i>Home</a></li>
                <li><a href="#"><i class="fa-solid fa-handshake"></i>Services</a></li>
                <li><a href="#"><i class="fa-solid fa-motorcycle"></i>Moto</a></li>
                <li><a href="login.php" onclick="login()">sign in</a></li>
                <li><a href="register.php" onclick="register()">sign up</a></li>
            </ul>
        </div>
    </header>
    <section>

     <!------------------- FORM-LOGIN-------------------------------->

    <div class="form-box">
        <form action="" method="post">
            <div class="login-form" id="login">
              <div class="top">
                <span>Do'nt have an account?<a href="register.php" onclick="login()">Sign up</a></span>
                <header>Login</header>
              </div>
              <div class="two-forms">
                <div class="input-box">
                    <input type="text" class="input-field" name="username" placeholder="Username">
                    <i class="fa-solid fa-user"></i>
                </div>
                <div class="input-box">
                    <input type="password" class="input-field" name="password" placeholder="Password">
                    <i class="fa-solid fa-key"></i>
                </div>
                <div class="input-box">
                    <input type="submit" class="submit" name="login" value="Login">
                </div>
                <div class="two-col">
                    <div class="one">
                        <input type="checkbox" name="register-check" value="login-check">
                        <label for="login-check">Remember Me</label>
                    </div>
                    <div class="two">
                        <label><a href="#">Forgot password?</a></label>
                    </div>
                </div>
              </div>
            </div>
</div>
        </form>

           <!---------------------- FOOTER ------------------------->

    <footer>
        <div class="social-icons">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-threads"></i></a>
            <a href="#"><i class="fab fa-whatsapp"></i></a>
        </div>
        <div class="navbar">
            <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">User</a></li>
            <li><a href="#">Help center</a></li>
        </ul>
        <div class="languages"></div>
        <div class="lst">
            <p>Copyright &copy;2023;Designed by <span class="designer">DM group</span></p>
        </div>
        </div>
    </footer>
</body>
</html>