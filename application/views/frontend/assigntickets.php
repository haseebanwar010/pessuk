<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
$baseUrl = $this->config->item('base_url');
?>


<div class="container">
   <div class="row">
       <div class="contact col-sm-12">
							<div class="parking_hd">
							<h1>Assign Tickets</h1>
							<div class="parking_triangle"></div>
							</div>
     <?php if(validation_errors()){ ?>
        <section class="content alertcontent">    
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                <?php echo validation_errors(); ?>
            </div>
        </section>
    <?php } ?> 

        <?php if(!empty($this->session->flashdata('error_msg'))){ ?>
        <section class="content alertcontent">  
        <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Error!</h4>
                <?=$this->session->flashdata('error_msg')?>
              </div>          
        </section>
    <?php } ?>
                <?php if(!empty($this->session->flashdata('validation_errors_captcha'))){ ?>
        <section class="content alertcontent">    
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                <?=$this->session->flashdata('validation_errors_captcha')?>
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
       
<form method="post" action="<?php echo $baseUrl;?>parking_enforcement/assign_tickets">

<div class="row">
     <div class="col-sm-12">
  <div class="form-group contactformsett">
     <label for="name">PCN NO:</label>
    <input type="text" name="pcn_no" value="<?php if(isset($_POST['pcn_no'])){echo $_POST['pcn_no']; }?>" class="form-control"  aria-describedby="emailHelp" placeholder="">
  </div>
     </div>
     <div class="col-sm-12">
  <div class="form-group contactformsett">
     <label for="name">Date:</label>
    <input type="text" name="date" value="<?php if(isset($_POST['date'])){echo $_POST['date']; }?>" class="form-control"  aria-describedby="emailHelp" placeholder="">
  </div>
     </div>


<div class="col-sm-12">
  <div class="form-group contactformsett">
   <label for="name">Time:</label>
    <input type="text" name="time" value="<?php if(isset($_POST['time'])){echo $_POST['time']; }?>" class="form-control"  aria-describedby="emailHelp" placeholder="">
  </div>
</div>

 <div class="col-sm-12">
  <div class="form-group contactformsett">
   <label for="name">Vihicle Type:</label>
    <input type="text" name="vihicle_type" value="<?php if(isset($_POST['vihicle_type'])){echo $_POST['vihicle_type']; }?>" class="form-control"  aria-describedby="emailHelp" placeholder="">
  </div>
</div>
 <div class="col-sm-12">
  <div class="form-group contactformsett">
   <label for="name">Registration:</label>
    <input type="text" name="registration" value="<?php if(isset($_POST['registration'])){echo $_POST['registration']; }?>" class="form-control"  aria-describedby="emailHelp" placeholder="">
  </div>
</div>
 <div class="col-sm-12">
  <div class="form-group contactformsett">
   <label for="name">Color:</label>
    <input type="text" name="color" value="<?php if(isset($_POST['color'])){echo $_POST['color']; }?>" class="form-control" aria-describedby="emailHelp" placeholder="">
  </div>
</div>
 <div class="col-sm-12">
  <div class="form-group contactformsett">
   <label for="name">Location/Site:</label>
    <input type="text" name="location" value="<?php if(isset($_POST['location'])){echo $_POST['location']; }?>" class="form-control"  aria-describedby="emailHelp" placeholder="">
  </div>
</div>
<div class="col-sm-12">
  <div class="form-group contactformsett">
   <label for="name">Charge:</label>
    <input type="text" name="charge_nationality" value="<?php if(isset($_POST['charge_nationality'])){echo $_POST['charge_nationality']; }?>" class="form-control"  aria-describedby="emailHelp" placeholder="">
  </div>
</div>
<div class="col-sm-12">
  <div class="form-group contactformsett">
   <label for="name">Charge (Disability):</label><br>
        <input type="radio" name="charge_disability" value="1">Yes
        <input type="radio" name="charge_disability" value="0">No
  </div>
</div>

   <div class="col-sm-12">
  <div class="form-group contactformsett">
   <label for="name">Further Detail:</label>
    <textarea class="form-control" name="fdetails" value="<?php if(isset($_POST['fdetails'])){echo $_POST['fdetails']; }?>" rows="4"></textarea>
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
</div>




