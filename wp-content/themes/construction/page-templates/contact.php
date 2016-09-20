<?php
/**
 * Template Name: Contact
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>


    


<div class="content">
		<div class="contact">
			<div class="container">
				<!--<h2>Contact Us</h2>-->
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2970.3737427404108!2d-87.6396654!3d41.8848187!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880e2cc7c3102b49%3A0xb1fdcb49d39e5a1b!2sSpa+Space!5e0!3m2!1sen!2sin!4v1439200561345" frameborder="0" style="border:0" allowfullscreen></iframe>
                    
                    
                    
                    
                    
                    
				<div class="contact-form row-shadow">
					
					<div class="col-md-9 contact-form-right">
						<h4 class="contactclass">Contact Form</h4>
						<form>
						<input type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required>
						<input class="email" type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required>
						<input type="text" value="Telephone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Telephone';}" required>
						<textarea type="text"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required>Message...</textarea>
						<input type="submit" value="Submit" >
						</form>
					</div>
                    <div class="col-md-3 contact-form-left">
						<h4>Address :</h4>
						<p>Eiusmod Tempor inc</p>
						<p>9560 St Dolore Place,</p>
						<p>Telephone : +1 800 603 6035</p>
						<p>FAX : +1 800 889 9898</p>
						<a href="mailto:example@email.com">mail@example.com</a>
					</div>
                    
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
<!--//contact-->
	</div>

<?php
//get_sidebar();
get_footer();
?>