<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['user_id'])) {
    $user_id = $_POST['user_id'];

    // Perform logout actions
    unset($_SESSION['user_data']);
    session_destroy();

    // Redirect to home or login page
    header('location: index.php');
    exit;
} else {
    // Handle invalid or unexpected request
    // Redirect to an error page or display an error message
    echo 'Invalid request';
}
?>
