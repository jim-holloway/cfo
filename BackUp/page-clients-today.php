<?php
    /*
     * Template Name: Our Clients
     */
?>
<?php get_header() ?>

<h1>Test</h1>


<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, neque ducimus aperiam voluptatum cumque obcaecati veniam quos eveniet omnis accusamus!</p>
   


<div id="team-nav" class="wrapper">
    <ul>
    <?php $taxonomyName = "practices";$terms = get_terms($taxonomyName,array('parent' => 0));foreach($terms as $term): ?>
        <li><a href="<?php echo get_term_link($term->slug,$taxonomyName);?>"><?php echo $term->name;?></a></li>
    <?php endforeach; ?>
        <li><a href="#all">All</a></li>
    </ul>        
</div><!--end footer-nav-->



<h2 class="title">Search</h2>

    <div id="team-nav" class="wrapper">
        <ul>
            <?php //Start of Loop
            $my_query = new WP_Query('post_type=client&practices=consulting');
            while ($my_query->have_posts()) : $my_query->the_post(); $do_not_duplicate = $post->ID; ?>
            <?php $postId = get_the_ID(); ?> 
            <?php $postTerms =  wp_get_post_terms( $postId, 'industries',array( "fields" => "names" ));  ?>

            <li><a href="#"><?php echo $postTerms[0]; ?></a></li>
            
            <?php endwhile; ?><?php rewind_posts(); ?>
        </ul>
    </div><!--end footer-nav-->

    <?php //Start of Loop
    $my_query = new WP_Query('post_type=client&practices=consulting');
    while ($my_query->have_posts()) : $my_query->the_post(); $do_not_duplicate = $post->ID; ?>
    <?php $postId = get_the_ID(); ?> 
    <?php $postTerms =  wp_get_post_terms( $postId, 'industries',array( "fields" => "names" ));  ?>
        <div class="client-logo-area">
             <div class="client-logo">
                <?php the_post_thumbnail("page-featured-image"); ?>
             </div>  
        </div>
<?php endwhile; ?><?php rewind_posts(); ?><div class="clear"></div>


<h2 class="title">Consulting</h2>



<div class="filters">

    <div class="filter">
        <a href="#" rel="city" class="">City</a>
        <a href="#" rel="cars" class="">Cars</a>
        <a href="#" rel="other" class="active">Other</a>
        <a href="#" rel="all" class="">All</a>
    </div>

    <div class="container" style="height: 200px;">
        <ul>
            <li class="cars"><a href="">Cars</a></li>
            <li class="cars"><a href="">Cars</a></li>
            <li class="cars"><a href="">Cars</a></li>
            <li class="cars"><a href="">Cars</a></li>
            <li class="city"><a href="">City</a></li>
            <li class="city"><a href="">City</a></li>
            <li class="city"><a href="">City</a></li>
            <li class="city"><a href="">City</a></li>
        </ul>
    </div>
    
</div>

    <div id="team-nav" class="wrapper filter">
        <ul>
            <?php //Start of Loop
            $my_query = new WP_Query('post_type=client&practices=consulting');
            while ($my_query->have_posts()) : $my_query->the_post(); $do_not_duplicate = $post->ID; ?>
            <?php $postId = get_the_ID(); ?> 
            <?php $postTerms =  wp_get_post_terms( $postId, 'industries');  ?>
            
            <pre><?php // print_r($postTerms); ?></pre>

            <li><a href="#" rel="<?php echo $postTerms[0]->name; ?>"><?php echo $postTerms[0]->name; ?></a></li>
            
            <?php endwhile; ?><?php rewind_posts(); ?>
        </ul>
    </div><!--end footer-nav-->

    <?php //Start of Loop
    $my_query = new WP_Query('post_type=client&practices=consulting');
    while ($my_query->have_posts()) : $my_query->the_post(); $do_not_duplicate = $post->ID; ?>
    <?php $postId = get_the_ID(); ?> 
    <?php $postTerms =  wp_get_post_terms( $postId, 'industries',array( "fields" => "names" ));  ?>
        <div class="client-logo-area">
             <div class="client-logo">
                <?php the_post_thumbnail("page-featured-image"); ?>
             </div>  
        </div>

<?php endwhile; ?><?php rewind_posts(); ?><div class="clear"></div>



<h2 class="title">Non-Profit</h2>

    <div id="team-nav" class="wrapper">
        <ul>
            <?php //Start of Loop
            $my_query = new WP_Query('post_type=client&practices=non-profit');
            while ($my_query->have_posts()) : $my_query->the_post(); $do_not_duplicate = $post->ID; ?>
            <?php $postId = get_the_ID(); ?> 
            <?php $postTerms =  wp_get_post_terms( $postId, 'industries',array( "fields" => "names" ));  ?>

            <li><a href="#"><?php echo $postTerms[0]; ?></a></li>
            
            <?php endwhile; ?><?php rewind_posts(); ?>
        </ul>
    </div><!--end footer-nav-->

    <?php //Start of Loop
    $my_query = new WP_Query('post_type=client&practices=non-profit');
    while ($my_query->have_posts()) : $my_query->the_post(); $do_not_duplicate = $post->ID; ?>
    <?php $postId = get_the_ID(); ?> 
    <?php $postTerms =  wp_get_post_terms( $postId, 'industries',array( "fields" => "names" ));  ?>
        <div class="client-logo-area">
             <div class="client-logo">
                <?php the_post_thumbnail("page-featured-image"); ?>
             </div>  
        </div>
<?php endwhile; ?><?php rewind_posts(); ?><div class="clear"></div>








<?php get_sidebar('right'); ?>
<?php get_footer(); 
?>

