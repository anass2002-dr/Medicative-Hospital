<?php

$target_dir = "../img/blog/";
$date = date('Y-m-d H:i:s');
$temp = explode(".", $_FILES["photo"]["name"]);
$newfilename = round(microtime(true)) . '.' . end($temp);
move_uploaded_file($_FILES["photo"]["tmp_name"], $target_dir . $newfilename);
// $basname=$date.basename($_FILES["photo"]["name"]);
// $target_dir = $target_dir . $basname;
// $uploadOk = 1;
// move_uploaded_file($_FILES["photo"]["tmp_name"], $target_dir);
// if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_dir)) {
//     echo "The file " . basename($_FILES["photo"]["name"]) . " has been uploaded.<br>";
// } else {
//     echo "Sorry, there was an error uploading your file.<br>";
// }


$target_dir = "../videos/blog/";
$tempv = explode(".", $_FILES["photo"]["name"]);
$newfilenamev = round(microtime(true)) . '.' . end($tempv);
move_uploaded_file($_FILES["photo"]["tmp_name"], $target_dir . $newfilenamev);
move_uploaded_file($_FILES["video"]["tmp_name"], $target_dir);
// if (move_uploaded_file($_FILES["video"]["tmp_name"], $target_dir)) {
//     echo "The file " . basename($_FILES["video"]["name"]) . " has been uploaded.<br>";
// } else {
//     echo "Sorry, there was an error uploading your file.<br>";
// }




$title = $_POST['title'];
$category = $_POST['category'];
$photo =$newfilename;
$video = $newfilenamev;
$product_link = $_POST['product_link'];
$blog = $_POST['blog'];
$date = date('Y-m-d');

// echo 'title ' . $title."<br>";
// echo 'category ' . $category."<br>";
// echo 'photo ' . $photo."<br>";
// echo 'video ' . $video."<br>";
// echo 'product_link ' . $product_link."<br>";
// echo 'blog ' . $blog."<br>";
// Create connection
// Check connection

if (!empty($title) and !empty($category) and !empty($photo) and !empty($blog)) {
    include '../connection.php';
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "INSERT INTO blog (TITLE, CATEGORY_ID, PHOTO, VIDEO, PRODUCT_LINK, CONTENT, CREATED_DATE) VALUES ('$title', $category, '$photo','$video','$product_link','$blog','$date')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
} else {
    echo "please filed all input";
    
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
