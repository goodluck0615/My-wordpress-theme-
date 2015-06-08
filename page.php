<?php
/**
 * The template for displaying all pages 
 *
 * @package WordPress
 * @subpackage Polaris
 * @since Polaris
 */

get_header(); ?>

<section class="wrapper">

	<?php
		// Start the Loop.
		while ( have_posts() ) : 
			the_post();
			// Include the page content template.
			the_content();					
		endwhile;

		
	?>
	
</section><!-- #main-content -->

<?php
get_footer();