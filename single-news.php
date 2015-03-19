<?php get_header(); ?>
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <h1><?php the_title() ;?></h1>
                <p><strong>Published In: </strong><?php the_field('published_in'); ?></p>
                <p><strong>Author: </strong><?php the_field('author'); ?></p><br>
                <div class="right"><?php the_post_thumbnail("page-featured-image"); ?></div>
                <?php the_content(); ?>
                <?php endwhile; ?><?php endif; ?>
<?php get_sidebar('right'); ?>
<?php get_footer(); ?>