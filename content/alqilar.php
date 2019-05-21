<!-- ##### Featured Properties Area Start ##### -->
    <section class="featured-properties-area section-padding-100-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading wow fadeInUp">
                        <h2>Мы предлагаем </h2>
                        <p>Квартиры , дома , нежилые помещения - продажа , аренда</p>
                    </div>
                </div>
            </div>
        
            <div class="row">
    <?php  
   $alqilars = get_singles_all();
    foreach($alqilars as $alqilar): ?>              
                
        
                <!-- Single Featured Property -->
                <div class="col-12 col-md-6 col-xl-4">
                    <div class="single-featured-property mb-50 wow fadeInUp" data-wow-delay="100ms">
                        <!-- Property Thumbnail -->
                        <div class="property-thumb">
                            <a href ="/arenda-listing.php?id= <?php echo $alqilar["id"];?>">
                            <img src="<?php echo $alqilar["fo-1"];?>" alt="">
                            </a>
                            <div class="tag">
                              <span><?php echo $alqilar["type"];?> ref.№ <?php echo $alqilar["id"];?></span>
                                     </div>
                            

                           
                            
                           
                      
                            
                        </div>
                        <!-- Property Content -->
                        <div class="property-content">
                            <h5> </h5>
                            <p class="location"><img src="img/icons/location.png" alt=""><?php echo $alqilar["city"]; ?></p>
                             <p><?php echo $alqilar["zagolovok"]?></p>
                          
                        
                            <div class="property-meta-data d-flex align-items-end justify-content-between">
                                <div class="new-tag">
                                    <img src="img/icons/space.png" alt="">
                                     <span><?php echo $alqilar["room"];?></span>
                                </div>
                                <div class="bathroom">
                                    <img src="img/icons/bathtub.png" alt="">
                                    <span><?php echo $alqilar["bathroom"];?></span>
                                </div>                            
                                   </div>
                                  
                </div>    
                        </div>
                        
                    </div>
             
                
                    <?php endforeach;?> 
   
                    
                </div>
            </div>
        </div>
    </section>
    
    <!-- ##### Featured Properties Area End ##### -->