<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">



    <!-- Bootstrap Core CSS -->
    <?php
    include 'styles.php'
    ?>
    <!-- <link rel="stylesheet" href="./node_modules/bootstrap/dist/"> -->
</head>

<body>

    <div class="preloader"></div>

    <!-- Header navbar start -->
    <?php
    include 'header.php'
    ?>
    <!-- Header navbar end -->


    <section class="inner-bg over-layer-black" style="background-image: url('img/bg/4.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="mini-title inner-style-2">
                        <h3>Blog</h3>
                        <p><a href="index-one.html">Home</a>

                            <!-- title dynamique -->
                            <span class="fa fa-angle-right"></span>

                            <a href="#">Blog</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    $query = "select * from blog where BLOG_ID=22";
    $result = $conn->query($query);
    $row = mysqli_fetch_assoc($result);
    $blog_id = $row["BLOG_ID"];
    $title = $row["TITLE"];
    $blog = $row["CONTENT"];
    $product_link = $row["PRODUCT_LINK"];
    $photo = $row["PHOTO"];
    $video = $row["VIDEO"];
    $category_id = $row["CATEGORY_ID"];
    $created_date = $row["CREATED_DATE"];
    // if ($result->num_rows > 0) {
    //     while ($row = $result->fetch_assoc()) {

    //     }
    // }
    $query2 = "select * from category where CATEGORY_ID=" . $category_id;
    $result2 = $conn->query($query2);
    $row = mysqli_fetch_assoc($result2);
    $category_name = $row["CATEGORY_NAME"];

    ?>
    <!-- Blog Posts -->
    <div class="bg-f8">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="margin-bottom-30">
                        <div id="bootstrap-touch-slider" class="carousel bs-slider fade  control-round indicators-line" data-ride="carousel" data-pause="hover" data-interval="5000">

                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#bootstrap-touch-slider" data-slide-to="0" class="active"></li>
                                <li data-target="#bootstrap-touch-slider" data-slide-to="1"></li>
                                <li data-target="#bootstrap-touch-slider" data-slide-to="2"></li>
                            </ol>

                            <!-- Wrapper For Slides -->
                            <div class="carousel-inner" role="listbox">
                                <!-- Third Slide -->
                                <?php
                                echo "<div class='item active'>
                                    <!-- Slide Background -->
                                    <img src='img/blog/$photo' alt='Slider Images' class='slide-image' />
                                    
                                    </div>";
                                $query = "select PHOTO_PATH from collection_photos where BLOG_ID=$blog_id";
                                $result = $conn->query($query);
                                while ($row = $result->fetch_assoc()) {
                                    $path = $row["PHOTO_PATH"];
                                    echo "<div class='item'>
                                    <!-- Slide Background -->
                                    <img src='img/blog/$path' alt='Slider Images' class='slide-image' />
                                    
                                </div>";
                                }

                                ?>

                                <!-- End of Slide -->

                                <!-- Second Slide -->

                                <!-- End of Slide -->

                                <!-- Third Slide -->

                                <!-- End of Slide -->
                            </div><!-- End of Wrapper For Slides -->

                            <!-- Left Control -->
                            <a class="left carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="prev">
                                <span class="fa fa-angle-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>

                            <!-- Right Control -->
                            <a class="right carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="next">
                                <span class="fa fa-angle-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>

                        </div>
                        <?php
                        echo "
                            <ul class='list-inline blog-info'>
                                <li>By <a href='#'>Mahamudul Hasan</a></li>
                                <li>In <a href='$product_link' target='_blank'>Product link</a></li>
                                <li>Category name : $category_name</li>
                                <li>Posted June $created_date</li>
                            </ul>
                            <h3><a href='#'> $title</a></h3>
                            <p>
                                $blog
                            </p>

                            </div>";
                        ?>


                        <!-- Blog Post Author -->


                        <!-- End Blog Comments -->


                        <!-- End Form -->
                    </div>
                    <div class="col-md-3">
                        <div class="blog-sideber">
                            <div class="widget">
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
                                    <h4>About Us</h4>
                                </div>
                                <div class="sideber-content about">
                                    <div class="testimonial-carousel-one">
                                        <div class="item">
                                            <p><i class="fa fa-quote-left"></i> While military organisations have existed as long as government itself, the idea of a standing police force is a relatively modern concept. <i class="fa fa-quote-right"></i></p>
                                        </div>
                                        <div class="item">
                                            <p><i class="fa fa-quote-left"></i> While military organisations have existed as long as government itself, the idea of a standing police force is a relatively modern concept. <i class="fa fa-quote-right"></i></p>
                                        </div>
                                        <div class="item">
                                            <p><i class="fa fa-quote-left"></i> While military organisations have existed as long as government itself, the idea of a standing police force is a relatively modern concept. <i class="fa fa-quote-right"></i></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="widget">
                                <div class="sideber-title">
                                    <h4>Recent Posts</h4>
                                </div>
                                <div class="footer-item-3 style-1 news-item">
                                    <div class="news-area clearfix">
                                        <div class="news-img">
                                            <a href="#">
                                                <img src="img/blog/s1.jpg" alt="">
                                                <span class="fa fa-link"></span>
                                            </a>
                                        </div>
                                        <div class="news-content">
                                            <a href="#">Eius harum sunt cumque..</a><br>
                                            <span>07 Aug 2018</span>
                                        </div>
                                    </div>
                                    <div class="news-area clearfix">
                                        <div class="news-img">
                                            <a href="#">
                                                <img src="img/blog/s2.jpg" alt="">
                                                <span class="fa fa-link"></span>
                                            </a>
                                        </div>
                                        <div class="news-content">
                                            <a href="#">Eius harum sunt cumque..</a><br>
                                            <span>12 Sep 2018</span>
                                        </div>
                                    </div>
                                    <div class="news-area clearfix">
                                        <div class="news-img">
                                            <a href="#">
                                                <img src="img/blog/s3.jpg" alt="">
                                                <span class="fa fa-link"></span>
                                            </a>
                                        </div>
                                        <div class="news-content">
                                            <a href="#">Eius harum sunt cumque..</a><br>
                                            <span>24 Oct 2018</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="widget clearfix">
                                <div class="sideber-title">
                                    <h4>Categories</h4>
                                </div>
                                <div class="sideber-content">
                                    <ul>
                                        <li> <a href="#"><i class="fa fa-angle-right"></i> Latest News (17)</a> </li>
                                        <li> <a href="#"><i class="fa fa-angle-right"></i> Recent Project (21)</a> </li>
                                        <li> <a href="#"><i class="fa fa-angle-right"></i> Resources (27)</a> </li>
                                        <li> <a href="#"><i class="fa fa-angle-right"></i> News (119)</a> </li>
                                        <li> <a href="#"><i class="fa fa-angle-right"></i> Events (05)</a> </li>
                                        <li> <a href="#"><i class="fa fa-angle-right"></i> Alerts (18)</a> </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="widget clearfix">
                                <div class="sideber-title">
                                    <h4>Popular Tags</h4>
                                </div>
                                <div class="sideber-content">
                                    <ul class="list-inline tags margin-top-20">
                                        <li class="hvr-rectangle-out"> <a href="#"> Resources </a> </li>
                                        <li class="hvr-rectangle-out"> <a href="#"> News </a> </li>
                                        <li class="hvr-rectangle-out"> <a href="#"> Recent Project</a> </li>
                                        <li class="hvr-rectangle-out"> <a href="#"> Events </a> </li>
                                        <li class="hvr-rectangle-out"> <a href="#"> Alerts</a> </li>
                                        <li class="hvr-rectangle-out"> <a href="#"> Complete Project</a> </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="widget clearfix">
                                <div class="sideber-title">
                                    <h4>Archive</h4>
                                </div>
                                <div class="sideber-content">
                                    <ul>
                                        <li> <a href="#"><i class="fa fa-caret-right"></i> January 2018</a> </li>
                                        <li> <a href="#"><i class="fa fa-caret-right"></i> May 2018</a> </li>
                                        <li> <a href="#"><i class="fa fa-caret-right"></i> June 2018</a> </li>
                                        <li> <a href="#"><i class="fa fa-caret-right"></i> Febuary 2018</a> </li>
                                        <li> <a href="#"><i class="fa fa-caret-right"></i> April 2018</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Blog Posts -->

        <!-- divider start -->
        <section class="service-area over-layer-default" style="background-image:url(img/bg/5.jpg);">
            <div class="container padding-bottom-none padding-top-40">
                <div class="section-content">
                    <div class="row">
                        <div class="col-sm-12 col-md-4">
                            <div class="service-item style-1 text-white border-right">
                                <div class="service-icon">
                                    <i class="pe-7s-call"></i>
                                </div>
                                <div class="content">
                                    <h5><a href="#">Give us a Call</a></h5>
                                    <p>+970-438-3258</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div class="service-item style-1 text-white border-right">
                                <div class="">
                                    <i class="pe-7s-mail-open"></i>
                                </div>
                                <div class="content">
                                    <h5><a href="#">Send us a Message</a></h5>
                                    <p>Your_malil@gmail.com</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div class="service-item style-1 text-white">
                                <div class="">
                                    <i class="pe-7s-map-marker"></i>
                                </div>
                                <div class="content">
                                    <h5><a href="#">Visit our Location</a></h5>
                                    <p>12 New york, USA </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- divider end -->

        <!-- Footer Style start -->
        <?php
        include 'footer.php'
        ?>
        <!-- Footer Style End -->


        <a href="#" class="scrollup"><i class="pe-7s-up-arrow" aria-hidden="true"></i></a>
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