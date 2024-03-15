<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
$baseUrl = $this->config->item('base_url');
?>
	
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PESS</title>
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link href="<?php echo $baseUrl; ?>assets/frontend/css/bootstrap.min.css" rel="stylesheet" />
 
  <link href="<?php echo $baseUrl; ?>assets/frontend/css/animate.min.css" rel="stylesheet"> 
 <link rel="stylesheet" href="<?php echo $baseUrl; ?>assets/frontend/css/slider.css">
  
  
   <link rel="stylesheet" type="text/css" href="<?php echo $baseUrl; ?>assets/frontend/js/slick/slick.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $baseUrl; ?>assets/frontend/js/slick/slick-theme.css">
   
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
   <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600" rel="stylesheet">
   
    <link href="<?php echo $baseUrl; ?>assets/frontend/css/css.css" rel="stylesheet" />
    
   <style type="text/css">
    html, body {
      margin: 0;
      padding: 0;
    }

    * {
      box-sizing: border-box;
    }

    .slider {
        width: 50%;
        margin: 100px auto;
    }

    .slick-slide {
      margin: 0px 20px;
    }

    .slick-slide img {
      width: 100%;
    }

    .slick-prev:before,
    .slick-next:before {
      color: black;
    }


    .slick-slide {
      transition: all ease-in-out .3s;
      opacity: .2;
    }
    
    .slick-active {
      opacity: .5;
    }

    .slick-current {
      opacity: 1;
    }
  </style>  
    
    
</head>
<body>


