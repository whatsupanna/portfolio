<?php get_header(); ?>

<div class="main">
  <div class="container">

    <div class="content">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

    <h2><?php the_title(); ?></h2>
    <p><strong>Client Name: </strong><?php the_field('client_name'); ?></p>
    <p><?php the_field('short_desc'); ?></p>
    <?php //the_content(); ?>

    <div class="images">
      <?php while(has_sub_field('images')): ?>
        <?php // for every image /caption combo, this code is run ?>
        <figure>
          <?php $image = get_sub_field('image');?> 
          <img src="<?php echo $image['sizes']['square'] ?>" alt="<?php echo $image['title']; ?>">
          <figcaption><?php the_sub_field('caption'); ?></figcaption>
      </figure>
      <?php endwhile; ?>

    </div>

    <h3>This is the featured image</h3>
      <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
    



      <?php endwhile; // end of the loop. ?>

    </div> <!-- /.content -->


  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>