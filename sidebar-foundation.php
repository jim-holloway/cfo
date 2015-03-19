</div><!--end col-left-->
<div id="col-right">
<div id="testimonials">
    <h2 class="col-right">TESTIMONIALS</h2>
    <?php
        $my_query = new WP_Query('post_type=quote&areas=non-profit-testimonies');
        while ($my_query->have_posts()) : $my_query->the_post(); $do_not_duplicate = $post->ID; ?>
        <blockquote>
            <p class="italic"><?php the_content(); ?><span class="quote">-- <?php the_title(); ?></span></p>
        </blockquote>&nbsp;
        <?php endwhile; ?>
</div>
    <div class="clear"></div>
    <h2 class="col-right">CFOS FOUNDATION</h2>
    <p class="left" style="width: 140px;">A charitable, non-profit organization that provides time, talent, and treasure to further the well-being of Washington’s foster children.</p>
    <img src="<?php echo get_template_directory_uri(); ?>/images/sidebar-foundation.png" class="right"/>
    <div class="clear"></div>
    <h2 class="col-right">PRESS RELEASES</h2>
    <p>Read through our corporate press releases to keep up on CFO news and recent placements.</p>
    <p class="link"><a href="http://cbtest100.info/press-release/">Learn More</a></p>
</div>