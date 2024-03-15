<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
$baseUrl = $this->config->item('base_url');
?>


<div class="container">
   <div class="row">
       <div class="col-sm-12">
							<div class="parking_hd">
							<h1>Contact Us</h1>
							<div class="parking_triangle"></div>
							</div>
      
           <div class="management">
<div class="row">

          
    <div class="col-sm-6">
    <img src="<?php echo $baseUrl;?>/assets/frontend/images/parking/cu1.jpg"/>
    <p><b>CONTROL ROOM (24 Hrs)</b>&nbsp;&nbsp;&nbsp;0845 388 2869<br><br>
<b>OFFICE (Mon-Fri 0900-1700)</b>&nbsp;&nbsp;&nbsp;0208 751 1676<br><br>
<b>EMAIL (Business Enquiries Only)</b>&nbsp;&nbsp;&nbsp;info@pessuk.com<br><br>
<b>ADDRESS</b>&nbsp;&nbsp;&nbsp;13a First Floor. Church Road, Ashford TW15 2UN</p>
    </div>
               
<div class="contact col-sm-6">
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
<form method="post" action="<?php echo $baseUrl;?>security_services/contactus">
<div class="row">
     <div class="col-sm-12">
  <div class="form-group contactformsett">
     <label for="name">Name:</label>
    <input type="text" name="uname" value="<?php if(isset($_POST['uname'])){ echo $_POST['uname']; } ?>" class="form-control" aria-describedby="emailHelp" placeholder="">
  </div>
     </div>
     <div class="col-sm-12">
  <div class="form-group contactformsett">
     <label for="name">Email:</label>
    <input type="text" name="email" value="<?php if(isset($_POST['email'])){ echo $_POST['email']; } ?>" class="form-control" aria-describedby="emailHelp" placeholder="">
  </div>
     </div>


<div class="col-sm-12">
  <div class="form-group contactformsett">
   <label for="name">Phone:</label>
    <input type="text" name="phone" value="<?php if(isset($_POST['phone'])){ echo $_POST['phone']; } ?>" class="form-control" aria-describedby="emailHelp" placeholder="">
  </div>
</div>

 <div class="col-sm-12">
  <div class="form-group contactformsett">
   <label for="name">Comment:</label>
    <textarea class="form-control" value="<?php if(isset($_POST['description'])){ echo $_POST['description']; } ?>" name="description" rows="4"></textarea>
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
              <br>
              <br>
               
               
           </div>
       </div>
   </div>
</div>

<div id="map" class="contactusmap"></div>
    <script>
      var map;
      function initMap() {
          var uluru = {lat: 51.440769, lng: -0.388740};
          var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 16,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBxMeZhnLJfK4ax7_GOGDd00OS5-jBFc4M&callback=initMap"
    async defer>
    </script>








