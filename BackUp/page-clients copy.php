<?php
    /*
     * Template Name: Our Clients
     */
    if($_GET['get_post']) :
        $practice = $_GET['practice'];
        $industry = $_GET['industry'];
        ?>
        
        <h2 class="title">Consulting with Industry</h2>
        <?php //Start of Loop
        $my_query = new WP_Query('post_type=client&practices='.$practice.'&industries='.$industry);
                while ($my_query->have_posts()) : $my_query->the_post(); $do_not_duplicate = $post->ID; ?>
    
                <div class="client-logo-area">
                     <div class="client-logo">
                        <?php the_post_thumbnail("page-featured-image"); ?>
                     </div>  
                </div>
    
        <?php endwhile; ?><?php rewind_posts(); ?> <div class="clear"></div>
        
        <?
    else :
     
     get_header(); ?>
                
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <?php the_content(); ?>
                      
                <?php endwhile; ?><?php endif; ?><?php rewind_posts(); ?>
                <div class="clear"></div>
                <div id="team-nav" class="wrapper">
                    <ul>
                        <li><a href="#search">Search</a></li>
                        <li><a href="#consulting">Consulting</a></li>
                        <li><a href="#nonprofit">Nonprofit</a></li>
                        <li><a href="#all">All</a></li>
                    </ul>
            </div><!--end footer-nav-->
                                <h2 class="title">Search</h2> 
                                <?php //Start of Loop
                                    $my_query = new WP_Query('post_type=client&practices=search');
                                            while ($my_query->have_posts()) : $my_query->the_post(); $do_not_duplicate = $post->ID; ?>
                                
                                            <div class="client-logo-area">
                                                 <div class="client-logo">
                                                    <?php the_post_thumbnail("page-featured-image"); ?>
                                                 </div>  
                                            </div>

                                <?php endwhile; ?><?php rewind_posts(); ?> <div class="clear"></div>



                                <h2 class="title">Consulting</h2>
                                <?php //Start of Loop
                                $my_query = new WP_Query('post_type=client&practices=consulting');
                                        while ($my_query->have_posts()) : $my_query->the_post(); $do_not_duplicate = $post->ID; ?>
                            
                                        <div class="client-logo-area">
                                             <div class="client-logo">
                                                <?php the_post_thumbnail("page-featured-image"); ?>
                                             </div>  
                                        </div>
                            
                                <?php endwhile; ?><?php rewind_posts(); ?> <div class="clear"></div>
                                
                                
                                
                                
                                
                                
                                <h2 class="title">Consulting with Industry</h2>
                                <?php //Start of Loop
                                $my_query = new WP_Query('post_type=client&practices=consulting&industries=technology');
                                        while ($my_query->have_posts()) : $my_query->the_post(); $do_not_duplicate = $post->ID; ?>
                            
                                        <div class="client-logo-area">
                                             <div class="client-logo">
                                                <?php the_post_thumbnail("page-featured-image"); ?>
                                             </div>  
                                        </div>
                            
                                <?php endwhile; ?><?php rewind_posts(); ?> <div class="clear"></div>







                                <h2 class="title">Nonprofit</h2>
                                <?php //Start of Loop
                                    $my_query = new WP_Query('post_type=client&practices=non-profit');
                                            while ($my_query->have_posts()) : $my_query->the_post(); $do_not_duplicate = $post->ID; ?>
                                
                                            <div class="client-logo-area">
                                                 <div class="client-logo">
                                                    <?php the_post_thumbnail("page-featured-image"); ?>
                                                 </div>  
                                            </div>
                                
                                    <?php endwhile; ?><?php rewind_posts(); ?> <div class="clear"></div>

                                <h2 class="title">All</h2>
                                <?php //Start of Loop
                                    $my_query = new WP_Query('post_type=client');
                                            while ($my_query->have_posts()) : $my_query->the_post(); $do_not_duplicate = $post->ID; ?>
                                
                                            <div class="client-logo-area">
                                                 <div class="client-logo">
                                                    <?php the_post_thumbnail("page-featured-image"); ?>
                                                 </div>  
                                            </div>
                                
                                    <?php endwhile; ?><?php rewind_posts(); ?>

    <div class="clear"></div>
             
<?php get_sidebar('right'); ?>
<?php get_footer(); 
endif;
?>