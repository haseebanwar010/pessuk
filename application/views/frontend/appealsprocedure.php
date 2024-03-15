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
<h3>ONLINE</h3>
   <div class="row">
   <div class="col-sm-6 setuponlineset">
<p><a href="http://www.parkingcsl.co.uk/appeals" target="_blank">http://www.parkingcsl.co.uk/appeals</a><br><br>
If you have appealed within the 28 days time limit and your appeal is rejected, you can request that the decision is reviewed by the Independent Appeals Services (POPLA). Details will be made available at the appropriate time.<br><br>
If your appeal is not upheld and you still fail to pay this PCN, then it will be passed to a Debt Recovery Company where further costs and charges will be added.</p>
    </div>
   <div class="col-sm-2">
   <img src="http://www.pessuk.com/assets/frontend/images/parking/ap6.jpg"/>
   </div>
</div>

<br><br>
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
   <div class="col-sm-6">
    <img src="http://www.pessuk.com/assets/frontend/images/parking/ap1.jpg"/>
    </div>
       <div class="col-sm-6">
    <img src="http://www.pessuk.com/assets/frontend/images/parking/ap11.jpg"/>
    </div>
    </div>
<p><b>Should you wish to appeal about a Parking Charge, you have 28 days from the date of issue to do so. All appeals are dealt with by our agents Parking Collection Services.</b></p>
   <div class="row">
   <div class="col-sm-3"></div>
   <div class="col-sm-3">
    <img src="http://www.pessuk.com/assets/frontend/images/parking/ap2.jpg"/>
    </div>
       <div class="col-sm-3">
    <img src="http://www.pessuk.com/assets/frontend/images/parking/ap3.jpg"/>
    </div>
<div class="col-sm-3"></div>
    </div> 
<p><b>You can make an appeal using one of the following methods:</b></p>
<h3>BY Mail</h3>
   <div class="row">
   <div class="col-sm-6">
<p><b>Should you wish to make an appeal about a parking charge, you can make an appeal and send it to this email address enquiries@parkingcsl.co.uk</b><br><br>
Please make sure that you include<br><br>
Parking charge notice number.<br><br>
Date vehicle registration mark.<br><br>
Your name your address.<br><br>
Your contact number.<br><br>
Reason for appeal and<br><br>
Scanned copies of any supporting documents.    
   </p>
    </div>
   <div class="col-sm-2">
   <img src="http://www.pessuk.com/assets/frontend/images/parking/ap4.jpg"/>
   </div>
</div>


<h3>BY POST</h3>
   <div class="row">
   <div class="col-sm-6">
<p><b>To Appeals, Parking Collection Services P.O. Image result for by postBox 271, Ashton Under Lyne, OL6 ODL.</b><br><br>
Please submit your appeal in writing to us with photocopies (do not send originals). Of any supporting documents.<br><br>
If you have appealed within the 28 day time limit and your appeal is rejected you can request that the decision is reviewed by the Independent Appeals Services (POPLA). Details will be made available at the appropriate time. If your appeal is not upheld and you still fail to pay this PCN then we will pass it to a debt recovery company where further costs and charges will be added.    
   </p>
    </div>
   <div class="col-sm-2">
   <img src="http://www.pessuk.com/assets/frontend/images/parking/ap5.jpg"/>
   </div>
</div>
-->