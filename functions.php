<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);


function signup($conn, $submit){
    if ($submit){ 
        $email =  mysqli_real_escape_string($conn, $_POST['email']);
        $name =  mysqli_real_escape_string($conn, $_POST['name']);
        $password = mysqli_real_escape_string($conn, md5($_POST['password']));

        // $user_id = generateId(20);
        // check emptyness and nonalphabetic 
        
        if (!empty($email) && !is_numeric($email) && !is_numeric($name)){
            $user_data = userExist($conn, $email);
            if($user_data){
                // this information exist already 
                $msg[] = "This User Exist Already!";
                return $msg;
            }
            else {
                $insert = "INSERT INTO `users` (name, email, password) VALUES(?, ?, ?)";
                $stmt = mysqli_prepare($conn, $insert);
                if($stmt){
                    mysqli_stmt_bind_param($stmt,"sss", $name, $email, $password);
                    if(mysqli_stmt_execute($stmt)){
                        header("location: login.php");
                        die;
                    }
                    else {
                        // $msg[] = "Error executing the prepared statement: " . mysqli_stmt_error($stmt);
                        $msg[] = "Something Went Wrong!";
                        return $msg;
                    }
                } else {
                    // $msg[] = "Error preparing the statement: " . mysqli_error($conn);
                    $msg[] = "Couldn't Complete This Registration!\nTry Later";
                    return $msg;
                }
            }
        }
        return "Invalid Information! Try again!!";
    }
}

function loginUser($conn, $login){
    if($login){
        $email =  mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, md5($_POST['password']));
        // check emptyness and nonalphabetic 
        if (!empty($email) && !is_numeric($email)){
            $user_data = userExist($conn, $email);
            if($user_data === false) {
                $msg[] = "This User Does Not Exist! You need An Account.";
                return $msg;
            }
            else{
                if ($password === $user_data['password']){
                    $_SESSION['user_data'] = $user_data;
                    header('location:shop.php');
                    die;
                }
                $msg[] = 'Wrong Password !!!';
                return $msg;
            }
        }
        else{
            $msg[] = 'This Email Is Not Valid !';
            return $msg;
        }
    }
}
function userIsLoggedIn($conn, $user_id) {
    $query = "SELECT * FROM `customers` WHERE user_id = ? LIMIT 1";
    $stmt = mysqli_prepare($conn, $query);
    if ($stmt) {
        // Bind the parameters
        mysqli_stmt_bind_param($stmt, "i", $user_id);
        // Execute the statement
        if(mysqli_stmt_execute($stmt)){
            // Get the result
            $result = mysqli_stmt_get_result($stmt);
        }
        $num = mysqli_num_rows($result);
        if ($num > 0) {
            // Let's fetch the full row record.
            $user_data = mysqli_fetch_assoc($result);
            // release 
            mysqli_free_result($result);
            // close the statement
            mysqli_stmt_close($stmt);
            // this information exist already 
            return $user_data;
        }
        return false;
    }
    
}
function generateId($length){
    $gen_text = "";
    
    if($length > 5){
        $length = 5;
    }
    $len = rand(4, $length);

    for ($i=0; $i < $len; $i++) { 
        # code...
        $gen_text .= rand(0, 9);
    }
    return $gen_text;
}
function userExist($conn, $email){
    $query = "SELECT * FROM `users` WHERE email = ? LIMIT 1";
    $stmt = mysqli_prepare($conn, $query);
    if ($stmt) {
        // Bind the parameters
        mysqli_stmt_bind_param($stmt, "s", $email);
        // Execute the statement
        if(mysqli_stmt_execute($stmt)){
            // Get the result
            $result = mysqli_stmt_get_result($stmt);
        }
        $num = mysqli_num_rows($result);
        if ($num > 0) {
            // Let's fetch the full row record.
            $user_data = mysqli_fetch_assoc($result);
            // release 
            mysqli_free_result($result);
            // close the statement
            mysqli_stmt_close($stmt);
            // this information exist already 
            return $user_data;
        }
        else{
            return false;
        }
    }
}

function publish_product($conn, $ready){
    if($ready){
        $name = mysqli_real_escape_string($conn, $_POST['product_name']);
        $price = mysqli_real_escape_string($conn, $_POST['price']);
        $desc = mysqli_real_escape_string($conn, $_POST['description']);
        
        if ($_FILES['image']['error'] == UPLOAD_ERR_OK) {
            $image = $_FILES['image']['name'];
            $image_size = $_FILES['image']['size'];
            $image_tmp_name = $_FILES['image']['tmp_name'];
            $image_folder = __DIR__.'/uploaded_img/'. basename($image);

            if ($image_size > 10000000) {
                $msg[] = 'Sorry Adimin, But The Size of File Is Very Big';
                return $msg;
            }else {
                $insert = mysqli_query($conn, "INSERT INTO `products` (name, price, desc, image) VALUES ('$name', '$price', '$desc', '$image')");
                    if($insert){
                        if (move_uploaded_file($image_tmp_name, $image_folder)) {
                            $msg[] = 'Uploaded Successfully !';
                            header('location:index.php');
                        } else {
                            $msg[] = 'CodeBase Error: '. $_FILES['image']['error'];
                            return $msg;
                        }
                    }else{
                        $msg[] = "It Couldn't Be Saved To The DB" ;
                        return $msg;
                    }
            }
        } else {
            echo 'File Error:' . $_FILES['image']['error'];
        }
    }
}