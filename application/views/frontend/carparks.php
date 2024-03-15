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
   <div class="col-sm-2">
    <img src="http://localhost/pessukci/assets/frontend/images/parking/pd1.png" style="height: 225px;"/>
    </div>
   <div class="col-sm-2">
    <img src="http://localhost/pessukci/assets/frontend/images/parking/pd2.jpg" style="height: 225px;"/>
    </div>
   <div class="col-sm-2">
    <img src="http://localhost/pessukci/assets/frontend/images/parking/pd3.jpg" style="height: 225px;"/>
    </div>
       <div class="col-sm-2">
    <img src="http://localhost/pessukci/assets/frontend/images/parking/pd4.jpg" style="height: 225px;"/>
    </div>
       <div class="col-sm-2">
    <img src="http://localhost/pessukci/assets/frontend/images/parking/pd5.jpg" style="height: 225px;"/>
    </div>
    </div>

<p>PESS provides the latest Pay & Display equipment, which produces tickets, audit facilities and statistical data. Payments for parking can be made in advance, on the day or can be refunded subject to a minimum spend in selected retailer’s stores. Payment can be by cash, credit/debit card, via phone, smart card or value card.<br><br>
Machines are solar or mains powered. Signage provides information, terms and conditions and tariff details. We can provide all management services including highly trained, uniformed Patrol Officers to supervise and maintain the car park.<br><br>
P&D facilitates unrestricted vehicular to the car park. This revenue generation system is very familiar to customers.</p>    
<br><br>
-->




