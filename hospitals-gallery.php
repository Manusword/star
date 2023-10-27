<?php 
    //---header
    include_once("header.php");
?>



    <!--Page Title-->
    <section class="page-title" style="background-image: url(<?php echo $backgroundImg;?>);">
        <div class="auto-container">
        <div class="title-outer">
                <h1>Gallery</h1>
                <ul class="page-breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li>Hospitals Gallery</li>
                </ul> 
            </div>
        </div>
    </section>
    <!--End Page Title-->

   



    <?php 
    //gallery1
    include_once('component/gallery1.php');


    //---footer
    include_once("footer.php");
?>
