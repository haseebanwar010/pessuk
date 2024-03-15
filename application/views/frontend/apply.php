<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
$baseUrl = $this->config->item('base_url');
?>


<div class="container">
   <div class="row">
       <div class="contact col-sm-12">
							<div class="parking_hd">
							<div class="parking_ico"><img src="<?php echo $baseUrl; ?>assets/frontend/images/parkings.png" alt=""/></div>
							<h1>Apply</h1>
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
       
        <?php if(!empty($this->session->flashdata('error'))){ ?>
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
       
<form method="post" action="<?php echo $baseUrl;?>parking_enforcement/apply">

<div class="row">

<div class="col-sm-12">
  <div class="form-group contactformsett">
     <label for="name">Course Name:</label>
    <input type="text" name="course_name" value="<?php if(isset($_POST['course_name'])){echo $_POST['course_name']; }?>" class="form-control">
  </div>
</div>
<div class="col-sm-12">
  <div class="form-group contactformsett">
     <label for="title">Title:</label>
      <select name="title" class="form-control">
      <option value="">Select Title</option>
       <option value="Mr." <?php if(isset($_POST['title']) && $_POST['title']=='Mr.'){?> selected <?php }?> >Mr.</option>
       <option value="Mrs." <?php if(isset($_POST['title']) && $_POST['title']=='Mrs.'){?> selected <?php }?> >Mrs.</option>
       <option value="Miss." <?php if(isset($_POST['title']) && $_POST['title']=='Miss.'){?> selected <?php }?> >Miss.</option>
       <option value="Ms." <?php if(isset($_POST['title']) && $_POST['title']=='Ms.'){?> selected <?php }?> >Ms.</option>
      </select>
  </div>
</div>
<div class="col-sm-12">
  <div class="form-group contactformsett">
     <label for="name">Forename:</label>
    <input type="text" name="forename" value="<?php if(isset($_POST['forename'])){echo $_POST['forename']; }?>" class="form-control">
  </div>
</div>
<div class="col-sm-12">
  <div class="form-group contactformsett">
     <label for="name">Surname:</label>
    <input type="text" name="surname" value="<?php if(isset($_POST['surname'])){echo $_POST['surname']; }?>" class="form-control">
  </div>
</div>
<div class="col-sm-12">
  <div class="form-group contactformsett">
     <label for="gender">Gender:</label>
          <select name="gender" class="form-control">
            <option value="">Select Gender</option>
            <option value="Male" <?php if(isset($_POST['gender']) && $_POST['gender']=='Male'){?> selected <?php }?> >Male</option>
            <option value="Female" <?php if(isset($_POST['gender'])  && $_POST['gender']=='Female'){?> selected <?php }?> >Female</option>
          </select>
  </div>
</div>
<div class="col-sm-12">
  <div class="form-group contactformsett">
     <label for="name">Date Of Birth:</label>
    <input type="text" name="dob" value="<?php if(isset($_POST['dob'])){echo $_POST['dob']; }?>" class="form-control">
  </div>
</div>
<div class="col-sm-12">
  <div class="form-group contactformsett">
     <label for="name">Age:</label>
    <input type="text" name="age" value="<?php if(isset($_POST['age'])){echo $_POST['age']; }?>" class="form-control">
  </div>
</div>
<div class="col-sm-12">
  <div class="form-group contactformsett">
     <label for="name">Nationality:</label>
    <input type="text" name="nationality" value="<?php if(isset($_POST['nationality'])){echo $_POST['nationality']; }?>" class="form-control">
  </div>
</div>
<div class="col-sm-12">
  <div class="form-group contactformsett">
     <label for="name">Disability:</label><br>
        <input type="radio" name="disability" value="1">Yes &nbsp;&nbsp;&nbsp;
        <input type="radio" name="disability" value="0">No
  </div>
</div>

<div class="col-sm-12">
  <div class="form-group contactformsett">
     <label for="name">Further Detail:</label>
    <textarea class="form-control" name="fdetails" value="<?php if(isset($_POST['fdetails'])){echo $_POST['fdetails']; }?>" rows="4"></textarea>
  </div>
</div>
 
<div class="col-sm-12">
<div class="parking_hd">
<h1>CONTACT DETAIL</h1>
<div class="parking_triangle"></div>
</div>
</div>
     
<div class="col-sm-12">
  <div class="form-group contactformsett">
     <label for="name">House No / Name:</label>
    <input type="text" name="house_det" value="<?php if(isset($_POST['house_det'])){echo $_POST['house_det']; }?>" class="form-control">
  </div>
</div>
<div class="col-sm-12">
  <div class="form-group contactformsett">
     <label for="name">Street Name:</label>
    <input type="text" name="street" value="<?php if(isset($_POST['street'])){echo $_POST['street']; }?>" class="form-control">
  </div>
</div>
<div class="col-sm-12">
  <div class="form-group contactformsett">
     <label for="name">Town / City:</label>
    <input type="text" name="city" value="<?php if(isset($_POST['city'])){echo $_POST['city']; }?>" class="form-control">
  </div>
</div>
<div class="col-sm-12">
  <div class="form-group contactformsett">
     <label for="name">Country:</label>
    <input type="text" name="country" value="<?php if(isset($_POST['country'])){echo $_POST['country']; }?>" class="form-control">
  </div>
</div>
<div class="col-sm-12">
  <div class="form-group contactformsett">
     <label for="name">Post Code:</label>
    <input type="text" name="post_code" value="<?php if(isset($_POST['post_code'])){echo $_POST['post_code']; }?>" class="form-control">
  </div>
</div>
<div class="col-sm-12">
  <div class="form-group contactformsett">
     <label for="name">Telephone No:</label>
    <input type="text" name="telephone_no" value="<?php if(isset($_POST['telephone_no'])){echo $_POST['telephone_no']; }?>" class="form-control">
  </div>
</div>
<div class="col-sm-12">
  <div class="form-group contactformsett">
     <label for="name">Mobile No:</label>
    <input type="text" name="mobile_no" value="<?php if(isset($_POST['mobile_no'])){echo $_POST['mobile_no']; }?>" class="form-control">
  </div>
</div>
<div class="col-sm-12">
  <div class="form-group contactformsett">
     <label for="name">Email Address:</label>
    <input type="text" name="email" value="<?php if(isset($_POST['email'])){echo $_POST['email']; }?>" class="form-control">
  </div>
</div>

  
<div class="col-sm-12">
<div class="parking_hd">
<h1>NEXT OF KIN</h1>
<div class="parking_triangle"></div>
</div>
</div>
                
<div class="col-sm-12">
  <div class="form-group contactformsett">
     <label for="name">Email Address:</label>
    <input type="text" name="sec_email" value="<?php if(isset($_POST['sec_email'])){echo $_POST['sec_email']; }?>" class="form-control">
  </div>
</div>
<div class="col-sm-12">
  <div class="form-group contactformsett">
     <label for="name">Relationship To You:</label>
    <input type="text" name="relationship" value="<?php if(isset($_POST['relationship'])){echo $_POST['relationship']; }?>" class="form-control">
  </div>
</div>
<div class="col-sm-12">
  <div class="form-group contactformsett">
     <label for="name">Telephone No:</label>
    <input type="text" name="telephone" value="<?php if(isset($_POST['telephone'])){echo $_POST['telephone']; }?>" class="form-control">
  </div>
</div>

<div class="col-sm-12">
  <div class="form-group contactformsett">
                                    <label for="captcha"><?php echo $captcha['image']; ?></label>
                            <input type="text" required autocomplete="off" name="userCaptcha"
                                   placeholder="Enter above text" class="form-control"
                                   value="<?php if (!empty($userCaptcha)) {
                                       echo $userCaptcha;
                                   } ?>"/>
<!--
     <label for="name">Captcha</label>
    <input type="text" name="captcha" value="<?php if(isset($_POST['captcha'])){echo $_POST['captcha']; }?>" class="form-control">
-->
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




