<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

	<!--detail-->
		<div class="details-section">
			<div class="container">
				<div class="details-grids">
					<div class="col-md-4 detail-grid">
						<div class="logo1">
						<h1><a href="index.html">Construction Co</a></h1>
						</div>
						<p>Cum sociis natoque penatibus et magnis. dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio.</p>
					</div>
					<div class="col-md-4 detail-grid">
						<ul>
							<li class="dot"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>4978 Diamond Circle Washington, </li>
							<li class="mobile"><span class="glyphicon glyphicon-phone" aria-hidden="true"></span>+212 522 275 386</li>
							<li class="mes"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> <a href="mailto:info@example.com">mail@example.com</a></a></li>
							<li class="sign"><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span><a href="#">www.example.com</a></li>
						</ul>
					</div>
					<div class="col-md-4 detail-grid">
						<p>Cum sociis natoque penatibus et magnis. dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio.</p>
						<form>
							<h5>Newsletter<h5>
							<input type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required>
							<input type="submit" value=" ">
						</form>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	<!--detail-->
	<!--footer-->
		<div class="footer-section">
						<div class="container">
							<div class="footer-top">
								<p> &copy; 2016 Construction. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
									</div>
							<script type="text/javascript">
						$(document).ready(function() {
							/*
							var defaults = {
					  			containerID: 'toTop', // fading element id
								containerHoverID: 'toTopHover', // fading element hover id
								scrollSpeed: 1200,
								easingType: 'linear' 
					 		};
							*/
							
							$().UItoTop({ easingType: 'easeOutQuart' });
							
						});
					</script>
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
				</div>
			</div>
        
          
<?php wp_footer(); ?>
</body>
</html>
