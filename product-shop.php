
<?php
include "Config.php";
// On détermine sur quelle page on se trouve


if(isset($_GET['page']) && !empty($_GET['page'])){
    $currentPage = (int) strip_tags($_GET['page']);
}else{
    $currentPage = 1;
}
// On détermine le nombre total d'blog
$id='';
$sp_id='';
$sql='';

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT COUNT(*) AS nb_product FROM product  WHERE CATEGORY_ID=$id";
}
else if (isset($_GET['sp_id']) && !empty($_GET['sp_id'])) {
    $sp_id = $_GET['sp_id'];
    $sql = "SELECT COUNT(*) AS nb_product FROM product  WHERE SPONSOR_ID=$sp_id";
}
else{
    $sql = "SELECT COUNT(*) AS nb_product FROM product";
}
$result=$conn->query($sql);
$row=mysqli_fetch_assoc($result);

$nbblog = (int) $row['nb_product'];

$parPage = 12;

// On calcule le nombre de pages total
$pages = ceil($nbblog / $parPage);

// Calcul du 1er article de la page
$premier = ($currentPage * $parPage) - $parPage;

$queryP='';
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];
    $queryP = "SELECT * FROM product as p INNER JOIN sponsor as s on p.SPONSOR_ID=s.SPONSOR_ID WHERE p.CATEGORY_ID=$id ORDER BY p.CREATED_DATE DESC LIMIT $premier, $parPage;";

}
else if (isset($_GET['sp_id']) && !empty($_GET['sp_id'])) {
    $sp_id = $_GET['sp_id'];
    $queryP = "SELECT * FROM product as p INNER JOIN sponsor as s on p.SPONSOR_ID=s.SPONSOR_ID WHERE p.SPONSOR_ID=$sp_id ORDER BY p.CREATED_DATE DESC LIMIT $premier, $parPage;";
}
 else {
    $queryP = "SELECT * FROM product as p INNER JOIN sponsor as s on p.SPONSOR_ID=s.SPONSOR_ID ORDER BY p.CREATED_DATE DESC LIMIT $premier, $parPage;";
}
// $sql = 'SELECT * FROM `blog` ORDER BY `CREATED_DATE` DESC LIMIT :premier, :parpage;';

// On prépare la requête
if(!empty($id)){
    $id='&id='.$id;

}
if(!empty($sp_id)){
    $sp_id='&sp_id='.$sp_id;
}



?>
<!DOCTYPE html>
<html lang="en">



<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <?php
    include './styles.php'
    ?>
</head>

