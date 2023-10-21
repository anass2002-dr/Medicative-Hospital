<footer class="bg-faded">
    <div class="container">
        <div class="section-content">
            <div class="row margin-top-30">
                <div class="col-md-3">
                    <div class="footer-item footer-widget-one">
                        <img alt="" src="img/logo-beauty.png" class="footer-logo">
                        <p>Your satisfaction is our top priority. We actively listen to your feedback and needs, and we're always ready to make adjustments to ensure your happiness.</p>

                        <ul class="address">
                            <!-- <li><i class="pe-7s-call"></i>Phone: 001 (407) 901-6400</li> -->
                            <li><i class="pe-7s-mail"></i><a href="mailto:">Email: info@beautymedic.com</a></li>
                        </ul>

                        <hr>
                        <ul class="social-icon bg-theme">
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer-item">
                        <div class="footer-title">
                            <h4>Our Peges </h4>
                            <div class="border-style-2"></div>
                        </div>
                        <ul class="footer-list border-deshed color-icon">
                            <li><i class="pe-7s-angle-right"></i><a href="about-us.php">About Us</a></li>
                            <li><i class="pe-7s-angle-right"></i><a href="product-shop.php">Services</a></li>
                            <li><i class="pe-7s-angle-right"></i><a href="blog-grid.php">Blogs</a></li>
                            <li><i class="pe-7s-angle-right"></i><a href="contact-us.php">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer-item">
                        <div class="footer-title">
                            <h4>Our Services </h4>
                            <div class="border-style-2"></div>
                        </div>
                        <ul class="footer-list border-deshed color-icon">
                            <?php
                            include './Config.php';
                            $query = "select * from category limit 6";
                            $result = $conn->query($query);
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    $category_name = $row['CATEGORY_NAME'];
                                    $category_id = $row['CATEGORY_ID'];
                                    echo "<li><i class='pe-7s-angle-right'></i><a href='category.php?id=$category_id'>$category_name</a></li>";
                                }
                            }
                            ?>


                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
</footer>

<section class="footer-copy-right bg-f9">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <p><a target="_blank" href="index.php">BeautyMedic</a></p>
            </div>
        </div>
    </div>
</section>