<?php 

//All gallery1 list
$lists = array();
if ($handle = opendir('images/gallery1/')) {
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
                    
                <?php 
                    foreach($lists as $d){
                        ?>
                           <!-- Portfolio Block -->
                            <div class="portfolio-block all  col-lg-4 col-md-6 col-sm-12">
                                <div class="image-box">
                                    <figure class="image"><img src="images/gallery1/<?php echo $d;?>" alt=""></figure>
                                    <div class="overlay">
                                        <a href="images/gallery1/<?php echo $d;?>" class="icon-box lightbox-image" data-fancybox="gallery"><span class="fa fa-expand"></span></a>
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