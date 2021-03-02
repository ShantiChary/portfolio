<!-- <div class="single-project">
	<div class="single-item" style="background: url('?php echo $backgroundImg[0]; ?>') no-repeat;">	

		<div>
			?php		
				echo "<h3>";	
				the_title();
				echo "</h3>";
				
				echo "<p>";
				the_content();
				echo "</p>";			
			?>
		</div>	
	</div>		
</div>	 -->

<!-- display Single Project info -->
<!-- ?php
	$backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' ); 
?> -->

<div class="single-project-page">
<!-- Project Banner -->
	<div class="single-project-banner">
	
		<?php 
			$field_name = "project_banner";
			$image = get_field('project_banner');
			$size = 'full'; // (thumbnail, medium, large, full or custom size)

			if(!empty($image)) {
				$field = get_field_object($field_name); ?>

				<!-- <h2>?php echo $field['label'];  ?></h2> -->

				<?php 

				if( $image ) {
					echo wp_get_attachment_image( $image, $size );
				}
			}
		?>
	</div>

	<div class="single-project-content">
			<?php		
				echo "<h3>";	
				the_title();
				echo "</h3>";
				
				echo "<p>";
				the_content();
				echo "</p>";
				echo "<br>";
				echo "<br>";															
			?>

			<!-- Site URL -->
			<?php if( !empty(get_field('site_url')) ): ?>			
				<div class="site-url">			
					<?php $url = get_field('site_url');?>
						<p>
							<?php if( $url ): ?>
								<a href="<?php echo "$url"; ?> " target="_blank">
							<?php endif; ?> 
					
							<?php echo "- Visit Site -"; ?>							
								<!-- ?php the_field('site_url') ?> 							 -->
							<?php if( $url ): ?>
								</a>
							<?php endif; ?>
						</p>				
				</div>	
			<?php endif; ?>							

			<!-- PDF file -->
			<?php if( !empty(get_field('pdf_link')) ): ?>
				<div class="pdf-link">
					<?php echo "<p>"; ?>			
						<a href="<?php the_field('pdf_link'); ?>" target="_blank">- View Design Brief -</a>
					<?php echo "</p>"; ?>
				</div>						
			<?php endif; ?>
	</div>	

</div>



