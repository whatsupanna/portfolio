<?php

/*
	Template Name: Custom About Page
*/

get_header();  ?>

<div class="wrapper">
	<h2>About Me</h2>
	
	<div class="aboutpageImage">
		<?php if( get_field('aboutpage_picture') ): ?>

		<img src="<?php the_field('aboutpage_picture'); ?>" />

		<?php endif; ?>
	</div>


	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum esse, rerum earum numquam repellat aperiam at? Fuga nam maxime voluptatem, nesciunt nostrum. Quos, cupiditate eaque laboriosam vel ipsa officiis, eos reiciendis, dolore iste et excepturi soluta nam expedita tempore inventore temporibus. Natus nihil hic minima quibusdam obcaecati laborum facere error.</p>


</div>







<?php get_footer(); ?>