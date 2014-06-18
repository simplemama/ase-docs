<?php

class aesopDocsType{

	function __construct(){

		add_action('init', array($this,'do_type'));

	}

	function do_type() {

		$labels = array(
			'name'                => _x( 'Docs', 'Post Type General Name', 'ase_docs' ),
			'singular_name'       => _x( 'Doc', 'Post Type Singular Name', 'ase_docs' ),
			'menu_name'           => __( 'Docs', 'ase_docs' ),
			'parent_item_colon'   => __( 'Parent Doc:', 'ase_docs' ),
			'all_items'           => __( 'All Docs', 'ase_docs' ),
			'view_item'           => __( 'View Doc', 'ase_docs' ),
			'add_new_item'        => __( 'Add New Doc', 'ase_docs' ),
			'add_new'             => __( 'Add New', 'ase_docs' ),
			'edit_item'           => __( 'Edit Doc', 'ase_docs' ),
			'update_item'         => __( 'Update Doc', 'ase_docs' ),
			'search_items'        => __( 'Search Doc', 'ase_docs' ),
			'not_found'           => __( 'Not found', 'ase_docs' ),
			'not_found_in_trash'  => __( 'Not found in Trash', 'ase_docs' ),
		);
		$args = array(
			'label'               => __( 'ase_docs', 'ase_docs' ),
			'description'         => __( 'Aesop Docs', 'ase_docs' ),
			'labels'              => $labels,
			'supports'            => array( 'title', 'editor', 'excerpt', ),
			'taxonomies'          => array( 'category', 'post_tag' ),
			'hierarchical'        => true,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'menu_icon'           => '',
			'can_export'          => true,
			'has_archive'		=> 'help',
			'rewrite'			=> array('slug' => 'help'),
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'page',
		);
		register_post_type( 'ase_docs', $args );

	}

}
new aesopDocsType;