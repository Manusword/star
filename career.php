<?php 

//All gallery1 list
$lists = array();
if ($handle = opendir('images/career/')) {
    while (false !== ($doc_name = readdir($handle))) {
        if ($doc_name != "." && $doc_name != "..") {
            $lists[] = $doc_name;
        }
    }
    closedir($handle);
}


    //---header
    include_once("header.php");
?>

    <!--Page Title-->
    <section class="page-title" style="background-image: url(<?php echo $backgroundImg;?>);">
        <div class="auto-container">
            <div class="title-outer">
                <h1>Career</h1>
                <ul class="page-breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li>Career</li>
                </ul> 
            </div>
        </div>
    </section>
    <!--End Page Title-->



     

    <!-- Contact Section -->
    <section class="contact-section" id="contact">
        <div class="small-container">
            <div class="sec-title text-center">
                <h2>Career Form</h2>
                <span class="divider"></span>
            </div>

            
            <?php 
                    foreach($lists as $d){
                        ?>
                           <!-- Portfolio Block -->
                            <div class="portfolio-block all  col-lg-6 col-md-6 col-sm-12"  style="margin-left:20%;">
                                <div class="image-box">
                                    <figure class="image">
                                        <img  style="height:400px" src="images/gallery1/<?php echo $d;?>" alt="">
                                    </figure>
                                </div>
                            </div>
                        <?php
                    }
                ?>    

          

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
                                    You Have Received a Career Mail From Website.  <br/> <br/>  
                                    NAME : $name  <br/>
                                    MOBILE : $phone  <br/>
                                    EMAIL : $sender_email  <br/>
                                    
                                    <br/>";
                    $email_body.=$message;
                    
                    $subject = "For Career Mail From Star Hospital Website";
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
       
        //---header
        include_once("footer.php");
    ?>