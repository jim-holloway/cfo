<?php get_header(); ?>

    <h1>OUR SEARCH TEAM</h1>

    <?php echo term_description( 11, 'practices' ) ?>
 
<?php

function mam_posts_orderby ($orderby) {
   global $mam_global_orderby;
   if ($mam_global_orderby) $orderby = $mam_global_orderby;
   return $orderby;
}
add_filter('posts_orderby','mam_posts_orderby');
$mam_global_orderby = "
UPPER(CONCAT(REVERSE(SUBSTRING_INDEX(REVERSE($wpdb->posts.post_title),' ',1)),$wpdb->posts.post_title))
";

    //Start of Loop
    $my_query = new WP_Query('post_type=team_member&practices=search');
            while ($my_query->have_posts()) : $my_query->the_post(); $do_not_duplicate = $post->ID; ?>

         <?php $post_id = get_the_ID(); ?>
          <div class="member-wrap">
                 <div class="member-pic">
                 	<?php the_post_thumbnail("page-featured-image"); ?>
                 	<div class="hover"><a href="#" data-reveal-id="myModal-<?php echo $post_id; ?>">
                 		<h2><?php the_title(); ?></h2>
                 		<?php the_excerpt(); ?>
                 		Read More</a>
                 	</div>
                 </div>
                <h2><a href="#" data-reveal-id="myModal-<?php echo $post_id; ?>"><?php the_title(); ?></a></h2>
         </div>
  
        <div id="myModal-<?php echo $post_id; ?>" class="reveal-modal">
             <div class="member-modal">
                <?php the_post_thumbnail("page-featured-image"); ?>
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
                <p><a href="<?php the_field('team_member_resume'); ?> "><?php the_title(); ?> Resume <img src="<?php echo get_template_directory_uri(); ?>/images/down-load.png" class="right mar-right" /></a></p><br>
                <a class="close-reveal-modal"><img src="<?php echo get_template_directory_uri(); ?>/images/close-button.png" /></a>                 
             </div>
             <a class="close-reveal-modal"><img src="<?php echo get_template_directory_uri(); ?>/images/bg-ping.png" style=" position:fixed; top: 0; left: 0; z-index: -1000;"/></a>
        </div>

    <?php endwhile; ?>

<?php get_sidebar('right'); ?>

<?php get_footer(); ?>