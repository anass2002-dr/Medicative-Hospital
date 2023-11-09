<?php
include 'Config_dashboard.php';
$target_dir = "../img/Product/";

$temp = explode(".", $_FILES["photo"]["name"]);
$newfilename = "img/Product/".round(microtime(true)) . '.' . end($temp);
move_uploaded_file($_FILES["photo"]["tmp_name"], $target_dir . $newfilename);



$target_dir = "../videos/Product/";
$tempv = explode(".", $_FILES["video"]["name"]);
$newfilenamev = "videos/Product/".round(microtime(true)) . '.' . end($tempv);
move_uploaded_file($_FILES["video"]["tmp_name"], $target_dir . $newfilenamev);
move_uploaded_file($_FILES["video"]["tmp_name"], $target_dir);

$title = $_POST['title'];
$category = $_POST['category'];
$photo = $newfilename;
$video = $newfilenamev;
$product_link = $_POST['product_link'];
$product_price = $_POST['price'];
$product_price = floatval($product_price);
$Product = $_POST['content'];
$product_short = $_POST['product_short'];
$keywords = $_POST['keywords'];
$sponsor = $_POST['sponsor'];
$date = date('Y-m-d-h:i:sa');

if (!empty($title) and !empty($category) and !empty($photo) and !empty($Product) and !empty($product_short)  and !empty($keywords)) {
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $Product = mysqli_real_escape_string($conn, $Product);
    $title = mysqli_real_escape_string($conn, $title);
    $product_short = mysqli_real_escape_string($conn, $product_short);
    $keywords = mysqli_real_escape_string($conn, $keywords);

    $sql = "INSERT INTO product (TITLE, CATEGORY_ID, PHOTO, VIDEO, PRODUCT_LINK, CONTENT,PRODUCT_SHORT,KEYWORDS,PRODUCT_PRICE,SPONSOR_ID ,CREATED_DATE) VALUES ('$title', $category, '$photo','$video','$product_link','$Product','$product_short','$keywords',$product_price,$sponsor,'$date')";
    if ($conn->query($sql) === TRUE) {
        $sql2 = "SELECT PRODUCT_ID FROM PRODUCT ORDER BY PRODUCT_ID DESC LIMIT 1;";
        $result = $conn->query($sql2);
        $row = mysqli_fetch_assoc($result);
        $id_Product = $row['PRODUCT_ID'];
        if (isset($_FILES['photo_collection'])) {
            $files = $_FILES['photo_collection'];
            $file_count = count($files['name']);
            for ($i = 0; $i < $file_count; $i++) {
                $filenameC = $files['name'][$i];
                $tmp_nameC = $files["tmp_name"][$i];
                $target_dirC = "../img/Product/";
                $tempC = explode(".", $filenameC);
                $newfilenameC = rand() . '.' . end($tempC);
                move_uploaded_file($tmp_nameC, $target_dirC . $newfilenameC);
                $query3 = "INSERT INTO product_collection_photos(PRODUCT_ID, PHOTO_PATH,UPDATE_DATE) VALUES ($id_Product,'$newfilenameC','$date')";
                $conn->query($query3);
            }
        }
        echo "New Product created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
} else {
    echo "please filed all input";
}
