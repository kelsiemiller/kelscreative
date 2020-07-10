<?php 
	$hero_title 			= get_field('hero_title');
	$hero_subtitle 			= get_field('hero_subtitle');
?>


<div id="slides">
	<div class="overlay"></div>
	<div class="slides-container">
	    <img src="/wp-content/themes/kelscreative/assets/img/succulent1.jpg" alt="">
	</div>
	
	<div class="titleMessage">
		<div class="heading">
			<p class="main"><?php echo $hero_title; ?></p>
			<p class="sub typed"><?php echo $hero_subtitle; ?></p>
		</div>
	</div>
	<!-- <nav class="slides-navigation">
	    <a href="#" class="next"></a>
	    <a href="#" class="prev"></a>
	</nav> -->	  
</div>