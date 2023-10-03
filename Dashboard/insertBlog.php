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
    echo "The file " . basename($_FILES["video"]["name"]) . " has been uploaded.";
} else {
    echo "Sorry, there was an error uploading your file.";
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
