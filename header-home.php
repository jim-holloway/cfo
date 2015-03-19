<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1, width=device-width" />
    <title>CFO SELECTIONS</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/index-style.css">
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
            $('blockquote').quovolver();
        });
    </script>
</head>
<body>
<?php
    /*
     * Setting up parameters for menu
     * 
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
    <div class="wrapper">
        <div id="menu-icon"></div>       
            <div id="logo">
                <a href="index.php"><h5><img src="<?php echo get_template_directory_uri(); ?>/images/cfo-logo.png" alt="CFO Selections" id="cfo-logo" title="CFO Selections"/></h5></a>
            </div><!--end logo-->
            <?php wp_nav_menu($topMenu); ?>
           
                <div id="phonenum">
                    <h2 class="norm sarif">Give us a call at:</h2>
                    <h3 class=" sarif"><a href="tel:(206) 686-4480"> (206) 686-4480</a></h3>
                </div>

            <div id="top">
                <h1 class="t-right sarif">Providing Consulting Services</h1>
                <h2 class="t-right sarif">and Executive Search in Finance and Accounting</h2>
            </div>
    </div>
        <div id="header">    
             <?php wp_nav_menu($mainMenu); ?>   
            <div class="clear"></div>
        </div><!--end header-->