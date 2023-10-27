<?php 
    //---header
    include_once("header.php");
?>

    <!--Page Title-->
    <section class="page-title" style="background-image: url(<?php echo $backgroundImg;?>);">
        <div class="auto-container">
            <div class="title-outer">
                <h1>Our Consultants</h1>
                <ul class="page-breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li>Our Consultants</li>
                </ul> 
            </div>
        </div>
    </section>
    <!--End Page Title-->




    <?php 
        //---Team Section
        //include_once('component/team.php');
        include_once('component/team2.php');

        //---Doctor-timeing
        //include_once('component/timeing.php');

        //---happy-patient 2
        //include_once('component/happy-patient2.php');
        
        //---header
        include_once("footer.php");
    ?>