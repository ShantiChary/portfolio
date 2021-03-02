<div class="single-project-div">

	<div class="single-project-content">



		<div class="single-project-main">

				<div class="single-project-intro">

					<?php echo "<h2 class='single-project-title'>";	?>
						<span><?php the_title();?> </span>
						<?php echo "</h2>"; ?>

						<!-- Description -->
						<div class="description">
							<?php 
								$field_name = "description";
								$field = get_field_object($field_name); ?>
								
								<!-- Description content -->
								<?php if( !empty(get_field('description')) ): ?>		
									<p><?php the_field('description'); ?></p>
								<?php endif; ?>
						</div>

						<!-- Site URL -->
						<?php if( !empty(get_field('site_url')) ): ?>			
							<div class="site-url">			
								<?php $url = get_field('site_url');?>
									<p>
										<?php if( $url ): ?>
											<a href="<?php echo "$url"; ?> " target="_blank">
										<?php endif; ?> 
								
										<?php echo "Visit Site"; ?>							
											<!-- ?php the_field('site_url') ?> 	-->
										<?php if( $url ): ?>
											</a>
										<?php endif; ?>
									</p>				
							</div>	
						<?php endif; ?>

				</div>

				<div class="single-project-banner" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="200">
					
					<?php 
						$field_name = "project_banner";
						$image = get_field('project_banner');
						$size = 'large'; // (thumbnail, medium, large, full or custom size)

						if(!empty($image)) {
							$field = get_field_object($field_name); ?>

							<!-- <h2>?php echo $field['label'];  ?></h2>  -->

							<?php 

								echo wp_get_attachment_image( $image, $size );
							}
						?>
				</div>

			</div>

			<div class="single-project-rest">

				<!-- The Process Title -->
				<div class="process">
					<?php 
						$field_name = "the_process";
						$field = get_field_object($field_name); ?>
						
						<!-- The Process content -->
						<?php if( !empty(get_field('the_process')) ): ?>
							<h4><?php echo $field['label'];  ?></h4>		
							<p><?php the_field('the_process'); ?></p>
						<?php endif; ?>
				</div>

				<!-- Tools -->
				<div class="tools">
					<?php 
						$field_name = "the_tools";
						$field = get_field_object($field_name); ?>
						
						<!-- The Process content -->
						<?php if( !empty(get_field('the_tools')) ): ?>
							<h4><?php echo $field['label'];  ?></h4>		
							<p><?php the_field('the_tools'); ?></p>
						<?php endif; ?>
				</div>

				<!-- Features -->
				<div class="features">
					<?php 
						$field_name = "features";
						$field = get_field_object($field_name); ?>

						<?php if( !empty(get_field('features')) ): ?>
							<h4><?php echo $field['label'];  ?></h4>		
							<p><?php the_field('features'); ?></p>
						<?php endif; ?>
				</div>

				<!-- Fonts -->
				<div class="typography">
						<?php 
						$field_name = "fonts";
						$field = get_field_object($field_name); ?>

						<?php if( !empty(get_field('fonts')) ): ?>
							<h4><?php echo $field['label'];  ?></h4>		
							<p><?php the_field('fonts'); ?></p>
						<?php endif; ?>
				</div>

				
				<!-- The Mockup -->
				<div class="mockup">
			
					<?php 
						$field_name = "mockup";
						$image = get_field('mockup');
						$size = 'medium'; // (thumbnail, medium, large, full or custom size)

						if(!empty($image)) {
							$field = get_field_object($field_name); ?>

							<!-- <h2><?php echo $field['label'];  ?></h2> -->

							<?php 

							if( $image ) {
								echo wp_get_attachment_image( $image, $size );
							}
						}

					?>
				</div>

				<!-- The Wireframes -->
				<div class="wireframe">
					<?php if( have_rows('wireframe') ): ?>

						<?php while( have_rows('wireframe') ): the_row(); 

								$image = get_sub_field('image'); 

								$size = 'medium'; // (thumbnail, medium, large, full or custom size)
												
								if( $image ) {

									echo wp_get_attachment_image( $image, $size );

								}  

								wp_reset_postdata(); ?>

						<?php endwhile; ?>

					<?php endif; ?>
				</div>

				<!-- The Color Palette -->
				<div class="palette">
					<?php 
						$field_name = "color_palette";
						$field = get_field_object($field_name); 
						$image = get_field('color_palette');
						$size = 'large'; // (thumbnail, medium, large, full or custom size)

						if(!empty($image)) { ?>
							<h4><?php echo $field['label'];  ?></h4>

							<?php 

							if( $image ) {
								echo wp_get_attachment_image( $image, $size );
							}
						}

					?>
				</div>
			</div>
	</div>
	
</div>