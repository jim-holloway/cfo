<?php get_header(); ?>
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <h1><?php the_title() ;?></h1>
                <p><span>Posted on <?php the_time('F jS, Y'); ?></span></p>
                <?php the_content(); ?>
                <?php endwhile; ?><?php endif; ?>
<?php get_sidebar('right'); ?>
<?php get_footer(); ?>