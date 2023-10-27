<?php 

//All gallery2 list
$lists = array();
if ($handle = opendir('images/gallery2/')) {
    while (false !== ($doc_name = readdir($handle))) {
        if ($doc_name != "." && $doc_name != "..") {
            $lists[] = $doc_name;
        }
    }
    closedir($handle);
}

?>


    <!-- Portfolio Section -->
    <section class="portfolio-section alternate">
        <div class="auto-container">
            <!--MixitUp Galery-->
            <div class="mixitup-gallery">
               
                <div class="row mid-spacing">

                <div   class="portfolio-block all  col-lg-12 col-md-6 col-sm-6">
                    <div class="image-box">
                    

                        <iframe width="100%" height="500px" src="https://www.youtube.com/embed/bc6Q3Dn2BEg?si=LTSlZNoXIqG_6_mB" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

                    </div>
                </div>


                    
                <?php 
                    foreach($lists as $d){
                        ?>
                           <!-- Portfolio Block -->
                            <div class="portfolio-block all  col-lg-6 col-md-6 col-sm-12">
                                <div class="image-box">
                                    <figure class="image"><img src="images/gallery2/<?php echo $d;?>" alt=""></figure>
                                    <div class="overlay">
                                        <a href="images/gallery2/<?php echo $d;?>" class="icon-box lightbox-image" data-fancybox="gallery"><span class="fa fa-expand"></span></a>
                                    </div>
                                </div>
                            </div>
                        <?php
                    }
                ?>    
                   
                </div>
            </div>

            
        </div>
    </section>
    <!-- End Portfolio Section -->