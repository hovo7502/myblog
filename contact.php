<?php
/*
Template name:Contact template
*/
get_header(); ?>

<div class="container clearfix">
	<?php while ( have_posts() ) : the_post(); ?>
        <h1 class="post-title"><?php the_title(); ?></h1>
        <div><?php the_content(); ?></div>	
	<?php endwhile; ?>
</div>

<?php get_footer(); ?>