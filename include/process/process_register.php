<?php
require('../../config/config.php');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
     $fullname = $_POST['fullname'];
     $email = $_POST['email'];
     $password = $_POST['password'];
     $dob = $_POST['birthdate'];
     $country = $_POST['country'];
     $gendor = $_POST['gender'];
     $query = "INSERT INTO users(fullname,email,password,dob,country,gender) values('$fullname', '$email', '$password', '$dob','$country','$gendor')";
     $result = mysqli_query($conn, $query);
     if(!$result){
        die("Connection failed: " . mysqli_connect_error());
     }   
}

?>