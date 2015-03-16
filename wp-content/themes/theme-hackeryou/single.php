<?php get_header(); ?>

<div class="singleMain clearfix">
  <div class="container clearfix">
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
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <div class="titleBox"></div>
            <h1 class="entry-title"><?php the_title(); ?></h1>
          </div>

      

          <div class="entry-content">
            <p>
              <?php the_content(); ?>
            </p>
            <?php wp_link_pages(array(
              'before' => '<div class="page-link"> Pages: ',
              'after' => '</div>'
            )); ?>
          </div><!-- .entry-content -->

       

          <div id="nav-below" class="navigation">
            

           
          </div><!-- #nav-below -->
       </div><!-- #post-## -->

    


      <?php endwhile; // end of the loop. ?>

    </div> <!-- /.content -->
   
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>