<?php

function load_stylesheets()
{


	wp_register_style('style', get_template_directory_uri() . 'style.css', array(), false, 'all');
	wp_enqueue_style('style');

	
}


add_action('wp_enqueue_scripts', 'load_stylesheets');


function include_jquery()
{
	wp_deregister_script('jquery');

	wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-3.1.3.min.js','',1,true);
	
}

add_action('wp_enqueue_scripts', 'include_jquery');

function loadjs()
{

	wp_register_script('customjs', get_template_directory_uri() . '/js/scripts.js', '', 1,true);

	wp_enqueue_script('customjs');
}

function enregistre_mon_menu() {
	register_nav_menu('menu_principal', __('Menu principal'));
}

function montheme_init() {
	register_post_type('recette', [
		'label' => 'Recettes',
		'public' => true,
		'supports' => ['title', 'editor', 'thumbnail','custom-fields'],
		'has_archive' => true,
	]);
}

// function custom_fields() {
// 	add_meta_box(
// 		'Nom',
// 		'Liste des ingrédients',
// 		'Temps de cuisson',
// 		'Etapes',
// 	);
// }

//add_action('init', 'custom_fields');

add_action('init', 'montheme_init');

add_action('init', 'enregistre_mon_menu');

add_action('wp_enqueue_scripts', 'loadjs');

add_theme_support('menus');
add_theme_support('post-thumbnails');

