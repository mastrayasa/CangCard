<!-- CONTACT -->
<section class="wrapper" id="contact">
	<div class="container">
		<div class="row row-offcanvas">
		
			<?php include "sidebar.php"; ?>
			
			<div class="col-sm-8 area-content">	
			
				<script type="text/javascript">
					var map;
					var $ = jQuery.noConflict();
					$(document).ready(function(){
						map = new GMaps({
							el: '#contact_map',
							lat: 40.693134153308094,
							lng: -73.9924619346857			});

						map.addMarker({
							lat: 40.693134153308094,
							lng: -73.9924619346857,
							title: 'info',
							infoWindow: {
								content: '<h3>Here!</h3>'
							}
						});
					}); 
				</script>
				<div id="contact_map"></div>
			
				<div class="item-content active">
				
				
				
				
				<h3 class="section-item">Contacts Form</h3>
				<p>If you have a project you would like to discuss, get in touch with us.</p>
				<p>Thank you for visiting our website. Please fill out the following form to request information about our products and services or to provide  feedback about our site.  When you are finished, click the 'Send Message' button to send us your message.</p>
				
				

				
	
	
				
				
				<!-- CONTACT FORM  -->
				<form action="send-email.php" class="form-horizontal contact-form" role="form" method="post">
					<div class="form-group">
						<div class="col-md-6">
							<label for="name-contact">Name <span class="text-danger">*</span></label>
							<input name="name" class="form-control" id="contact-name" type="text" placeholder="Your Name" required="required" />
						</div>
						<div class="col-md-6">
							<label for="email-contact">Email address <span class="text-danger">*</span></label>
							<input name="email" class="form-control" id="contact-email" type="email" placeholder="Your Email" required="required" />
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-12">
							<label for="subject-contact">Subject <span class="text-danger">*</span></label>
							<select name="subject" class="form-control" id="contact-subject">
								<option>Friendship</option>
								<option>Blogwalking</option>
								<option>Offer Cooperation</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-12">
							<label for="message-contact">Message <span class="text-danger">*</span></label>
							<textarea id="contact-message" name="message" class="form-control" rows="3" cols="51" placeholder="Your Message" required="required"></textarea>
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-12">
							<button type="submit" class="btn btn-primary">Send Message</button>
						</div>
					</div>
				</form>
			
				
			</div>
			<?php include "footer-content.php"; ?>
			</div>
			
		</div>
	</div>
</section>