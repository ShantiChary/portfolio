
<!--home page content -->

<!-- Intro section -->
<div class="home-intro">
	
	<div class="intro-para">
	
		<?php 
			the_content(); 
		?>

		<div class="button-01-cyan-position">
			<div class="button-01-cyan">
				<button class="button-01">VIEW PORTFOLIO</button>
				<p class="down-arrow-01"></p>
			</div>
		</div>
	</div>

	<div class="intro-image">

	</div>

</div>

<!--projects section content -->
<h6 id="ppage-tag" class="page-tag">2</h6>
<div id="primary" class="content-area project-page ">    <!-- <h2>ISOTOPE FILTER Example For WORK ITEMS</h2>        -->

	<p class="projects-intro" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="200">Projects I have worked on as course and client work.</p>

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
				
				<div class= "center">
					<div class="<?php echo $termName; ?> item"> <?php // 'item' is used as an identifier ?>
							<div class="item-image" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="200"> <a href="<?php echo get_permalink(); ?>"> <?php the_post_thumbnail('project-size');?>
								<!-- <div class="cover">	</div> -->

									</a>
									</div>

									<div class="project-details" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="200">
										<!-- <div> <h2 class="image-title">?php the_title(); ?></h2> </div> -->

										<div class="image-content"><?php the_content(); ?></div>

										<div class="button-class-explore">
											<button class="explore-link"> <span>
												<a href="<?php echo get_permalink(); ?>">
													<!-- ?php echo "<p>"; ?>			 -->
													Explore
													<!-- php echo "</p>"; ?> -->
												</a></span>
											</button>	
										</div>
									
									</div>

								<!-- <span class="image-title"><span>?php the_title(); ?></span></span> -->

						
					</div> <!-- end item -->
				</div>

				<?php }  ?>

			</div> <!-- end item-list -->
		<?php endif; ?>

</div>

<!-- about me section content -->
<div class="about-div">
	<h6 id="apage-tag" class="page-tag">3</h6>

	<div class="button-02-cyan-position">
		<div class="button-02-cyan">
			<button class="button-02">WHO AM I</button>
			<div class="down-arrow-02"></div>
		</div>	
	</div>		

	<div class="about-section" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="200">

	<h2 id="about-heading-h2">Hello.</h2>
		<h3 id="about-heading-h3">A little about me.</h3>

		<!-- <img src="https://shantichary.com/wp-content/themes/portfolio/images/me.png" class="about-image"   
		alt="my-photo";/> -->

		<?php
			// query for the about page
			$your_query = new WP_Query( 'pagename=about' );
			// "loop" through query (even though it's just one page) 
			while ( $your_query->have_posts() ) : $your_query->the_post(); ?>

			<div>
				<?php
					the_content();
				?>
			</div>

			<?php endwhile;
			// reset post data (important!)
			?>

					<!-- Resume file link -->
					<?php if( !empty(get_field('resume')) ): ?>
						<div class="button-class">
							<button class="resume-link zoom"> <span>
								<a href="<?php the_field('resume'); ?>">
									<!-- ?php echo "<p>"; ?>			 -->
										View My Resume
									<!-- php echo "</p>"; ?> -->
								</a></span>
							</button>	
						</div>
	
					<?php endif; ?>	

					<?php wp_reset_postdata();
				?>		
	</div>

</div>

<!-- contact section content -->
<div class="contact-div">
	<h6 id="cpage-tag" class="page-tag">4</h6>

	<div class="button-03-cyan-position">
		<div class="button-03-cyan">
			<button class="button-03">GET IN TOUCH</button>
			<div class="down-arrow-03"></div>
		</div>
	</div>			

	<div class="contact-container" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="200">

		<!-- <h2 id="contact-heading" class="side-tab">Contact</h2> -->

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

		<div class="contact-email">

			<h2>DROP ME A LINE</h2>

			<p>I excel at trouble-shooting and am looking for remote WordPress Technical Support opportunities.</p></br>
			<p>If you have a suitable opportunity for me, please email me:</p>

			<li class="zoom"><a href="mailto:hello@shantichary.com" class="email" title="Click to email" target="_blank"><i class="far fa-envelope"></i></a></li>

		</div>

	</div>

	<div class="social-media" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="100">

		<h4>My Professional and Social Media links</h4>

		<ul >

			<li class="zoom"><a href="https://github.com/ShantiChary?tab=repositories" class="github" title="GitHub" target="_blank"> <i class="fab fa-github"></i></a></li>

			<li class="zoom"><a href="https://www.linkedin.com/in/shanti-chary-96446615" class="linkedin" title="LinkedIn" target="_blank"><i class="fab fa-linkedin"></i></a></li>

			<li class="zoom"><a href="https://www.instagram.com/shantichary" class="instagram" title="Instagram" target="_blank"><i class="fab fa-instagram"></i></a></li>

		</ul>	
	</div>

</div> <!-- end contact-div -->

