<?php 
    //---header
    include_once("header.php");
   
   
?>

    <!--Page Title-->
    <section class="page-title" style="background-image: url(<?php echo $backgroundImg;?>);">
        <div class="auto-container">
            <div class="title-outer">
                <h1>Departments</h1>
                <ul class="page-breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li>Departments</li>
                </ul> 
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!--Sidebar Page Container-->
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">

                <!--Content Side / Our Blog-->
                <div class="content-side col-xl-9 col-lg-8 col-md-12 col-sm-12 order-2">
                    <?php 
                        if(!empty($_REQUEST['Departments'])){
                            $dept = $_REQUEST['Departments'];
                            if($dept == "Neurology"){ include_once("component/dept/neurology.php");}
                            elseif($dept == "Gynaecologist"){ include_once("component/dept/neurology.php");}
                            elseif($dept == "Paedritics"){ include_once("component/dept/neurology.php");}
                            elseif($dept == "Surgery"){ include_once("component/dept/neurology.php");}
                            elseif($dept == "Orthopedics"){ include_once("component/dept/neurology.php");}
                            elseif($dept == "Dental"){ include_once("component/dept/neurology.php");}
                            elseif($dept == "HairSkin"){ include_once("component/dept/neurology.php");}
                            elseif($dept == "Dietitian"){ include_once("component/dept/neurology.php");}
                            elseif($dept == "Trauma"){ include_once("component/dept/neurology.php");}
                            elseif($dept == "BloodBank"){ include_once("component/dept/neurology.php");}
                            elseif($dept == "Psychiatics"){ include_once("component/dept/neurology.php");}
                            elseif($dept == "Dialysis"){ include_once("component/dept/neurology.php");}
                            elseif($dept == "IVF"){ include_once("component/dept/neurology.php");}
                            elseif($dept == "AyushClinic"){ include_once("component/dept/neurology.php");}
                            elseif($dept == "EyeOpthology"){ include_once("component/dept/neurology.php");}
                            elseif($dept == "ReHalibation"){ include_once("component/dept/neurology.php");}
                            else{}
                        }

                        
                       
                    ?>
                </div>



                <!--Sidebar Side-->
                <div class="sidebar-side col-xl-3 col-lg-4 col-md-12 col-sm-12">
                    <aside class="sidebar services-sidebar">
                        
                        <!-- Category Widget -->
                        <div class="sidebar-widget categories">
                            <div class="widget-content">
                                <!-- Services Category -->
                                <ul class="services-categories">
                                    <li <?php if(!empty($dept) and $dept == "Medicine"){echo 'class="active"';}?>><a href="department-detail.php?Departments=Medicine">Internal Medicine</a></li>
                                    <li <?php if(!empty($dept) and $dept == "Gynaecologist"){echo 'class="active"';}?>><a href="department-detail.php?Departments=Gynaecologist">Obs &#038; Gynaecologist</a></li>
                                    <li <?php if(!empty($dept) and $dept == "Paedritics"){echo 'class="active"';}?>><a href="department-detail.php?Departments=Paedritics">Paedritics &#038; Neo Natal</a></li>
                                    <li <?php if(!empty($dept) and $dept == "Surgery"){echo 'class="active"';}?>><a href="department-detail.php?Departments=Surgery">General &#038; Laprosccopy Surgery</a></li>
                                    <li <?php if(!empty($dept) and $dept == "Orthopedics"){echo 'class="active"';}?>><a href="department-detail.php?Departments=Orthopedics">Orthopedics</a></li>
                                    <li <?php if(!empty($dept) and $dept == "Dental"){echo 'class="active"';}?>><a href="department-detail.php?Departments=Dental">Dental Care</a></li>
                                    <li <?php if(!empty($dept) and $dept == "HairSkin"){echo 'class="active"';}?>><a href="department-detail.php?Departments=HairSkin">Hair &#038; Skin</a></li>
                                    <li <?php if(!empty($dept) and $dept == "Dietitian"){echo 'class="active"';}?>><a href="department-detail.php?Departments=Dietitian">Dietitian</a></li>
                                    <li <?php if(!empty($dept) and $dept == "Trauma"){echo 'class="active"';}?>><a href="department-detail.php?Departments=Trauma">Casualty &#038; Trauma</a></li>
                                    <li <?php if(!empty($dept) and $dept == "BloodBank"){echo 'class="active"';}?>><a href="department-detail.php?Departments=BloodBank">Blood Bank</a></li>
                                    <li <?php if(!empty($dept) and $dept == "Psychiatics"){echo 'class="active"';}?>><a href="department-detail.php?Departments=Psychiatics">Psychiatics</a></li>
                                    <li <?php if(!empty($dept) and $dept == "Neurology"){echo 'class="active"';}?>><a href="department-detail.php?Departments=Neurology">Neuology</a></li>
                                    <li <?php if(!empty($dept) and $dept == "Dialysis"){echo 'class="active"';}?>><a href="department-detail.php?Departments=Dialysis">Dialysis</a></li>
                                    <li <?php if(!empty($dept) and $dept == "IVF"){echo 'class="active"';}?>><a href="department-detail.php?Departments=IVF">IVF</a></li>
                                    <li <?php if(!empty($dept) and $dept == "AyushClinic"){echo 'class="active"';}?>><a href="department-detail.php?Departments=AyushClinic">Ayush Clinic</a></li>
                                    <li <?php if(!empty($dept) and $dept == "EyeOpthology"){echo 'class="active"';}?>><a href="department-detail.php?Departments=EyeOpthology">Eye &#038; Opthology</a></li>
                                    <li <?php if(!empty($dept) and $dept == "ReHalibation"){echo 'class="active"';}?>><a href="department-detail.php?Departments=ReHalibation">Physiotherapy &#038; Re-halibation Centre</a></li>
                                </ul>
                            </div>
                        </div>
                        
                        <!--Brochures Box-->
                        <div class="brochures-box">
                            <div class="inner">
                                <h4>Download Brochures</h4>
                                <div class="text">Etiam tortor lorem, auctor ut orci ut, vehicula ultricies mauris. scelerisque gravida.</div>
                                <a class="theme-btn btn-style-one" href="#"><span class="btn-title"><i class="fa fa-file-pdf"></i> Info Company</span></a>
                                <a class="theme-btn btn-style-one" href="#"><span class="btn-title"><i class="fa fa-file-pdf"></i> Brochure Newest</span></a>
                            </div>
                        </div>

                        <div class="help-box">
                            <span>Quick Contact</span>
                            <h4>Get Solution</h4>
                            <p>Contact us at the Medicoz office nearest to you or submit a business inquiry online.</p>
                            <a href="contact.html" class="theme-btn btn-style-one"><span class="btn-title">Contact</span></a>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- End Sidebar Page Container -->

        <!-- Services Section -->
    <section class="services-section-two">
        <div class="auto-container">
            <div class="carousel-outer">
                <!-- Services Carousel -->
                <div class="services-carousel owl-carousel owl-theme default-dots">
                    <!-- service Block -->
                    <div class="service-block-two">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="department-detail.html"><img src="images/resource/service-1.jpg" alt=""></a></figure>
                            </div>
                            <div class="lower-content">
                                <div class="title-box">
                                    <span class="icon flaticon-heart-2"></span>
                                    <h4><a href="department-detail.html">Cardiology Department</a></h4> 
                                </div>
                                <div class="text">Introduction. Cardiology is the study heart conditions. The Consultant with whom you have an appointment is a specialist.</div>
                                <span class="icon-right flaticon-heart-2"></span>
                            </div>
                        </div>
                    </div>

                    <!-- service Block -->
                    <div class="service-block-two">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="department-detail.html"><img src="images/resource/service-2.jpg" alt=""></a></figure>
                            </div>
                            <div class="lower-content">
                                <div class="title-box">
                                    <span class="icon flaticon-brain"></span>
                                    <h4><a href="department-detail.html">Neurology Department</a></h4>
                                </div>
                                <div class="text">Introduction. Cardiology is the study heart conditions. The Consultant with whom you have an appointment is a specialist.</div>
                                <span class="icon-right flaticon-brain"></span>
                            </div>
                        </div>
                    </div>

                    <!-- service Block -->
                    <div class="service-block-two">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="department-detail.html"><img src="images/resource/service-3.jpg" alt=""></a></figure>
                            </div>
                            <div class="lower-content">
                                <div class="title-box">
                                    <span class="icon flaticon-kidney"></span>
                                    <h4><a href="department-detail.html">Urology Department</a></h4>
                                </div>
                                <div class="text">Introduction. Cardiology is the study heart conditions. The Consultant with whom you have an appointment is a specialist.</div>
                                <span class="icon-right flaticon-kidney"></span>
                            </div>
                        </div>
                    </div>

                    <!-- service Block -->
                    <div class="service-block-two">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="department-detail.html"><img src="images/resource/service-12.jpg" alt=""></a></figure>
                            </div>
                            <div class="lower-content">
                                <div class="title-box">
                                    <span class="icon flaticon-ovum"></span>
                                    <h4><a href="department-detail.html">Gynecological</a></h4> 
                                </div>
                                <div class="text">Introduction. Cardiology is the study heart conditions. The Consultant with whom you have an appointment is a specialist.</div>
                                <span class="icon-right flaticon-ovum"></span>
                            </div>
                        </div>
                    </div>

                    <!-- service Block -->
                    <div class="service-block-two">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="department-detail.html"><img src="images/resource/service-10.jpg" alt=""></a></figure>
                            </div>
                            <div class="lower-content">
                                <div class="title-box">
                                    <span class="icon flaticon-parents"></span>
                                    <h4><a href="department-detail.html">Pediatrical</a></h4>
                                </div>
                                <div class="text">Introduction. Cardiology is the study heart conditions. The Consultant with whom you have an appointment is a specialist.</div>
                                <span class="icon-right flaticon-parents"></span>
                            </div>
                        </div>
                    </div>

                    <!-- service Block -->
                    <div class="service-block-two">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="department-detail.html"><img src="images/resource/service-11.jpg" alt=""></a></figure>
                            </div>
                            <div class="lower-content">
                                <div class="title-box">
                                    <span class="icon flaticon-science"></span>
                                    <h4><a href="department-detail.html">Laboratory</a></h4>
                                </div>
                                <div class="text">Introduction. Cardiology is the study heart conditions. The Consultant with whom you have an appointment is a specialist.</div>
                                <span class="icon-right flaticon-science"></span>
                            </div>
                        </div>
                    </div>

                    <!-- service Block -->
                    <div class="service-block-two">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="department-detail.html"><img src="images/resource/service-10.jpg" alt=""></a></figure>
                            </div>
                            <div class="lower-content">
                                <div class="title-box">
                                    <span class="icon flaticon-parents"></span>
                                    <h4><a href="department-detail.html">Pediatrical</a></h4>
                                </div>
                                <div class="text">Introduction. Cardiology is the study heart conditions. The Consultant with whom you have an appointment is a specialist.</div>
                                <span class="icon-right flaticon-parents"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End service Section -->






<?php
   
   
    //---footer 
    include_once("footer.php");

?>


    