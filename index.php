<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/2a421485f4.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/script/script.js"></script>
    <title>Drive Me</title>
</head>
<body>
    <header>
        <a href="#" class="logo">Drive Me</a>
        <input type="checkbox" id="menu-bar">
        <label for="menu-bar"><i class="fa-solid fa-bars"></i></label>
        <div class="nav-bar">
            <ul>
                <li><a href="#"><i class="fa-solid fa-house"></i>Home</a></li>
                <li><a href="#"><i class="fa-solid fa-handshake"></i>Services</a></li>
                <li><a href="#"><i class="fa-solid fa-motorcycle"></i>Moto</a></li>
                <li><a href="#"><i class="fa-solid fa-taxi"></i>Taxi</a></li>
                <li><a href="dashboard.php"><i class="fa-solid fa-user"></i>User</a></li>
            </ul>
        </div>
    </header>
    <section class="home">
        <div class="contents">
        <h1>Your Satisfaction<br><span>is our comfort,</span></h1>
        <p>W3Schools maintains a complete JavaScript reference, including all HTML and browser objects.
           The reference contains examples for all properties, methods and events, and is continuously updated according to the latest web standards
           We have gathered a variety of PHP exercises (with answers) for each PHP Chapter.
           Try to solve an exercise by filling in the missing parts of a code. If you're stuck, hit the "Show Answer" button to see what you've done wrong</p>
           <a href="#">Read more</a><br><br><br>
        </div>
        <div class="media-icons">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
        </div>
        <a class="btn" href="login.php">Login</a>
    </section>
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