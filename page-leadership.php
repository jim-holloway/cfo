<?php
    /*
     * Template Name: Leadership
     */
?>
<?php get_header(); ?>
<h1>LEADERSHIP TEAM</h1>

<?php
$args =array(
    'orderby' =>'date',
    'order' =>'DESC',
    'post_type' => 'team_member',
    'meta_query' => array(
        array('key' => 'team-leader', 'value' => 'YES','compare' => 'LIKE')
    )
);
 ?>

<?php //Start of Loop
    $my_query = new WP_Query($args);
    while ($my_query->have_posts()) : $my_query->the_post(); $do_not_duplicate = $post->ID; ?>

    <div class="leadership-wrap">
        <div class="member-pic">
            <?php the_post_thumbnail("page-featured-image"); ?>
        </div>
        <div class="leadership-name"><?php the_title(); ?></div>
        <div class="leadership-contact-info">
            <div class="leadership-phone"><?php the_field('phone'); ?></div>
            <div class="leadership-email"><a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a></div>
        </div>
        <div class="leadership-bio"><?php the_field('leadership_bio'); ?></div>
        <div class="clear"></div>
    </div>
  
    <?php endwhile; ?><div class="clear"></div>
            
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; ?><?php endif; ?><?php rewind_posts(); ?>
    <div class="clear"></div>


<?php get_sidebar('right'); ?>
<?php get_footer(); ?>