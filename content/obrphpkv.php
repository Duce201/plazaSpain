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
        
            <div class="row-casa">
               
<?php  
   $generals = get_singles_all();
    foreach($generals as $general): ?>  
    
    <?php  $type = get_types_by_id($general["type_id"]);?>
    
     <?php  $city = get_cities_by_id($general["city_id"]);?>
     
      <?php $service = get_services_by_id($general["service_id"]);?>
     
                <!-- Single Featured Property -->
                <div class="col-12 col-md-6 col-xl-4">
                    <div class="single-featured-property mb-50 wow fadeInUp" data-wow-delay="100ms">
                        <!-- Property Thumbnail -->
                        <div class="property-thumb">
                            <a href = "/single-listings.php?id= <?php echo $general["id"];?>">
                            <img src="<?php echo $general["img"];?>" alt="">
                            </a>
                            <div class="tag">
                            
                              <span><?php echo $service;?> ref.№ <?php echo $general["id"];?></span>
                                     </div>
                            

                           
                            
                            <div class="list-price">
                                <p><?php echo $general["price"];?>€</p>
                            </div>
                        </div>
                        <!-- Property Content -->
                        <div class="property-content">
                            <h5><?php echo $general["title"];?></h5>
                            <p class="location"><img src="img/icons/location.png" alt=""><?php echo $city; ?></p>
                             <p><?php echo $type;?></p>
                            <p><?php echo $general["specification"]?></p>
                        
                            <div class="property-meta-data d-flex align-items-end justify-content-between">
                                <div class="new-tag">
                                    <img src="img/icons/space.png" alt="">
                                     <span><?php echo $general["room"];?></span>
                                </div>
                                <div class="bathroom">
                                    <img src="img/icons/bathtub.png" alt="">
                                    <span><?php echo $general["bathroom"];?></span>
                                </div>
                                <div class="garage">
                                    <img src="img/icons/garage.png" alt="">
                                    <span><?php echo $general["garage"];?></span>
                                </div>
                                <div class="space">
                                    <img src="img/icons/space.png" alt="">
                                    <span><?php echo $general["area"];?>м. кв</span>
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
