<?php get_header('home'); ?>       
            <div id="alfa" >
                <div id="behav" class="wrapper">
                    <?php
                    $my_query = new WP_Query('post_type=quote&areas=front-page');
                    while ($my_query->have_posts()) : $my_query->the_post(); $do_not_duplicate = $post->ID; ?>
                    <blockquote class="wrapper">
                        <div id="fid"><img src="<?php the_field('logo'); ?>" /></div>
                        <?php the_content(); ?><p><strong>- <?php the_title(); ?></strong></p>
                    </blockquote>
                    <?php endwhile; ?>
                </div>
            </div>
<?php get_footer('home'); ?>