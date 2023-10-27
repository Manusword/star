<!-- About Section -->
<section class="about-section">
        <div class="auto-container">
            <div class="row">
                <!-- Info Boxes -->
                <div class="sec-title">
                    <h2>Clinical Services</h2>
                    <span class="divider"></span>
                </div>            
                <div class="row mb-5" style="margin-top:30px">
                       

                        <?php 
                        $list = array("
                                        General Medicine",
                                        "Orthopedic & Joint Replacement",
                                        "Anaesthesiology",
                                        "General surgery including laparoscopy surgery",
                                        "Obstetrics and gynecology",
                                        "Pediatrics",
                                        "Psychiatry",
                                        "Neonatology",
                                        "Nephrology",
                                        "Medical Oncology",
                                        "Surgical Oncology",
                                        "Urology",
                                        "Dentist",
                                        "Pathology",
                                        "Dietician",
                                        "Neurology",
                                        "Physiotherapy",
                                        "Dialysis",
                                        "Blood Bank",
                                        "Emergency",
                                    ); 
                        foreach($list as $l){
                            ?>
                                <!-- service Block -->
                                <div class="service-block-two col-lg-4 col-md-6 col-sm-12">
                                    <div class="inner-box">
                                        <div class="lower-content">
                                            <div class="title-box">
                                                <h4><?php echo $l;?></h4> 
                                            </div>
                                        </div>
                                    </div>
                                </div>

                               
                            <?php 
                        }
                        ?>

                </div>





                
                <!-- Info Boxes -->
                <div class="sec-title">
                    <h2>Diagnostic Services</h2>
                    <span class="divider"></span>
                </div>            
                <div class="row mb-5" style="margin-top:30px">
                        
                    <?php 
                        $list = array(
                                        "X-RAY",
                                        "CT SCAN (Outsourcing)",
                                        "MRI (Outsourcing)",
                                        "ULTRASOUND (Outsourcing)",
                                        "LABORATORY",
                                        "ECG",
                                        "EEG",
                                        "NCV",
                                    ); 
                        foreach($list as $l){
                            ?>
                               <!-- service Block -->
                               <div class="service-block-two col-lg-4 col-md-6 col-sm-12">
                                    <div class="inner-box">
                                        <div class="lower-content">
                                            <div class="title-box">
                                                <h4><?php echo $l;?></h4> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php 
                        }
                        ?>

                </div>


                
                
                <!-- Info Boxes -->
                <div class="sec-title">
                    <h2>Supportive Services</h2>
                    <span class="divider"></span>
                </div>            
                <div class="row mb-5" style="margin-top:30px">
                   
                    <?php 
                        $list = array(
                                        "Housekeeping",
                                        "Central Sterile supply department",
                                        "Medical Record Department",
                                        "Pharmacy",
                                        "Human Resource Department",
                                        "Nicu",
                                        "OT",
                                        "Casualty",
                                        "HR",
                                        "Quality",
                                        "IT Department",
                                    ); 
                        foreach($list as $l){
                            ?>
                                <!-- service Block -->
                                <div class="service-block-two col-lg-4 col-md-6 col-sm-12">
                                    <div class="inner-box">
                                        <div class="lower-content">
                                            <div class="title-box">
                                                <h4><?php echo $l;?></h4> 
                                            </div>
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
    <!-- End About Section -->

         