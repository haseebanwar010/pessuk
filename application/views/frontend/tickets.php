<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
$baseUrl = $this->config->item('base_url');
?>
 

<div class="container">
    <div class="row">
        <div class="col-sm-9">
<?php if($loc_name){?>
<div class="ticketmainheading">
<h1>Welcome To <?php echo $loc_name->name;?></h1>
</div>
<?php }?>
 <table class="setticketsup">
  <tr>
    <th>PCN</th>
    <th>VRM</th>
    <th>Offence</th>
    <th>OffenceDate</th>
    <th>Status</th>
  </tr>
<?php if($tickets){ ?> 
 <?php foreach($tickets as $ticket){?>
  <tr>
  

    <td><?php echo $ticket->PCN;?></td>
    <td><?php echo $ticket->VRM;?></td>
    <td><?php echo $ticket->Offence;?></td>
    <td><?php echo $ticket->OffenceDate;?></td>
    <td><?php echo $ticket->Status;?></td>
    
  </tr>
  <?php }?>
<?php }?>

</table>  
        </div>
        
        
<div class="col-sm-3 ticketscontactus">
     <?php if(validation_errors()){ ?>
        <section class="content alertcontent">    
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                <?php echo validation_errors(); ?>
            </div>
        </section>
    <?php } ?> 

        <?php if(!empty($this->session->flashdata('msg'))){ ?>
        <section class="content alertcontent">  
        <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Success!</h4>
                <?=$this->session->flashdata('msg')?>
              </div>          
        </section>
    <?php } ?>

<form method="post" action="<?php echo $baseUrl;?>index/contactus">

<div class="row">
	<div class="col-sm-12">
		<h3 class="insideticketscontact">For Further Any Query Please Conatct Us!</h3>
	</div>
</div>

<div class="row">
     <div class="col-sm-12">
  <div class="form-group contactformsett">
     <label for="name">Name:</label>
    <input type="text" name="uname" value="<?php if(isset($_POST['uname'])){ echo $_POST['uname']; } ?>" class="form-control" aria-describedby="emailHelp" placeholder="" required>
  </div>
     </div>


 <div class="col-sm-12">
  <div class="form-group contactformsett">
   <label for="name">Comment:</label>
    <textarea class="form-control" value="<?php if(isset($_POST['description'])){ echo $_POST['description']; } ?>" name="description" rows="4"  required></textarea>
  </div>
 </div>
    
<div class="col-sm-12">
	<div class="form-group contactformsett">
		<p>If you would like to see picture's evidence please have PCN and Vehicle Reg number handy and click on the following link, <a href="http://www.paypcsl.co.uk" target="_blank">www.paypcsl.co.uk</a></p>
	</div>
</div>
     
<div class="col-sm-12">
  <div class="form-group contactformsett">
  <button type="submit" class="btn sbutton">SUBMIT</button>
    </div>
</div>

 </div>

</form>

</div>
        
        
    </div>
    
<div class="row">
	<div class="col-sm-12">
		
		
           
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
