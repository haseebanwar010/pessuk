<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
$baseUrl = $this->config->item('base_url');

?>


		<section>
			
			
			<div class="container">
				
				<div class="row">
					
					<div class="col-md-12">
						
						<div class="parking_wrapper">
							
							<div class="parking_hd">
							<div class="parking_ico"><img src="<?php echo $baseUrl; ?>assets/frontend/images/parkings.png" alt=""/></div>
							<h1>Parking Services</h1>
							<div class="parking_triangle"></div>
							</div>
							
							<ul>
								
								<li class="clr1">
									<a href="<?php echo $baseUrl;?>Parking_enforcement/parking/1">
										<div class="box-wrp ">
										<div class="parking-icon"><img src="<?php echo $baseUrl;?>assets/frontend/images/parking/icon1.png" alt=""/></div>
										<h2>Introduction & 
Services</h2></div>
									</a>
									
								</li>
								<li class="clr2">
									<a href="<?php echo $baseUrl;?>Parking_enforcement/parking/2">
										<div class="box-wrp ">
										<div class="parking-icon"><img src="<?php echo $baseUrl; ?>assets/frontend/images/parking/icon2.png" alt=""/></div>
										<h2>Self 
Ticketing</h2></div>
									</a>
									
								</li>
								<li class="clr3">
									<a href="<?php echo $baseUrl;?>Parking_enforcement/parking/3">
										<div class="box-wrp ">
										<div class="parking-icon"><img src="<?php echo $baseUrl; ?>assets/frontend/images/parking/icon3.png" alt=""/></div>
										<h2>Warden Patrolled 
Ticketing</h2></div>
									</a>
									
								</li>
								<li class="clr4">
									<a href="<?php echo $baseUrl;?>Parking_enforcement/parking/4">
										<div class="box-wrp ">
										<div class="parking-icon"><img src="<?php echo $baseUrl; ?>assets/frontend/images/parking/icon4.png" alt=""/></div>
										<h2>Onsite Parking
Officers</h2></div>
									</a>
									
								</li>
								<li class="clr5">
									<a href="<?php echo $baseUrl;?>Parking_enforcement/parking/5">
										<div class="box-wrp ">
										<div class="parking-icon"><img src="<?php echo $baseUrl; ?>assets/frontend/images/parking/icon5.png" alt=""/></div>
										<h2>Anpr
Cameras</h2></div>
									</a>
									
								</li>
								<li class="clr6">
									<a href="<?php echo $baseUrl;?>Parking_enforcement/parking/6">
										<div class="box-wrp ">
										<div class="parking-icon"><img src="<?php echo $baseUrl; ?>assets/frontend/images/parking/icon6.png" alt=""/></div>
										<h2>Pay & 
Display</h2></div>
									</a>
									
								</li>
								<li class="clr7">
									<a href="<?php echo $baseUrl;?>Parking_enforcement/parking/7">
										<div class="box-wrp ">
										<div class="parking-icon"><img src="<?php echo $baseUrl; ?>assets/frontend/images/parking/icon7.png" alt=""/></div>
										<h2>Parking
Permits</h2></div>
									</a>
									
								</li>
								<li class="clr8">
									<a href="<?php echo $baseUrl;?>Parking_enforcement/parking/8">
										<div class="box-wrp ">
										<div class="parking-icon"><img src="<?php echo $baseUrl; ?>assets/frontend/images/parking/icon8.png" alt=""/></div>
										<h2>Line
Markikng</h2></div>
									</a>
									
								</li>
								<li class="clr9">
									<a href="<?php echo $baseUrl;?>Parking_enforcement/parking/9">
										<div class="box-wrp ">
										<div class="parking-icon"><img src="<?php echo $baseUrl; ?>assets/frontend/images/parking/icon9.png" alt=""/></div>
										<h2>Car Park
Signs</h2></div>
									</a>
									
								</li>
								<li class="clr10">
									<a href="<?php echo $baseUrl;?>Parking_enforcement/parking/10">
										<div class="box-wrp ">
										<div class="parking-icon"><img src="<?php echo $baseUrl; ?>assets/frontend/images/parking/icon10.png" alt=""/></div>
										<h2>Our
