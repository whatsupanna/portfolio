<?php

/*
	Template Name: Custom Home Page
*/

get_header();  ?>

<div class="main">
	<div class="wrapper">
	  <div class="container clearfix">

	    <?php // Start the loop ?>
	    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

	      <h2><?php //the_title(); ?></h2>
	      <?php the_content(); ?>

		<section class="bio">
			<figure>
				
				<?php if( get_field('picture') ): ?>

					<img src="<?php the_field('picture'); ?>" />

				<?php endif; ?>
			</figure>
			<?php if (get_field('bio') ):?>
			<p><?php the_field('bio'); ?></p>
		<?php endif; ?>

		</section>

		<section class="blog">
			<ul class="news">
			<?php
			$projectQuery = new WP_Query( 
				array( 
					'posts_per_page' => 3, 
 
					) 
			); ?>

			<?php if ( $projectQuery->have_posts() ) : ?>

				<?php while ($projectQuery->have_posts()) : $projectQuery->the_post(); ?>

					<?php echo get_the_post_thumbnail( $post->ID); ?> 
						
							<li>
								<h3>
									<a href="<?php the_permalink(); ?>">
										<?php the_title(); ?>
									</a>
								</h3>
								<p><?php the_excerpt(); ?></p>
							</li>
						
				<?php endwhile; ?>
				
				<?php wp_reset_postdata(); ?>
				
			<?php else:  ?>
				
			<?php endif; ?>
			</ul>
		</section>
		<section class="portfolio">
				    <?php // we are going to pull in our latest 4 blogposts ?>
				    <?php $latestPosts = new WP_Query(array(
				    	'post_type' => 'portfolio', // we only want blog posts
				    	'post' => 47,
				    	'posts_per_page' => 10
				    )); ?>

				    <?php if($latestPosts->have_posts()) while($latestPosts->have_posts()) : $latestPosts->the_post(); ?>
				    	<div class="portfolioBox clearfix">
					    	<div class="featuredPost">

					    		<h2 class="pieceTitle"><?php the_title(); ?></h2>
					    		<p class="description"><?php the_field('about_me'); ?></p>
					    
					    
					    		<p class="description animate box"><?php the_field('short_desc'); ?></p>
					    		<p class="description"><?php the_field('client_name'); ?></p>
					    		<p class="description"><?php the_field('long_desc'); ?></p>
					    		<p class="tools"><?php the_field('tools_used'); ?></p>
					 
					    		<a class="demo" href="http://<?php the_field('view_demo'); ?>"><h3><?php the_field('view_demo_text'); ?></h3></a>
					    	</div>

					    	<div class="imageHolder">
					    	<?php 
					    	$image = get_field('image');
					    	 ?>
					    		<a  href="http://<?php the_field('view_demo'); ?>"> <img src="<?php echo $image['url'] ?>"></a>
					    	</div>
				  		</div>
				    	<!-- end of portfolio box -->

			    <?php endwhile // end custom loop?>

		</section>
	    <?php endwhile; // end the loop?>

	    
   </div> 
    <!-- end of wrapper -->

    <!-- dont forget the reset -->
    <?php wp_reset_postdata(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>