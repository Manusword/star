<?php 
    //---header
    include_once("header.php");


    $id = "";
    $pic = "";
    $name = "";
    $quli = "";
    $desg = "";
    $details = "";

    if(!empty($_REQUEST['id'])){
        $id = $_REQUEST['id'];
        
        if($id == 1){
            $pic = "Dr Nitin Malik.jpg";
            $name = "DR. Nitin Malik (DIRECTOR)";
            $quli = "M.B.B.S, M.CH";
            $desg = "Neurosurgeon";
            $details = "";
        }
        elseif($id == 2){
            $pic = "Dr Bhawna Tiwari.jpg";
            $name = "DR. Bhavna Tiwari (DIRECTOR)";
            $quli = "M.B.B.S., D.G.O., DMRE";
            $desg = "";
            $details = "";
        }
        elseif($id == 3){
            $pic = "Dr. SB Yadav.jpg";
            $name = "Dr. SB Yadav";
            $quli = "MBBS, MD";
            $desg = "Physician & Intensivist";
            $details = "";
        }
        elseif($id == 4){
            $pic = "Dr Utkarsh V Agarwal.jpg";
            $name = "DR. Utkarsh v Agrawal";
            $quli = "";
            $desg = "General Physician & intensivist";
            $details = "";
        }
        elseif($id == 5){
            $pic = "Dr Deepak Sharma.jpg";
            $name = "DR. Deepak Kumar Sharma";
            $quli = "M.B.B.S, D.N.B (G. Surgery) FAIS, FMAS, FACS (USA)";
            $desg = "LAPAROSCOPY, CANCER & GENERAL SURGEON";
            $details = "";
        }
        elseif($id == 6){
            $pic = "Dr Dushyant Chaudhary.jpg";
            $name = "DR. Dushyant Chaudhary";
            $quli = "MBBS, MS (ORTHO)";
            $desg = "Orthopaedic Surgeon";
            $details = "";
        }
        elseif($id == 7){
            $pic = "Dr Jaiveer SIngh.jpg";
            $name = "DR. Jaiveer Yadav";
            $quli = "MBBS, DNB Ortho CC Arthroplasty and Arthroscopy Edinburgh ( England)";
            $desg = "Orthopaedic Surgeon";
            $details = "";
        }
        elseif($id == 8){
            $pic = "Dr Namreeta Chaturvedi.jpg";
            $name = "DR. Namrata M. Chaturvedi";
            $quli = "MBBS, MS (OBS & Gynae)";
            $desg = "Obs & Gynaecologist";
            $details = "";
        }
        elseif($id == 9){
            $pic = "Dr Deepshikha.jpg";
            $name = "DR. Deepshikha";
            $quli = "MBBS & MD(OBS & Gynae)";
            $desg = "OBS & Gynae";
            $details = "";
        }
        elseif($id == 10){
            $pic = "Dr Pankaj Chauhan.jpg";
            $name = "DR. Pankaj Chauhan";
            $quli = "";
            $desg = "Physiotherapist";
            $details = "";
        }
        elseif($id == 11){
            $pic = "Dt Anjali.jpg";
            $name = "DT. Anjali";
            $quli = "M.SC -IN (MASTER SCIENCE IN DIETETICS AND FOOD SERVICE)";
            $desg = "Dietician";
            $details = "";
        }
        elseif($id == 12){
            $pic = "Dt Dimple Mathur.jpg";
            $name = "DT. Dimple Mathur";
            $quli = "UGC-NET Qualified";
            $desg = "Dietician";
            $details = "";
        }
        elseif($id == 13){
            $pic = "Dr. Preeti Yadav.jpg";
            $name = "DR. Preeti Yadav";
            $quli = "MBBS, MS, MCH (PLASTIC SURGEON)";
            $desg = "Plastic Surgeon";
            $details = "";
        }
        elseif($id == 14){
            $pic = "Dr Vijay.jpg";
            $name = "DR. Vijay Yadav";
            $quli = "";
            $desg = "Urologist";
            $details = "";
        }
        elseif($id == 15){
            $pic = "Dr Rahul Rai.jpg";
            $name = "DR. Rahul Rai";
            $quli = "";
            $desg = "Psychiatrist";
            $details = "";
        }
        elseif($id == 16){
            $pic = "Dr. Nupur Sharma.jpeg";
            $name = "Dr. Nupur Sharma";
            $quli = "M.B.B.S, DGO";
            $desg = "Obs & Gynaecologist";
            $details = "";
        }

        
    }//!empty id
   
