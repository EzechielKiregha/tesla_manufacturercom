<?php

session_start();
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    include('db_conection.php');
    include('functions.php');

    if (isset($_POST['submit'])){
        $msg = loginUser($conn, true);
    }
    
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celestial-Telsa - Login</title>
    <link rel="icon" href="media/tesla-icon.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="css/signup.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <header>
        <nav>
            <a href="index.php" ><img src="media/logo.png" alt="tesla"></a>
            <ul>
                <li><a href="signup.php" class="back">Sign Up</a></li>
            </ul>
            <ul>
                <li><a href="contact.php" alt="support"><i class='far fa-question-circle' style='font-size:24px'></i></a></li>
                <li><a href="#" alt="language"><i class='fas fa-globe' style='font-size:20px'></i></a></li>
                <li><a href="signup.php" alt="teslaaccount"><i class='far fa-user-circle' style='font-size:20px'></i></a></li>
            </ul>
        </nav>
    </header>
    <div class="background"></div>
    <div class="centering">
            <form class="my-form-login" action="" method="POST" >
                <div class="signin-welcome-row">
                    <img class="signin-welcome" alt="Logo" src="media/red-logo.png" >
                    <!-- <h1>Login</h1> -->
                    <?php
                            if(isset($msg)){
                            foreach($msg as $msg){
                                echo '<div class="msg">'.$msg.'</div>';
                            }
                        }
                    ?>                      
                </div>
                <div class="socials-row">
                    <a href="#" title="Use Google" >
                        <img src="media/google.png" alt="Google">
                        Use Google
                    </a>
                    <a href="#" title="Use Facebook" >
                        <img src="media/facebook.png" alt="Facebook">
                        Use Facebook
                    </a>
                </div>
                <div class="divider">
                    <div class="divider-line"></div>
                    OR
                    <div class="divider-line"></div>
                </div>
                <div class="my-form__content">
                    <div class="text-field">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" placeholder="Your Email" autocomplete="off" required
                        >
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" placeholder="Your Password" required>

                    </div>
                    <input type="submit" name="submit" class="my-form__button" value="login">
                </div>
                <div class="my-form__actions">
                    <div>
                        By registering you agree to our
                        <a href="#" title="Reset Password">Terms</a>
                        and <a href="#" title="Reset Password">Privacy</a>
                    </div>
                    <!-- <div class="my-form__signin">
                        <a href="signup.php" title="Sign Up">Sign-up</a>
                    </div> -->
                </div>
            </form>
        </div>
    <footer>
        <p>&copy; Celestial-Tesla Company. All rights reserved.</p>
    </footer>
</body>
</html>

