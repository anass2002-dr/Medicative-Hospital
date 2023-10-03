<?php

$target_dir = "../img/blog/";
$target_dir = $target_dir . basename($_FILES["photo"]["name"]);
$uploadOk = 1;
if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_dir)) {
    echo "The file " . basename($_FILES["photo"]["name"]) . " has been uploaded.";
} else {
    echo "Sorry, there was an error uploading your file.";
}


$target_dir = "../videos/blog/";
$target_dir = $target_dir . basename($_FILES["video"]["name"]);
$uploadOk = 1;
if (move_uploaded_file($_FILES["video"]["tmp_name"], $target_dir)) {
    echo "The file " . basename($_FILES["video"]["name"]) . " has been uploaded.<br>";
} else {
    echo "Sorry, there was an error uploading your file.,br>";
}


$servername = "localhost";
$username = "root";
$password = "Ana@21s$";
$dbname = "medicative";

$title = $_POST['title'];
$category = $_POST['category'];
$photo = basename($_FILES["photo"]["name"]);
$video = ($_FILES["video"]["name"]);
$blog = $_POST['blog'];
$date = date('Y-m-d');

// Create connection
// Check connection

if (!empty($title) and !empty($category) and !empty($photo) and !empty($video) and !empty($blog)) {
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "INSERT INTO blog (TITLE, CATEGORY, PHOTO, VIDEO, CONTENT, create_date) VALUES ('$title', '$category', '$photo','$video','$blog',$date)";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully <br>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
} else {
    echo "no data are in post method";
}


// $title = $_POST['title'];
// $category = $_POST['category'];
// $photo = $_POST['photo'];
// $video = $_POST['video'];
// $blog = $_POST['blog'];

// echo 'title ' . $title;
// echo 'category ' . $category;
// echo 'photo ' . $photo;
// echo 'video ' . $video;
// echo 'blog ' . $blog;
