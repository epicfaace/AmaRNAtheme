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
    array_push($atoz[$firstChar], array("name" => $term->name, "description" => $term->description));
}

?>
<div class="row">
<div class="col-xs-12 col-sm-4 diseaseList">
    <?php
    foreach ($atoz as $letter=>$diseases) {
        echo "<div class=letter>{$letter}</div>";
        foreach ($diseases as $disease) {
            $name = esc_html($disease["name"]);
            $description = esc_html($disease["description"]);
            echo "<div class=disease data-description=\"$description\">$name</div>";
        }
    }
    
    ?>
</div>
<div class="col-sm-8 diseaseDescription">
    Description of this disease.
</div>
</div>
			<?php
							if ( have_posts() ) {
				    while ( have_posts() ) {
				 
				        the_post(); ?>
				        <?php the_content(); ?>
				 
				    <?php }
				}
			?>

<script>
    $(function() {
        $("div.disease").hover(function() {
            $("div.diseaseDescription").text($(this).data("description"));
        });
    })
</script>


<?php get_footer();
