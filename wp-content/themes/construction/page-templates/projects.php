<?php
/**
 * Template Name: Projects
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>



<div class="header-slide" style="background: url(<?php bloginfo('template_url');?>/images/about.jpg) no-repeat 0px 0px;
    background-size: cover;
    min-height: 300px !important;">
		<div class="slider">
			
            
		</div>
	</div>
    <div class="container">
 <h3 class="projectclass">We are a multi award winning, privately owned commercial construction company active in all sectors 
 of the industry. With a turnover in excess of $450 million and over 250 full time employees.</h3>
</div>
<div class="content">
		<!--gallery-->
		<div class="projects">
		<div class="container">
			<h2>Our Projects</h2>
			<div class="project-grids">
            
              <?php 
					$args = array( 'post_type' => 'ourprojects','posts_per_page' => '-1','order'=> 'ASC','orderby'=>'menu_order');
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post();
					
					
		?>		
            
				<div class="col-md-3 project-grid" style="padding-bottom:3em;">
					<div class="project-grd">
					 <a class="swipebox" href="<?php the_permalink(); ?> " >
                   <?php the_post_thumbnail('thumbnail', array('class' => 'img-style row6')); ?>
                      <p class="projectsconstruction"><?php the_title();?></p> </a>

					</div>
				</div>
                
              <?php endwhile;?>
              <!--  
				<div class="col-md-3 project-grid">
					<div class="project-grd">
						 <a class="swipebox" href="images/p2.jpg" ><img src="<?php bloginfo('template_url');?>/images/p2.jpg" class="img-style row6" alt="">
                         <p class="projectsconstruction">Construction 1</p></a>
					</div>
				</div>
				<div class="col-md-3 project-grid">
					<div class="project-grd">
						 <a class="swipebox" href="images/p3.jpg" ><img src="<?php bloginfo('template_url');?>/images/p3.jpg" class="img-style row6" alt="">
                         <p class="projectsconstruction">Construction 1</p></a>
					</div>
				</div>
                <div class="col-md-3 project-grid">
					<div class="project-grd">
						 <a class="swipebox" href="images/p4.jpg" ><img src="<?php bloginfo('template_url');?>/images/p4.jpg" class="img-style row6" alt="">
                         <p class="projectsconstruction">Construction 1</p></a>
					</div>
				</div>-->
                
				<div class="clearfix"> </div>
			</div>
            
            
            
        <!--    
			<div class="project-grids">
				
				<div class="col-md-3 project-grid">
					<div class="project-grd">
						 <a class="swipebox" href="images/p5.jpg" ><img src="<?php bloginfo('template_url');?>/images/p5.jpg" class="img-style row6" alt="">
                         <p class="projectsconstruction">Construction 1</p></a>
					</div>
				</div>
				<div class="col-md-3 project-grid">
					<div class="project-grd">
						 <a class="swipebox" href="images/p6.jpg" ><img src="<?php bloginfo('template_url');?>/images/p6.jpg" class="img-style row6" alt="">
                         <p class="projectsconstruction">Construction 1</p></a>
					</div>
				</div>
                <div class="col-md-3 project-grid">
					<div class="project-grd">
						 <a class="swipebox" href="images/p7.jpg" ><img src="<?php bloginfo('template_url');?>/images/p7.jpg" class="img-style row6" alt="">
                         <p class="projectsconstruction">Construction 1</p></a>
					</div>
				</div>
                <div class="col-md-3 project-grid">
					<div class="project-grd">
						 <a class="swipebox" href="images/p8.jpg" ><img src="<?php bloginfo('template_url');?>/images/p8.jpg" class="img-style row6" alt="">
                         <p class="projectsconstruction">Construction 1</p></a>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
            -->
          <!--  
			<div class="project-grids">
				
				
				<div class="col-md-3 project-grid">
					<div class="project-grd">
						 <a class="swipebox" href="images/p9.jpg" ><img src="<?php bloginfo('template_url');?>/images/p9.jpg" class="img-style row6" alt="">
                         <p class="projectsconstruction">Construction 1</p></a>
					</div>
				</div>
                <div class="col-md-3 project-grid">
					<div class="project-grd">
						 <a class="swipebox" href="images/p9.jpg" ><img src="<?php bloginfo('template_url');?>/images/p9.jpg" class="img-style row6" alt="">
                         <p class="projectsconstruction">Construction 1</p></a>
					</div>
				</div>
                <div class="col-md-3 project-grid">
					<div class="project-grd">
						 <a class="swipebox" href="images/p9.jpg" ><img src="<?php bloginfo('template_url');?>/images/p9.jpg" class="img-style row6" alt="">
                         <p class="projectsconstruction">Construction 1</p></a>
					</div>
				</div>
                <div class="col-md-3 project-grid">
					<div class="project-grd">
						 <a class="swipebox" href="images/p9.jpg" ><img src="<?php bloginfo('template_url');?>/images/p9.jpg" class="img-style row6" alt="">
                         <p class="projectsconstruction">Construction 1</p></a>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
            -->
			</div>
		</div>

	<!--//gallery-->

	</div>
	

<?php
//get_sidebar();
get_footer();
?>