<?php 

//All client list
$lists = array();
if ($handle = opendir('images/clients/')) {
    while (false !== ($doc_name = readdir($handle))) {
        if ($doc_name != "." && $doc_name != "..") {
            $lists[] = $doc_name;
        }
    }
    closedir($handle);
}

?>

    <section class="clients-section">
        <div class="auto-container">

            <!-- Sponsors Outer -->
            <div class="sponsors-outer">
                <!--clients carousel-->
                <ul class="clients-carousel owl-carousel owl-theme">
                    <?php 
                    
                        foreach($lists as $d){
                            ?>
                                <li class="slide-item"> <a href="#"><img src="images/clients/<?php echo $d;?>" alt="<?php echo $d;?>"></a> </li>
                            <?php
                        }
                        
                    ?>    
                </ul>
            </div>
        </div>
    </section>