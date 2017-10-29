<?php
/**
 * Template Name: Diseases
 */

get_header(); ?>
<h1> Diseases </h1>

<?php
$atoz = array();
foreach (range('A', 'Z') as $char) {
   $atoz[$char] = [];
}
$_terms = get_terms([
    'taxonomy' => 'diseases',
    'hide_empty' => false,
] );
foreach ($_terms as $term) {
    $firstChar = $term->name[0];
    array_push($atoz[$firstChar], $term->name);
}

?>

<div class="diseaseList">
    <?php
    foreach ($atoz as $letter=>$diseases) {
        echo "<h1>{$letter}</h1>";
        foreach ($diseases as $disease) {
            echo "<div class=disease>$disease</div>";
        }
    }
    
    ?>
</div>
			<?php
							if ( have_posts() ) {
				    while ( have_posts() ) {
				 
				        the_post(); ?>
				        <?php the_content(); ?>
				 
				    <?php }
				}
			?>


<?php get_footer();
