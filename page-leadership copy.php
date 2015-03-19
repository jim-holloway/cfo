<?php
    /*
     * Template Name: Leadership
     */
?>
<?php get_header(); ?>
<h1>LEADERSHIP TEAM</h1>

<?php 
$args =array(
    'post_type' => 'team_member',
    'meta_key' => 'team-leader',


);
 ?>


             <?php //Start of Loop
    $my_query = new WP_Query($args);
            while ($my_query->have_posts()) : $my_query->the_post(); $do_not_duplicate = $post->ID; ?>

         <?php $post_id = get_the_ID(); ?>


<?php $post_details = get_post_meta( $post_id ); ?>

<pre><?php print_r($post_details) ?></pre>

<h1><?php the_field('team-leader'); ?></h1>

         <div class="member-pic">
            <?php the_post_thumbnail("page-featured-image"); ?>
            <div class="hover">
                <h2><?php the_title(); ?></h2>
                <?php the_excerpt(); ?>
                <a href="#" data-reveal-id="myModal-<?php echo $post_id; ?>">Read More</a>
            </div>
         </div>
  
        <div id="myModal-<?php echo $post_id; ?>" class="reveal-modal">
             <?php the_post_thumbnail("page-featured-image"); ?>
             <h1><?php the_title(); ?></h1>
             <?php the_content(); ?>
             <p><a href="<?php the_field('team_member_resume'); ?> "><?php the_title(); ?> Resume</a> &#128229;</p><br>
             <a class="close-reveal-modal">&#215;</a>
        </div>
    <?php endwhile; ?><div class="clear"></div>
            
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <?php the_content(); ?>
                <?php endwhile; ?><?php endif; ?><?php rewind_posts(); ?>
                <div class="clear"></div>
               

    
<?php get_sidebar('right'); ?>
<?php get_footer(); ?>