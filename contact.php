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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celestial-Telsa - Contact</title>
    <link rel="icon" href="media/tesla-icon.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-sm navbar-dark">
            <div class="container-fluid">
                <a href="home.php" ><img src="media/logo.png" alt="tesla"></a>
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="home.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#faqs">FAQs</a></li>
                    <li class="nav-item"><a class="nav-link" href="shop.php" >Shop</a></li>
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
        </nav>
    </header>
    <!-- Contact Start -->
    <div class="container-fluid py-5" id="contact">
        <div class="container py-5">
            <div class="section-title position-relative text-center">
                <h6 class="text-uppercase text-primary mb-3" style="letter-spacing: 3px;">Contact</h6>
                <h1 class="font-secondary display-4">Get In Touch</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-form">
                        <div id="success"></div>
                        <form name="sentMessage" id="contactForm" novalidate="novalidate">
                            <div class="form-row">
                                <div class="col-sm-6 control-group">
                                    <input type="text" class="form-control  bg-secondary border-0 py-4 px-3" id="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="col-sm-6 control-group">
                                    <input type="email" class="form-control text-light bg-secondary border-0 py-4 px-3" id="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control text-light bg-secondary border-0 py-4 px-3" id="subject" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control text-light bg-secondary border-0 py-2 px-3" rows="6" id="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-primary font-weight-bold py-3 px-5" type="submit" id="sendMessageButton">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

    <!-- FAQs Start -->
    <section class="bg-image"></section>
        <div class="container-fluid" id="faqs">
        <div class="bg-text py-5">
            <div class="section-title position-relative text-center">
                <h6 class="text-uppercase text-primary mb-3" style="letter-spacing: 3px;">FAQs</h6>
                <h1 class="display-4">You Should Know</h1>
            </div>
            <div class="row">
                <div class="col-md-6 border-right border-primary">
                    <div class="text-center text-md-right mr-md-3 mb-4 mb-md-0">
                        <h3 class="mb-4">Why Switch to Solar?</h3>
                        <h5 class="mb-3"><i class="fa fa-check text-success float-md-right mr-2 mr-md-0 ml-md-2"></i>Innovative Technology</h5>
                        <h5 class="mb-3"><i class="fa fa-check text-success float-md-right mr-2 mr-md-0 ml-md-2"></i>Performnce and Range</h5>
                        <h5 class="mb-3"><i class="fa fa-check text-success float-md-right mr-2 mr-md-0 ml-md-2"></i>Supercharger Network</h5>
                        <h5 class="mb-0"><i class="fa fa-check text-success float-md-right mr-2 mr-md-0 ml-md-2"></i>Safety Features</h5>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="text-center text-md-left ml-md-3">
                        <h3 class="mb-4">Why Choose Us?</h3>
                        <h5 class="mb-3"><i class="fa fa-check text-success mr-2"></i>Environmental Sustainability</h5>
                        <h5 class="mb-3"><i class="fa fa-check text-success mr-2"></i>Quality and Design</h5>
                        <h5 class="mb-3"><i class="fa fa-check text-success mr-2"></i>Regular Software Updates</h5>
                        <h5 class="mb-0"><i class="fa fa-check text-success mr-2"></i>Resale Value</h5>
                    </div>
                </div>
                <div class="col-md-12 text-center pt-3">
                    <a class="btn btn-primary font-weight-bold py-3 px-5 mt-4 btn-scroll" href="contact.php">Get In Touch</a>
                </div>
            </div>
            </div>
        </div>
    <!-- FAQs End -->
    <hr>
    <!-- Footer Start -->
    <div class="container-fluid foo text-light footer pt-4 mt-4 wow fadeIn" data-wow-delay="0.1s">
        <div class="container foo">
            <div class="row ">
                <div class="col-lg-3 col-md-6">
                    <h4 class=" mb-3">Address</h4>
                    <p class="mb-2 text-light"><i class="fa fa-map-marker-alt me-3"></i>123 Street, Kigali, RWANDA</p>
                    <p class="mb-2 text-light"><i class="fa fa-phone-alt me-3"></i>+250 790 802 201</p>
                    <p class="mb-2 text-light"><i class="fa fa-envelope me-3"></i>info@Celestial-Telsa.com</p>
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
                    <p class="text-light mb-4">09.00 AM - 09.00 PM</p>
                    <h6 class="text-light">Saturday - Sunday:</h6>
                    <p class="text-light mb-0">09.00 AM - 12.00 PM</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class=" mb-4">Services</h4>
                    <a class="btn btn-link" href="">Diagnostic Test</a>
                    <a class="btn btn-link" href="">Engine Servicing</a>
                    <a class="btn btn-link" href="">Tires Replacement</a>
                    <a class="btn btn-link" href="">Oil Changing</a>
                    <a class="btn btn-link" href="">Vacuam Cleaning</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="mb-4">Newsletter</h4>
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
        <div class="container foo">
            <div class="copyright">
                <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom text-md" href="#">Celestial-Telsa Company</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a class="text-md" href="home.php">Home</a>
                            <a class="text-md" href="#contact">Help</a>
                            <a class="text-md" href="#faqs">FAQs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>