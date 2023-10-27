<?php
session_start();
if (isset($_SESSION["passport"])) {
    if ($_SESSION["passport"] != 'ok') {
        header('Location:login.php');
    }
} else {
    header('Location:login.php');
}
$servername = "localhost";
$username = "root";
$password = "Ana@21s$";
$dbname = "beautymedic";
$conn = new mysqli($servername, $username, $password, $dbname);
