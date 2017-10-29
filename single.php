<?php
/**
 * The template for displaying all pages
 */
$bodyClass = "post";
get_header(); ?>

<div class="container">

<div class="postDiv">
    
<div class="row">
<div class="col col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1">
			<?php
							if ( have_posts() ) {
				    while ( have_posts() ) {
				 
				        the_post(); ?><h2><?php the_title(); ?></h2>
				        <?php the_content(); ?>
				 
				    <?php }
				}
			?>
    </div>
    </div>
</div>
    
</div>


<?php get_footer();
