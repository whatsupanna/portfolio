
<?php

/*
	Template Name: Custom Home Page
*/

get_header();  ?>
<span id="bazinga"></span>
<div class="main">


	<div class="wrapper">
	  <div class="containerBox clearfix">


	    <?php // Start the loop ?>
	    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

	      <h2><?php //the_title(); ?></h2>
	      <?php the_content(); ?>

		<div class="bio clearfix">
			<div class="contentWrap clearfix">
			


				<div class="bioContent bioContentImage">
					<?php if( get_field('picture') ): ?>
					<?php $image = get_field('picture'); ?>
					<img src="<?php echo $image['sizes']['medium']; ?>" />

					<?php endif; ?>
				</div>


					<div class="bioContent bioContentAbout"> 

					<?php if (get_field('bio') ):?>

					<p class="bioText"><?php the_field('bio'); ?>
					<a class="aboutLink" href="<?php echo home_url( '/about' ); ?>">Learn More</a>
					</p>

					
				</div>
			</div> <!-- ed .contentWrap -->

		</div>
		<!-- end of bio -->
	
		<?php endif; ?>

	
		</div>
		<section class="portfolio">
				    <?php // we are going to pull in our latest 4 blogposts ?>
				    <?php $latestPosts = new WP_Query(array(
				    	'post_type' => 'portfolio', // we only want blog posts
				    	'post' => 47,
				    	'posts_per_page' => 10
				    )); ?>

				    <?php if($latestPosts->have_posts()) while($latestPosts->have_posts()) : $latestPosts->the_post(); ?>
				    	<div class="portfolioBox clearfix">
					    	<div class="featuredPost animate">

					    		<h3 class="pieceTitle"><?php the_title(); ?></h3>
					    		<p class="description"><?php the_field('about_me'); ?></p>
					    
					    
					    		<p class="description animate box"><?php the_field('short_desc'); ?></p>
					    		<p class="description"><?php the_field('client_name'); ?></p>
					    		<p class="description"><?php the_field('long_desc'); ?></p>
					    		<p class="tools"><?php the_field('tools_used'); ?></p>
					 
					    		<a class="demo" href="http://<?php the_field('view_demo'); ?>"><h3><?php the_field('view_demo_text'); ?></h3></a>

					    		<a class="demo" href="http://<?php the_field('github_demo'); ?>"><h3><?php the_field('github_demo_text'); ?></h3></a>
					    	</div>

					    	<div class="imageHolder">
					    	<?php 
					    	$image = get_field('image');
					    	 ?>
					    		<a  href="<?php the_field('view_demo'); ?>"> <img src="<?php echo $image['url'] ?>"></a>
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