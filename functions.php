<?php
/**
 * blanktheme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package blanktheme
 */

function cptui_register_my_cpts() {

	/**
	 * Post Type: Articles.
	 */

	$labels = array(
		"name" => __( "Articles", "twentyseventeen" ),
		"singular_name" => __( "Articles", "twentyseventeen" ),
	);

	$args = array(
		"label" => __( "Articles", "twentyseventeen" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "articles",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "article", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail" ),
	);

	register_post_type( "article", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );
