<?php
// Assuming you have the product and user data in your sessions
// Replace these placeholders with your actual data
$_SESSION['product_data'] = [
    ['No' => 1, 'Product_name' => 'Product A', 'User_name' => 'User 1', 'Amount' => 400, 'Status' => 'Completed'],
    ['No' => 1, 'Product_name' => 'Product A', 'User_name' => 'User 1', 'Amount' => 144, 'Status' => 'Completed'],
    ['No' => 1, 'Product_name' => 'Product A', 'User_name' => 'User 1', 'Amount' => 107, 'Status' => 'Completed'],
    ['No' => 1, 'Product_name' => 'Product A', 'User_name' => 'User 1', 'Amount' => 100, 'Status' => 'Completed'],
    // ['No' => 1, 'Product_name' => 'Product A', 'User_name' => 'User 1', 'Amount' => 106, 'Status' => 'Completed'],
    // ['No' => 1, 'Product_name' => 'Product A', 'User_name' => 'User 1', 'Amount' => 155, 'Status' => 'Completed'],
    // ['No' => 1, 'Product_name' => 'Product A', 'User_name' => 'User 1', 'Amount' => 300, 'Status' => 'Completed'],
    // ['No' => 1, 'Product_name' => 'Product A', 'User_name' => 'User 1', 'Amount' => 100, 'Status' => 'Completed'],
    // ['No' => 1, 'Product_name' => 'Product A', 'User_name' => 'User 1', 'Amount' => 100, 'Status' => 'Completed'],
    // ['No' => 1, 'Product_name' => 'Product A', 'User_name' => 'User 1', 'Amount' => 100, 'Status' => 'Completed'],
    // ['No' => 1, 'Product_name' => 'Product A', 'User_name' => 'User 1', 'Amount' => 100, 'Status' => 'Completed'],
    // ['No' => 1, 'Product_name' => 'Product A', 'User_name' => 'User 1', 'Amount' => 100, 'Status' => 'Completed'],
    // ['No' => 1, 'Product_name' => 'Product A', 'User_name' => 'User 1', 'Amount' => 100, 'Status' => 'Completed'],
    // ['No' => 1, 'Product_name' => 'Product A', 'User_name' => 'User 1', 'Amount' => 100, 'Status' => 'Completed'],
    // ['No' => 1, 'Product_name' => 'Product A', 'User_name' => 'User 1', 'Amount' => 100, 'Status' => 'Completed'],
    // Add more product data as needed
];

$_SESSION['user_data'] = [
    ['User_name' => 'User 1', 'Product_name' => 'Product A', 'Count' => 2, 'Diverse_product' => 1, 'Chat' => 3],
    ['User_name' => 'User 1', 'Product_name' => 'Product A', 'Count' => 2, 'Diverse_product' => 1, 'Chat' => 3],
    ['User_name' => 'User 1', 'Product_name' => 'Product A', 'Count' => 2, 'Diverse_product' => 1, 'Chat' => 3],
    ['User_name' => 'User 1', 'Product_name' => 'Product A', 'Count' => 2, 'Diverse_product' => 1, 'Chat' => 3],
    // ['User_name' => 'User 1', 'Product_name' => 'Product A', 'Count' => 2, 'Diverse_product' => 1, 'Chat' => 3],
    // ['User_name' => 'User 1', 'Product_name' => 'Product A', 'Count' => 2, 'Diverse_product' => 1, 'Chat' => 3],
    // ['User_name' => 'User 1', 'Product_name' => 'Product A', 'Count' => 2, 'Diverse_product' => 1, 'Chat' => 3],
    // ['User_name' => 'User 1', 'Product_name' => 'Product A', 'Count' => 2, 'Diverse_product' => 1, 'Chat' => 3],
    // ['User_name' => 'User 1', 'Product_name' => 'Product A', 'Count' => 2, 'Diverse_product' => 1, 'Chat' => 3],
    // ['User_name' => 'User 1', 'Product_name' => 'Product A', 'Count' => 2, 'Diverse_product' => 1, 'Chat' => 3],
    // ['User_name' => 'User 1', 'Product_name' => 'Product A', 'Count' => 2, 'Diverse_product' => 1, 'Chat' => 3],
    // ['User_name' => 'User 1', 'Product_name' => 'Product A', 'Count' => 2, 'Diverse_product' => 1, 'Chat' => 3],
    // ['User_name' => 'User 1', 'Product_name' => 'Product A', 'Count' => 2, 'Diverse_product' => 1, 'Chat' => 3],
    // ['User_name' => 'User 1', 'Product_name' => 'Product A', 'Count' => 2, 'Diverse_product' => 1, 'Chat' => 3],
    // ['User_name' => 'User 1', 'Product_name' => 'Product A', 'Count' => 2, 'Diverse_product' => 1, 'Chat' => 3],
    // Add more user data as needed
];

