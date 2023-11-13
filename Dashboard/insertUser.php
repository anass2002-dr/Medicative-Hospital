<?php
include 'Config_dashboard.php';
 
 
if (isset($_POST['first_name']) and isset($_POST['last_name']) and isset($_POST['email']) and isset($_POST['password']) and isset($_POST['phone_number'])) {
    $first_name = $_POST['first_name'];
    $lastt_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone_number = $_POST['phone_number'];
    $query = "INSERT INTO `user`( `FIRST_NAME`, `LAST_NAME`, `EMAIL`, `PASSWORD`, `PHONE_NUMBER`) VALUES ('$first_name','$first_name','$email','$password','$phone_number')";

    if ($conn->query($query) === true) {
        echo "New User created successfully";
    }
} else {
    echo "pleas filed all data input";
}
