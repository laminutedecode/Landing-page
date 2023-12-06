<?php


add_action('after_setup_theme', 'mdc_setup');

function mdc_setup(){
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    add_theme_support('title-tag');
    register_nav_menus(array(
        'menu'=>'Menu principale'
    ));
}


function enqueue_custom_scripts(){
    wp_register_script('ionicons', 'https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js', array(), null, true);
    wp_register_script('app-script', get_template_directory_uri().'/app.js', array(), null, true);
    wp_enqueue_script('ionicons');
    wp_enqueue_script('app-script');
}

add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');

function change_search_url_rewrite(){
    if (is_search() && !empty($_GET['s'])){
        wp_redirect(home_url("/search/").urlencode(get_query_var('s')));
        exit();
    }
}

//  cacher la barre d'admin
add_filter('show_admin_bar', '__return_false');


// ###############################
// Enregistrer le CSS pour theme enfant
// ###############################
function enqueue_parent_and_child_styles(){
    wp_enqueue_style('parent-style', get_template_directory_uri().'/style.css');
    wp_enqueue_style('child-style', get_stylesheet_uri(), array('parent-style'));
}
add_action('wp_enqueue_scripts', 'enqueue_parent_and_child_styles');



;?>