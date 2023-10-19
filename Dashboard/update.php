<?php
include "Config_dashboard.php";
if(isset($_POST['operation'])){
    $operation=$_POST['operation'];
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

    if($operation=='blog'){
        $id = $_POST["id"];
        $query="select * from blog where BLOG_ID=$id";
        $result=$conn->query($query);
        $row=mysqli_fetch_assoc($result);
        $photo=$row['PHOTO'];
        $video=$row['VIDEO'];
        $title = $row['TITLE'];
        $category = $row['CATEGORY_ID'];
        $product_link = $row['PRODUCT_LINK'];
        $blog = $row['CONTENT'];
        $blog_short = $row['BLOG_SHORT'];
        
        if(!empty($newfilename)){
            $photo = $newfilename;

        }
        if(!empty($newfilename)){
            $video = $newfilenamev;
        }
        if(isset($_POST['title'])){
            $title = $_POST['title'];
        }
        if(isset($_POST['category'])){
            $category = $_POST['category'];
        }
        if(isset($_POST['product_link'])){
            $product_link = $_POST['product_link'];
        }

        if(isset($_POST['blog'])){
            $blog = $_POST['blog'];
        }
        if(isset($_POST['blog_short'])){
            $blog_short = $_POST['blog_short'];
        }
        $date = date('Y-m-d-h:i:sa');

        
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    
        $blog = mysqli_real_escape_string($conn, $blog);
        $blog_short = mysqli_real_escape_string($conn, $blog_short);
        $title = mysqli_real_escape_string($conn, $title);
        $query = "UPDATE blog SET TITLE='$title',CATEGORY_ID='$category',PHOTO='$photo',VIDEO='$video',PRODUCT_LINK='$product_link',CONTENT='$blog',BLOG_SHORT='$blog_short',UPDATE_DATE='$date' where BLOG_ID=$id";
        
        // $conn->query($query);
        if ($conn->query($query) === TRUE) {
            
            if (!empty($_FILES['photo_collection']['name'][0])) {
                $query4="delete from collection_photos where BLOG_ID=$id";
                $conn->query($query4);
                $files = $_FILES['photo_collection'];
                $file_count = count($files['name']);
                for ($i = 0; $i < $file_count; $i++) {
                    $filenameC = $files['name'][$i];
                    $tmp_nameC = $files["tmp_name"][$i];
                    $target_dirC = "../img/blog/";
                    $tempC = explode(".", $filenameC);
                    $newfilenameC = rand() . '.' . end($tempC);
                    move_uploaded_file($tmp_nameC, $target_dirC . $newfilenameC);
                    $date = date('Y-m-d-h:i:sa');
                    $query3 = "INSERT INTO collection_photos(BLOG_ID, PHOTO_PATH,UPDATE_DATE) VALUES ($id,'$newfilenameC','$date')";
                    $conn->query($query3);
                }
            }
    
            echo "blog is updated successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
        
    }
    else if($operation=='product'){
        $id = $_POST["id"];
        $query="select * from product where PRODUCT_ID=$id";
        $result=$conn->query($query);
        $row=mysqli_fetch_assoc($result);
        $photo=$row['PHOTO'];
        $video=$row['VIDEO'];
        $title = $row['TITLE'];
        $category = $row['CATEGORY_ID'];
        $product_link = $row['PRODUCT_LINK'];
        $product_price = $row['PRODUCT_PRICE'];
        $Product = $row['CONTENT'];
        $product_short = $row['PRODUCT_SHORT'];
        $sponsor = $row['SPONSOR_ID'];
        if(!empty($newfilename)){
            $photo = $newfilename;

        }
        if(!empty($newfilename)){
            $video = $newfilenamev;
        }

        if(isset($_POST['title'])){
            $title = $_POST['title'];
        }
        if(isset($_POST['category'])){
            $category = $_POST['category'];
        }
        if(isset($_POST['product_link'])){
            $product_link = $_POST['product_link'];
        }
        if(isset($_POST['price'])){
            $product_price = $_POST['price'];
        }
        if(isset($_POST['product'])){
            $Product = $_POST['product'];
            
        }
        if(isset($_POST['product_short'])){
            $product_short = $_POST['product_short'];
        }
       

        if(isset($_POST['sponsor'])){
            $sponsor = $_POST['sponsor'];
        }
        $date = date('Y-m-d-h:i:sa');
        
        
        
        

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    
        $Product = mysqli_real_escape_string($conn, $Product);
        $product_short = mysqli_real_escape_string($conn, $product_short);
        $title = mysqli_real_escape_string($conn, $title);
        $query = "UPDATE product SET TITLE='$title',CATEGORY_ID='$category',PHOTO='$photo',VIDEO='$video',PRODUCT_LINK='$product_link',CONTENT='$Product',PRODUCT_SHORT='$product_short',PRODUCT_PRICE=$product_price,SPONSOR_ID=$sponsor,UPDATE_DATE='$date' where PRODUCT_ID=$id";
        
        // $conn->query($query);
        if ($conn->query($query) === TRUE) {
            
            if (!empty($_FILES['photo_collection']['name'][0])) {
                $query4="delete from product_collection_photos where PRODUCT_ID=$id";
                $conn->query($query4);
                $files = $_FILES['photo_collection'];
                $file_count = count($files['name']);
                
                for ($i = 0; $i < $file_count; $i++) {
                    $filenameC = $files['name'][$i];
                    $tmp_nameC = $files["tmp_name"][$i];
                    $target_dirC = "../img/Product/";
                    $tempC = explode(".", $filenameC);
                    $newfilenameC = rand() . '.' . end($tempC);
                    move_uploaded_file($tmp_nameC, $target_dirC . $newfilenameC);
                    $date = date('Y-m-d-h:i:sa');
                    
                    $query3 = "INSERT INTO product_collection_photos(PRODUCT_ID, PHOTO_PATH,UPDATE_DATE) VALUES ($id,'$newfilenameC','$date')";
                    $conn->query($query3);
                }
            }
            // else{
            //     echo 'the collection photo have an error';
            // }
    
            echo "Product is updated successfully";
        } else {
            echo "Error: " . $query . "<br>" . $conn->error;
        }
        $conn->close();
       
    }
}
else{
    header('Location:index.php');
}




