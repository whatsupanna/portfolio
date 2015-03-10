<?php

/*
	Template Name: Custom Home Page
*/

get_header();  ?>

<div class="main">
  <div class="container clearfix">

    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <h2><?php //the_title(); ?></h2>
      <?php the_content(); ?>

    <?php endwhile; // end the loop?>

    <?php // we are going to pull in our latest 4 blogposts ?>
    <?php $latestPosts = new WP_Query(array(
    	'post_type' => 'portfolio', // we only want blog posts
    	'post' => 47,
    	'posts_per_page' => 4
    )); ?>

    <?php if($latestPosts->have_posts()) while($latestPosts->have_posts()) : $latestPosts->the_post(); ?>
    	<div class="portfolioBox clearfix">
	    	<div class="featuredPost">
	    		<h2><?php the_title(); ?></h2>
	    		<?php the_excerpt(); ?>
	    		<p><?php the_field('short_desc'); ?></p>
	    		<p><?php the_field('tools_used'); ?></p>
	 
	    		<a href="<?php the_field('view_demo'); ?>"><h3><?php the_field('view_demo_text'); ?></h3></a>
	    	</div>

	    	<div class="imageHolder">
	    	<?php 
	    	$image = get_field('image');
	    	 ?>
	    		<a href="<?php the_permalink(); ?>"> <img src="<?php echo $image['url'] ?>"></a>
	    	</div>
    	</div>
    	<!-- end of portfolio box -->

    <?php endwhile // end custom loop?>

    <!-- dont forget the reset -->
    <?php wp_reset_postdata(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>