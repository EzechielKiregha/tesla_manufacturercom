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
    <title>About | Celestial-Telsa</title>
    <link rel="icon" href="media/tesla-icon.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="css/about.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="header">
        <div class="navbar">
        <a href="index.php"><img src="media/logo.png" alt="Logo" class="logo"></a>
            <ul>
                <li><a href="cars.php">Vehicules</a></li>
                <li><a href="energy.php">Energy</a></li>
                <li><a href="charging.php">Charging</a></li>
                <li><a href="#">Discover</a></li>
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
            <h1>About Us</h1><br>
            
        </div>
        <div class="p"><p>Accelerating the World's Transition to Sustainable Energy</p></div>
        <div class="info">
            <ul>
                <li><strong>100k+ </strong>Employees</li>
                <li><strong>WORLD </strong>One Mission</li>
                <li><strong>8.4 Mmt* </strong>CO2e Avoided in 2021</li>
            </ul>
        </div>
        <div class="order">
            <a href="#header1">⬇</a>
        </div>
    </div>
    <section class="header1" id="header1">
        <div class="related" id="related" >
            <h1>The Future is Sustainable</h1><br>
        </div>
        <div class="p"><p>We’re building a world powered by solar energy, running on batteries and <br> transported by electric vehicles. Explore the most recent impact of our products,<br> people and supply chain.</p></div>
        
        <div class="order">
            <a href="#more">Explore Impact</a>
        </div>
    </section>
    <section class="container_shop" id="more">
            <div class="images">
            <img src="media/about/About-Us-Power-Vehicle-Desktop-Global.avif" />
            </div>
            <p class="pick">Celestial-Telsa</p>
            <div class="product">
            <h1>Power Earth</h1>
            <p class="desc">
            We design sustainable systems that are massively scalable—resulting in the greatest environmental benefit possible. Our energy generation and storage products work together with our electric vehicles to amplify their impact.</p>
            <div class="buttons">
                <button class="checkout">Explore Impact</button>
                <button class="fav">☑</button>
            </div>
            </div>
    </section>
    <section class="container_shop" id="more">
            <div class="images">
            <img src="media/about/About-Us-Machine-Desktop-Global.avif" />
            </div>
            <p class="pick">Celestial-Telsa</p>
            <div class="product">
            <h1>The Machine That Builds the Machine</h1>
            <p class="desc">
            To shift humanity away from fossil fuels, we need extreme scale. Headquartered in Texas, we operate six huge, vertically integrated factories across three continents. With over 100,000 employees, our teams design, build, sell and service our products in-house.</p>
            <div class="buttons">
                <button class="checkout">see your savings</button>
                <button class="fav">Schedule</button>
            </div>
            </div>
    </section>
    <section class="container_shop" id="more">
            <div class="images">
            <img src="media/about/About-Us-Exceptional-Desktop-Global.avif" />
            </div>
            <p class="pick">Celestial-Telsa Team</p>
            <div class="product">
            <h1>The Celestial-Telsa Team</h1>
            <p class="desc">
    Use solar energy to power your home and reduce your dependence on the grid. Purchase solar at the lowest price of any national provider with Tesla's price match guarantee and take control of your monthly electricity bill. Schedule a virtual consultation with a Tesla Advisor to learn more.</p>
            <div class="buttons">
                <button class="checkout">Join Us</button>
                <button class="fav">See Jobs</button>
            </div>
            </div>
    </section>
    <!-- footer -->
    <br>
    <hr>
    <br>
    <div class="container-fluid foo text-light footer pt-4 mt-4 wow fadeIn" data-wow-delay="0.1s">
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