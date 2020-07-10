<?php
	$about_image 			= get_field('about_image');
	$intro_name				= get_field('intro_name');
	$paragraph_1			= get_field('paragraph_1');
	$paragraph_2			= get_field('paragraph_2');
	$paragraph_3			= get_field('paragraph_3');
?>

<div id="about" class="aboutSection section">
	<div class="container">
		<div class="row">
			<div class="col-lg-5 col-md-12">
				<img class="aboutImage" src="<?php echo $about_image; ?>">
			</div>
			<div class="col-lg-7 col-md-12">
				<h4 class="intro-name"><?php echo $intro_name; ?></h4>
				<p><?php echo $paragraph_1; ?></p>
				<p><?php echo $paragraph_2; ?></p>
				<p><?php echo $paragraph_3; ?></p>
			</div>
		</div>
	</div>
</div>