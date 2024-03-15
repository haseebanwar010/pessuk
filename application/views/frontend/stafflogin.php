<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
$baseUrl = $this->config->item('base_url');
?>


<div class="container">
   <div class="row">
       <div class="col-sm-12">
							<div class="parking_hd">
							<h1>Staff Login</h1>
							<div class="parking_triangle"></div>
							</div>
        
<div class="management">
        <?php if(!empty($this->session->flashdata('error_msg'))){ ?>
        <section class="content alertcontent">  
        <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Error!</h4>
                <?=$this->session->flashdata('error_msg')?>
              </div>          
        </section>
    <?php } ?>
           
       <?php if(isset($msg)){ ?>
        <section class="msg">
         <div class="alert alert-error">
        <a href="#" class="close close-btn" data-dismiss="alert" aria-label="close">&times;</a>
            <?php echo $msg?>  
            </div>
        </section>                 
        <?php } ?>
        <?php if(isset($reset)){ ?>
        <section class="msg">
         <div class="alert">
        <a href="#" class="close close-btn" data-dismiss="alert" aria-label="close">&times;</a>
            <?=$reset?>  
            </div>
        </section>                 
        <?php } ?>
           
           
<div class="row">
<?php if(isset($_SESSION['frontend_staff']) && !empty($_SESSION['frontend_staff'])){?>

<?php }else{ ?>               
<div class="contact col-sm-12">
<form method="post" action="<?php echo $baseUrl;?>Parking_enforcement/login">

<div class="row">
     <div class="col-sm-12">
  <div class="form-group contactformsett">
     <label for="name">Email:</label>
    <input type="email" name="email" value="<?php if(isset($_POST['email'])){echo $_POST['email']; }?>" class="form-control settlog" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required>
  </div>
     </div>
     <div class="col-sm-12">
  <div class="form-group contactformsett">
     <label for="name">Password:</label>
    <input type="password" name="password" class="form-control settlog" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required>
  </div>
     </div>
     
<div class="col-sm-12">
  <div class="form-group contactformsett">
  <button type="submit" name="loginsubmit" class="btn sbutton">LOGIN</button>
    </div>
</div>

 </div>

</form>
</div>
<?php } ?>
</div>
              <br><br>
               
               
           </div>
         
         
           
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










