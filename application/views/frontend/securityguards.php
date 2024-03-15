<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
$baseUrl = $this->config->item('base_url');
?>


<div class="container">
   <div class="row">
       <div class="col-sm-12">
							<div class="parking_hd parking_hd1">
							<h1><?php echo $result['title'];?></h1>
							<div class="parking_triangle parking_triangle1"></div>
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
<p>For almost 20 years the professional staff of PESS Security has thrived in the security industry by using its unrivalled expertise to bring you a service you know and trust at great value for money. From commercial security to public sector safeguarding, PESS Security offers a complete range of services across the United Kingdom all delivered by our expert security guards who have been fully trained and vetted. Offering an abundance of services to secure any organisation, our facilities include mobile patrols, static security officers, key holding and alarm response, event security and concierge security to name just a few.<br><br>
The benefits of hiring guards with PESS Security are endless:<br><br></p>

<ul style="list-style-type: disc !important;">
    <li>PESS guards act as a visual deterrent from crime</li>
    <li>PESS guards are a welcoming face for a client.</li>
    <li>PESS guards can prevent trespassing and vandalism.</li>
    <li>PESS guards will make your clientele and employees feel safe and secure whilst they are in your premises.</li>
    <li>We can provide guards to survey CCTV footage and operate entrance and exit points.</li>
    <li>We can offer you guards who are alarm system surveillance trained.</li>
    <li>We can provide guards to undertake risk assessment.</li>
</ul>
 
<p>When you hire security officers with PESS you can be sure that they will deter thieves from retail outlets, control unruly crowds, man front desks at corporate or hospitality events, monitor CCTV and act on any fear of crime efficiently. Furthermore we can also offer detailed reports outlining any call of duty our officers have undertaken as well as offer excellent customer service through our unbeatable concierge security.</p>
<br><br>
-->




