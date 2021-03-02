
	<div class="about-me">
		<!-- <section> -->
			<?php
			echo '<article class="about-content">';

					echo '<div class="profile-pic">';					
					the_post_thumbnail('medium');
					echo "</div>";			
					
					echo '<div class="my-bio">';
					the_content();
					echo "</div>";						
									
			echo "</article>";
			?>
		
		<div class="contact-me">
			<p>I look forward to hearing from you regarding work opportunities.</p>			
			<p>Email me: <a href="mailto:hello@shantichary.com">hello@shantichary.com</a></p>

			<!-- <div class="social-media">
				<ul>
					<li><a href="https://twitter.com/shantichary" class="twitter" title="Twitter" target="_blank"><i class="fab fa-twitter-square"></i></a></li>

					<li><a href="https://www.linkedin.com/in/shanti-chary-96446615" class="linkedin" title="LinkedIn" target="_blank"><i class="fab fa-linkedin"></i></a></li>

					<li><a href="mailto:hello@shantichary.com" class="facebook" title="Email"><i class="fas fa-envelope-square"></i></a></li>
				</ul>			

			</div> end social-media-footer	 -->
		</div>		
		<!-- </section> -->
	</div>
