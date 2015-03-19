<?php get_header(); ?>
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <h1><?php the_title() ?></h1>  
                <?php the_content(); ?>
                <a href="<?php the_field('team_member_resume'); ?> ">RESUME</a>
                <?php endwhile; ?><?php endif; ?>
<?php get_sidebar('right'); ?>
<?php get_footer(); ?>