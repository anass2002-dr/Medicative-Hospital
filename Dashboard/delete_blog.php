<?php
include "Config_dashboard.php";
// if (isset($_GET['id'])) {
//     $id = $_GET['id'];
//     $query = "delete from blog where BLOG_ID=$id";
//     $result = $conn->query($query);
// }
if (isset($_POST['id'])) {
    $id =  $_POST['id'];


    $query = "delete from blog where BLOG_ID=$id";
    $result = $conn->query($query);
    // echo $query;
    exit;
}

echo 0;
exit;
