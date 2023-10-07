<?php
    session_start();
    unset($_SESSION["passport"]);
    unset($_SESSION["username"]);
    unset($_SESSION["password"]);
    header("Location:login.php");
?>