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
	<div class="skillsContent clearfix">
		<div class="skillsBox block">
			<h2 class="listHeader">I'm Great With:</h2>
			<ul class="skillsList list clearfix">
				<li class="keyWords">JavaScript</li>
				<li class="keyWords">jQuery</li>
				<li class="keyWords">HTML5</li>
				<li class="keyWords">CSS3</li>
				<li class="keyWords">Sass</li>
				<li class="keyWords">Jade</li>
				<li class="keyWords">Responsive Design</li>
				<li class="keyWords">APIs</li>
				<li class="keyWords">Pair Programming</li>
			</ul>
		</div>
		<div class="toolsBox block">
			<h2 class="listHeader" >My Tools:</h2>
			<ul class="toolsList list clearfix">
				<li class="keyWords">Git</li>
				<li class="keyWords">Github</li>
				<li class="keyWords">Gulp</li>
				<li class="keyWords">Sublime Text</li>
				<li class="keyWords">Chrome Dev Tools</li>
			</ul> 
		</div>
			<div class="readingBox block">
			<h2 class="listHeader" >I'm Super Interested In:</h2>
			<ul class="readingList list clearfix">
				<li class="keyWords">JavaScript!!!</li>
				<li class="keyWords">Backbonejs</li>
				<li class="keyWords">Angularjs</li>
				<li class="keyWords">CoffeeScript</li>
				<li class="keyWords">Node.js</li>
				<li class="keyWords">WebGL</li>
			
			</ul> 
		</div>
		<div class="socialBox block">
			<h2 class="listHeader" >Connect With Me:</h2>
			<ul class="socialList list clearfix">
				<a href="https://twitter.com/whatsupanna"><li class="keyWords socialWords word1"><i class="fa fa-twitter"></i></li></a>
				<a href="https://www.linkedin.com/in/whatsupanna"><li class="keyWords socialWords word2"><i class="fa fa-linkedin"></i></li></a>
				<a href="https://github.com/whatsupanna"><li class="keyWords socialWords word3"><i class="fa fa-github"></i></li></a>
				<a download href="wp-content/themes/theme-hackeryou/annamackenzieresume.pdf"><li class="keyWords socialWords word4">Resume PDF</li></a>
			</ul>
		</div>
	</div>

</div>

<div class="aboutFooter">
	<?php get_footer(); ?>
</div>