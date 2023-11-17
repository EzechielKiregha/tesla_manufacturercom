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
    <title>Shop | Celestial-Telsa</title>
    <link rel="icon" href="media/tesla-icon.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="css/shop.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="header-car">
        <div class="navbar-car">
        <a href="index.php"><img src="media/logo.png" alt="Logo" class="logo"></a>
            <ul>
                <li><a href="cars.php">Vehicules</a></li>
                <li><a href="energy.php">Energy</a></li>
                <li><a href="charging.php">Charging</a></li>
                <li><a href="about.php">Discover</a></li>
                <li><a href="shop.php">Shop</a></li>
            </ul>
            <?php

                echo '   <ul>';
                if (isset($id)) {
                    echo '       <li>' . $name . '</li>';
                    echo '       <li>';
                    echo '           <form action="logout.php" method="post" class="logout-form">';
                    echo '               <input type="hidden" name="user_id" value="' . $id . '">';
                    echo '               <button style="font-size:24px"> <i class="fas fa-power-off"></i>';
                    echo '           </form>';
                    echo '       </li>';
                } else {
                    echo '       <li><a href="contact.php" alt="support"><i class="far fa-question-circle" style="font-size:24px"></i></a></li>';
                    echo '       <li><a href="#" alt="language"><i class="fas fa-globe" style="font-size:20px"></i></a></li>';
                    echo '       <li><a href="signup.php" alt="teslaaccount"><i class="far fa-user-circle" style="font-size:20px"></i></a></li>';
                }
                echo '   </ul>';
            ?>

        </div>
        <div class="related" id="related" >
            <h1>CyberBeer + CyberStein Limited Edition Set</h1><br>
        </div>
        <div>
            <h2>Cheers, Sit, Repeat</h2>
        </div>
        <div class="order">
            <a href="#rel">Shop Now</a>
        </div>
    </div>
    <div class="rel" id="rel" >
        <h1>VEHICULES & PRODUCT - ACCESSORIES</h1>
    </div>
    <div class="grid" >
    <section class="rent_section layout_padding">
        <div class="rent_container">
            <div class="box">
            <div class="img-box">
                <img src="media/charge/Mega-Menu-Charging-Charging.avif" alt="">
            </div>
            <div class="price"><a href="product2.php">Charging</a>
            </div>
            </div>
            <div class="box">
            <div class="img-box">
                <img src="media/shop/Mega-Menu-Shop-Apparel.avif" alt="">
            </div>
            <div class="price"><a href="">Apparel</a>
            </div>
            </div>
            <div class="box">
            <div class="img-box">
                <img src="media/shop/Mega-Menu-Shop-Vehicle-Accessories.avif" alt="">
            </div>
            <div class="price"><a href="">Vehicules Accessories</a>
            </div>
            </div>
        </div>
        <div class="rent_container">
            <div class="box">
            <div class="img-box">
                <img src="media/acc/Men_web.avif" alt="">
            </div>
            <div class="price"><a href="product2.php">Men Web</a>
            </div>
            </div>
            <div class="box">
            <div class="img-box">
                <img src="media/shop/Mega-Menu-Shop-Lifestyle.avif" alt="">
            </div>
            <div class="price"><a href="">Lifestyle</a>
            </div>
            </div>
            <div class="box">
            <div class="img-box">
                <img src="media/acc/Kids_web.avif" alt="">
            </div>
            <div class="price"><a href="">Kids Web</a>
            </div>
            </div>
        </div>
        <div class="rent_container">
            <div class="box">
            <div class="img-box">
                <img src="media/charge/Mega-Menu-Charging-Charging.avif" alt="">
            </div>
            <div class="price"><a href="product2.php">Charging</a>
            </div>
            </div>
            <div class="box">
            <div class="img-box">
                <img src="media/charge/Mega-Menu-Charging-Supercharging-NA.avif" alt="">
            </div>
            <div class="price"><a href="">SuperCharging</a>
            </div>
            </div>
            <div class="box">
            <div class="img-box">
                <img src="media/charge/Mega-Menu-Charging-Home-Charging.avif" alt="">
            </div>
            <div class="price"><a href="">Home Charging</a>
            </div>
            </div>
        </div>
        <div class="rent_container">
            <div class="box">
            <div class="img-box">
                <img src="media/charge/Mega-Menu-Charging-Charging.avif" alt="">
            </div>
            <div class="price"><a href="product2.php">Charging</a>
            </div>
            </div>
            <div class="box">
            <div class="img-box">
                <img src="media/charge/Mega-Menu-Charging-Supercharging-NA.avif" alt="">
            </div>
            <div class="price"><a href="">SuperCharging</a>
            </div>
            </div>
            <div class="box">
            <div class="img-box">
                <img src="media/charge/Mega-Menu-Charging-Home-Charging.avif" alt="">
            </div>
            <div class="price"><a href="">Home Charging</a>
            </div>
            </div>
        </div>
        <div class="rent_container">
            <div class="box">
            <div class="img-box">
                <img src="media/charge/Mega-Menu-Charging-Charging.avif" alt="">
            </div>
            <div class="price"><a href="product2.php">Charging</a>
            </div>
            </div>
            <div class="box">
            <div class="img-box">
                <img src="media/charge/Mega-Menu-Charging-Supercharging-NA.avif" alt="">
            </div>
            <div class="price"><a href="">SuperCharging</a>
            </div>
            </div>
            <div class="box">
            <div class="img-box">
                <img src="media/charge/Mega-Menu-Charging-Home-Charging.avif" alt="">
            </div>
            <div class="price"><a href="">Home Charging</a>
            </div>
            </div>
        </div>
    </section>
    </div>
        <div class="btn-box">
            <a href="">
            Find / Shop
            </a>
        </div>
        <!-- </div> -->
    </section>
    </div>
    <!-- Footer Start -->
    <div class="container-fluid foo text-light footer pt-4 mt-4 wow fadeIn" data-wow-delay="0.1s">
        <div class="container foo">
            <div class="row ">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-3">Address</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, Kigali, RWANDA</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+250 790 802 201</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@Celestial-Telsa.com</p>
                    <div class="d-flex pt-1">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Opening Hours</h4>
                    <h6 class="text-light">Monday - Friday:</h6>
                    <p class="mb-4">09.00 AM - 09.00 PM</p>
                    <h6 class="text-light">Saturday - Sunday:</h6>
                    <p class="mb-0">09.00 AM - 12.00 PM</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Services</h4>
                    <a class="btn btn-link" href="">Diagnostic Test</a>
                    <a class="btn btn-link" href="">Engine Servicing</a>
                    <a class="btn btn-link" href="">Tires Replacement</a>
                    <a class="btn btn-link" href="">Oil Changing</a>
                    <a class="btn btn-link" href="">Vacuam Cleaning</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Newsletter</h4>
                    <p>Subscribe to our Newsletter, Get Notified when new products are available</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="email" placeholder="Your email">
                        <button type="submit" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <hr>
        <br>
        <div class="container">
            <div class="copyright">
                <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom text-md" href="#">Celestial-Telsa Company</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a class="text-md" href="home.php">Home</a>
                            <a class="text-md" href="contact.php">Help</a>
                            <a class="text-md" href="">FAQs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>