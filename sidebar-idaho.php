            </div><!--end col-left-->
            <div id="col-right">
                <?php 
$args =array(
    'post_type' => 'team_member','team_locations'=>'idaho',
    'meta_query' => array( 
        array(
            'key' => 'team-leader', 
            'value' => '"YES"',
            'compare' => 'LIKE'
        )
    )
);
 ?>

    <?php //Start of Loop
    $my_query = new WP_Query($args);
            while ($my_query->have_posts()) : $my_query->the_post(); $do_not_duplicate = $post->ID; ?>
        <div id="team-leader">
         <?php $post_id = get_the_ID(); ?>

                 <div class="leader-pic ">
                    <?php the_post_thumbnail("page-featured-image"); ?>
                    <div class="hover"><a href="#" data-reveal-id="myModal-<?php echo $post_id; ?>">
                        <h2><?php the_title(); ?></h2>
                        <?php the_excerpt(); ?>
                        Read More</a>
                    </div>
                 </div>
          
                <div id="myModal-<?php echo $post_id; ?>" class="reveal-modal">
                     <?php the_post_thumbnail("page-featured-image"); ?>
                     <h1><?php the_title(); ?></h1>
                     <?php the_content(); ?>
                     <p><a href="<?php the_field('team_member_resume'); ?> "><?php the_title(); ?> Resume <img src="<?php echo get_template_directory_uri(); ?>/images/down-load.png" class="mar-right" /></a></p><br>
                     <a class="close-reveal-modal"><img src="<?php echo get_template_directory_uri(); ?>/images/close-button.png" /></a>
                     <a class="close-reveal-modal"><img src="<?php echo get_template_directory_uri(); ?>/images/bg-ping.png" style=" position:fixed; top: 0; left: 0; z-index: -1000;"/></a>
                </div><div class="clear"></div>
                <h2 class="center col-right-leader"><?php the_title(); ?></h2>
                <h2 class="center col-right-leader">IDAHO TEAM LEADER</h2>
                    <p class="center">
                        <strong>Phone: </strong> <a href="tel:<?php the_field('phone'); ?>"><?php the_field('phone'); ?></a><br>
                        <strong>Email: </strong><a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a><br>
                    </p>  
        </div>   
    <?php endwhile; ?>
                 <div class="clear"></div>   
            <div id="testimonials">
                <h2 class="col-right">TESTIMONIALS</h2>
                <?php
                    $my_query = new WP_Query('post_type=quote&areas=testimonies');
                    while ($my_query->have_posts()) : $my_query->the_post(); $do_not_duplicate = $post->ID; ?>
                    <blockquote>
                        <p class="italic"><?php the_content(); ?><span class="quote">-- <?php the_title(); ?></span></p>
                    </blockquote>&nbsp;
                    <?php endwhile; ?>
            </div>
                <div class="clear"></div>
                <h2 class="col-right">CFOS FOUNDATION</h2>
                <p class="left" style="width: 160px;">A charitable, non-profit organization that provides time, talent, and treasure to further the well-being of Washington’s foster children.</p>
                <img src="<?php echo get_template_directory_uri(); ?>/images/sidebar-foundation.png" class="right"/>
                <p class="link"><a href="http://cbtest100.info/foundation/">Learn More</a></p>
                <div class="clear"></div>
                <h2 class="col-right">PRESS RELEASES</h2>
                <p>Read through our corporate press releases to keep up on CFO news and recent placements.</p>
                <p class="link"><a href="http://cbtest100.info/press-release/">Learn More</a></p>
            </div>