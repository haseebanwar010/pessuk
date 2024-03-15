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
           <div class="management extraaccrediation">
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
    <img src="http://www.pessuk.com/assets/frontend/images/parking/a1.jpg"/>
   </div>
   <div class="col-sm-3">
    <img src="http://www.pessuk.com/assets/frontend/images/parking/a2.jpg"/>
   </div>
   <div class="col-sm-3">
    <img src="http://www.pessuk.com/assets/frontend/images/parking/a3.jpg"/>
   </div>
   <div class="col-sm-3">
    <img src="http://www.pessuk.com/assets/frontend/images/parking/a4.jpg"/>
   </div>

   <div class="col-sm-3">
    <p>BRITISH PARKING ASSOCIATION MEMBERSHIP CERTIFICATE</p>
   </div>
   <div class="col-sm-3">
    <p>BRITISH PARKING ASSOC. APPROVED OPERATOR CERTFICATE</p>
   </div>
   <div class="col-sm-3">
    <p>DATA PROTECTION REGISTRATION CERTIFICATE</p>
   </div>
   <div class="col-sm-3">
    <p>CERTIFICATE OF PCI DSS COMPLIANCE</p>
   </div>

    
    </div>

   
<br><br>
-->


