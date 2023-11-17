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
    <title>Celestial-Telsa - Vehicules</title>
    <link rel="icon" href="media/tesla-icon.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="css/cars.css"><link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->

    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> -->
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
            <h1>Experience the Future of Transportation</h1><br>
            
        </div>
        <div class="p"><p>Discover our cutting-edge electric vehicles and sustainable energy solutions.</p></div>
        <div class="info">
            <ul>
                <li>Guaranteed Lowest Price in The World</li>
                <li>Integrated Product Ecosystem</li>
                <li>24/7 System Performance Monitoring</li>
            </ul>
        </div>
        <div class="order">
            <a href="#more">⬇</a>
        </div>
    </div>
    <section class="container_shop" id="more">
            <div class="images">
            <img src="media/cars/modelX.jpg" />
            </div>
            <p class="pick">Hot Model</p>
            <div class="product">
            <h1>Model - X</h1>
            <p class="desc">
            The Tesla Model Y is a compact electric SUV that offers impressive range and versatility. With its sleek design and advanced features, it combines the benefits of an electric vehicle with the practicality of an SUV.</p>
            <div class="buttons">
                <button class="checkout"><a href="product2.php">more details</a></button>
                <button class="fav">Schedule</button>
            </div>
            </div>
    </section>
    <section class="container_shop" id="more">
            <div class="images">
            <img src="media/cars/modelS.jpg" />
            </div>
            <p class="pick">Hot Model</p>
            <div class="product">
            <h3>Savings</h3><br>
            <h1>model - S</h1>
            <p class="desc">
            The Tesla Model S is a groundbreaking electric sedan known for its high-performance capabilities and luxurious design. With its sleek exterior, cutting-edge technology, and impressive range, the Model S has set new standards in the electric vehicle industry.</p>
            <div class="buttons">
                <button class="checkout"><a href="product2.php">more details</a></button>
                <button class="fav">Schedule</button>
            </div>
            </div>
    </section>
    <section class="container_shop" id="more">
            <div class="images">
            <img src="media/modelY.jpg" />
            </div>
            <p class="pick">Hot Model</p>
            <div class="product">
            <h1>Model Y</h1>
            <p class="desc">
    Use solar energy to power your home and reduce your dependence on the grid. Purchase solar at the lowest price of any national provider with Tesla's price match guarantee and take control of your monthly electricity bill. Schedule a virtual consultation with a Tesla Advisor to learn more.</p>
            <div class="buttons">
                <button class="checkout"><a href="product2.php">more details</a></button>
                <button class="fav">Schedule</button>
            </div>
            </div>
    </section>
    <section class="container_shop" id="more">
            <div class="images">
            <img src="media/cars/modeX2.jpg" />
            </div>
            <p class="pick">Hot Model</p>
            <div class="product">
            <h1>Model - X</h1>
            <p class="desc">
    Use solar energy to power your home and reduce your dependence on the grid. Purchase solar at the lowest price of any national provider with Tesla's price match guarantee and take control of your monthly electricity bill. Schedule a virtual consultation with a Tesla Advisor to learn more.</p>
            <div class="buttons">
                <button class="checkout"><a href="product2.php">more details</a></button>
                <button class="fav">Schedule</button>
            </div>
            </div>
    </section>
    <section class="container_shop" id="more">
            <div class="images">
            <img src="media/Teslas-Mission-Accelerating-Worlds-Transition-to-Sustainable-Energy.jpg" />
            </div>
            <p class="pick">Hot Model</p>
            <div class="product">
            <h3>Savings</h3><br>
            <h1>Bureau Tesla</h1>
            <p class="desc">
    Use solar energy to power your home and reduce your dependence on the grid. Purchase solar at the lowest price of any national provider with Tesla's price match guarantee and take control of your monthly electricity bill. Schedule a virtual consultation with a Tesla Advisor to learn more.</p>
            <div class="buttons">
                <button class="checkout"><a href="product2.php">more details</a></button>
                <button class="fav">Schedule</button>
            </div>
            </div>
    </section>
    <section class="container_shop" id="more">
            <div class="images">
            <img src="media/Tesla-Musk-autonomous-vehicles.jpg" />
            </div>
            <p class="pick">Hot Model</p>
            <div class="product">
            <h3>Savings</h3><br>
            <h1>automous</h1>
            <p class="desc">
    Use solar energy to power your home and reduce your dependence on the grid. Purchase solar at the lowest price of any national provider with Tesla's price match guarantee and take control of your monthly electricity bill. Schedule a virtual consultation with a Tesla Advisor to learn more.</p>
            <div class="buttons">
                <button class="checkout"><a href="product2.php">more details</a></button>
                <button class="fav">Schedule</button>
            </div>
            </div>
    </section>
    <section class="container_shop" id="more">
            <div class="images">
            <img src="media/cars/hero-image.fill.size_1248x702.v1690498915.jpg" />
            </div>
            <p class="pick">Hot Model</p>
            <div class="product">
            <h3>Savings</h3><br>
            <h1>Energy-Megapack</h1>
            <p class="desc">
    Use solar energy to power your home and reduce your dependence on the grid. Purchase solar at the lowest price of any national provider with Tesla's price match guarantee and take control of your monthly electricity bill. Schedule a virtual consultation with a Tesla Advisor to learn more.</p>
            <div class="buttons">
                <button class="checkout"><a href="product2.php">more details</a></button>
                <button class="fav">Schedule</button>
            </div>
            </div>
    </section>
     <!-- Footer Start -->
     <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Address</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, Kigali, RWANDA</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+250 790 802 201</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@Celestial-Telsa.com</p>
                    <div class="d-flex pt-2">
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
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
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
                        &copy; <a class="border-bottom" href="#">Celestial-Telsa Company</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="home.php">Home</a>
                            <a href="contact.php">Help</a>
                            <a href="">FQAs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>