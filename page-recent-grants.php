<?php
/*
Template Name: Recent Grants
*/
get_header(); ?>

<h1>RECENT GRANTS</h1>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <?php the_content(); ?>
                
      <?php endwhile; ?><?php endif; ?>
      
      <div class="clear"></div>         
 <?php //Start of Loop
    $my_query = new WP_Query('category_name=recent-grants');
            while ($my_query->have_posts()) : $my_query->the_post(); $do_not_duplicate = $post->ID; ?>
            
            <div class="r-grants">
                <h2 class="short">PROFILE:  <?php the_title(); ?></h2>
                <?php the_content(); ?>
            </div>
            
                         
                <?php endwhile; ?><?php rewind_posts(); ?>
                
<?php get_sidebar('foundation'); ?>
<?php get_footer(); ?>