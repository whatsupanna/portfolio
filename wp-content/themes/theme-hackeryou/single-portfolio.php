<?php get_header(); ?>

<div class="main">
  <div class="container">
      <div class="content">
        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <div class="sectionWrapper">
          <h2 class="pageTitle"><?php the_title(); ?></h2>
          <p><strong>Client Name: </strong><?php the_field('client_name'); ?></p>
          <p><?php the_field('short_desc'); ?></p>
          <?php //the_content(); ?>

          <div class="images">

            <?php while(has_sub_field('images')): ?>
              <?php // for every image /caption combo, this code is run ?>
              <figure>
                <?php $image = get_sub_field('image');
                ?> 
                

                <img src="<?php echo $image['sizes']['large'] ?>" alt="<?php echo $image['title']; ?>">
                <figcaption class="caption"><?php the_sub_field('caption'); ?></figcaption>
            </figure>
            <?php endwhile; ?>
          </div>
          <!-- end of images  -->
        
        </div>
        <!-- end of section wrapper -->



      <?php endwhile; // end of the loop. ?>

    </div> <!-- /.content -->


  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>