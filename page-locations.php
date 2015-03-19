<?php
    /*
     * Template Name: Locations
     */
?>
<?php get_header(); ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; ?><?php endif; ?>
    <?php rewind_posts(); ?>
   
    <?php
    $my_query = new WP_Query('post_type=location');
            while ($my_query->have_posts()) : $my_query->the_post(); $do_not_duplicate = $post->ID; ?>

            <div class="locations-wrapper"> 
            <div class="locations-img">
                <a href="<?php the_permalink();?>"><?php the_post_thumbnail("page-featured-image"); ?></a> 
            </div>

            <div class="location-details">

                <?php $location_data = get_field('location_set');  ?>
                <?php $location_name = $location_data->name ?>
                
                <h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
                <?php the_content(); ?>
                <?php $post_object = get_field('team_leader_set');
                if( $post_object ): $post = $post_object;setup_postdata( $post ); ?>
                    <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                    <img src="<?php echo $url; ?>" class="left" />          
                    <p><strong><?php echo $location_name; ?> Team Leader</strong><br /><?php the_title(); ?> - <a href="tel:<?php the_field('phone'); ?>"><?php the_field('phone'); ?></a><br /><a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a></p>
                <?php wp_reset_postdata(); endif; ?>       
            </div> 

     </div><!--end locations-wrapper--> 
    <?php endwhile; ?>
<div class="clear"></div>
<?php get_sidebar('right'); ?>

<?php get_footer(); ?> 
