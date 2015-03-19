<?php
    /*
     * Template Name: Our Clients
     */
?>
<?php get_header() ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <h1>Our <?php the_title(); ?></h1>
    <?php the_content(); ?>
<?php endwhile;endif; ?>


<?php  ?>


<div id="tabs">

    <div id="client-nav" class="wrapper">
        <ul>
        <?php $taxonomyName = "practices";$terms = get_terms($taxonomyName,array('parent' => 0));foreach($terms as $term): ?>
            <li><a href="#<?php echo $term->name;?>"><?php echo $term->name;?></a></li>
        <?php endforeach; ?>
        </ul>        
    </div>

    <!-- ================================== -->
    <div id="Consulting">
        <div id="industry-nav" class="wrapper">
            <ul>
                <?php //Start of Industries Loop
                $my_query = new WP_Query('post_type=client&practices=consulting&orderby=title&order=ASC');
                $post_term_array = array();
                while ($my_query->have_posts()) : $my_query->the_post(); $do_not_duplicate = $post->ID; ?>
                    <?php $postId = get_the_ID(); ?> 
                    <?php $postTerms =  wp_get_post_terms( $postId, 'industries');  ?>
                    <?php $post_term_array[$postTerms[0]->name] = $postTerms[0]->name; ?>
                <?php endwhile; ?><?php rewind_posts(); ?>
                <?php foreach ($post_term_array as $post_term):?>
                    <li><a rel="<?php echo $post_term; ?>"><?php echo $post_term; ?></a></li>
                <?php endforeach; ?>
                <li><a rel="all">All</a></li>
            </ul>
        </div>

        <div class="container-consulting">
            <ul class="client-logo-area">
            <?php //Start of Client Image Loop
            $my_query = new WP_Query('post_type=client&practices=consulting&orderby=title&order=ASC');
            while ($my_query->have_posts()) : $my_query->the_post(); $do_not_duplicate = $post->ID; ?>
            <?php $postId = get_the_ID(); ?> 
            <?php $postTerms =  wp_get_post_terms( $postId, 'industries',array( "fields" => "names" ));  ?>
                <a href="<?php the_field("client_website"); ?>" target="_blank">
                    <li class="client-logo <?php echo $postTerms[0]; ?>">
                        <?php the_post_thumbnail("page-featured-image"); ?>
                    </li>  
                </a>
            <?php endwhile; ?><?php rewind_posts(); ?>
            </ul>
        </div>  
    </div>
    <!-- ================================== -->

    <div id="Non-Profit">
        <div id="industry-nav" class="wrapper filter-non-profit">
            <ul>
                <?php //Start of Industries Loop
                $my_query = new WP_Query('post_type=client&practices=non-profit&orderby=title&order=ASC');
                $post_term_array = array();
                while ($my_query->have_posts()) : $my_query->the_post(); $do_not_duplicate = $post->ID; ?>
                    <?php $postId = get_the_ID(); ?> 
                    <?php $postTerms =  wp_get_post_terms( $postId, 'industries');  ?>
                    <?php $post_term_array[$postTerms[0]->name] = $postTerms[0]->name; ?>
                <?php endwhile; ?><?php rewind_posts(); ?>
                <?php foreach ($post_term_array as $post_term):?>
                    <li><a rel="<?php echo $post_term; ?>"><?php echo $post_term; ?></a></li>
                <?php endforeach; ?>
                <li><a rel="all">All</a></li>
            </ul>
        </div>

        <div class="container-non-profit">
            <ul class="client-logo-area">
            <?php //Start of Client Image Loop
            $my_query = new WP_Query('post_type=client&practices=non-profit&orderby=title&order=ASC');
            while ($my_query->have_posts()) : $my_query->the_post(); $do_not_duplicate = $post->ID; ?>
            <?php $postId = get_the_ID(); ?> 
            <?php $postTerms =  wp_get_post_terms( $postId, 'industries',array( "fields" => "names" ));  ?>
                <a href="<?php the_field("client_website"); ?>" target="_blank">
                    <li class="client-logo <?php echo $postTerms[0]; ?>">
                        <?php the_post_thumbnail("page-featured-image"); ?>
                    </li>  
                </a>
            <?php endwhile; ?><?php rewind_posts(); ?>
            </ul>
        </div>
    </div>

    <!-- ================================== -->

    <div id="Search">
        <div id="industry-nav" class="wrapper filter-search">
            <ul>
                <?php //Start of Industries Loop
                $my_query = new WP_Query('post_type=client&practices=search&orderby=title&order=ASC');
                $post_term_array = array();
                while ($my_query->have_posts()) : $my_query->the_post(); $do_not_duplicate = $post->ID; ?>
                    <?php $postId = get_the_ID(); ?> 
                    <?php $postTerms =  wp_get_post_terms( $postId, 'industries');  ?>
                    <?php $post_term_array[$postTerms[0]->name] = $postTerms[0]->name; ?>
                <?php endwhile; ?><?php rewind_posts(); ?>
                <?php foreach ($post_term_array as $post_term):?>
                    <li><a rel="<?php echo $post_term; ?>"><?php echo $post_term; ?></a></li>
                <?php endforeach; ?>
                <li><a rel="all">All</a></li>
            </ul>
        </div>

        <div class="container-search">
            <ul class="client-logo-area">
            <?php //Start of Client Image Loop
            $my_query = new WP_Query('post_type=client&practices=search&orderby=title&order=ASC');
            while ($my_query->have_posts()) : $my_query->the_post(); $do_not_duplicate = $post->ID; ?>
            <?php $postId = get_the_ID(); ?> 
            <?php $postTerms =  wp_get_post_terms( $postId, 'industries',array( "fields" => "names" ));  ?>
                <a href="<?php the_field("client_website"); ?>" target="_blank">
                    <li class="client-logo <?php echo $postTerms[0]; ?>">
                        <?php the_post_thumbnail("page-featured-image"); ?>
                    </li>  
                </a>
            <?php endwhile; ?><?php rewind_posts(); ?>
            </ul>
        </div>
    </div>

    <!-- ================================== -->


</div>


<?php get_sidebar('right'); ?>
<?php get_footer(); 
?>

