<?php
/**
 * The template for displaying all pages
 */
get_header(); ?>

<div class="container">
			<?php
							if ( have_posts() ) {
				    while ( have_posts() ) {
				 
				        the_post(); ?><!--h2><?php the_title(); ?></h2-->
				        <?php the_content(); ?>
				 
				    <?php }
				}
			?>
</div>


<?php get_footer();
