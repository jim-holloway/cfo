<?php
/*
Template Name: Awards
*/


get_header(); ?>

<h1>AWARDS</h1>
 <?php //Start of Loop
    $my_query = new WP_Query('post_type=awards');
            while ($my_query->have_posts()) : $my_query->the_post(); $do_not_duplicate = $post->ID; ?>
            
            <div class="awards-wrapper row">
                    <div class="awards-img left row">
                        <?php the_post_thumbnail("page-featured-image"); ?>
                    </div>
                    <div class="location-details row">
                        <h2><?php the_title(); ?></h2>
                        <?php the_content(); ?>
                        <em class="award-year"><?php the_field('award_year'); ?></em>
                    </div>      
                </div><!--end locations-wrapper--> 
            
                         
                <?php endwhile; ?><?php rewind_posts(); ?>
                
<?php get_sidebar('right'); ?>
<?php get_footer(); ?>