?>



    <!--Page Title-->
    <section class="page-title" style="background-image: url(<?php echo $backgroundImg;?>);">
        <div class="auto-container">
            <div class="title-outer">
                <h1>Doctor Details</h1>
                <ul class="page-breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li>Doctors</li>
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
                    <div class="service-detail">
                        <div class="images-box">
                            <figure class="image wow fadeIn"><a href="images/doctors/<?php echo $pic;?>" class="lightbox-image" data-fancybox="services">
                                <img style="height:800px; width:100%px;" src="images/doctors/<?php echo $pic;?>" alt=""></a>
                            </figure>
                        </div>

                        <div class="content-box">
                            <div class="title-box">
                                <h2><?php echo $name;?></h2>
                                <h4><?php echo $quli;?></h4>
                                <span class="theme_color"><?php echo $desg;?></span>
                            </div>
                            <p>
                                <?php echo $details;?>
                            </p>
                         
                        </div>
                    </div>
                </div>

                <!--Sidebar Side-->
                <div class="sidebar-side col-xl-3 col-lg-4 col-md-12 col-sm-12">
                    <aside class="sidebar services-sidebar">
                        
                        <!-- Category Widget -->
                        <div class="sidebar-widget categories">
                            <div class="widget-content">
                                <!-- Services Category -->
                                <ul class="services-categories">
                                    
<li><a href="doctors.php">All Consultants List</a></li>
<li <?php if(!empty($id) and $id == 1){echo 'class="active"';}?>><a href="doctor-details.php?id=1">DR. Nitin Malik (DIRECTOR)</a></li>
<li <?php if(!empty($id) and $id == 2){echo 'class="active"';}?>> <a href="doctor-details.php?id=2">DR. Bhavna Tiwari (DIRECTOR)</a></li>
<li <?php if(!empty($id) and $id == 3){echo 'class="active"';}?>><a href="doctor-details.php?id=3">Dr. SB Yadav</a></li>
<li <?php if(!empty($id) and $id == 4){echo 'class="active"';}?>><a href="doctor-details.php?id=4">DR. Utkarsh v Agrawal</a></li>
<li <?php if(!empty($id) and $id == 5){echo 'class="active"';}?>><a href="doctor-details.php?id=5">DR. Deepak Kumar Sharma</a></li>
<li <?php if(!empty($id) and $id == 6){echo 'class="active"';}?>><a href="doctor-details.php?id=6">DR. Dushyant Chaudhary</a></li>
<li <?php if(!empty($id) and $id == 7){echo 'class="active"';}?>><a href="doctor-details.php?id=7">DR. Jaiveer Yadav</a></li>
<li <?php if(!empty($id) and $id == 8){echo 'class="active"';}?>><a href="doctor-details.php?id=8">DR. Namrata M. Chaturvedi</a></li>
<li <?php if(!empty($id) and $id == 9){echo 'class="active"';}?>><a href="doctor-details.php?id=9">DR. Deepshikha</a></li>
<li <?php if(!empty($id) and $id == 10){echo 'class="active"';}?>><a href="doctor-details.php?id=10">DR. Pankaj Chauhan</a></li>
<li <?php if(!empty($id) and $id == 11){echo 'class="active"';}?>><a href="doctor-details.php?id=11">DT. Anjali</a></li>
<li <?php if(!empty($id) and $id == 12){echo 'class="active"';}?>><a href="doctor-details.php?id=12">DT. Dimple Mathur</a></li>
<li <?php if(!empty($id) and $id == 13){echo 'class="active"';}?>><a href="doctor-details.php?id=13">DR. Preeti Yadav</a></li>
<li <?php if(!empty($id) and $id == 14){echo 'class="active"';}?>><a href="doctor-details.php?id=14">DR. Vijay Yadav</a></li>
<li <?php if(!empty($id) and $id == 15){echo 'class="active"';}?>><a href="doctor-details.php?id=15">DR. Rahul Rai</a></li>
                                        
                                    
                                    
                                </ul>
                            </div>
                        </div>
                        
                        
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- End Sidebar Page Container -->

     






<?php
   
   
    //---footer 
    include_once("footer.php");

?>


    