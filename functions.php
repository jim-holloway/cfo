<?php

    $menuList = array(
        "main_menu" => "Main Navigation Menu",
        "top_menu" => "Top Menu: Upper Right",
        "footer_menu" => "Footer Menu: Bottom");
    
    register_nav_menus($menuList);
    
    register_sidebar(array(
        "name" => "Right Sidebar",
        "id" => "right_aside",
        "description" => "Will appear on the right :)",
        "before_widget" => "<div class='widget'>",
        "after_widget" => "</div>",
        "before_title" => "<h3 class='widget_title'>",
        "after_title" => "</h3>"
    ));
    
    add_theme_support('post-thumbnails');
    
    function my_function_admin_bar(){ return false; }
add_filter( 'show_admin_bar' , 'my_function_admin_bar');

    
    // Custom Post Types

    // Custom Excerpt Length

    function custom_excerpt_length( $length ) {
    return 24;
    }
    add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
    
    function new_excerpt_more( $more ) {
    return ' ...';
    }
    add_filter('excerpt_more', 'new_excerpt_more');


    // Clients
    add_action( 'init', 'register_cpt_client' );

function register_cpt_client() {

    $labels = array( 
        'name' => _x( 'Clients', 'client' ),
        'singular_name' => _x( 'Client', 'client' ),
        'add_new' => _x( 'Add New', 'client' ),
        'add_new_item' => _x( 'Add New Client', 'client' ),
        'edit_item' => _x( 'Edit Client', 'client' ),
        'new_item' => _x( 'New Client', 'client' ),
        'view_item' => _x( 'View Client', 'client' ),
        'search_items' => _x( 'Search Clients', 'client' ),
        'not_found' => _x( 'No clients found', 'client' ),
        'not_found_in_trash' => _x( 'No clients found in Trash', 'client' ),
        'parent_item_colon' => _x( 'Parent Client:', 'client' ),
        'menu_name' => _x( 'Clients', 'client' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => true,
        
        'supports' => array( 'title',  'thumbnail'),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'client', $args );
}
    
    
    
    // Quotes
    add_action( 'init', 'register_cpt_quote' );

function register_cpt_quote() {

    $labels = array( 
        'name' => _x( 'Quotes', 'quote' ),
        'singular_name' => _x( 'Quote', 'quote' ),
        'add_new' => _x( 'Add New', 'quote' ),
        'add_new_item' => _x( 'Add New Quote', 'quote' ),
        'edit_item' => _x( 'Edit Quote', 'quote' ),
        'new_item' => _x( 'New Quote', 'quote' ),
        'view_item' => _x( 'View Quote', 'quote' ),
        'search_items' => _x( 'Search Quotes', 'quote' ),
        'not_found' => _x( 'No quotes found', 'quote' ),
        'not_found_in_trash' => _x( 'No quotes found in Trash', 'quote' ),
        'parent_item_colon' => _x( 'Parent Quote:', 'quote' ),
        'menu_name' => _x( 'Quotes', 'quote' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => true,
        'description' => 'Front page quotes',
        'supports' => array( 'title', 'editor' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'quote', $args );
}
    
    
    // Locations
    
    add_action( 'init', 'register_cpt_location' );

function register_cpt_location() {

    $labels = array( 
        'name' => _x( 'Locations', 'location' ),
        'singular_name' => _x( 'Location', 'location' ),
        'add_new' => _x( 'Add New', 'location' ),
        'add_new_item' => _x( 'Add New Location', 'location' ),
        'edit_item' => _x( 'Edit Location', 'location' ),
        'new_item' => _x( 'New Location', 'location' ),
        'view_item' => _x( 'View Location', 'location' ),
        'search_items' => _x( 'Search Locations', 'location' ),
        'not_found' => _x( 'No locations found', 'location' ),
        'not_found_in_trash' => _x( 'No locations found in Trash', 'location' ),
        'parent_item_colon' => _x( 'Parent Location:', 'location' ),
        'menu_name' => _x( 'Locations', 'location' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => true,
        
        'supports' => array( 'title', 'editor', 'thumbnail' ),
        
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => true,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'location', $args );
}
    
// Awards
    
    add_action( 'init', 'register_cpt_awards' );

function register_cpt_awards() {

    $labels = array( 
        'name' => _x( 'Awards', 'awards' ),
        'singular_name' => _x( 'Awards', 'awards' ),
        'add_new' => _x( 'Add New', 'awards' ),
        'add_new_item' => _x( 'Add New Awards', 'awards' ),
        'edit_item' => _x( 'Edit Awards', 'awards' ),
        'new_item' => _x( 'New Awards', 'awards' ),
        'view_item' => _x( 'View Awards', 'awards' ),
        'search_items' => _x( 'Search Awards', 'awards' ),
        'not_found' => _x( 'No Awards found', 'awards' ),
        'not_found_in_trash' => _x( 'No Awards found in Trash', 'awards' ),
        'parent_item_colon' => _x( 'Parent Awards:', 'awards' ),
        'menu_name' => _x( 'Awards', 'awards' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => true,
        
        'supports' => array( 'title', 'editor', 'thumbnail' ),
        
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 3,
        
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => true,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'awards', $args );
}    
    
    
    // Team Members
    
    add_action( 'init', 'register_cpt_team_member' );

function register_cpt_team_member() {

    $labels = array( 
        'name' => _x( 'Team Members ', 'team_member' ),
        'singular_name' => _x( 'Team Member', 'team_member' ),
        'add_new' => _x( 'Add New', 'team_member' ),
        'add_new_item' => _x( 'Add New Team Member', 'team_member' ),
        'edit_item' => _x( 'Edit Team Member', 'team_member' ),
        'new_item' => _x( 'New Team Member', 'team_member' ),
        'view_item' => _x( 'View Team Member', 'team_member' ),
        'search_items' => _x( 'Search Team Members ', 'team_member' ),
        'not_found' => _x( 'No team members  found', 'team_member' ),
        'not_found_in_trash' => _x( 'No team members  found in Trash', 'team_member' ),
        'parent_item_colon' => _x( 'Parent Team Member:', 'team_member' ),
        'menu_name' => _x( 'Team Members ', 'team_member' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => true,
        'description' => 'This is were you add teem members',
        'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail' ),
        'taxonomies' => array( 'seattle', 'bellevue', 'issaqua', 'idaho', 'e-washington' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => true,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'team_member', $args );
    
     // Quotes Custom Taxonomies 
     $areas_tax_labels = array(
        'name' => _x( 'Areas', 'taxonomy general name' ),
        'singular_name' => _x( 'Area', 'taxonomy singular name' ),
        'search_items' =>  __( 'Search Areas' ),
        'all_items' => __( 'All Areas' ),
        'parent_item' => __( 'Parent Area' ),
        'parent_item_colon' => __( 'Parent Area:' ),
        'edit_item' => __( 'Edit Area' ), 
        'update_item' => __( 'Update Area' ),
        'add_new_item' => __( 'Add New Area' ),
        'new_item_name' => __( 'New Area Name' ),
        'menu_name' => __( 'Areas' ),
      );  
      
      register_taxonomy( 'areas', 'quote', 
            array(
                'hierarchical' => true,
                'labels' => $areas_tax_labels,
                'query_var' => true,
                'rewrite' => array('slug' => 'area')
            ));      

    // Team Location Custom Taxonomies 
     $team_location_tax_labels = array(
        'name' => _x( 'Team Locations', 'taxonomy general name' ),
        'singular_name' => _x( 'Team Location', 'taxonomy singular name' ),
        'search_items' =>  __( 'Search Team Locations' ),
        'all_items' => __( 'All Team Locations' ),
        'parent_item' => __( 'Parent Team Location' ),
        'parent_item_colon' => __( 'Parent Team Location:' ),
        'edit_item' => __( 'Edit Team Location' ), 
        'update_item' => __( 'Update Team Location' ),
        'add_new_item' => __( 'Add New Team Location' ),
        'new_item_name' => __( 'New Team Location Name' ),
        'menu_name' => __( 'Team Locations' ),
      );    
    register_taxonomy( 'team_locations', 'team_member',
            array(
                'hierarchical' => true,
                'labels' => $team_location_tax_labels,
                'query_var' => true,
                'rewrite' => array('slug' => 'team-locations')
            ));

    // Practices Custom Taxonomies 
     $practices_tax_labels = array(
        'name' => _x( 'Practices', 'taxonomy general name' ),
        'singular_name' => _x( 'Practice', 'taxonomy singular name' ),
        'search_items' =>  __( 'Search Practices' ),
        'all_items' => __( 'All Practices' ),
        'parent_item' => __( 'Parent Practice' ),
        'parent_item_colon' => __( 'Parent Practice:' ),
        'edit_item' => __( 'Edit Practice' ), 
        'update_item' => __( 'Update Practice' ),
        'add_new_item' => __( 'Add New Practice' ),
        'new_item_name' => __( 'New Practice Name' ),
        'menu_name' => __( 'Practices' ),
      );  
      
      // Industries Custom Taxonomies 
     $industries_tax_labels = array(
        'name' => _x( 'Industries', 'taxonomy general name' ),
        'singular_name' => _x( 'Industry', 'taxonomy singular name' ),
        'search_items' =>  __( 'Search Industries' ),
        'all_items' => __( 'All Industries' ),
        'parent_item' => __( 'Parent Industry' ),
        'parent_item_colon' => __( 'Parent Industry:' ),
        'edit_item' => __( 'Edit Industry' ), 
        'update_item' => __( 'Update Industry' ),
        'add_new_item' => __( 'Add New Industry' ),
        'new_item_name' => __( 'New Industry Name' ),
        'menu_name' => __( 'Industries' ),
      );  
        
    // register_taxonomy( 'practices', 'team_member', 
    //         array(
    //             'hierarchical' => true,
    //             'labels' => $practices_tax_labels,
    //             'query_var' => true,
    //             'rewrite' => array('slug' => 'practice')
    //         ));

    register_taxonomy( 'practices', array('team_member','client') , 
            array(
                'hierarchical' => true,
                'labels' => $practices_tax_labels,
                'query_var' => true,
                'rewrite' => array('slug' => 'practice')
            ));
            
     register_taxonomy( 'industries', 'client', 
            array(
                'hierarchical' => true,
                'labels' => $industries_tax_labels,
                'query_var' => true,
                'rewrite' => array('slug' => 'industry')
            ));      
  
}