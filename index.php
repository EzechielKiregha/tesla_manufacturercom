<?php

    session_start();
    
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    include('db_conection.php');
    include('functions.php');
    
    if(isset($_SESSION['user_data'])){
        $user_data = $_SESSION['user_data'];
        
        if ($user_data) {
            $name = $user_data['name'];
            $id = $user_data['id'];
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celestial-Telsa</title>
    <link rel="icon" href="media/tesla-icon.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="css/signup.css"> -->
</head>
<body>
    <div class="header" id="header">
        <nav>
            <img src="media/logo.png" class="logo">
            <ul>
                <li><a id="modelx" href="#">Model X</a></li>
                <li><a id="modely" href="#">Model Y</a></li>
                <li><a id="models" href="#">Model S</a></li>
                <li><a id="model3" href="#">Model 3</a></li>
            </ul>
            <div class="navbar-collapse" id="">
                <div >
                    <a href="shop.php"><button class="btn">Shop</button></a>
                </div>
                <div class="custom_menu-btn">
                <button onclick="openNav()">
                    <span class="s-1"> </span>
                    <span class="s-2"> </span>
                    <span class="s-3"> </span>
                </button>
                </div>
                <div id="myNav" class="overlay">
                    <div class="overlay-content">
                        <a href="home.php">Home</a>
                        <a href="about.php">About</a>
                        <a href="contact.php">Contact Us</a>
                        <br><hr><br>
                        <a href="shop.php">Shop Now</a>
                        <a href="cars.php">Vehicules</a>
                        <a href="energy.php">Energy</a>
                        <a href="charging.php">Charging</a>
                        <br><hr><br>
                        <a href="login.php">Login</a>
                    </div>
                </div>
            </div>
        </nav>
        <div class="info">
            <div>
                <h2>1.9 s</h2>
                <p>60 mph</p>
            </div>
            <div>
                <h2>200 mph</h2>
                <p>Top Speed</p>
            </div>
            <div>
                <h2>396 mi</h2>
                <p>Max Range</p>
            </div>
            <div class="line">
            </div>
            <div>
                <h2 id="model"> Model X</h2>
            </div>
        </div>

    </div>

    <script>
        var header = document.getElementById("header")
        var mx = document.getElementById("modelx");
        var my = document.getElementById("modely");
        var ms = document.getElementById("models");
        var m3 = document.getElementById("model3");
        var model = document.getElementById("model");

        mx.onclick = function(){
            header.style.backgroundImage = "url('media/cars/Homepage-Model-X-Desktop-LHD.avif')";
            model.innerHTML = "Model X";
        }
        my.onclick = function(){
            header.style.backgroundImage = "url(media/cars/modely.avif)";
            model.innerHTML = "Model Y";
        }
        ms.onclick = function(){
            header.style.backgroundImage = "url(media/cars/Homepage-Model-S-Desktop-LHD-6.22.avif)";
            model.innerHTML = "Model S";
        }
        m3.onclick = function(){
            header.style.backgroundImage = "url(media/cars/Homepage-Model-3-Desktop-NA.avif)";
            model.innerHTML = "Model 3";
        }
    </script>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
    </script>
    <script src="js/custom.js"></script>

</body>
</html>