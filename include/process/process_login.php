<?php
require('../../config/config.php');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $pass = $_POST['passowrd'];
    $query = "SELECT * FROM users where email = '.$email.' and password = '.$pass.'";
    $result = mysqli_query($conn, $query);
    $count=mysqli_num_rows($result);
    if($count==1){
        $_SESSION['username'] = $email;
    }else{
        $error = "Invalid Login Credentials.";
    }
}

?>