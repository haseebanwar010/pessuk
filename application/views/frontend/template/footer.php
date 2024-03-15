<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
$baseUrl = $this->config->item('base_url');
?>

			


<footer class="ft_wrapper">
	<div class="container">
		
		<div class="row">
			<div class="col-md-6">
				<div class="socialmedia">
						<div class="social-icons">
				  <ul style="list-style-type: none !important;">
				  	
					<li><a class="facebook" href="#"><i class="fab fa-facebook-f"></i></a></li>
					<li><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></li> 
					<li><a class="youtube" href="#"><i class="fab fa-youtube"></i></a></li> 
					<li><a class="linkedin" href="#"><i class="fab fa-linkedin"></i></a></li>
				  </ul>
				</div></div>
			</div>
			<div class="col-md-6">
                <div class="copy_right1">Copyright © 2012 PESS. Powered By: <a href="http://www.abaskatech.com/" target="_blank"> AbaskaTech</a></div>
			</div>
			
		</div>
		
	</div>
</footer>

<?php if(isset($page) && $page!="index"){?>
</div>
<?php }?>

</body>
 
  <script type="text/javascript" src="<?php echo $baseUrl; ?>assets/frontend/js/jquery-3.2.1.slim.min.js"></script>
   
  <script type="text/javascript" src="<?php echo $baseUrl; ?>assets/frontend/js/popper.min.js"></script>
  <script type="text/javascript" src="<?php echo $baseUrl; ?>assets/frontend/js/bootstrap.min.js"></script>
  
  <script type="text/javascript" src="<?php echo $baseUrl; ?>assets/frontend/js/slick/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="<?php echo $baseUrl; ?>assets/frontend/js/jquery.js"></script>
  <script type="text/javascript" src="<?php echo $baseUrl; ?>assets/frontend/js/slick/slick.js" charset="utf-8"></script>

 <script>
	
$('.regular').slick({
//  dots: true,
//	autoplay: true,
//  infinite: true,
//
//  slidesToShow: 5,
//  slidesToScroll: true,
//  autoplaySpeed: 2000,


//    infinite: true,
//    slidesToShow: 5,
//    dots: false,
//    autoplay: true,
//  autoplaySpeed: 100000,
//	speed:5000,
        speed: 3000,
        autoplay: true,
		  infinite:true,
        autoplaySpeed: 0,
        cssEase: 'linear',
        slidesToShow: 5,
        slidesToScroll: 1,
	pauseOnHover: true,

  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});</script>  
         
<script>
	
$('.center').slick({
  dots: true,
	autoplay: true,
  infinite: true,
  speed: 300,
  slidesToShow: 3,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});</script>

<script>
	
$('.center1').slick({
  dots: true,
	autoplay: true,
  infinite: true,
  speed: 300,
  slidesToShow: 3,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});</script>



<script>
	
$('.maincate').slick({
  dots: true,
	autoplay: true,
  infinite: true,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});</script>
  


    <script type="text/javascript">
		$(document).ready(function(){
			
				$('.mobile_menu a').click(function(){
				$('.menu').slideToggle();
				
				});
			
		});
	</script>
	


</html>




