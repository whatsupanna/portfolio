<?php

/*
	Template Name: Custom About Page
*/

get_header();  ?>

<div class="aboutWrapper clearfix">
	<div class="aboutSection clearfix">
		<h2 class="aboutpageHeading">About Anna</h2>
		
		<div class="aboutpageImage">
			<?php if( get_field('aboutpage_picture') ): ?>
			<?php $image = get_field('aboutpage_picture'); ?>

			<div class="aboutpagePicture">
				<img src="<?php echo $image['sizes']['large']; ?>" />
			</div>

			<?php endif; ?>
		</div>
		<div class="aboutPageContent">

			<?php // Start the loop ?>
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

			  <h2 class="aboutpageTitle"><?php the_title(); ?></h2>
			  <?php the_content(); ?>

			<?php endwhile; // end the loop?>

		</div>
		<!-- end of aboutpage content -->
	</div>
	<!-- about Section -->
	<div class="skillsContent">
		<div class="skillsBox block">
			<h2 class="listHeader">I'm Great With:</h2>
			<ul class="skillsList list">
				<li>JavaScript</li>
				<li>jQuery</li>
				<li>HTML5</li>
				<li>CSS3</li>
				<li>Sass</li>
				<li>Responsive</li>
				<li>APis</li>
				<li>Pair Programming</li>
			</ul>
		</div>
		<div class="toolsBox block">
			<h2 class="listHeader" >My Tools:</h2>
			<ul class="toolsList list">
				<li>Git</li>
				<li>Github</li>
				<li>Gulp</li>
				<li>Sublime Text</li>
				<li>Chrome Dev Tools</li>
			</ul>
		</div>
		<div class="socialBox block">
			<h2 class="listHeader" >Follow Me:</h2>
			<ul class="socialList list">
				<li><i class="fa fa-github"></i></li>
				<li><i class="fa fa-twitter"></i></li>
				<li><i class="fa fa-linkedin"></i></li>
			</ul>
		</div>
	</div>

</div>

<div class="aboutFooter">
	<?php get_footer(); ?>
</div>