<body>

    <div class="preloader"></div>


    <?php
    include './header.php'
    ?>
    <section class="inner-bg over-layer-black" style="background-image: url('img/beauty/Beauty02.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="mini-title inner-style-2">
                        <h3>Shop </h3>
                        <p><a href="index-one.html">Home</a> <span class="fa fa-angle-right"></span> <a href="#">Shop </a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="shop-area">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="blog-sideber">
                        <div class="widget clearfix">
                            <div class="blog-search">
                                <form action="#" class="clearfix">
                                    <input type="search" placeholder="Search Here..">
                                    <button type="submit">
                                        <span class="pe-7s-search"></span>
                                    </button>
                                </form>
                            </div>
                        </div>
                        
                        <div class="widget clearfix">
                            <div class="sideber-title">
                                <h4>Categories</h4>
                            </div>
                            <div class="sideber-content">
                                <ul>
                                    <li> <a href='product-shop.php'><i class='fa fa-angle-right'></i> All</a> </li>

                                    <?php
                                        include './Config.php';
                                        $query = "select * from category limit 6";
                                        $result = $conn->query($query);
                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                                $category_name = $row['CATEGORY_NAME'];
                                                $category_id = $row['CATEGORY_ID'];
                                                echo "<li> <a href='product-shop.php?id=$category_id'><i class='fa fa-angle-right'></i> $category_name</a> </li>";
                                            }
                                        }
                                        ?>

                                </ul>
                            </div>
                        </div>
                        
                        <div class="widget clearfix">
                            <div class="sideber-title">
                                <h4>Vendor</h4>
                            </div>
                            <div class="sideber-content">
                                <ul>
                                    <li> <a href='product-shop.php'><i class='fa fa-angle-right'></i> All</a> </li>

                                    <?php
                                        include './Config.php';
                                        $query = "select * from sponsor";
                                        $result = $conn->query($query);
                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                                $sponsor_name = $row['SPONSOR_NAME'];
                                                $sponsor_id = $row['SPONSOR_ID'];
                                                echo "<li> <a href='product-shop.php?sp_id=$sponsor_id'><i class='fa fa-angle-right'></i> $sponsor_name</a> </li>";
                                            }
                                        }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="shop-right-area">

                        <div class="shop-tab-area">
                            <!--NAV PILL-->
                            <!-- <div class="shop-tab-pill">
                                <ul>
                                    <li class="active" id="p-mar">
                                        <a data-toggle="pill" href="#grid">
                                            <i class="fa fa-th" aria-hidden="true"></i>
                                            <span>Grid</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="pill" href="#list">
                                            <i class="fa fa-th-list" aria-hidden="true"></i>
                                            <span>List</span>
                                        </a>
                                    </li>
                                    <li class="product-size-deatils">
                                        <div class="show-label">
                                            <label>Show : </label>
                                            <select>
                                                <option value="10" selected="selected">10</option>
                                                <option value="09">09</option>
                                                <option value="08">08</option>
                                                <option value="07">07</option>
                                                <option value="06">06</option>

                                            </select>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="sort-position">
                                            <label><i class="fa fa-sort-amount-asc"></i>Sort by : </label>
                                            <select>
                                                <option value="position" selected="selected">Position</option>
                                                <option value="Name">Name</option>
                                                <option value="Price">Price</option>
                                            </select>
                                        </div>
                                    </li>
                                </ul>
                            </div> -->
                            <!--NAV PILL-->
                            <div class="tab-content">
                                <div class="row tab-pane active" id="grid">
                                    <?php
                                    include 'Config.php';
                                    $result = $conn->query($queryP);
                                    if ($result->num_rows > 0) {
                                        while ($row = $result->fetch_assoc()) {
                                            $product_id = $row["PRODUCT_ID"];
                                            $title = $row["TITLE"];
                                            $category_id = $row["CATEGORY_ID"];
                                            $photo = $row["PHOTO"];
                                            $product_link = $row["PRODUCT_LINK"];
                                            $product_short = $row["PRODUCT_SHORT"];
                                            $product_price = $row["PRODUCT_PRICE"];
                                            $sponsor=$row["SPONSOR_NAME"];
                                            if (strlen($product_short) > 50) {
                                                $product_short = substr($product_short, 0, 50);
                                            }
                                            if (strlen($title) > 20) {
                                                $title = substr($title, 0, 20);
                                            }?>
                                            <div class='col-md-4 col-sm-4'>
                                                <div class='product-item'>
                                                    <div class='product-image'>
                                                        <a class='product-img' href='#'>
                                                            <span><?=$sponsor?></span>
                                                            <img class='primary-img' src='img/Product/<?=$photo?>' alt='' />
                                                        </a>
                                                    </div>
                                                    
                                                    <div class='product-action'>
                                                        <h4><a href='shop-single.php?id=<?=$product_id?>'><?=$title?> ...</a></h4>
                                                        <p><?=$product_short?> ...</p>
                                                        <span class='price'>$ <?=$product_price?></span>
                                                    </div>
                                                    <div class='pro-action'>
                                                        <ul>
                                                            <li>
                                                                <a href='#'>
                                                                    <i class='fa fa-retweet' aria-hidden='true'></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href='#'>
                                                                    <i class='fa fa-heart' aria-hidden='true'></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class='' href='<?=$product_link?>'  target='_blank'>
                                                                    <i class='fa fa-shopping-cart' aria-hidden='true'></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php    
                                        }
                                    }
                                    ?>

                                </div>
                                
                            </div>

                            <nav aria-label="Page navigation example" style="display: flex;justify-content: center;">
                                    <ul class="pagination">
                                        <li class="page-item <?= ($currentPage == 1) ? "disabled" : "" ?>"><a class="page-link" href="product-shop.php?page=<?= $currentPage - 1 .$id.$sp_id?>">Previous</a></li>
                                        <?php for($page = 1; $page <= $pages; $page++): ?>
                                        <!-- Lien vers chacune des pages (activé si on se trouve sur la page correspondante) -->
                                        <li class="page-item <?= ($currentPage == $page) ? "active" : "" ?>">
                                                <a href="product-shop.php?page=<?= $page .$id.$sp_id?>" class="page-link"><?= $page ?></a>
                                            </li>
                                        <?php endfor ?>
                                        
                                        <li class="page-item <?= ($currentPage == $pages) ? "disabled" : "" ?>">
                                        <a class="page-link" href="product-shop.php?page=<?= $currentPage + 1 .$id.$sp_id?>">Next</a>
                                    </li>
                                    </ul>
                                </nav>   
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- divider start -->
    <section class="service-area over-layer-default" style="background-image:url(img/bg/5.jpg);">
        <div class="container padding-bottom-none padding-top-40">
            <div class="section-content">
                <div class="row">
                <div class="col-sm-12 col-md-12">
                        <div class="service-item style-1 text-white border-right">
                            <div class="">
                                <i class="pe-7s-mail-open"></i>
                            </div>
                            <div class="content">
                                <h5><a href="#">Send us a Message</a></h5>
                                <p>info@beauty-medicare.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- divider end -->

    <!-- Footer Style start -->



    <!-- Footer Style End -->


    <a href="#" class="scrollup"><i class="pe-7s-up-arrow" aria-hidden="true"></i></a>
    <!-- jQuery -->
    <?php
    include 'footer.php'
    ?>
    <!-- Footer Style End -->


    <a href="blog-single.php" class="scrollup"><i class="pe-7s-up-arrow" aria-hidden="true"></i></a>
    <!-- jQuery -->
    <script type="text/javascript" src="js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- all plugins and JavaScript -->
    <script type="text/javascript" src="js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" src="js/css3-animate-it.js"></script>
    <script type="text/javascript" src="js/bootstrap-dropdownhover.min.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/gallery.js"></script>
    <script type="text/javascript" src="js/player.min.js"></script>
    <script type="text/javascript" src="js/retina.js"></script>
    <script type="text/javascript" src="js/comming-soon.js"></script>

    <!-- Main Custom JS -->
    <script type="text/javascript" src="js/script.js"></script>


</body>



</html>