<?php
include 'Config_dashboard.php';
$target_dir = "../img/blog/";

$temp = explode(".", $_FILES["photo"]["name"]);
$newfilename = round(microtime(true)) . '.' . end($temp);
move_uploaded_file($_FILES["photo"]["tmp_name"], $target_dir . $newfilename);



$target_dir = "../videos/blog/";
$tempv = explode(".", $_FILES["video"]["name"]);
$newfilenamev = round(microtime(true)) . '.' . end($tempv);
move_uploaded_file($_FILES["video"]["tmp_name"], $target_dir . $newfilenamev);
move_uploaded_file($_FILES["video"]["tmp_name"], $target_dir);


$title = $_POST['title'];
$category = $_POST['category'];
$photo = $newfilename;
$video = $newfilenamev;
$product_link = $_POST['product_link'];
$blog = $_POST['blog'];
$date = date('Y-m-d');

if (!empty($title) and !empty($category) and !empty($photo) and !empty($blog)) {
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $blog = mysqli_real_escape_string($conn, $blog);
    $title = mysqli_real_escape_string($conn, $title);
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
