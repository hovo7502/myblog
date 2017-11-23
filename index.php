<?php get_header(); ?>
   
<div class="container clearfix">
	<?php while ( have_posts() ) : the_post() ?>
        <h1 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
        <div><?php the_content(); ?></div>
    <?php endwhile; ?>
</div>

<?php get_footer(); ?>