<?php // If there are no posts to display, such as an empty archive page ?>

<?php if ( ! have_posts() ) : ?>

	<article id="post-0" class="post error404 not-found">
		<h1 class="entry-title">Not Found</h1>
		<section class="entry-content">
			<p>Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.</p>
			<?php get_search_form(); ?>
		</section><!-- .entry-content -->
	</article><!-- #post-0 -->

<?php endif; // end if there are no posts ?>

<?php // if there are posts, Start the Loop. ?>

<?php while ( have_posts() ) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="loopWrapper clearfix">
			<div class="loopBox">
				<div class="sideBar">
				      <h3 class="singleDate">March 15th 2015</h3>
				      <ul class="singleList">
				        <li class="singleListItems">Sass</li>
				        <li class="singleListItems">jQuery</li>
				        <li class="singleListItems">Animations</li>
				        <li class="singleListItems">JavaScript</li>
				      </ul>
				    </div>
				<div class="pageContent">
					<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

			      	 <section class="entry-content indexContent">
			      	 <p>
			      					 <?php the_excerpt(); ?>
			      					<?php wp_link_pages( array(
			      	          'before' => '<div class="page-link"> Pages:',
			      	          'after' => '</div>'
			      	        )); ?>
			      	 </p>
			      	</section><!-- .entry-content -->
			    </div>
	      	<!-- end of page content -->
	      	</div> 
	      	<!-- end of loopBox -->
      	</div> 
      	<!-- end of loop wrapper -->

			

			<footer>
				<p><?php the_tags('Tags: ', ', ', '<br>'); ?> 
      
			</footer>

		</article><!-- #post-## -->

		<?php comments_template( '', true ); ?>


<?php endwhile; // End the loop. Whew. ?>

<?php // Display navigation to next/previous pages when applicable ?>
<?php if (  $wp_query->max_num_pages > 1 ) : ?>
  <p class="directionArrowLeft"><?php next_posts_link('&laquo; Older Entries'); ?></p>
  <p class="adirectionArrowRight"><?php previous_posts_link('Newer Entries &raquo;'); ?></p>
<?php endif; ?>
