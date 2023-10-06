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
    include "./connection.php";
    $query = "select * from blog where BLOG_ID=23";
    $result = $conn->query($query);
    $title = "";
    $blog = "";
    $product_link = "";
    $photo = "";
    $video = "";
    $category_id = "";
    $created_date = "";
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $title = $row["TITLE"];
            $blog = $row["CONTENT"];
            $product_link = $row["PRODUCT_LINK"];
            $photo = $row["PHOTO"];
            $video = $row["VIDEO"];
            $category_id = $row["CATEGORY_ID"];
            $created_date = $row["CREATED_DATE"];
        }
    }
    $query2 = "select * from category where CATEGORY_ID=" . $category_id;
    $result2 = $conn->query($query2);
    $category_name = "";
    if ($result2->num_rows > 0) {
        while ($row = $result2->fetch_assoc()) {
            $category_name = $row["CATEGORY_NAME"];
        }
    }
    ?>
    <!-- Blog Posts -->
    <div class="bg-f8">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="margin-bottom-30">
                        <?php
                        echo "<img class='img-responsive' src='img/blog/$photo' alt=''>
                        <div class='blog-post'>
                            <ul class='list-inline blog-info'>
                                <li>By <a href='#'>Mahamudul Hasan</a></li>
                                <li>In <a href='$product_link'>Product link</a></li>
                                <li>Category name : $category_name</li>
                                <li>Posted June $created_date</li>
                            </ul>
                            <h3><a href='#'> $title</a></h3>
                            <p>
                                $blog
                            </p>
                            
                            </div>'"
                        ?>
                    </div>

                    <!-- Blog Post Author -->
                    <div class="blog-admin margin-bottom-30">
                        <img src="img/blog/a1.jpg" alt="">
                        <div class="blog-admin-desc">
                            <div class="clearfix">
                                <h5>Barbara Blackmond</h5>
                                <ul class="list-inline">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                            <p>Vivamus quis nisi vel dui ultrices lacinia ac eu massa. Quis que vitae consequat sapien.
                                Vivamus sit amet tincidunt ipsum, nec blandit ipsum. consectetur adipiscing elit...</p>
                        </div>
                    </div>
                    <!-- End Blog Post Author -->
                    <div class="mini-title">
                        <h3>Comments</h3>
                    </div>
                    <!-- Blog Comments -->
                    <div class="row blog-comments margin-bottom-30">
                        <div class="col-sm-2">
                            <img src="img/blog/a2.jpg" alt="">
                        </div>
                        <div class="col-sm-10">
                            <div class="comment">
                                <h5>
                                    Dan Mulholland
                                    <span>5 hours ago / <a href="#">Reply</a></span>
                                </h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod..</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Blog Comments -->

                    <!-- Blog Comments -->
                    <div class="row blog-comments blog-comments-reply margin-bottom-30">
                        <div class="col-sm-2">
                            <img src="img/blog/a1.jpg" alt="">
                        </div>
                        <div class="col-sm-10">
                            <div class="comment">
                                <h5>
                                    Lauren M. Massucci
                                    <span>6 hours ago / <a href="#">Reply</a></span>
                                </h5>
                                <p>Gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod..</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Blog Comments -->

                    <!-- Blog Comments -->
                    <div class="row blog-comments margin-bottom-50">
                        <div class="col-sm-2">
                            <img src="img/blog/a3.jpg" alt="">
                        </div>
                        <div class="col-sm-10">
                            <div class="comment">
                                <h5>
                                    Nicholas J. Calabrese
                                    <span>7 hours ago / <a href="#">Reply</a></span>
                                </h5>
                                <p>Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod..</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Blog Comments -->

                    <hr>
                    <div class="mini-title">
                        <h3>Post a Comment</h3>
                    </div>
                    <!-- Form -->
                    <form action="#" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <div>
                                    <input type="text" name="name" id="name" placeholder="Name" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <input type="text" name="email" id="email" placeholder="Email" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <textarea rows="8" name="message" id="message" placeholder="Write comment here ..." class="form-control"></textarea>
                            </div>
                        </div>


                        <p><button type="submit" class="btn btn-theme hvr-bounce-to-top">Submit</button></p>
                    </form>
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