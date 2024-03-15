<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
$baseUrl = $this->config->item('base_url');
?>


<div class="container">
   <div class="row">
       <div class="col-sm-12">
							<div class="parking_hd">
							<h1><?php echo $result['title'];?></h1>
							<div class="parking_triangle"></div>
							</div>
          <?php if($result){?>
           <div class="management">
               <?php echo $result['description'];?>
           </div>
           <?php }?>
           
           
<section class="regular ">

   
    <div class="slick-slide slick-current slick-active">
    <a href="#">
     <div class="product_picture1" style="background-image: url(<?php echo $baseUrl;?>assets/frontend/images/partner_logo_1.jpg);"></div>
     </a>
    </div>
       
    <div class="slick-slide slick-current slick-active">
    <a href="#">
     <div class="product_picture1" style="background-image: url(<?php echo $baseUrl;?>assets/frontend/images/partner_logo_2.jpg);"></div>
     </a>
    </div>
       
    <div class="slick-slide slick-current slick-active">
    <a href="#">
     <div class="product_picture1" style="background-image: url(<?php echo $baseUrl;?>assets/frontend/images/partner_logo_3.jpg);"></div>
     </a>
    </div>
           
    <div class="slick-slide slick-current slick-active">
    <a href="#">
     <div class="product_picture1" style="background-image: url(<?php echo $baseUrl;?>assets/frontend/images/partner_logo_4.jpg);"></div>
     </a>
    </div>
           
    <div class="slick-slide slick-current slick-active">
    <a href="#">
     <div class="product_picture1" style="background-image: url(<?php echo $baseUrl;?>assets/frontend/images/partner_logo_5.jpg);"></div>
     </a>
    </div>
           
    <div class="slick-slide slick-current slick-active">
    <a href="#">
     <div class="product_picture1" style="background-image: url(<?php echo $baseUrl;?>assets/frontend/images/partner_logo_6.jpg);"></div>
     </a>
    </div>
                
    <div class="slick-slide slick-current slick-active">
    <a href="#">
     <div class="product_picture1" style="background-image: url(<?php echo $baseUrl;?>assets/frontend/images/partner_logo_7.jpg);"></div>
     </a>
    </div>
           

    
</section>

           
           
       </div>
   </div>
    
</div>

<!--
   <div class="row">
   <div class="col-sm-3">
    <img src="http://localhost/pessukci/assets/frontend/images/parking/ac1.jpg" style="height:292px;"/>
    </div>
       <div class="col-sm-3">
    <img src="http://localhost/pessukci/assets/frontend/images/parking/ac2.jpg" style="height:292px;"/>
    </div>
       <div class="col-sm-3">
    <img src="http://localhost/pessukci/assets/frontend/images/parking/ac3.jpg" style="height:292px;"/>
    </div>
    </div>



<h3>PARKING ENFORCEMENT</h3>
<P>Parking Enforcement services are provided all over United Kingdom. Warden patrolled ticketing is offered in all zones of London and within the M25. Self ticketing is offered in the entire United Kingdom subject to completion of certification of Self Ticketing Course from PESS. Similarly, camera operated ticketing and ANPR (automated number plate recognition) ticketing services are offered all over United Kingdom.</P>
<h3>SECURITY SERVICES:</h3>
<P>Security services are provided all over United Kingdom.</P>
<br><br>

-->



