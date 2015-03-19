<?php
    /*
     * Setting up your parameters for your menu
     * which you will use in your header
     */
    $mainMenu = array(
        "theme_location" => "main_menu",
        'menu_class' => 'navlist',
        "container" => "nav",
        "container_id" => "main-nav",
        "depth" =>2);
        
    $topMenu = array(
        "theme_location" => "top_menu",
        'menu_class' => '',
        "container" => "nav",
        "container_id" => "top-nav",
        "depth" =>1);
?>


<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
     <meta name="viewport" content="initial-scale=1.0, maximum-scale=1, width=device-width" />
    <title><?php bloginfo("name") . wp_title("|"); ?></title>
    
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reveal.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery-ui-1.10.3.custom.css">
    <link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=PT+Serif+Caption' rel='stylesheet' type='text/css'>
    <!--[if lt IE 9]>
<style>
    
</style>
<![endif]-->

    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.quovolver.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.reveal.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-ui-1.10.3.custom.js"></script>
    <script>
        /*
            AUTHOR: Osvaldas Valutis, www.osvaldas.info
        */;(function(e,t,n,r){e.fn.doubleTapToGo=function(r){if(!("ontouchstart"in t)&&!navigator.msMaxTouchPoints&&!navigator.userAgent.toLowerCase().match(/windows phone os 7/i))return false;this.each(function(){var t=false;e(this).on("click",function(n){var r=e(this);if(r[0]!=t[0]){n.preventDefault();t=r}});e(n).on("click touchstart MSPointerDown",function(n){var r=true,i=e(n.target).parents();for(var s=0;s<i.length;s++)if(i[s]==t[0])r=false;if(r)t=false})});return this}})(jQuery,window,document);
    </script>    
        <script type="text/javascript">
            jQuery(document).ready(function($){
                $("#menu-icon").on("click", function(){
                    $(".navlist").slideToggle(250);
                    $(this).toggleClass("active");
                });
                
                $(window).resize(function() {
                if($(window).width() > 520)
                    $(".navlist").show();
                });
                
                $( '#main-nav li:has(ul)' ).doubleTapToGo();
                $('blockquote').quovolver(200,5000);

                $( "#tabs" ).tabs( <?php if ($_GET['tab']){ echo "{active:".$_GET['tab']." }"; } ?> );



                $('#client-nav ul li a').click(function(){
                    var target = $(this).attr('href');
                    $('.client-logo').fadeIn(400);
                 });    


                $('#industry-nav ul li a').click(function(){
                    var target = $(this).attr('rel');

                    if (target == 'all') {
                        $('.client-logo').show();
                    }
                    else {
                        $('.client-logo').hide();
                        $('.'+target).fadeIn(400);
                    }
                });



            });

        </script>
</head>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php if(get_field('location_bg')):  ?> 
        <body style="background-image: url(<?php echo (the_field('location_bg'))  ; ?>)">
    <?php endif; ?>
<?php endwhile; ?>

<?php else: ?>
    <body>
<?php endif; ?>

    <div id="wrapper">
        <div id="header"> 
<div id="menu-icon"></div>       
            <div id="logo">
                <a href="http://cbtest100.info"><h5><img src="<?php echo get_template_directory_uri(); ?>/images/cfo-logo.png" alt="CFO Selections" id="cfo-logo" title="CFO Selections"/></h5></a>
            </div><!--end logo-->
                <?php wp_nav_menu($topMenu); ?>
                <div id="phonenum">
                    <h2 class="norm sarif">Give us a call at:</h2>
                    <h3 class=" sarif"><a href="tel:(206) 686-4480"> (206) 686-4480</a></h3>
                </div>
            <div class="clear"></div>
                <?php wp_nav_menu($mainMenu); ?>
            <div class="clear"></div>
        </div><!--end header-->
        <div id="main">
        <div class="wrapper">
            <div id="col-left">
                <div id="bread-crumb"><p><?php if(function_exists("bcn_display"))bcn_display(); ?></p></div>