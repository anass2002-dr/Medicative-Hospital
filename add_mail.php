<?php
include 'Config.php';
if(isset($_POST['user_mail']) and !empty($_POST['user_mail'])){
    $email=$_POST['user_mail'];
    $_SESSION['usre_mail']=$email;
    $date = date('Y-m-d-h:i:sa');

    $query="INSERT INTO user('email','CREATED_DATE') value('$email','$date');";
    $conn->query($query);
    
}
?>