		<div class="blogBar clearfix">
			<h2 class="newsHeading">Latest News</h2>
			<div class="news">
			<?php
			$projectQuery = new WP_Query( 
				array( 
					'posts_per_page' => 3, 
 
					) 
			); ?>

			<?php if ( $projectQuery->have_posts() ) : ?>

				<?php while ($projectQuery->have_posts()) : $projectQuery->the_post(); ?>

			
						
							<div class="newsPost">
								<h3 class="blogsectionTitle">
									<a href="<?php the_permalink(); ?>">
										<?php the_title(); ?>
									</a>
								</h3>
								<div class="blogPic"><?php echo get_the_post_thumbnail( $post->ID, 'large'); ?> 
								</div>	
							</div>
						
				<?php endwhile; ?>
				
				<?php wp_reset_postdata(); ?>
				
			<?php else:  ?>
				
			<?php endif; ?>
			</div>