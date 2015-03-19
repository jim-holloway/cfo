<?php get_header('location'); ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <?php $location_data = get_field('location_set');  ?>
    <?php $location_slug = $location_data->slug ?>
    <?php $location_name = $location_data->name ?>

	<address>
	<h2>Contact Information:</h2>
		<?php if( get_field( "address-1" ) ):?>
			<div class="addr"><strong>Address:</strong><br>
			<?php the_field('address-1'); ?><br>
			<?php the_field('address-2'); ?><br>
			</div>
		<?php endif; ?>
		<?php if( get_field( "phone" ) ):?>
		    <div class="phone"><strong>Phone: </strong> <br> <a href="tel:<?php the_field('phone'); ?>"><?php the_field('phone'); ?></a><br></div>
		<?php endif; ?>
		<?php if( get_field( "email" ) ):?>	    
		    <div class="email"><strong>Email: </strong> <br> <a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a><br></div>
		<?php endif; ?>    
	</address><br>  
	<?php endwhile; endif; ?><?php rewind_posts(); ?>

	<div class="clear"></div>  


	<?php $post_object = get_field('team_leader_set');
	if( $post_object ): $post = $post_object;setup_postdata( $post ); ?>

	    <div class="team-leader-m">
		 	<?php $post_id = get_the_ID(); ?>
			<?php $team_leader_id = $post->ID;?>
		    <div class="member-wrap">
		         <div class="leader-pic-m ">
		            <?php the_post_thumbnail("page-featured-image"); ?>
		            <div class="hover"><a href="#" data-reveal-id="myModal-<?php echo $post_id; ?>">
		                <h2><?php the_title(); ?></h2>
		                <?php the_excerpt(); ?>
		                <span class="read-more">Read More</span></a>
		            </div>
		         </div>
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
		    <div class="clear"></div>
		         
		    <p class="center">
		        <strong><?php the_title(); ?></strong><br>
		        <strong>Phone: </strong> <a href="tel:<?php the_field('phone'); ?>"><?php the_field('phone'); ?></a><br>
		        <strong>Email: </strong><a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a><br>
		    </p>  
	   	</div> 
	<?php wp_reset_postdata(); endif; ?>
                   
	<div class="clear"></div>



<h2 class="team-location-title"><?php echo $location_name; ?> TEAM MEMBERS</h2>
<?php //Start of Loop

function mam_posts_orderby ($orderby) {
   global $mam_global_orderby;
   if ($mam_global_orderby) $orderby = $mam_global_orderby;
   return $orderby;
}
add_filter('posts_orderby','mam_posts_orderby');
$mam_global_orderby = "
UPPER(CONCAT(REVERSE(SUBSTRING_INDEX(REVERSE($wpdb->posts.post_title),' ',1)),$wpdb->posts.post_title))
";

    $my_query = new WP_Query("post_type=team_member&team_locations=$location_slug");
            while ($my_query->have_posts()) : $my_query->the_post(); $do_not_duplicate = $post->ID; ?>
		
         <?php $post_id = get_the_ID(); ?>
		
		<?php if ($team_leader_id != $post_id):?>

        <div class="member-wrap">
             <div class="member-pic">
                <?php the_post_thumbnail("page-featured-image"); ?>
                <div class="hover"><a href="#" data-reveal-id="myModal-<?php echo $post_id; ?>">
                    <h2><?php the_title(); ?></h2>
                    <?php the_excerpt(); ?>
                    <span class="read-more">Read More</span></a>
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

		<?php endif; ?>
    <?php endwhile; ?>
</div><!--end col-left-->

<?php get_sidebar('location'); ?>

<?php get_footer(); ?>