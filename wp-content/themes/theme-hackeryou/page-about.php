<?php

/*
	Template Name: Custom About Page
*/

get_header();  ?>

<div class="aboutWrapper">
	<h2 class="aboutpageHeading">About Me</h2>
	
	<div class="aboutpageImage">
		<?php if( get_field('aboutpage_picture') ): ?>
		<?php $image = get_field('aboutpage_picture'); ?>

		<div class="aboutpagePicture">
			<img src="<?php echo $image['sizes']['large']; ?>" />
		</div>

		<?php endif; ?>
	</div>

	<div class="aboutpageTextBox">
		<h3 class="aboutpageTitle">Whats Up Anna?</h3>
		<p class="aboutpageText">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum esse, rerum earum numquam repellat aperiam at? Fuga nam maxime voluptatem, nesciunt nostrum. Quos, cupiditate eaque laboriosam vel ipsa officiis, eos reiciendis, dolore iste et excepturi soluta nam expedita tempore inventore temporibus. Natus nihil hic minima quibusdam obcaecati laborum facere error.</p>

		<p class="aboutpageText">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum esse, rerum earum numquam repellat aperiam at? Fuga nam maxime voluptatem, nesciunt nostrum. Quos, cupiditate eaque laboriosam vel ipsa officiis, eos reiciendis, dolore iste et excepturi soluta nam expedita tempore inventore temporibus. Natus nihil hic minima quibusdam obcaecati laborum facere error.</p>
	</div>


</div>







<?php get_footer(); ?>