<?php if(isset($page) && $page=="index"){?>

	<header class="hd_clr">
		<div class="container">
			<div class="row">
				
				<div class="col-md-3">
					<div class="logo">
						<a href="<?php echo $baseUrl; ?>index"> <img src="<?php echo $baseUrl; ?>assets/frontend/images/logo.png" alt=""/> </a>
						
					</div>	
			   </div>
				<div class="col-md-9">
					<div class="top_section"><div class="angles_btm"></div>
					<div class="top_cont_area">
						
						<div class="social-icons">
				  <ul style="list-style-type: none !important;">
				  	
					<li><a class="facebook" href="#"><i class="fab fa-facebook-f"></i></a></li>
					<li><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></li> 
					<li><a class="youtube" href="#"><i class="fab fa-youtube"></i></a></li> 
					<li><a class="linkedin" href="#"><i class="fab fa-linkedin"></i></a></li>
				  </ul>
				</div>
						
					</div>
					
					<div class="contact_info">
						<div class="ph">0208 751 1676</div>
						<div class="email">info@pessuk.com</div>
						
					</div>
					
					</div>
					
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
                    
                    
					<?php if(isset($_SESSION['frontend_client']) && !empty($_SESSION['frontend_client'])){?>
					
					<div class="login_form">
                   <a href="<?php echo $baseUrl;?>index/tickets"><span><button type="submit" name="tickets">Tickets</button></span></a>
                   <a href="<?php echo $baseUrl;?>index/logout"><span><button type="submit" name="logout">Logout</button></span></a>

                    </div>
                    
                    <?php } elseif(isset($_SESSION['frontend_staff']) && !empty($_SESSION['frontend_staff'])){?>
				   
                  <div class="login_form">
                   <a href="<?php echo $baseUrl;?>parking_enforcement/assign_tickets"><span><button type="submit" name="tickets">Assign Tickets</button></span></a>
                   <a href="<?php echo $baseUrl;?>parking_enforcement/logout"><span><button type="submit">Logout</button></span></a>
                    </div>
                    
					<?php } else {?>

                    <form action="<?php echo $baseUrl;?>index/login" method="post">
					  <div class="login_form">
    <?php if(!empty($this->session->flashdata('error_msg'))){ ?>
        <section class="content alertcontent">  
        <div class="alert alert-danger alert-dismissible">
<!--                <button type="button" class="close setting" data-dismiss="alert" aria-hidden="true">&times;</button>-->
                <h4><i class="icon fa fa-check"></i> Error!</h4>
                <?=$this->session->flashdata('error_msg')?>
              </div>          
        </section>
    <?php } ?>

						<input type="email" class="usrname" name="email" value="<?php if(isset($_POST['email'])){echo $_POST['email']; }?>" placeholder="Email" required>
						<input type="password" class="usrname1" name="password" placeholder="Password" required>
						<button type="submit" name="login">Client Login</button>
					</div>
					</form>
					<?php }?>


					
				</div>
			</div>
			
		</div>
		
		
	</header>
	
	<section class="newsticker">
		<div class="container">
			
			<div class="row">
				<div class="col-md-9">
				
				<div class="area_rectange">
				<div class="angles_btm1"></div>
				<div class="write_news">
						News
					</div>
				</div>
				
					<div class="area_new">
					
<!--
				<marquee id='scroll_news' style="font-family:Book Antiqua; color: #FFFFFF" bgcolor="#000080" >
				<div onMouseOver="document.getElementById('scroll_news').stop();" onMouseOut="document.getElementById('scroll_news').start();">News 1   News 2  News 3 News 4 ....... More news here 
				</div>
				</marquee>
-->
					<marquee>
					<?php if($latestnews){?>
					<?php foreach($latestnews as $news){ ?>
					<?php echo $news['title'];?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<?php }?>
					<?php } ?>
					</marquee>
					</div>
					
					
				</div>
				<div class="col-md-3"></div>
			</div>
			
		</div>
		
	</section>
	
	<?php } else{?>
	
<div class="background_main">
<section class="newsticker newsticker1">
		<div class="container">
			
			<div class="row">
				<div class="col-md-8">
				<div class="area_rectange">
				<div class="angles_btm1 angles_btm2"></div>
				<div class="write_news write_news1">News</div>
				</div>
				
					<div class="area_new">
					<marquee>
					<?php if($latestnews){?>
					<?php foreach($latestnews as $news){ ?>
					<?php echo $news['title'];?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<?php }?>
					<?php } ?>
					</marquee>
					</div>
					
				</div>
				<div class="col-md-4">
					<div class="top-cont-info">
					<div class="ph">0208 751 1676</div>
						<div class="email">info@pessuk.com</div>
						</div></div>
			</div>
			
		</div>
		
	</section>
<header class="hd_clr hd_clr1">
		<div class="container">
			<div class="row">
				
				<div class="col-md-3">
					<div class="logo">
						<a href="<?php echo $baseUrl; ?>index"> <img src="<?php echo $baseUrl; ?>assets/frontend/images/logo1.png" alt=""/> </a>
						
					</div>	
			   </div>
<!--			   frontend_staff-->
				<div class="col-md-9">
					<?php if((isset($_SESSION['frontend_client']) && !empty($_SESSION['frontend_client'])) || (isset($_SESSION['frontend_staff']) && !empty($_SESSION['frontend_staff']))){?>
					
<!--
					<div class="login_form">
                   <a href="<?php echo $baseUrl;?>index/tickets"><span><button type="submit" name="tickets">Tickets</button></span></a>
                   <a href="<?php echo $baseUrl;?>index/logout"><span><button type="submit" name="logout">Logout</button></span></a>

                    </div>
-->
                    
					<?php } else {?> 

				
                    
                    
                   
					<form action="<?php echo $baseUrl;?>index/login" method="post">
					<div class="login_form login_form1">
    <?php if(!empty($this->session->flashdata('error_msg'))){ ?>
        <section class="content alertcontent">  
        <div class="alert alert-danger alert-dismissible">
<!--                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>-->
                <h4><i class="icon fa fa-check"></i> Error!</h4>
                <?=$this->session->flashdata('error_msg')?>
              </div>          
        </section>
    <?php } ?>
						
						<input type="email" class="usrname" name="email" value="<?php if(isset($_POST['email'])){echo $_POST['email']; }?>" placeholder="Email" required>
						<input type="password" class="usrname1" name="password" placeholder="Password" required>
						<button type="submit" name="login">Client Login</button>
						
					</div>
                    </form>
                  
                    <?php }?>
					
					
					<div class="menu_bx">
			
			 <div class="mobile_menu">
              	<a href="javascript:void(0);">
                	<span></span>
                	<span></span>
                	<span></span>
                </a>
              </div>
							<div class="menu">
								<ul>
<!--
									<li><a href="<?php echo $baseUrl;?>parking_enforcement">Parking Services</a></li>
									<li><a href="<?php echo $baseUrl;?>security_services">Security Services</a></li>
-->
									
									
									
									
									
									
				<?php if(isset($_SESSION['frontend_staff']) && !empty($_SESSION['frontend_staff'])){?>
								
								
									<li class="innersetbtninner"><a href="<?php echo $baseUrl;?>parking_enforcement/assign_tickets" ><button type="button" name="assigntickets" class="otherheadersett">Assign Tickets</button></a></li>
								
									<li class="innersetbtninner"><a href="<?php echo $baseUrl;?>parking_enforcement/logout"><button type="button" name="logoutstaff" class="otherheadersett">Logout</button></a></li>
									

										
				<?php }?>

				<?php if(isset($_SESSION['frontend_client']) && !empty($_SESSION['frontend_client'])){?>
								
					<li class="innersetbtninner"><a href="<?php echo $baseUrl;?>index/tickets"><button type="button" name="logoutstaff" class="otherheadersett">Tickets</button></a></li>
									
					<li class="innersetbtninner"><a href="<?php echo $baseUrl;?>index/logout"><button type="button" name="logoutstaff" class="otherheadersett">Logout</button></a></li>
									
				<?php }?>
								</ul>
							</div>
		</div>
				</div>
			</div>
			
		</div>
		
		
	</header>
	
<?php }?>
	
	

