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
                <img src="img/bg/3.jpg" alt="Slider Images" class="slide-image" />
                <div class="bs-slider-overlay"></div>

                <div class="slide-text slide_style_left">
                    <h1 data-animation="animated fadeInRight">The <span class="color-defult"> Medicative </span>Hospital</h1>
                    <p data-animation="animated fadeInLeft">Our team of over 7000 doctors join me in giving you the best <br> of modern healthcare to ensure you stay healthy, always.</p>
                    <a href="#" target="_blank" class="btn btn-default" data-animation="animated fadeInLeft">Read more</a>
                    <a href="#" target="_blank" class="btn btn-primary" data-animation="animated fadeInRight">Book Now</a>
                </div>
            </div>
            <!-- End of Slide -->

            <!-- Second Slide -->
            <div class="item">
                <!-- Slide Background -->
                <img src="img/bg/2.jpg" alt="Slider Images" class="slide-image" />
                <div class="bs-slider-overlay"></div>
                <!-- Slide Text Layer -->
                <div class="slide-text slide_style_center">
                    <h1 data-animation="animated bounceInDown"> Treat<span class="color-defult"> heart</span> disease.</h1>
                    <p data-animation="animated lightSpeedIn">consectetur adipisicing elit. Eligendi vel ipsam deleniti dignissimos <br> corporis consequatur possimus eaque voluptates.</p>
                    <a href="#" target="_blank" class="btn btn-default" data-animation="animated fadeInUp">Read More</a>
                    <a href="#" target="_blank" class="btn btn-primary" data-animation="animated fadeInDown">Donate Now</a>
                </div>
            </div>
            <!-- End of Slide -->

            <!-- Third Slide -->
            <div class="item">
                <!-- Slide Background -->
                <img src="img/bg/1.jpg" alt="Slider Images" class="slide-image" />
                <div class="bs-slider-overlay"></div>
                <!-- Slide Text Layer -->
                <div class="slide-text slide_style_right">
                    <h1 data-animation="animated fadeInLeft">Life Wellness<span class="color-defult"> Programs</span></h1>
                    <p data-animation="animated fadeInRight">Stay in touch and in shape with periodic tips from our <br>in-house experts on wellness, fitness and nutrition.</p>
                    <a href="#" target="_blank" class="btn btn-default" data-animation="animated fadeInLeft">Read More</a>
                    <a href="#" target="_blank" class="btn btn-primary" data-animation="animated fadeInRight">Donate Now</a>
                </div>
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
    <section class="about-3col animatedParent animateOnce">
        <div class="container">
            <div class="section-content">
                <div class="row">
                    <div class="about-feature style-2">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                            <div class="appointment-item">
                                <i class="flaticon-ribbon"></i>
                                <h5><a href="#">Our Doctors</a></h5>
                                <div class="line-border-center bg-gray margin-bottom-20"></div>
                                <p>Choose by name, specialty, city and more.</p>
                                <button class="btn btn-theme btn-sm">Find a Doctor <i class="pe-7s-angle-right"></i></button>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                            <div class="appointment-item">
                                <i class="flaticon-cardiogram"></i>
                                <h5><a href="#">Department & Service</a></h5>
                                <div class="line-border-center bg-gray margin-bottom-20"></div>
                                <p>Find maps and more for all locations.</p>
                                <button class="btn btn-theme btn-sm">Get Directions <i class="pe-7s-angle-right"></i></button>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 center-block">
                            <div class="appointment-item">
                                <i class="flaticon-first-aid-kit"></i>
                                <h5><a href="#">Appointments</a></h5>
                                <div class="line-border-center bg-gray margin-bottom-20"></div>
                                <p>Click in, walk in or call us today.</p>
                                <button class="btn btn-theme btn-sm">Get Appointment <i class="pe-7s-angle-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- divider end -->

    <!-- welcome start -->
    <section>
        <div class="container">
            <div class="section-content">
                <div class="row">
                    <div class="col-12">
                        <img src="./img/beauty-2.jpg" alt="" srcset="">
                    </div>
                    <!-- <div class="col-md-7">
                        <h2>Why chose us</h2>
                        
                        <p>
                            <span class="color-defult">At BeautyMedic</span>
                            , we are committed to being your trusted
                            source for beauty and medical products. What sets us apart
                            is our unwavering dedication to curate only the best, high-quality
                            products at the most competitive prices. Our team of experts rigorously researches
                            and selects every item in our collection, ensuring that each product meets our stringent
                            standards for safety and effectiveness. We understand that your beauty and health are paramount,
                            and that's why we take every measure to provide you with an exceptional shopping experience.
                            With a focus on transparency, a wide range of products, and top-notch customer service, we invite you to choose us
                            for all your beauty and medical needs, knowing that your satisfaction and well-being are our top priorities.
                        </p>
                        <div class="row margin-top-20">
                            <div class="col-md-6">
                                <img class="margin-top-10" src="img/services/s1.jpg" alt="">
                            </div>
                            <div class="col-md-6">
                                <p>Medicative <span class="color-defult fw-b">adipisicing elit</span>. Animi eveniet ipsam, error dolorum impedit debitis, officiis sint saepe similique quasi dolor, ut. Ipsum quaerat saepe, sapiente doloribus ab laudantium ipsam!</p>
                            </div>
                        </div>
                        <div class="clearfix margin-top-20 margin-right-10">
                            <div class="skills" data-percent="85%">
                                <div class="title-bar">
                                    <h5>Cardiology</h5>
                                </div>
                                <span>85%</span>
                                <div class="skillbar-1"></div>
                            </div>
                            <div class="skills" data-percent="60%">
                                <div class="title-bar">
                                    <h5>General Practice</h5>
                                </div>
                                <span>60%</span>
                                <div class="skillbar-2"></div>
                            </div>
                            <div class="skills" data-percent="89%">
                                <div class="title-bar">
                                    <h5>General surgery</h5>
                                </div>
                                <span>89%</span>
                                <div class="skillbar-3"></div>
                            </div>
                            <div class="skills" data-percent="60%">
                                <div class="title-bar">
                                    <h5>Pharmacology</h5>
                                </div>
                                <span>60%</span>
                                <div class="skillbar-4"></div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-5">
                        <div>
                            <img alt="" src="img/services/s2.jpg">
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </section>
    <!-- welcome end -->

    <!-- service start -->
    <section class="service-area bg-f8 animatedParent animateOnce">
        <div class="container">
            <div class="section-title">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <h2>Our <span class="color-defult">Category</span></h2>
                        <div class="line-border-center bg-defult"></div>
                        <p>Repellendus error placeat numquam doloribus perferendis consequatur maxime molestiae soluta Corporis quidem quaerat accusantium omnis repudiandae nulla recusandae</p>
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
                                    <button type='submit' class='btn btn-theme margin-top-20' data-text='Send Message'>Read More</button>
                                </div>
                            </div>";
                        }
                    }
                    ?>
                    
                </div>
                <div class="row">
                <div class="text-center">
                    <a href="" class="btn btn-theme">See All</a>
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

    <!-- portfolio start -->

    <!-- portfolio end -->

    <!-- divider start -->

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
                    <div class="col-md-4 col-sm-6">
                        <div class="practice-item-1">
                            <div class="practice-img">
                                <a href="#">
                                    <img src="img/services/4.jpg" alt="">
                                    <span class="flaticon-heart-1"></span>
                                </a>
                            </div>
                            <div class="practice-content">
                                <h4><a href="#">Medical evacuation</a></h4>
                                <p>Personal Health Record makes it easy to join and stay on a wellness program - lose weight or manage a chronic condition easily.</p>
                                <a href="#" class="btn-theme hvr-bounce-to-top"> Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="practice-item-1">
                            <div class="practice-img">
                                <a href="#">
                                    <img src="img/services/5.jpg" alt="">
                                    <span class="flaticon-heart-1"></span>
                                </a>
                            </div>
                            <div class="practice-content">
                                <h4><a href="#"> Physical examination</a></h4>
                                <p>Personal Health Record makes it easy to join and stay on a wellness program - lose weight or manage a chronic condition easily.</p>
                                <a href="#" class="btn-theme hvr-bounce-to-top"> Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="practice-item-1">
                            <div class="practice-img">
                                <a href="#">
                                    <img src="img/services/6.jpg" alt="">
                                    <span class="flaticon-heart-1"></span>
                                </a>
                            </div>
                            <div class="practice-content">
                                <h4><a href="#"> Ultrasound Endoscopy</a></h4>
                                <p>Personal Health Record makes it easy to join and stay on a wellness program - lose weight or manage a chronic condition easily.</p>
                                <a href="#" class="btn-theme hvr-bounce-to-top"> Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="practice-item-1">
                            <div class="practice-img">
                                <a href="#">
                                    <img src="img/services/1.jpg" alt="">
                                    <span class="flaticon-heart-1"></span>
                                </a>
                            </div>
                            <div class="practice-content">
                                <h4><a href="#"> Radiology / X-Ray</a></h4>
                                <p>Personal Health Record makes it easy to join and stay on a wellness program - lose weight or manage a chronic condition easily.</p>
                                <a href="#" class="btn-theme hvr-bounce-to-top"> Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="practice-item-1">
                            <div class="practice-img">
                                <a href="#">
                                    <img src="img/services/8.jpg" alt="">
                                    <span class="flaticon-heart-1"></span>
                                </a>
                            </div>
                            <div class="practice-content">
                                <h4><a href="#"> CRITICAL CARE</a></h4>
                                <p>Personal Health Record makes it easy to join and stay on a wellness program - lose weight or manage a chronic condition easily.</p>
                                <a href="#" class="btn-theme hvr-bounce-to-top"> Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="practice-item-1">
                            <div class="practice-img">
                                <a href="#">
                                    <img src="img/services/3.jpg" alt="">
                                    <span class="flaticon-heart-1"></span>
                                </a>
                            </div>
                            <div class="practice-content">
                                <h4><a href="#"> Safe & Secure</a></h4>
                                <p>Personal Health Record makes it easy to join and stay on a wellness program - lose weight or manage a chronic condition easily.</p>
                                <a href="#" class="btn-theme hvr-bounce-to-top"> Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- department end -->

    <!-- Team start -->

    <!-- Team end -->

    <!-- Counter start -->

    <!-- Counter end -->

    <!-- Testimonial start -->

    <!-- Testimonial end -->

    <!-- blog start -->

    <!-- blog end -->

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