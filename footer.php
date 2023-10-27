<?php 
 //---client Section
 include_once('component/client.php');
?>



    <!-- Main Footer -->
    <footer class="main-footer" >
        <!--Widgets Section-->
        <div class="widgets-section" style="background-image: url(images/background/7.jpg);">
            <div class="auto-container">
                <div class="row">
                    <!--Big Column-->
                    <div class="big-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                        <div class="row">
                            <!--Footer Column-->
                            <div class="footer-column col-xl-7 col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget about-widget">
                                    <div class="logo">
                                        <a href="index.php"><img src="<?php echo $logo2;?>" style="height:200px" alt="Start Hospital" /></a>
                                    </div>
                                    <div class="text">
                                        <p>Star Hospital Bhiwadi Established with a mission to enhance lives through healing, we have been a trusted name in healthcare for over <?php echo date('Y')-2015; ?> years. </p>
                                    </div>
                                    <ul class="social-icon-three">
                                        <li><a href="<?php echo $fb;?>"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="<?php echo $instagram;?>"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="<?php echo $youtube;?>"><i class="fab fa-youtube"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                            <!--Footer Column-->
                            <div class="footer-column col-xl-5 col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget">
                                    <h2 class="widget-title">Menu</h2>
                                    <ul class="user-links">
                                        <li style="margin-left:10px"><a href="about-us.php">About Us</a></li>
                                        <li style="margin-left:10px"><a href="scope.php">Scope of Services</a></li>
                                        <li><a href="hospitals-gallery.php">Hospitals Gallery</a></li>
                                        <li><a href="corporate-gallery.php">Corporate Camps</a></li>
                                        <li><a href="patients-testimonies-gallery.php">Patients Testimonies</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Big Column-->
                    <div class="big-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                        <div class="row">
                            <!--Footer Column-->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <!--Footer Column-->
                                <div class="footer-widget recent-posts">
                                    <h2 class="widget-title">Latest News</h2>
                                     <!--Footer Column-->
                                    <div class="widget-content">
                                        <div class="post">
                                            <div class="thumb"><img src="<?php echo $news4 ;?>" alt=""></div>
                                            <h4>Leading the Way in Healthcare Excellence</h4>
                                            <span class="date">29 Nov, <?php echo date('Y')-1;?></span>
                                        </div>

                                        <div class="post">
                                            <div class="thumb"><img src="<?php echo $news6 ;?>" alt=""></div>
                                            <h4>Star Hospital Celebrates Milestone Achievements in Patient Care</h4>
                                            <span class="date">6 Apr, <?php echo date('Y')-1;?></span>
                                        </div>

                                        <div class="post">
                                            <div class="thumb"><img src="<?php echo $news5 ;?>" alt=""></div>
                                            <h4>Latest Medical Breakthroughs at Star Hospital</h4>
                                            <span class="date">16 Aug, <?php echo date('Y')-1;?></span>
                                        </div>

                                        
                                    </div>
                                </div>
                            </div>

                            <!--Footer Column-->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <!--Footer Column-->
                                <div class="footer-widget contact-widget">
                                    <h2 class="widget-title">Contact Us</h2>
                                     <!--Footer Column-->
                                    <div class="widget-content">
                                        <ul class="contact-list">
                                            <li>
                                                <span class="icon flaticon-placeholder"></span>
                                                <div class="text"><?php echo $address;?></div>
                                            </li>

                                            <li>
                                                <span class="icon flaticon-call-1"></span>
                                                <div class="text">24x7</div>
                                                <a href="tel:+91<?php echo $mob;?>"><strong><?php echo $mob;?></strong></a>
                                            </li>

                                            <li>
                                                <span class="icon flaticon-email"></span>
                                                <div class="text">Do you have a Question?<br>
                                                <a href="mailto:<?php echo $email_id;?>"><strong> <?php echo $email_id;?> </strong></a></div>
                                            </li>

                                            <li>
                                                <span class="icon flaticon-back-in-time"></span>
                                                <div class="text">27 x 7<br>
                                                <strong>Open</strong></div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <!--Footer Bottom-->
        <div class="footer-bottom">
            <!-- Scroll To Top -->
            <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>
            
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <div class="footer-nav">
                        <ul class="clearfix">
                           <li><a href="contact-us.php">Contact</a></li> 
                           <!-- <li><a href="index.html">Privacy Policy</a></li> 
                           <li><a href="services.html">Supplier</a></li>   -->
                        </ul>
                    </div>
                    
                    <div class="copyright-text">
                        <p>Copyright © 2020 <a href="#"><?php echo $compnayName;?></a> All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--End Main Footer -->

</div><!-- End Page Wrapper -->

<script src="js/jquery.js"></script> 
<script src="js/popper.min.js"></script>
<!--Revolution Slider-->
<script src="plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script src="js/main-slider-script.js"></script>
<!--Revolution Slider-->
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/mmenu.polyfills.js"></script>
<script src="js/jquery.modal.min.js"></script>
<script src="js/mmenu.js"></script>
<script src="js/appear.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/script.js"></script>
</body>
</html>


