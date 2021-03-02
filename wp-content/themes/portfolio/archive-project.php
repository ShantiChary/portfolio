<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Portfolio
 */

get_header();
?>

<!-- All Projects Section -->
<div id="primary" class="content-area project-page">

    <!-- <h2>ISOTOPE FILTER Example For WORK ITEMS</h2>        -->
<div class="term-filters">
	<ul id="filters">
		<li><a href="javascript:void(0)" data-filter="*" class="selected">All</a></li>
		<?php 
			$terms = get_terms('project-category');
			$count = count($terms); //How many are they?
			if ( $count > 0 ){  //If there are more than 0 terms
				foreach ( $terms as $term ) {  //for each term:
					echo "<li><a href='javascript:void(0)' data-filter='.".$term->slug."'>" . $term->name . "</a></li>\n";
				}
			} 
		?>
	</ul>
</div>
	
	<?php 
		$args = array(
			'post_type'=> 'project',
			'posts_per_page' => -1,
			'order' => 'ASC',
			'orderby' => 'title'			
		);

		$the_projects = new WP_Query($args);?>

	<?php if ( $the_projects->have_posts() ) : ?>
		<div id="item-list" class="div-projects">
		<?php while ( $the_projects->have_posts() ) {
				$the_projects->the_post(); 

					$termList = get_the_terms( $post->ID, 'project-category' );  //Get the assigned terms for a particular item
					$termName = ""; //initialize the string that will contain the terms

					if ( $termList && ! is_wp_error( $termList ) ) {
						foreach ( $termList as $term ) { // for each term 
							$termName .= $term->slug.' '; //create a string that has all the slugs 
						}
					}
		?> 
				<div class="<?php echo $termName; ?> item"> <?php // 'item' is used as an identifier ?>
					<!-- <h2><?php the_title(); ?></h2> -->
						<a href="<?php echo get_permalink(); ?>"> <?php the_post_thumbnail('project-size'); ?> 
							<span class="image-title"><span><?php the_title(); ?></span></span>					
						</a>
				</div> <!-- end item -->
		<?php }  ?>
		</div> <!-- end item-list -->
	<?php endif; ?>
<?php
get_footer();
