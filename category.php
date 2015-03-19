<?php get_header(); ?>
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <div class="blog">
                
                <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                <p><span>Posted on <?php the_time('F jS, Y'); ?></span></p>
                
                <?php the_content('Continue Reading'); ?>
                <ul class="blog-tax">
                   <li>Categories</li><?php wp_list_cats('sort_column=id&optioncount=0&use_desc_for_title=0&child_of=34'); ?> 
                </ul>
                
            </div>  
            <div class="r-grants">
                &nbsp;
            </div>              
                <?php endwhile; ?><?php endif; ?>
<?php get_sidebar('right'); ?>
<?php get_footer(); ?>