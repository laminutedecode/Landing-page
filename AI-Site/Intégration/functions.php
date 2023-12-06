<?php
// ####################
//  Cacher la barre de wordpress
// ####################
add_filter('show_admin_bar', '__return_false');
// La fonction add_filter permet de manipuler les données avant qu'elles ne soient affichées. Elle fait partie de l'API des filtres de WordPress.

  // activer la version 5 de ACF
  define('ACF_EARLY_ACCESS', '5');

  // activer les images a la une
  add_theme_support('post-thumbnails');

add_action('acf/init', 'my_acf_op_init');
function my_acf_op_init() {

    // Check function exists.
    if( function_exists('acf_add_options_page') ) {

        // Register options page.
        $option_page = acf_add_options_page(array(
            'page_title'    => __('Theme General Settings'),
            'menu_title'    => __('Theme Settings'),
            'menu_slug'     => 'theme-general-settings',
            'capability'    => 'edit_posts',
            'redirect'      => false
        ));
    }
}

add_action('init', 'portfolio_init');
function portfolio_init()
{
	$labels = array(
	'name' => 'Projets',
	'singular_name' => 'Projet',
	'add_new' => 'Ajouter un projet',
	'add_new_item' => 'Ajouter un nouveau projet',
	'edit_item' => 'Modifier un projet',
	'new_item' => 'Nouveau projet',
	'view_item' => 'Voir le projet',
	'search_items' => 'Rechercher un projet',
	'not_found' => 'Aucun projets trouvé',
	'not_found_in_trash' => 'Aucun projet dans la corbeille',
	'menu_name' => 'Mes projets'
	
	);
	
	$args = array(
	'labels' => $labels,
	'public' => true,
	'show_ui' => true,
	'show_in_menu' => true,
	'query_var' => true,
	'rewrite' => true,
	'capability_type' => 'post',
	'hierarchical' => false,
	'menu_position' => 2,
	'supports' => array('title','editor','thumbnail','custom-fields','comments')
	
	);
	register_post_type('portfolio',$args);
}


?>