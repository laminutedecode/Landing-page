<?php
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

add_action ('init', 'create_taxonomy', 0);
function create_taxonomy()
{
	$labels = array(
	'name' => 'Catégories projets',
	'singular_name' => 'Catégorie projet',
	'search_items' => 'Rechercher une catégorie',
	'all_items' => 'Toutes les catégories',
	'edit_item' => 'Editer une catégorie',
	'update_item' => 'Modifier une catégorie',
	'add_new_item' => 'Ajouter une catégorie',
	'new_item_name' => 'Nouvelle catégorie',
	'menu_name' => 'Catégorie'
	
	);
	
	register_taxonomy('categories', array('portfolio'), array (
	'hierarchical' => true,
	'labels' => $labels,
	'show_ui' => true,
	'query_var' => true,
	'rewrite' => array('slug' => 'categories')
	
	
	));
}

;?>