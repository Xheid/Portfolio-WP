
<?php

$arguments =  array(
	'post_type' => 'projet',
);

$projects_query = new WP_Query( $arguments ); ?>
<section class="portfolio" id="portfolio">
			<div class="container">
				<h2>Portfolio</h2>
				<h3 class="titre">My projects</h3>
				<div class="containerproject">
				<?php
					while ( $projects_query->have_posts () ) :
					$projects_query->the_post() ;
				?>
								
				<a href="">
					<div class="project">
						<div class="infoproject">
							<h3 class="title"><?php the_title() ; ?></h3>	
							<?php the_content(); ?>									
						</div>	
							<?php the_post_thumbnail('medium'); ?>										
					</div>
				</a>		
				<?php endwhile; ?>
				</div>
			</div>
</section>