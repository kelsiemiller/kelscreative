<?php
	$small_subheading		= get_field('small_subheading');
	$large_heading			= get_field('large_heading');
	$button_text			= get_field('button_text');
?>

<div id="contact" class="contactSection section">	
	<!-- <div class="col-md-12 text-center">
		<p class="subHeading">Like what you see?</p>
		<h2>I'd love to hear from you.</h2>
		<a href="mailTo:kelswebdesign@gmail.com" class="contactButton">GET IN TOUCH</a>
	</div> -->
	<div class="col-md-12 text-center">
		<p class="subHeading"><?php echo $small_subheading; ?></p>
		<h2><?php echo $large_heading; ?></h2>
		<a href="#contact_popup" data-fancybox class="fancybox contactButton"><?php echo $button_text; ?></a> 
		 <div style="display:none" class="fancybox-hidden">
		    <div id="contact_popup">
		        <div class="container contact-container">  
				  <form id="contactForm" action="" method="post" autocomplete="off">
				  	<?php echo do_shortcode('[contact-form-7 id="78" title="Primary Contact Form"]'); ?>
				    <!-- <h3 class="contact-heading">Hello! Let's chat.</h3>
				    <fieldset>
				      <input placeholder="Your name" class="contact-name" type="text" tabindex="1" required>
				    </fieldset>
				    <fieldset>
				      <input placeholder="Your Email Address" class="contact-email"type="email" tabindex="2" required>
				    </fieldset>					    
				    <fieldset>
				      <textarea placeholder="Type your Message Here...." class="contact-message"tabindex="5" required></textarea>
				    </fieldset>
				    <fieldset class="contact-submit">
				      <button name="submit" type="submit" class="contact-subButton" id="contact-submit" data-submit="...Sending">SUBMIT</button>
				    </fieldset> -->
				  </form>									  
				</div>
		    </div>
		 </div>
	</div>
</div>