<?php
/**
 * Template Name: Diseases
 */

get_header(); ?>

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
    <div class="col-12 col-sm-6">
        <h1> Diseases </h1>
    </div>
    <div class="col-12 col-sm-6 diseasesFilters">
        <div class="row">
            <div class="col-4">
                <select name="pathogen" class="form-control">
                    <option value="" selected>Pathogen:</option>
                    <option>Virus</option>
                    <option>Bacteria</option>
                    <option>Fungus</option>
                </select>
            </div>
            <div class="col-4">
                <select name="affects" class="form-control">
                    <option value="" selected>Affects:</option>
                    <option>Lungs</option>
                    <option>Heart</option>
                    <option>Stomach</option>
                </select>
            </div>
            <div class="col-4">
                <div class="input-group searchBox">
                    
                    <span class="input-group-btn">
                    <button class="btn btn-secondary" type="button">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </button>
                    </span>
                    <input type="text" class="form-control" name="Search" placeholder="Search for...">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
<div class="col-12 col-sm-4 diseaseList">
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
