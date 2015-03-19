<?php
/*
Template Name: Default Template Corporate 
*/?>

<?php get_header(); ?>
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <?php the_content(); ?>
                <?php endwhile; ?><?php endif; ?>
<?php get_sidebar('right'); ?>
<?php get_footer(); ?>