// Calculate total amount and count for the first table
$totalAmount = 0;
foreach ($_SESSION['product_data'] as $product) {
    $totalAmount += $product['Amount'];
}

// Calculate total count for the second table
$totalCount = 0;
foreach ($_SESSION['user_data'] as $userData) {
    $totalCount += $userData['Count'];
}
?>

<div class="container" id="analytics">
        <h2>Product Purchases</h2>
        <table border="1">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Product Name</th>
                    <th>User Name</th>
                    <th>Amount</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($_SESSION['product_data'] as $product) : ?>
                    <tr>
                        <td><?= $product['No'] ?></td>
                        <td><?= $product['Product_name'] ?></td>
                        <td><?= $product['User_name'] ?></td>
                        <td><?= $product['Amount'] ?></td>
                        <td><?= $product['Status'] ?></td>
                    </tr>
                <?php endforeach; ?>
                <tr>
                    <td colspan="3"></td>
                    <td>Total: <?= $totalAmount ?></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="container">
        <h2>User Product Summary</h2>
        <table border="1">
            <thead>
                <tr>
                    <th>User Name</th>
                    <th>Product Name</th>
                    <th>Count</th>
                    <th>Diverse Product</th>
                    <th>Chat</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($_SESSION['user_data'] as $userData) : ?>
                    <tr>
                        <td><?= $userData['User_name'] ?></td>
                        <td><?= $userData['Product_name'] ?></td>
                        <td><?= $userData['Count'] ?></td>
                        <td><?= $userData['Diverse_product'] ?></td>
                        <td><?= $userData['Chat'] ?></td>
                    </tr>
                <?php endforeach; ?>
                <tr>
                    <td colspan="2"></td>
                    <td>Total: <?= $totalCount ?></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>











    <?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include('db_conection.php');
include('functions.php');

echo get_current_user();


if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($conn, $_POST['product_name']);
    $price = mysqli_real_escape_string($conn, $_POST['price']);
    $desc = mysqli_real_escape_string($conn, $_POST['description']);
    
    if (isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK) {
        $image = $_FILES['image']['name'];
        $image_size = $_FILES['image']['size'];
        $image_tmp_name = $_FILES['image']['tmp_name'];
        $image_folder = __DIR__.'/uploaded_img/'. basename($image);

        if ($image_size > 10000000) {
            $msg[] = 'Sorry Admin, But The Size of File Is Very Big';
            die;
        } else {
            $insert = mysqli_query($conn, "INSERT INTO `products` (name, price, desc, image) VALUES ('$name', '$price', '$desc', '$image')");
            if ($insert) {
                if (move_uploaded_file($image_tmp_name, $image_folder)) {
                    $msg[] = 'Uploaded Successfully !';
                    header('location:index.php');
                } else {
                    $msg[] = 'Error uploading file.';
                    die;
                }
            } else {
                $msg[] = "It Couldn't Be Saved To The DB" ;
                die;
            }
        }
    } else {
        echo 'File Error:';
    }
}
?>