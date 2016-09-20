<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
    
    
    <title>Construction a Real Estates and Builders Category Flat bootstrap Responsive website Template | Home :: w3layouts</title>
<link href="<?php bloginfo('template_url');?>/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="<?php bloginfo('template_url');?>/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/flexslider.css" type="text/css" media="screen" />
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,800italic,800,700italic,700,600italic,600,400italic,300italic,300' rel='stylesheet' type='text/css'>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Construction  Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="<?php bloginfo('template_url');?>/js/jquery-1.11.1.min.js"></script>
<script src="<?php bloginfo('template_url');?>/js/responsiveslides.min.js"></script>
<script>
    jQuery(function () {
      jQuery("#slider").responsiveSlides({
      	auto: true,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
	
  </script>
  <script src="<?php bloginfo('template_url');?>/js/bootstrap.js"></script>
<!--startsmothscrolling-->
<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/move-top.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/easing.js"></script>
 <script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
	</script>
<!--endsmothscrolling-->
<link rel="stylesheet" href="css/swipebox.css">
			<script src="<?php bloginfo('template_url');?>/js/jquery.swipebox.min.js"></script> 
			    <script type="text/javascript">
					jQuery(function($) {
						$(".swipebox").swipebox();
					});
				</script>


    
    
    
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

		<!--start-header-section-->
	<div class="header">
         <div class="header-top1">
          51 Brandywine Drive, Ridgecrest, CA 93555. Locate us on the map.
         
         <div class="header-top2">
            <a class="socialicons"  href="#" target="_blank"><i class="icon fa fa-linkedin" style="font-size:16px; line-height:16px;"></i></a> 
            <a class="socialicons"  href="#" target="_blank"><i class="icon fa fa-twitter" style="font-size:16px; line-height:16px;"></i></a> 
            <a class="socialicons" href="#" target="_blank"><i class="icon fa fa-facebook" style="font-size:16px; line-height:16px;"></i></a>
          
          
         </div>
         </div>
         
		<div class="container">
		 
          
         
         	
            <div class="header-top">
                
                      
				<div class="logo">
					<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Refaaz</a></h1>
				</div>
				<!--<div class="buttons">
				   	<p class="buttonsclass" style="float:right; padding-right:2%;">join us</p>
		            <p class="buttonsclass" style="float:right;">login</p>
				</div>-->
                <div class="clearfix"></div>
			</div>
            
            
            
            
			<div class="header-bottom">
				<nav class="navbar navbar-default">
					<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
        <!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        
                        <?php wp_nav_menu(array('menu' => 'main_menu', 'menu_class'  => 'nav navbar-nav ','container_class' => 'active')); ?>
                        
						 <!-- <ul class="nav navbar-nav cl-effect-16">
							<li class="active"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home <span class="sr-only">(current)</span></a></li>
							<li><a href="<?php echo get_the_permalink('9');?>">About</a></li>
							 <li class="dropdown">
							  <a href="<?php echo get_the_permalink('11');?>">Services</a>
							  <ul class="dropdown-menu">
								 <li><a href="services.html">Services1</a></li>
								<li><a href="services.html">Services2</a></li>
								<li><a href="services.html">Services3</a></li>
							  </ul>
							</li>
								<li><a href="<?php echo get_the_permalink('17');?>">Projects</a></li>
						
								<li><a href="<?php echo get_the_permalink('15');?>">Contact</a></li>
							</ul>-->
							

						</div><!-- /.navbar-collapse -->
					</div><!-- /.container-fluid -->
				</nav>
				
			</div>
		</div>
	</div>
		<!--end header-section-->
      
      
        
