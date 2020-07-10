<?php
/**
 	Template Name: Home Page
  	@package kels_creative
 */

get_header();

?>

	<div class="loader">
		<div class="inner"></div>
	</div>


	<?php get_template_part('template-parts/content', 'slides'); ?>
	<?php get_template_part('template-parts/content', 'about'); ?>
	<?php get_template_part('template-parts/content', 'skills'); ?>
	<?php get_template_part('template-parts/content', 'stats'); ?>
	<?php get_template_part('template-parts/content', 'contact'); ?>
	<?php get_template_part('template-parts/content', 'portfolio'); ?>


<?php get_footer(); ?>

<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>