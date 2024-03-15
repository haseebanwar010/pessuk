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
<h6><a href="https://www.paypcsl.co.uk" target="_blank">www.paypcsl.co.uk</a></h6>
  <div class="row">
   <div class="col-sm-2">
    <img src="http://www.pessuk.com/assets/frontend/images/parking/payments.gif" style="height:90px;"/>
    </div>
       <div class="col-sm-2">
    <img src="http://www.pessuk.com/assets/frontend/images/parking/payment1.gif" style="height:90px;"/>
    </div>
</div><br>
               
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
    <img src="http://www.pessuk.com/assets/frontend/images/parking/pc1.jpg" style="height:225px;"/>
    </div>
       <div class="col-sm-3">
    <img src="http://www.pessuk.com/assets/frontend/images/parking/pc2.jpg" style="height:225px;"/>
    </div>
       <div class="col-sm-3">
    <img src="http://www.pessuk.com/assets/frontend/images/parking/pc3.jpg" style="height:225px;"/>
    </div>
    </div>
    
<h3>BY POST</h3>
<p>To <b>Parking Collection Services, P.O. Box 271, Ashton Under Lyne, OL6 0DL, UK</b>. Cheque or postal order payable to Parking Collection Services and return with the complete payment slip below. Please enclose a photocopy of the Parking Charge Notice or writing the parking charge number and your vehicle reg. number on the reverse of the cheque.<b>(DO NOT SEND CASH)</b></p><br>

<h3>BY TELEPHONE</h3>
<p>Credit/Debit card payments can be made via our <b>24 hours</b> automated payment line by calling <b>0844 556 0685</b> (please have your card details and our reference number ready). Should you wish to speak to an operator opening hours are <b>9am – 6pm</b> Monday - Friday.</p><br>

<h3>BANK TRANSFER</h3>
<p>Please quote your Parking Charge Notice number to: Parking Collection Services, Royal Bank Scotland, <b>Sort Code: 16-00-01, account number: 20973851</b></p><br>
-->









