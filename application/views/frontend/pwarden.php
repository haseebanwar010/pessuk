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
<p>Once we receive the signed Warden Patrolled Ticketing Contract, we arrange for one of our area managers to visit and survey your site, discuss requirements and identify your needs and decide upon the parking restrictions and number of warning signs required by law.<br><br>
We then arrange for our maintenance division to erect large clear warning signs informing motorists of the restrictions in place, clearly stating in unambiguous terms the consequences of parking illegally.<br><br>
Where needed we issue your authorised vehicles with Parking Permits or we shall recognise your permits if you already have permit scheme in operation.<br><br>
Our uniformed Parking Officers then patrol your site randomly but regularly in our sign written vans, should they identify an illegally parked vehicle they shall photograph the vehicle showing the offence committed and issue a Parking Charge Notice with details of how to make payment of the £60.00 charge within 14 days, using one of the following methods: online, by phone or by post with details of the appeals & complaints procedure. (No reference is made to you, the site owner). Of course should you identify and illegally parked vehicle between our patrols, you can call our computerised Control Room, where they shall locate the nearest mobile patrol using our live vehicle tracking GPRS system and ask them to attend ASAP.</p>
<br><br>
-->




