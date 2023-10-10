<?php
include "Config_dashboard.php";
// if (isset($_GET['id'])) {
//     $id = $_GET['id'];
//     $query = "delete from blog where BLOG_ID=$id";
//     $result = $conn->query($query);
// }
$newfilename = "";
$newfilenamev = "";
if ($_FILES['photo']['error'] != 4 || ($_FILES['photo']['size'] != 0 && $_FILES['photo']['error'] != 0)) {
    $target_dir = "../img/blog/";
    $temp = explode(".", $_FILES["photo"]["name"]);
    $newfilename = round(microtime(true)) . '.' . end($temp);
    move_uploaded_file($_FILES["photo"]["tmp_name"], $target_dir . $newfilename);
    // cover_image is empty (and not an error), or no file was uploaded
}

if ($_FILES['video']['error'] != 4 || ($_FILES['video']['size'] != 0 && $_FILES['video']['error'] != 0)) {
    $target_dir = "../videos/blog/";
    $tempv = explode(".", $_FILES["video"]["name"]);
    $newfilenamev = round(microtime(true)) . '.' . end($tempv);
    move_uploaded_file($_FILES["video"]["tmp_name"], $target_dir . $newfilenamev);
    move_uploaded_file($_FILES["video"]["tmp_name"], $target_dir);
}



$title = $_POST['title'];
$category = $_POST['category'];
$photo = $newfilename;
$video = $newfilenamev;
$product_link = $_POST['product_link'];
$blog = $_POST['blog'];
$blog_short = $_POST['blog_short'];
$date = date('Y-m-d');
+$id = $_POST["id"];

// echo $title."<br>";
// echo $category."<br>";
// echo $photo."<br>";
// echo $video."<br>";
// echo $product_link."<br>";
// echo $blog."<br>";

if (!empty($title) and !empty($category) and !empty($blog)) {
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $blog = mysqli_real_escape_string($conn, $blog);
    $blog_short = mysqli_real_escape_string($conn, $blog_short);
    $title = mysqli_real_escape_string($conn, $title);
    $query = "";
    if (!empty($video)) {
        if (!empty($photo)) {
            $query = "UPDATE blog SET TITLE='$title',CATEGORY_ID='$category',PHOTO='$photo',VIDEO='$video',PRODUCT_LINK='$product_link',CONTENT='$blog',BLOG_SHOR='$blog_short',CREATED_DATE='$date' where BLOG_ID=$id";
        } else {
            $query = "UPDATE blog SET TITLE='$title',CATEGORY_ID='$category',VIDEO='$video',PRODUCT_LINK='$product_link',CONTENT='$blog',BLOG_SHORT='$blog_short',CREATED_DATE='$date' where BLOG_ID=$id";
        }
    } else {
        if (!empty($photo)) {
            $query = "UPDATE blog SET TITLE='$title',CATEGORY_ID='$category',PHOTO='$photo',PRODUCT_LINK='$product_link',CONTENT='$blog',BLOG_SHORT='$blog_short',CREATED_DATE='$date' where BLOG_ID=$id";
        } else {
            $query = "UPDATE blog SET TITLE='$title',CATEGORY_ID='$category',PRODUCT_LINK='$product_link',CONTENT='$blog',BLOG_SHORT='$blog_short',CREATED_DATE='$date' where BLOG_ID=$id";
        }
    }
    // $conn->query($query);
    if ($conn->query($query) === TRUE) {
        echo "blog is updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
} else {
    echo "please filed all input";
}
