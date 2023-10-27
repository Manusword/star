<?php

$compnayName = "Star Hospital";
$pageTittle = "Star Hospital | Multi Specialty Hospital in Bhiwadi";
$logo = "images/Starhospital.png";
$logo2 = "images/Logo footer.png";
$favi = "images/fev.png";

$color1 = "rgb(87,188,179)";
$color2 = "rgb(238,158,58)";



//basic details
$mob = '73004 74747';
$emergency_mob = '7300484848';
$email_id ="info@starhospital.co.in";
$address = "Opposite Bus Stand, Bhiwadi(301019)";
$video_link ="https://youtu.be/F8DWJMfZZzk?si=F9EaRLniAQLl5RPV";

//banner
$banner = "images/main-slider/star-banner.jpg";

//background 
$backgroundImg = "images/background/all.jpg";

//other image
$img1 = "images/resource/image1.png";
$img2 = "images/resource/image2.png";


//team
$team1 = "images/resource/team1.jpg";
$team2 = "images/resource/team2.jpg";
$team3 = "images/resource/team3.jpg";
$team4 = "images/resource/team4.jpg";

//news
$news1 = "images/news/news1.jpg";
$news2 = "images/news/news2.jpg";
$news3 = "images/news/news3.jpg";
$news4 = "images/news/news4.jpg";
$news5 = "images/news/news5.jpg";
$news6 = "images/news/news6.jpg";
$news7 = "images/news/news7.jpg";


//social media link
$fb = "https://www.facebook.com/starhospital.co.in";
$instagram = "https://www.instagram.com/star_hospital_/";
$youtube = "https://www.youtube.com/@starhospitalbhiwadi";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title><?php echo $pageTittle;?></title>

<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">

<!--Color Themes-->
<link id="theme-color-file" href="css/color-themes/tealblue.css" rel="stylesheet">

<link rel="shortcut icon" href="<?php echo $favi;?>" type="image/x-icon">
<link rel="icon" href="<?php echo $favi;?>" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->

<meta name='robots' content='noindex, nofollow' />
<link rel="alternate" type="application/rss+xml" title="OM Medicentre Private Limited &raquo; Feed" href="https://www.starhospital.co.in/feed/" />
<link rel="alternate" type="application/rss+xml" title="OM Medicentre Private Limited &raquo; Comments Feed" href="https://www.starhospital.co.in/comments/feed/" />

</head>

<body>

