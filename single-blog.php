<?php get_header(); ?>
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <h1><?php the_title() ;?></h1>
                <p><span>Posted on <?php the_time('F jS, Y'); ?></span></p>
                <?php the_content(); ?>
                <ul class="blog-tax">
                   <li>Categories</li><?php wp_list_cats('sort_column=id&optioncount=0&use_desc_for_title=0&child_of=34'); ?> 
                </ul>
                <?php endwhile; ?><?php endif; ?>
<?php get_sidebar('right'); ?>
<?php get_footer(); ?>