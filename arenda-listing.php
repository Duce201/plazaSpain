<?php  require "./content/meta.php";?>
<?php  require "db2.php";?>
<?php  require "./content/header.php";?>

 <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img" style="background-image: url(img/bg-img/hero1.jpg);">
       
    </section>
    

<?php  require "./content/search.php";?>   

<?php 
  $alqilar = get_single_by_id($_GET['id']);
?>
 
      
   

    <!-- ##### Listings Content Area Start ##### -->
    <section class="listings-content-wrapper section-padding-100">
       <div class="container">
            <div class="row">
                
                <div class="col-12">
                    <!-- Single Listings Slides -->
                        <div class="fotorama"
     data-allowfullscreen="true">
    <img src="<?php echo $alqilar["fo-1"];?>" alt="1">
    <img src="<?php echo $alqilar["fo-2"];?>" alt="2">
    <img src="<?php echo $alqilar["fo-3"];?>" alt="3">
    <img src="<?php echo $alqilar["fo-4"];?>" alt="4">
    <img src="<?php echo $alqilar["fo-5"];?>" alt="5">
    <img src="<?php echo $alqilar["fo-6"];?>" alt="6">
    <img src="<?php echo $alqilar["fo-7"];?>" alt="7">
    <img src="<?php echo $alqilar["fo-8"];?>" alt="8">
    <img src="<?php echo $alqilarl["fo-9"];?>" alt="9">
    <img src="<?php echo $alqilar["fo-10"];?>" alt="10">
</div>
                 
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <div class="listings-content">
                        <!-- Price -->
                        <div class="list-price">
                            <p><?php echo $alqilar["type"];?></p>
                        </div>
                        <h5><?php echo $alqilar["zagolovok"]?></h5>
                        <p class="location"><img src="img/icons/location.png" alt=""><?php echo $alqilar["city"]; ?></p>
                        <p><?php echo $alqilar["specification"]?></p>
                        <!-- Meta -->
                        <div class="property-meta-data d-flex align-items-end justify-content-between">
                                <div class="new-tag">
                                    <img src="img/icons/space.png" alt="">
                                     <span><?php echo $alqilar["room"];?></span>
                                </div>
                            <div class="bathroom">
                                <img src="img/icons/bathtub.png" alt="">
                                <span><?php echo $alqilar["bathroom"];?></span>
                            </div>
                         <p><a href = " <?php echo $alqilar["booking"];?>">Уточнить дату,узнать цену и зарезервировать - перейдите по этой ссылке</a></p>       
                           
                        </div>
                        <!-- Core Features -->
                        <ul class="listings-core-features d-flex align-items-center">
                           <!-- <li><i class="fa fa-check" aria-hidden="true"></i> Gated Community</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> Automatic Sprinklers</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> Fireplace</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> Window Shutters</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> Ocean Views</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> Heated Floors</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> Heated Floors</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> Private Patio</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> Window Shutters</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> Fireplace</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> Beach Access</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> Rooftop Terrace</li>-->
                        </ul>
                        <!-- Listings Btn Groups -->
                        <div class="listings-btn-groups">
                            <a href="arenda.php" class="btn south-btn">НАЗАД</a>
                            <a href="index.php" class="btn south-btn active">НА ГЛАВНУЮ</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="contact-realtor-wrapper">
                        <div class="realtor-info">
                            <img src="img/bg-img/women.jpg" alt="">
                            <div class="realtor---info">
                                <h2>Plaza España</h2>
                                <p>Риэлторское агентство</p>
                                <h6><img src="img/icons/phone-call.png" alt=""> +34 654 490 385 </h6>
                                 <h6><img src="img/icons/phone-call.png" alt=""> +34 633 870 643 </h6>
                                <h6><img src="img/icons/envelope.png" alt=""> plazzaespana@gmail.com</h6>
                            </div>
                           <!--  <div class="realtor--contact-form">
                               <form action="#" method="post">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="realtor-name" placeholder="Your Name">
                                    </div>
                                    <div class="form-group">
                                        <input type="number" class="form-control" id="realtor-number" placeholder="Your Number">
                                    </div>
                                    <div class="form-group">
                                        <input type="enumber" class="form-control" id="realtor-email" placeholder="Your Mail">
                                    </div>
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" id="realtor-message" cols="30" rows="10" placeholder="Your Message"></textarea>
                                    </div>
                                    <button type="submit" class="btn south-btn">Send Message</button>
                                </form>
                            </div>-->
                        </div>
                    </div>
                </div>
            </div> 
</section>            
    
 <?php  require "./content/footer.php";?>     
 
   <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <script src="js/classy-nav.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
    
</body>

</html>    