Clients</h2></div>
									</a>
									
								</li>
								
								<li class="clr11">
									<a href="<?php echo $baseUrl;?>Parking_enforcement/parking/11">
										<div class="box-wrp ">
										<div class="parking-icon"><img src="<?php echo $baseUrl; ?>assets/frontend/images/parking/icon11.png" alt=""/></div>
										<h2>Testmonials</h2></div>
									</a>
									
								</li>
								<li class="clr12">
									<a href="<?php echo $baseUrl;?>Parking_enforcement/parking/12">
										<div class="box-wrp ">
										<div class="parking-icon"><img src="<?php echo $baseUrl; ?>assets/frontend/images/parking/icon12.png" alt=""/></div>
										<h2>Accreditations</h2></div>
									</a>
									
								</li>
								<li class="clr13">
									<a href="<?php echo $baseUrl;?>Parking_enforcement/parking/13">
										<div class="box-wrp ">
										<div class="parking-icon"><img src="<?php echo $baseUrl; ?>assets/frontend/images/parking/icon13.png" alt=""/></div>
										<h2>Job Vacancies</h2></div>
									</a>
									
								</li>
								<li class="clr14">
									<a href="<?php echo $baseUrl;?>Parking_enforcement/parking/14">
										<div class="box-wrp ">
										<div class="parking-icon"><img src="<?php echo $baseUrl; ?>assets/frontend/images/parking/icon14.png" alt=""/></div>
										<h2>Areas We Cover</h2></div>
									</a>
									
								</li>
								<li class="clr15">
									<a href="<?php echo $baseUrl;?>Parking_enforcement/parking/15">
										<div class="box-wrp ">
										<div class="parking-icon"><img src="<?php echo $baseUrl; ?>assets/frontend/images/parking/icon15.png" alt=""/></div>
										<h2>Why Choose Us</h2></div>
									</a>
									
								</li>
								<?php if(isset($_SESSION['frontend_client']) && !empty($_SESSION['frontend_client'])){?>
<!--
								<li class="clr16">
									<a href="<?php echo $baseUrl;?>Parking_enforcement/slogin">
										<div class="box-wrp ">
										<div class="parking-icon"><img src="<?php echo $baseUrl; ?>assets/frontend/images/parking/icon16.png" alt=""/></div>
										<h2>Staff Login</h2></div>
									</a>
									
								</li>
-->
								<?php } else {?>
								<li class="clr16">
									<a href="<?php echo $baseUrl;?>Parking_enforcement/slogin">
										<div class="box-wrp ">
										<div class="parking-icon"><img src="<?php echo $baseUrl; ?>assets/frontend/images/parking/icon16.png" alt=""/></div>
										<h2>Staff Login</h2></div>
									</a>
									
								</li>
								<?php }?>
								
								<li class="clr17">
									<a href="<?php echo $baseUrl;?>Parking_enforcement/businessenqiry">
										<div class="box-wrp ">
										<div class="parking-icon"><img src="<?php echo $baseUrl; ?>assets/frontend/images/parking/icon17.png" alt=""/></div>
										<h2>Business Enquiry</h2></div>
									</a>
									
								</li>
								<li class="clr18">
									<a href="<?php echo $baseUrl;?>Parking_enforcement/parking/18">
										<div class="box-wrp ">
										<div class="parking-icon"><img src="<?php echo $baseUrl; ?>assets/frontend/images/parking/icon18.png" alt=""/></div>
										<h2>Pay a Charge</h2></div>
									</a>
									
								</li>
								<li class="clr19">
									<a href="<?php echo $baseUrl;?>Parking_enforcement/parking/19">
										<div class="box-wrp ">
										<div class="parking-icon"><img src="<?php echo $baseUrl; ?>assets/frontend/images/parking/icon19.png" alt=""/></div>
										<h2>Appeals
Procedure</h2></div>
									</a>
									
								</li>
								<li class="clr20">
									<a href="<?php echo $baseUrl;?>Parking_enforcement/contact/">
										<div class="box-wrp ">
										<div class="parking-icon"><img src="<?php echo $baseUrl; ?>assets/frontend/images/parking/icon20.png" alt=""/></div>
										<h2>Contact Us</h2></div>
									</a>
									
								</li>
								
							</ul>
							
						</div>
						
					</div>
					
				</div>
				
			</div>
			
			
		</section>
	