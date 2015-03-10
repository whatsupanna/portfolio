<?php get_header(); ?>

<div class="main">
  <div class="container clearfix">

    <div class="content clearfix">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

    <div class="portfolioBox">
      <h2><?php the_title(); ?></h2>
      <p><strong>Client Name: </strong><?php the_field('client_name'); ?></p>

      <?php the_terms($post->ID,'technologies',' ',''); ?>
      <p><?php the_field('short_desc'); ?></p>
      <p><?php the_field('tools_used'); ?></p>
      <p><?php the_field('view_demo'); ?></p>
      <?php //the_content(); ?>

      <div class="images">
        <?php while(has_sub_field('images')): ?>
          <?php // for every image /caption combo, this code is run ?>
          <figure>
            <?php $image = get_sub_field('image');?> 
            <img src="<?php echo $image['sizes']['large'] ?>" alt="<?php echo $image['title']; ?>">
            <figcaption><?php the_sub_field('caption'); ?></figcaption>
        </figure>
        <?php endwhile; ?>  
      </div>

        
      
    </div>
    <!-- end of portfolio box -->



      <?php endwhile; // end of the loop. ?>

    </div> <!-- /.content -->


  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>