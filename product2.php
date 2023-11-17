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
    <title>Product Details</title>
    <link rel="icon" href="media/tesla-icon.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="css/product2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
  <header>
    <nav>
        <a href="index.php" ><img src="media/logo.png" alt="tesla"></a>
        <ul>
          <li><a href="home.php">Home</a></li>
          <li><a href="#related">View More</a></li>
          <li><a href="shop.php">Accessories</a></li> 
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
    </nav>
</header>
</header>
    <div class="container_shop">
        <div class="images">
          <img src="media/cars/modely.avif" />
        </div>
        <p class="pick">Hot Model</p>
        <div class="uniqness">
          <div class="uniq">
            <h2>1.9 s</h2>
            <h4>60 mph</h4>
          </div>
          <div class="uniq">
            <h2>200 mph</h2>
            <h4>Top Speed</h4>
          </div>
          <div class="uniq">
            <h2>396 mi</h2>
            <h4>Max Range</h4>
          </div>
        </div>
        <?php 
          if (!isset($_SESSION['user_data'])) {
            // User is not logged in
            echo '<div class="product">';
            echo '    <p>Celestial - Tesla</p>';
            echo '    <h1>MODEL Y</h1>';
            echo '    <h2>Lease starting at $399/mo</h2>';
            echo '    <p class="desc">A premium electric sedan that has gained popularity for its exceptional performance and range. It offers a minimalist interior design, cutting-edge technology, and a smooth driving experience, making it an attractive option in the electric vehicle market.</p>';
            echo '    <div class="buttons">';
            echo '        <p>You need to have an account before making an order. <a href="signup.php">Click here</a> to create a free account.</p>';
            echo '    </div>';
            echo '</div>';
        } else {
            // User is logged in, show the order buttons
            echo '<div class="product">';
            echo '    <p>Celestial - Tesla</p>';
            echo '    <h1>MODEL Y</h1>';
            echo '    <h2>Lease starting at $399/mo</h2>';
            echo '    <p class="desc">A premium electric sedan that has gained popularity for its exceptional performance and range. It offers a minimalist interior design, cutting-edge technology, and a smooth driving experience, making it an attractive option in the electric vehicle market.</p>';
            echo '    <div class="buttons">';
            echo '        <button class="checkout">Check out</button>';
            echo '        <button class="fav">🛒</button>';
            echo '    </div>';
            echo '</div>';
        }
        ?>
      </div>
      <div class="btn-box">
        <a href="#related">
        ⬇
        </a>
    </div>
    <br><br><hr>
    <div class="related" id="related" >
      <h1>Our Best Cars</h1>
    </div>
    <div class="grid">
      <section class="rent_section layout_padding">
        <!-- <div class="container"> -->
        <div class="rent_container">
            <div class="box">
            <div class="img-box">
                <img src="media/cars/modelX.jpg" alt="">
            </div>
            <div class="price"><a href="">Model X <br>From $68,590</a>
            </div>
            </div>
            <div class="box">
            <div class="img-box">
                <img src="media/cars/model3.jpg" alt="">
            </div>
            <div class="price"><a href="">Model 3. <br>Lease starting at $399/mo</a>
            </div>
            </div>
            <div class="box">
            <div class="img-box">
                <img src="media/cars/Tesla-Roadster-103.jpg" alt="">
            </div>
            <div class="price"><a href="">Model X <br>$389,99/mo</a>
            </div>
            </div>
            <div class="box">
            <div class="img-box">
                <img src="media/cars/modelS.jpg" alt="">
            </div>
            <div class="price"><a href="">Model S. <br>From $71,090</a>
            </div>
            </div>
        </div>
    </section>
    </div>
</body>
</html>