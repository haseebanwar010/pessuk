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
    <img src="http://www.pessuk.com/assets/frontend/images/parking/l1.jpg" style="height: 237px;"/>
    </div>
   <div class="col-sm-3">
    <img src="http://www.pessuk.com/assets/frontend/images/parking/l2.jpg" style="height: 237px;"/>
    </div>
   <div class="col-sm-3">
    <img src="http://www.pessuk.com/assets/frontend/images/parking/l3.jpg" style="height: 237px;"/>
    </div>
       <div class="col-sm-3">
    <img src="http://www.pessuk.com/assets/frontend/images/parking/l4.jpg" style="height: 237px;"/>
    </div>
    </div>

<p>Parking Enforcement & Security Services have now set up a new division to provide line-marking services for clients' car parks and roadways, commercial and residential.<br><br>
We offer two types of line marking systems:<br><br>
<b>Spray On</b> - Ideal for areas of low traffic volume, and where the surface is smooth for application. This is the lower-cost option.<br><br>
<b>Burn On<b/> - This is the traditional system and is the system we would advise clients to use, which is very hard-wearing and can be applied to most surfaces.<br><br>
In the first instance to obtain a quote we will require a plan or rough sketch, scanned and emailed with approximate measurements, stating which marking system you require: Burn On or Spray On.</p>    
<br><br>
-->




