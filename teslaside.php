<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include('db_conection.php');
include('functions.php');

if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['product_name']);
    $price = mysqli_real_escape_string($conn, $_POST['price']);
    $desc = mysqli_real_escape_string($conn, $_POST['description']);

    // Check if the 'image' index is set in the $_FILES array
    if (isset($_FILES['image'])) {
        switch ($_FILES['image']['error']) {
            case UPLOAD_ERR_OK:
                // File uploaded successfully
                echo 'success!!';
                break;
            case UPLOAD_ERR_NO_FILE:
                echo 'No file uploaded.';
                break;
            case UPLOAD_ERR_INI_SIZE:
            case UPLOAD_ERR_FORM_SIZE:
                echo 'Exceeded file size limit.';
                break;
            case UPLOAD_ERR_PARTIAL:
                echo 'File upload was only partially completed.';
                break;
            case UPLOAD_ERR_NO_TMP_DIR:
                echo 'Missing temporary folder.';
                break;
            case UPLOAD_ERR_CANT_WRITE:
                echo 'Failed to write file to disk.';
                break;
            case UPLOAD_ERR_EXTENSION:
                echo 'A PHP extension stopped the file upload.';
                break;
            default:
                echo 'Unknown upload error.';
                break;
        }
    } else {
        // Handle the case where 'image' is not set in $_FILES
        echo 'No file selected.';
    }

    
    // if ($_FILES['image']['error'] == UPLOAD_ERR_OK) {
    //     $image = $_FILES['image']['name'];
    //     $image_size = $_FILES['image']['size'];
    //     $image_tmp_name = $_FILES['image']['tmp_name'];
    //     $image_folder = __DIR__.'/uploaded_img/'. basename($image);

    //     if ($image_size > 10000000) {
    //         $msg[] = 'Sorry Admin, But The Size of File Is Very Big';
    //         die;
    //     } else {
    //         $insert = mysqli_query($conn, "INSERT INTO `products` (name, price, desc, image) VALUES ('$name', '$price', '$desc', '$image')");
    //         if ($insert) {
    //             if (move_uploaded_file($image_tmp_name, $image_folder)) {
    //                 $msg[] = 'Uploaded Successfully !';
    //                 header('location:index.php');
    //             } else {
    //                 $msg[] = 'Error uploading file.';
    //                 die;
    //             }
    //         } else {
    //             $msg[] = "It Couldn't Be Saved To The DB" ;
    //             die;
    //         }
    //     }
    // } else {
    //     echo 'File Error:';
    // }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Celestial-Tesla</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Mulish&display=swap"
        rel="stylesheet"
    >
    <link rel="stylesheet" href="css/teslaside.css">
</head>
<body>
    <div class="background">
        <P>Welcome </P>
        <H3>The CELESTIAL TESLA COMPANY</H3>
        <H1>DashBoard</H1>
        <br><br>
        <h3>click one of the links <strong>DashBoard</strong> <strong>Analytics</strong> <strong>Performance</strong> <strong>Reports</strong></h3>
    </div>
    <nav>
        <div class="sidebar-top">
            <span class="expand-btn">
            <img src="assets/chevron.svg" alt="Chevron">
            </span>
            <img
            src="media/red-logo.png"
            class="logo"
            alt="Laplace Logo"
            >
            <h3 class="hide">Celestial-Tesla</h3>
        </div>
        <div class="sidebar-links">
            <ul>
            <li>
                <a href="#dashboard" title="Dashboard link">
                <div class="icon">
                    <img src="assets/portfolio.svg" title="Dashboard Icon">
                </div>
                <span class="link hide">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="#analytics" title="Analytics link">
                <div class="icon">
                    <img src="assets/analytics.svg" title="Analytics Icon">
                </div>
                <span class="link hide">Analytics</span>
                </a>
            </li>
            <li>
                <a href="#manage_prod" title="Performance link">
                <div class="icon">
                    <img src="assets/dashboard.svg" title="Performance Icon">
                </div>
                <span class="link hide">Products</span>
                </a>
            </li>
            <li>
                <a href="#reports" title="Reports Link">
                <div class="icon">
                    <img src="assets/reports.svg" title="Reports Icon">
                </div>
                <span class="link hide">Reports</span>
                </a>
            </li>
            </ul>
        </div>
        
    </nav>
    <h2 id="manage_prod" >Add New Product</h2>
    <?php
        if(isset($msg)){
            foreach($msg as $msg){
                echo '<div class="msg">'.$msg.'</div>';
            }
        }
    ?>
    <form action="teslaside.php" method="POST" >
        <label for="product_name">Product Name:</label>
        <input type="text" id="product_name" name="product_name" required>

        <label for="price">Price:</label>
        <input type="number" id="price" name="price" required>

        <label for="description">Description:</label>
        <textarea id="description" name="description" rows="4" required></textarea>

        <label for="image">Product Image:</label>
        <input type="file" id="image" name="image" accept="image/jpeg, image/jpg, image/png" >

        <input type="submit" name="submit" value="Add Product"></input>
    </form>
    <script>
        const expand_btn = document.querySelector(".expand-btn");

        let activeIndex;

        expand_btn.addEventListener("click", () => {
        document.body.classList.toggle("collapsed");
        });

        const current = window.location.href;

        const allLinks = document.querySelectorAll(".sidebar-links a")

        allLinks.forEach((elem) => {
        elem.addEventListener('click', function() {
            const hrefLinkClick = elem.href;

            allLinks.forEach((link) => {
            if (link.href == hrefLinkClick){
                link.classList.add("active");
            } else {
                link.classList.remove('active');
            }
            });
        })
        });
    </script>
</body>
</html>