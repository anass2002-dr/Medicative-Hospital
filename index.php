<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

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

    <!-- Start  bootstrap-touch-slider Slider -->
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
            <div class="item active">
                <!-- Slide Background -->
                <img src="img/slide1.jpg" alt="Slider Images" class="slide-image" />
                <!-- <div class="bs-slider-overlay"></div> -->

                <!-- <div class="slide-text slide_style_left">
                    <h1 data-animation="animated fadeInRight">The <span class="color-defult"> Medicative </span>Hospital</h1>
                    <p data-animation="animated fadeInLeft">Our team of over 7000 doctors join me in giving you the best <br> of modern healthcare to ensure you stay healthy, always.</p>
                    <a href="#" target="_blank" class="btn btn-default" data-animation="animated fadeInLeft">Read more</a>
                    <a href="#" target="_blank" class="btn btn-primary" data-animation="animated fadeInRight">Book Now</a>
                </div> -->
            </div>
            <!-- End of Slide -->

            <!-- Second Slide -->
            <div class="item">
                <!-- Slide Background -->
                <img src="img/slide2.jpg" alt="Slider Images" class="slide-image" />
                <!-- <div class="bs-slider-overlay"></div> -->
                <!-- Slide Text Layer -->
                <!-- <div class="slide-text slide_style_center">
                    <h1 data-animation="animated bounceInDown"> Treat<span class="color-defult"> heart</span> disease.</h1>
                    <p data-animation="animated lightSpeedIn">consectetur adipisicing elit. Eligendi vel ipsam deleniti dignissimos <br> corporis consequatur possimus eaque voluptates.</p>
                    <a href="#" target="_blank" class="btn btn-default" data-animation="animated fadeInUp">Read More</a>
                    <a href="#" target="_blank" class="btn btn-primary" data-animation="animated fadeInDown">Donate Now</a>
                </div> -->
            </div>
            <!-- End of Slide -->

            <!-- Third Slide -->
            <div class="item">
                <!-- Slide Background -->
                <img src="img/slide3.jpg" alt="Slider Images" class="slide-image" />
                <!-- <div class="bs-slider-overlay"></div> -->
                <!-- Slide Text Layer -->
                <!-- <div class="slide-text slide_style_right">
                    <h1 data-animation="animated fadeInLeft">Life Wellness<span class="color-defult"> Programs</span></h1>
                    <p data-animation="animated fadeInRight">Stay in touch and in shape with periodic tips from our <br>in-house experts on wellness, fitness and nutrition.</p>
                    <a href="#" target="_blank" class="btn btn-default" data-animation="animated fadeInLeft">Read More</a>
                    <a href="#" target="_blank" class="btn btn-primary" data-animation="animated fadeInRight">Donate Now</a>
                </div> -->
            </div>
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

    </div> <!-- End  bootstrap-touch-slider Slider -->

    <!-- divider start -->
    
    <!-- divider end -->
    <div class="container">
        <div class="section-content">
            <div class="row">
                <div class="col-12">
                    <img src="./img/beauty-2.jpg" alt="" srcset="">
                </div>
            </div>
        </div>
    </div>

    <!-- service start -->
    <section class="service-area bg-f8 animatedParent animateOnce">
        <div class="container">
            <div class="section-title">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <h2>Our <span class="color-defult">Category</span></h2>
                        <div class="line-border-center bg-defult"></div>
                        <!-- <p>Repellendus error placeat numquam doloribus perferendis consequatur maxime molestiae soluta Corporis quidem quaerat accusantium omnis repudiandae nulla recusandae</p> -->
                    </div>
                </div>
            </div>
            <div class="section-content">

                <div class="row">
                    <?php
                    include 'Config.php';
                    $query = "SELECT * FROM category LIMIT 6";
                    $result = $conn->query($query);


                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            $CATEGORY_ID = $row["CATEGORY_ID"];
                            $CATEGORY_NAME = $row["CATEGORY_NAME"];
                            $DESCRIPTION = $row["DESCRIPTION"];

                            if (strlen($DESCRIPTION) > 95) {
                                $DESCRIPTION = substr($DESCRIPTION, 0, 95);
                            }

                            echo "<div class='col-xs-12 col-sm-6 col-md-4'>
                                <div class='service-item text-center style-3'>
                                    <span class='flaticon-heart-1'></span>
                                    <h4><a href='category.php?id=$CATEGORY_ID'>$CATEGORY_NAME</a></h4>
                                    <div class='border-center'></div>
                                    <p>$DESCRIPTION ...</p>
                                    <a href='category.php?id=$CATEGORY_ID' class='btn btn-theme margin-top-20' data-text='Send Message'>Read More</a>
                                </div>
                            </div>";
                        }
                    }
                    ?>

                </div>
                <div class="row">
                    <div class="text-center">
                        <a href="product-shop.php" class="btn btn-theme">See All</a>
                    </div>
                </div>
            </div>
    </section>
    <!-- service end -->

    <!-- appointment start -->

    <!-- appointment end -->

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
                                <p>info@beautymedic.com</p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- divider end -->
    <!-- department start -->
    <section class="bg-f8">
        <div class="container">
            <div class="section-title">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="text-center">
                            <h2>latest<span class="color-defult"> Blogs</span></h2>
                            <div class="line-border-center bg-defult"></div>
                            <!-- <p>Consequatur alias incidunt cumque officiis, quas eius quaerat ut itaque laudantium corporis nobis ipsum, voluptates at, adipisci fugiat hic voluptate consequuntur porro.</p> -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="section-content">
                <div class="row">
                    <?php
                    
                    
                    $query = "select b.BLOG_ID,b.TITLE,b.PHOTO,b.BLOG_SHORT,c.CATEGORY_NAME,b.CREATED_DATE from blog as b INNER JOIN category as c on b.CATEGORY_ID=c.CATEGORY_ID limit 6";
                   
                    $result = $conn->query($query);
                    // $row = mysqli_fetch_assoc($result);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            $BLOG_ID = $row["BLOG_ID"];
                            $TITLE = $row["TITLE"];
                            $BLOG_SHORT = $row["BLOG_SHORT"];
                            $CATEGORY_NAME = $row["CATEGORY_NAME"];
                            $PHOTO = $row["PHOTO"];
                            $CREATED_DATE = $row["CREATED_DATE"];
                            if (strlen($BLOG_SHORT) > 160) {
                                $BLOG_SHORT = substr($BLOG_SHORT, 0, 160);
                            }


                            echo "<div class='col-md-4 col-sm-6'>
                                <div class='practice-item-1'>
                                    <div class='practice-img'>
                                        <a href='blog-single.php?id=$BLOG_ID' class='blg_img'>
                                            <img src='img/blog/$PHOTO' alt=''>
                                            <span class='flaticon-heart-1'></span>
                                        </a>
                                    </div>
                                    <div class='practice-content'>
                                        <h4><a href='blog-single.php?id=$BLOG_ID'>$TITLE</a></h4>
                                        <p class='blg_p'>$BLOG_SHORT</p>
                                        <a href='blog-single.php?id=$BLOG_ID' class='btn-theme hvr-bounce-to-top'> Read more</a>
                                    </div>
                                </div>
                            </div>";
                        }
                    }
                    ?>


                </div>
            </div>
        </div>
    </section>


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