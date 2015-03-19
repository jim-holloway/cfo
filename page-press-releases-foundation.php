<?php
/*
Template Name: Foundation Press Releases
*/


get_header(); ?>


<h1>PRESS RELEASES</h1>
<?php if(query_posts('category_name=foundation-press-release&year=2014')):?><h2>2014</h2><?php endif; ?>
<?php if(query_posts('category_name=foundation-press-release&year=2014')):  while (have_posts()):  the_post(); ?>
        <ul>
            <li><?php the_date(); ?> - <span><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span></li>
        </ul>              
                <?php endwhile; ?><?php endif; ?><?php rewind_posts(); ?>

<?php if(query_posts('category_name=foundation-press-release&year=2013')):?><h2>2013</h2><?php endif; ?>
<?php if(query_posts('category_name=foundation-press-release&year=2013')):  while (have_posts()):  the_post(); ?>
        <ul>
            <li><?php the_date(); ?> - <span><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span></li>
        </ul>              
                <?php endwhile; ?><?php endif; ?><?php rewind_posts(); ?>

<?php if(query_posts('category_name=foundation-press-release&year=2012')):?><h2>2012</h2><?php endif; ?>            
<?php if(query_posts('category_name=foundation-press-release&year=2012')):  while (have_posts()):  the_post(); ?>
        <ul>
            <li><?php the_date(); ?> - <span><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span></li>
        </ul>              
                <?php endwhile; ?><?php endif; ?><?php rewind_posts(); ?>

<?php if(query_posts('category_name=foundation-press-release&year=2011')):?><h2>2011</h2><?php endif; ?>                     
<?php if(query_posts('category_name=foundation-press-release&year=2011')):  while (have_posts()):  the_post(); ?>
        <ul>
            <li><?php the_date(); ?> - <span><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span></li>
        </ul>              
                <?php endwhile; ?><?php endif; ?><?php rewind_posts(); ?>  

<?php if(query_posts('category_name=foundation-press-release&year=2010')):?><h2>2010</h2><?php endif; ?>                     
<?php if(query_posts('category_name=foundation-press-release&year=2010')):  while (have_posts()):  the_post(); ?>
        <ul>
            <li><?php the_date(); ?> - <span><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span></li>
        </ul>              
                <?php endwhile; ?><?php endif; ?><?php rewind_posts(); ?>               
                
<?php if(query_posts('category_name=foundation-press-release&year=2009')):?><h2>2009</h2><?php endif; ?>                   
<?php if(query_posts('category_name=foundation-press-release&year=2009')):  while (have_posts()):  the_post(); ?>
        <ul>
            <li><?php the_date(); ?> - <span><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span></li>
        </ul>              
                <?php endwhile; ?><?php endif; ?><?php rewind_posts(); ?>                
                
<?php if(query_posts('category_name=foundation-press-release&year=2008')):?><h2>2008</h2><?php endif; ?>                    
<?php if(query_posts('category_name=foundation-press-release&year=2008')):  while (have_posts()):  the_post(); ?>
        <ul>
            <li><?php the_date(); ?> - <span><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span></li>
        </ul>              
                <?php endwhile; ?><?php endif; ?><?php rewind_posts(); ?>                
                
<?php if(query_posts('category_name=foundation-press-release&year=2007')):?><h2>2007</h2><?php endif; ?>      
<?php if(query_posts('category_name=foundation-press-release&year=2007')):  while (have_posts()):  the_post(); ?>
        <ul>
            <li><?php the_date(); ?> - <span><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span></li>
        </ul>              
                <?php endwhile; ?><?php endif; ?><?php rewind_posts(); ?>

<?php if(query_posts('category_name=foundation-press-release&year=2006')):?><h2>2006</h2><?php endif; ?>      
<?php if(query_posts('category_name=foundation-press-release&year=2006')):  while (have_posts()):  the_post(); ?>
        <ul>
            <li><?php the_date(); ?> - <span><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span></li>
        </ul>              
                <?php endwhile; ?><?php endif; ?><?php rewind_posts(); ?>

<?php if(query_posts('category_name=foundation-press-release&year=2005')):?><h2>2005</h2><?php endif; ?>      
<?php if(query_posts('category_name=foundation-press-release&year=2005')):  while (have_posts()):  the_post(); ?>
        <ul>
            <li><?php the_date(); ?> - <span><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span></li>
        </ul>              
                <?php endwhile; ?><?php endif; ?><?php rewind_posts(); ?>
                
                                            
                <?php get_sidebar('right'); ?>
<?php get_footer(); ?>