<div class="page-wrapper">

    <!-- Preloader -->
    <div class="preloader"></div>
    
    <!-- Main Header-->
    <header class="main-header header-style-two">

        <!-- Header top -->
        <div class="header-top-two">
            <div class="auto-container">
                <div class="inner-container">
                    <div class="top-left">
                        <ul class="contact-list clearfix" >
                            
                            <li style="font-weight:bolder;">
                                <i class="icon flaticon-call-1"></i> 
                                Appointment <br> <?php echo $mob?>
                                <br>
                                <?php echo $email_id?>
                            </li>

                            <li style="font-weight:bolder;"><i class="flaticon-hospital-1"></i>Opposite Bus Stand, <br> Bhiwadi(301019) </li>

                            <li style="font-weight:bolder; color:<?php echo $color2;?>">
                                Emergency
                                <br>
                                24x7
                            </li>
                            
                            
                        </ul>
                    </div>
                    <div class="top-right">
                        <!--
                        <ul class="social-icon-one">
                            <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                            <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                            <li><a href="#"><span class="fab fa-skype"></span></a></li>
                            <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                        </ul>
                        -->
                        <div class="btn-box">
                            <a href="tel:+91<?php echo $emergency_mob?>" id="appointment-btn" class="theme-btn btn-style-one" style="background-color:<?php echo $color2;?>"><span class="btn-title">Emergency : <?php echo $emergency_mob?></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Top -->
        
        <!-- Header Lower -->
        <div class="header-lower">
            <div class="auto-container">    
                <!-- Main box -->
                <div class="main-box">
                    <div class="logo-box">
                        <div class="logo"><a href="index.php"><img src="<?php echo $logo;?>" style="height:130px" alt="Start Hospital Logo" title="<?php echo $pageTittle;?>"></a></div>
                    </div>

                    <!--Nav Box-->
                    <div class="nav-outer">
                        <nav class="nav main-menu">
                            <ul class="navigation" id="navbar">
                                
                                <li><a href="index.php">Home</a></li>
                                <li style="margin-left:10px"><a href="about-us.php">About Us</a></li>
                                <li style="margin-left:10px"><a href="doctors.php">Our Consultants</a></li>
                                <li style="margin-left:10px"><a href="scope.php">Scope of Services</a></li>

                                <li class="dropdown">
                                    <span>Gallery</span>
                                    <ul>
                                        <li><a href="hospitals-gallery.php">Hospitals Gallery</a></li>
                                        <li><a href="corporate-gallery.php">Corporate Camps</a></li>
                                        <li><a href="patients-testimonies-gallery.php">Patients Testimonies</a></li>
                                    </ul>
                                </li>

                                <li style="margin-left:10px"><a href="career.php">Career</a></li>
                                <li style="margin-left:10px"><a href="contact-us.php">Contact Us</a></li>

                                <?php /*

                                 <li class="dropdown" style="margin-left:10px">
                                    <span>Our Consultants</span>
                                    <ul>
                                        <li><a href="doctors.php">All Consultants List</a></li>
                                        <li><a href="doctor-details.php?id=1">DR. Nitin Malik (DIRECTOR)</a></li>
                                        <li><a href="doctor-details.php?id=2">DR. Bhavna Tiwari (DIRECTOR)</a></li>
                                        <li><a href="doctor-details.php?id=3">Dr. SB Yadav</a></li>
                                        <li><a href="doctor-details.php?id=4">DR. Utkarsh v Agrawal</a></li>
                                        <li><a href="doctor-details.php?id=5">DR. Deepak Kumar Sharma</a></li>
                                        <li><a href="doctor-details.php?id=6">DR. Dushyant Chaudhary</a></li>
                                        <li><a href="doctor-details.php?id=7">DR. Jaiveer Yadav</a></li>
                                        <li><a href="doctor-details.php?id=8">DR. Namrata M. Chaturvedi</a></li>
                                        <li><a href="doctor-details.php?id=9">DR. Deepshikha</a></li>
                                        <li><a href="doctor-details.php?id=10">DR. Pankaj Chauhan</a></li>
                                        <li><a href="doctor-details.php?id=11">DT. Anjali</a></li>
                                        <li><a href="doctor-details.php?id=12">DT. Dimple Mathur</a></li>
                                        <li><a href="doctor-details.php?id=13">DR. Preeti Yadav</a></li>
                                        <li><a href="doctor-details.php?id=14">DR. Vijay Yadav</a></li>
                                        <li><a href="doctor-details.php?id=15">DR. Rahul Rai</a></li>
                                    </ul>
                                </li>


                                <li class="dropdown" style="margin-left:80px">
                                    <span>Scope of services</span>
                                    <ul>
                                        <li><a href="department-detail.php?Departments=Medicine">Internal Medicine</a></li>
                                        <li><a href="department-detail.php?Departments=Gynaecologist">Obs &#038; Gynaecologist</a></li>
                                        <li><a href="department-detail.php?Departments=Paedritics">Paedritics &#038; Neo Natal</a></li>
                                        <li><a href="department-detail.php?Departments=Surgery">General &#038; Laprosccopy Surgery</a></li>
                                        <li><a href="department-detail.php?Departments=Orthopedics">Orthopedics</a></li>
                                        <li><a href="department-detail.php?Departments=Dental">Dental Care</a></li>
                                        <li><a href="department-detail.php?Departments=HairSkin">Hair &#038; Skin</a></li>
                                        <li><a href="department-detail.php?Departments=Dietitian">Dietitian</a></li>
                                        <li><a href="department-detail.php?Departments=Trauma">Casualty &#038; Trauma</a></li>
                                        <li><a href="department-detail.php?Departments=BloodBank">Blood Bank</a></li>
                                        <li><a href="department-detail.php?Departments=Psychiatics">Psychiatics</a></li>
                                        <li><a href="department-detail.php?Departments=Neurology">Neuology</a></li>
                                        <li><a href="department-detail.php?Departments=Dialysis">Dialysis</a></li>
                                        <li><a href="department-detail.php?Departments=IVF">IVF</a></li>
                                        <li><a href="department-detail.php?Departments=AyushClinic">Ayush Clinic</a></li>
                                        <li><a href="department-detail.php?Departments=EyeOpthology">Eye &#038; Opthology</a></li>
                                        <li><a href="department-detail.php?Departments=ReHalibation">Physiotherapy &#038; Re-halibation Centre</a></li>
                                    </ul>
                                </li>
                                */
                                ?>


                                



                                <?php /*
                                <li class="dropdown">
                                    <span>Departments</span>
                                    <ul>
                                        <li class="dropdown">
                                            <span>Clinical</span>
                                            <ul>
                                                <li><a href="department-detail.php?Departments=Medicine">Internal Medicine</a></li>
                                                <li><a href="department-detail.php?Departments=Gynaecologist">Obs &#038; Gynaecologist</a></li>
                                                <li><a href="department-detail.php?Departments=Paedritics">Paedritics &#038; Neo Natal</a></li>
                                                <li><a href="department-detail.php?Departments=Surgery">General &#038; Laprosccopy Surgery</a></li>
                                                <li><a href="department-detail.php?Departments=Orthopedics">Orthopedics</a></li>
                                                <li><a href="department-detail.php?Departments=Dental">Dental Care</a></li>
                                                <li><a href="department-detail.php?Departments=HairSkin">Hair &#038; Skin</a></li>
                                                <li><a href="department-detail.php?Departments=Dietitian">Dietitian</a></li>
                                                <li><a href="department-detail.php?Departments=Trauma">Casualty &#038; Trauma</a></li>
                                                <li><a href="department-detail.php?Departments=BloodBank">Blood Bank</a></li>
                                                <li><a href="department-detail.php?Departments=Psychiatics">Psychiatics</a></li>
                                                <li><a href="department-detail.php?Departments=Neurology">Neuology</a></li>
                                                <li><a href="department-detail.php?Departments=Dialysis">Dialysis</a></li>
                                                <li><a href="department-detail.php?Departments=IVF">IVF</a></li>
                                                <li><a href="department-detail.php?Departments=AyushClinic">Ayush Clinic</a></li>
                                                <li><a href="department-detail.php?Departments=EyeOpthology">Eye &#038; Opthology</a></li>
                                                <li><a href="department-detail.php?Departments=ReHalibation">Physiotherapy &#038; Re-halibation Centre</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <span>Diagnostic</span>
                                            <ul>
                                                <li><a href="#">X-Ray</a></li>
                                                <li><a href="#">Ultra Sound</a></li>
                                                <li><a href="#">TMT</a></li>
                                                <li><a href="#">PFT</a></li>
                                                <li><a href="#">2 D Echo</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <span>Pharmacy</span>
                                            <ul>
                                                <li><a href="#">OPD Pharmacy ( 8 am to 8 pm )</a></li>
                                                <li><a href="#">IPD Pharmacy 24 X 7</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <span>Laboratory</span>
                                            <ul>
                                                <li><a href="#">Clinical Bio-Chemistry</a></li>
                                                <li><a href="#">Clinical Microbiology and Serology</a></li>
                                                <li><a href="#">Clinical Pathology</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <span>Allied Services</span>
                                            <ul>
                                                <li><a href="#">Ambulance</a></li>
                                                <li><a href="#">Dietary Service</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>

                                <li class="dropdown">
                                    <span>Membership &#038; Billing Guide Line</span>
                                    <ul>
                                        <li><a target="blank" href="https://www.starhospital.co.in/wp-content/uploads/2020/04/SHC-CARD-BROCHURE.pdf">Membership (SHC) Policy</a></li>
                                        <li><a target="blank" href="https://www.starhospital.co.in/wp-content/uploads/2020/04/SHC-FORM.pdf">Membership Application Form</a></li>
                                        <li><a target="blank" href="https://www.starhospital.co.in/wp-content/uploads/2020/04/Preventive-Health-Check-up.pdf">Preventive Health Check-up</a></li>
                                        <li><a target="blank" href="https://www.starhospital.co.in/wp-content/uploads/2020/05/draft-mou.pdf">Corp. MOU</a></li>
                                        <li><a  href="billing-guide.php">Tariff &#038; Billing Policy</a></li>
                                        <li><a href="doctors.html">Billing Guide Line</a></li>
                                    </ul>
                                </li>

                                 <li class="dropdown">
                                    <span>Pages</span>
                                    <ul>
                                        <li><a href="about-us.php">About Us</a></li>
                                        <li><a href="services.html">Services</a></li>
                                        <li><a href="gallery.html">Gallery</a></li>
                                        <li><a href="pricing-table.html">Pricing Table</a></li>
                                        <li><a href="elements.html">UI Elements</a></li>
                                        <li><a href="coming-soon.html">Coming Soon</a></li>
                                        <li><a href="error-page.html">Error 404</a></li>
                                        <li><a href="terms-and-condition.html">Terms and Condition</a>
                                        </li>
                                    </ul>
                                </li>

                              */
                              ?>
                                
                                
                                
                                
                                

                               

                            </ul>
                        </nav>
                        <!-- Main Menu End-->

                        <div class="outer-box">
                           
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sticky Header  -->
        <div class="sticky-header">
            <div class="auto-container">            
                <div class="main-box">
                    <div class="logo-box">
                        <div class="logo"><a href="index.php"><img src="<?php echo $logo;?>" style="height:50px" alt="Star Hospital" title="Star Hospital"></a></div>
                    </div>

                    <!--Keep This Empty / Menu will come through Javascript-->
                </div>
            </div>
        </div><!-- End Sticky Menu -->

        <!-- Mobile Header -->
        <div class="mobile-header">
            <div class="logo"><a href="index.php"><img src="<?php echo $logo;?>" alt="" title=""></a></div>

            <!--Nav Box-->
            <div class="nav-outer clearfix">

                <div class="outer-box">
                    <!-- Search Btn -->
                    <div class="search-box">
                        <button class="search-btn mobile-search-btn"><i class="flaticon-magnifying-glass"></i></button>
                    </div>

                    <h4 style="color:<?php echo $color2;?>">Star Hospital</h4>

                    <a href="#nav-mobile" class="mobile-nav-toggler navbar-trigger"><span class="fa fa-bars"></span></a>
                </div>
            </div>
        </div>

        <!-- Mobile Nav -->
        <div id="nav-mobile"></div>

        <!-- Header Search -->
        <div class="search-popup">
            <span class="search-back-drop"></span>
            <button class="close-search"><span class="fa fa-times"></span></button>
            
            <div class="search-inner">
                <form method="post" action="blog-showcase.html">
                    <div class="form-group">
                        <input type="search" name="search-field" value="" placeholder="Search..." required="">
                        <button type="submit"><i class="flaticon-magnifying-glass"></i></button>
                    </div>
                </form>
            </div>
        </div>
        <!-- End Header Search -->

       
    </header>
    <!--End Main Header -->


   
						