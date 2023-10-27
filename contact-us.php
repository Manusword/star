<?php 
    //---header
    include_once("header.php");
?>



    <!--Page Title-->
    <section class="page-title" style="background-image: url(<?php echo $backgroundImg;?>);">
        <div class="auto-container">
            <div class="title-outer">            
                <h1>Contact Us</h1>
                <ul class="page-breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li>Contact</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->



    <!-- Map Section -->
    <section class="map-section">
        <div class="auto-container">
            <div class="map-outer">
                <!-- <div class="map-canvas"
                    data-zoom="18"
                    data-lat="27.9737608"
                    data-lng="76.340562"
                    data-type="roadmap"
                    data-hue="#ffc400"
                    data-title="Envato"
                    data-icon-path="images/icons/map-marker.png"
                    data-content="Opposite Bus Stand, Bhiwadi<br><a href='mailto:info@starhospital.co.in'>info@starhospital.co.in</a>">
                </div> -->

                <div id="googlemaps" class="google-map custom-map">
                    <iframe src="https://maps.google.com/maps?hl=en&amp;q=star hospital bhiwadi&amp;t=&amp;z=18&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" width="100%" height="400px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
				</div>
               

            </div>
        </div>

       
    </section>
    <!-- End Map Section -->

    <!-- Contact Section -->
    <section class="contact-section" id="contact">
        <div class="small-container">
            <div class="sec-title text-center">
                <h2>Contact Now !</h2>
                <span class="divider"></span>
            </div>

            <!-- Contact box -->
            <div class="contact-box">
                <div class="row">
                    <div class="contact-info-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner">
                            <span class="icon flaticon-worldwide"></span> 
                            <h4><strong>Address</strong></h4>
                            <p> 
                                Star Hospital
                                <br>
                                Vassundhara Nagar
                                <br>
                                Opposite Bus Stand, 
                                <br>
                                Bhiwadi (301019)
                                <br>
                                Rajasthan
                            </p>
                        </div>
                    </div>

                    <div class="contact-info-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner">
                            <span class="icon flaticon-phone"></span> 
                            <h4><strong>Phone</strong></h4>
                            <p>Reception : <a href="tel:+917300474747">7300474747</a></p>
                            <p>Emergency : <a href="tel:+917300484848">7300484848</a></p>
                            <p>Ambulance : <a href="tel:+917300494949">7300494949</a></p>
                        </div>
                    </div>

                    <div class="contact-info-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner">
                            <span class="icon flaticon-email"></span> 
                            <h4><strong>Email</strong></h4>
                            <p><a href="mailto:info@starhospital.co.in">info@starhospital.co.in</a></p>
                        </div>
                    </div>
                </div>
            </div>

            <?php 
                if(isset($_REQUEST['send']))
                {
                    $name = $_REQUEST['username'];
                    $sender_email = $_REQUEST['email'];
                    $phone = $_REQUEST['usermobile'];
                    //$subject = $_REQUEST['subject'];
                    $message = $_REQUEST['contact_message'];
                    
                    //$to_email = 'info@starhospital.co.in';
                    $to_email = 'info@starhospital.co.in';
                    $email_body = "
                                    You Have Received a Mail From Website <br/> <br/>  
                                    NAME : $name  <br/>
                                    MOBILE : $phone  <br/>
                                    EMAIL : $sender_email  <br/>
                                    
                                    <br/>";
                    $email_body.=$message;
                    
                    $subject = "Mail From Star Hospital Website";
                    $txt = $email_body;
                    
                    $header = 'Content-type: text/html; charset=utf-8' . "\r\n";
                    $header .= 'From: ' . $name . " <" . $sender_email . "> \r\n";
                    

                    mail($to_email,$subject,$txt,$header);
                }//send
            ?>



            <!-- Form box -->
            <div class="form-box">
                <div class="contact-form">
                <?php 
                    if(isset($_REQUEST['send'])){
                        ?>
                            <h3 style="color:red">Thanks for sending the message. We will contact you soon.</h3>
                        <?php 
                    }
                ?>
                    
                    <form class="contact-form" action="" method="POST">
                        <div class="row">
                            <div class="form-group col-lg-12">
                                <div class="response"></div>
                            </div>

                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <input type="text" name="username" class="username" placeholder="Full Name *" required>
                                </div>

                                <div class="form-group">
                                    <input type="email" name="email" class="email" placeholder="Email Address *" required>
                                </div>

                                <div class="form-group">
                                    <input type="text" name="usermobile" class="username" placeholder="Your Phone" required>
                                </div>
                            </div>
                            
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <textarea name="contact_message" class="message" placeholder="Massage"></textarea>
                                </div>
                                
                            </div>

                            <div class="form-group col-lg-12 text-center pt-3">
                                <button class="theme-btn btn-style-one" type="submit" id="submit" name="send"><span class="btn-title">Send Message</span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--End Contact Section -->








<?php 
    

    //---footer 
    include_once("footer.php");
  
    /*
?>

<!--Google Map APi Key-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDaaCBm4FEmgKs5cfVrh3JYue3Chj1kJMw"></script>
<script src="js/map-script.js"></script>
<!--End Google Map APi-->

*/
?>

