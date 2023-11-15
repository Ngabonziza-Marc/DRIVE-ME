<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/2a421485f4.js" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="assets/css/form.css">
     <script src="assets/script/script.js"></script>
    <title>Register here</title>
</head>
<body>
   <!----------------------  NAVIGATION BAR ------------------------->
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
             <!------------------- FORM-REGISTER -------------------------------->
             <div class="form-box">
             <form action="" method="post">
            <div class="registration-form" id="register">
              <div class="top">
                <span>Already have an account<a href="login.php" onclick="register()">Sign in</a></span>
                <header>Sign up</header>
              </div>
              <div class="two-forms">
                <div class="input-box">
                    <input type="text" class="input-field" name="fname" placeholder="Firstname">
                    <i class="fa-solid fa-user"></i>
                </div>
                <div class="input-box">
                    <input type="text" class="input-field" name="lname" placeholder="Lastname">
                    <i class="fa-solid fa-user"></i>
                </div>
                <div class="input-box">
                    <input type="text" class="input-field" name="email" placeholder="Email">
                    <i class="fa-solid fa-envelope"></i>
                </div>
                <div class="input-box">
                    <input type="text" class="input-field" name="phone" placeholder="Phone">
                    <i class="fa-solid fa-phone"></i>
                </div>
                <div class="input-box">
                    <input type="password" class="input-field" name="password" placeholder="Password">
                    <i class="fa-solid fa-key"></i>
                </div>
                <div class="input-box">
                    <input type="password" class="input-field" name="Comfirm Password" placeholder="Comfirm Password">
                    <i class="fa-solid fa-key"></i>
                </div>
                <div class="input-box">
                    <input type="submit" class="submit" name="submit" value="register">
                </div>
                <div class="two-col">
                    <div class="one">
                        <input type="checkbox" name="register-check" value="register-check">
                        <label for="register-check">Remember Me</label>
                    </div>
                    <div class="two">
                        <label><a href="#">Terms & Conditions</a></label>
                    </div>
                </div>
              </div>
            </div>
        </div>
</div>
    </section>
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
            <li><a href="/index.php">Home</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">User</a></li>
            <li><a href="#">Help center</a></li>
        </ul>
        <div class="languages"></div>
        <div class="lst">
            <p>Copyright &copy;<?php $currentYear = date('Y'); echo "$currentYear"; ?>;Designed by <span class="designer">DM group</span></p>
        </div>
        </div>
    </footer>
</body>
</html>