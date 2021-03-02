
<!--home page content -->
<div class="home-div">

	<section class="intro-para animate-reveal animate-first">
		<?php 
			the_content(); 
		?>

		<!-- <! <img class="smoke-image" src="wp-content\uploads\2018\06\red-smoke5.png" width="1100"> 

		<! <button class="my-projects-button"><a href="#home-projects">VIEW MY WORK</a></button>  -->
	</section>

	<p class="down-arrow"><a href="#projects-heading"><i class="fas fa-angle-down"></i></a></p>	

</div>


<!--projects section content -->
<div id="primary" class="content-area project-page">    <!-- <h2>ISOTOPE FILTER Example For WORK ITEMS</h2>        -->
	<h2 id="projects-heading">projects</h2>


	<!-- menu for projects section -->
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

			$the_projects = new WP_Query($args);
		?>

		<?php if ( $the_projects->have_posts() ) : ?>
			<div id="item-list" class="work-section">
				<!-- <div class="bg-text">work</div> -->
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
							<div class="zoom"> <a href="<?php echo get_permalink(); ?>"> <?php the_post_thumbnail('project-size'); ?>
								<!-- <div class="cover">	</div> -->
									<h2 class="image-title"><?php the_title(); ?></h2>
									</a>
							</div>

								<!-- <span class="image-title"><span>?php the_title(); ?></span></span> -->

						
					</div> <!-- end item -->

				<?php }  ?>
			</div> <!-- end item-list -->
		<?php endif; ?>
</div>

<!-- about me section content -->
<div class="about-me">
	<h2 id="about-heading">about me</h2>
	<div class="aboutme-section">

		<?php
			// query for the about page
			$your_query = new WP_Query( 'pagename=about' );
			// "loop" through query (even though it's just one page) 
			while ( $your_query->have_posts() ) : $your_query->the_post();
				the_content();
			endwhile;
			// reset post data (important!)
			?>

			<!-- Resume file link -->
			<?php if( !empty(get_field('resume')) ): ?>
				<div class="resume-link">
					<?php echo "<p>"; ?>			
						<a href="<?php the_field('resume'); ?>" >- Download Resume -</a>
					<?php echo "</p>"; ?>
				</div>						
			<?php endif; ?>		

			<?php wp_reset_postdata();
		?>			
	</div>

</div>

<!-- contact section content -->
<div class="contact-div">

		<div class="contact-section">
			<?php
				// query for the about page
				$your_query = new WP_Query( 'pagename=contact' );
				// "loop" through query (even though it's just one page) 
				while ( $your_query->have_posts() ) : $your_query->the_post();
					the_content();
				endwhile;

				// reset post data (important!)
				wp_reset_postdata();
			?>
		</div>

			<div class="social-media">

				<ul>
					<li><a href="https://www.linkedin.com/in/shanti-chary-96446615" class="linkedin" title="LinkedIn" target="_blank"><i class="fab fa-linkedin"></i></a></li>

					<li><a href="mailto:hello@shantichary.com" title="Email"><i class="fas fa-envelope-square"></i></a></li>

					<li><a href="https://github.com/ShantiChary?tab=repositories" class="github" title="GitHub" target="_blank"> <i class="fab fa-github-square"></i></a></li>

					<li><a href="https://www.instagram.com/shantichary" class="instagram" title="Instagram" target="_blank"><i class="fab fa-instagram"></i></a></li>

				</ul>	

			</div> <!--end social-media-footer -->


</div>
