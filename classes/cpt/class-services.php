<?php

namespace Enigma\CPT;

class Services {

	public function __construct() {
		add_action( 'init', [ $this, 'register_cpt' ] );
	}

	/**
	 * Register the Services CPT.
	 */
	public function register_cpt() {

		// Fetch options (fallbacks included)
		$has_archive = (bool) get_option( 'services_has_archive', false );
		$has_single  = (bool) get_option( 'services_has_single', true );
		$slug        = sanitize_title( get_option( 'services_slug', 'services' ) );

		// If single pages should be disabled, we fake it using a non-publicly_queryable setup.
		$publicly_queryable = $has_single;

		$labels = [
			'name'               => __( 'Services', 'theme' ),
			'singular_name'      => __( 'Service', 'theme' ),
			'add_new_item'       => __( 'Add New Service', 'theme' ),
			'edit_item'          => __( 'Edit Service', 'theme' ),
			'new_item'           => __( 'New Service', 'theme' ),
			'view_item'          => __( 'View Service', 'theme' ),
			'search_items'       => __( 'Search Services', 'theme' ),
			'not_found'          => __( 'No services found', 'theme' ),
			'not_found_in_trash' => __( 'No services found in Trash', 'theme' ),
		];

		$args = [
			'labels'             => $labels,
			'public'             => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'show_in_rest'       => true,
			'has_archive'        => $has_archive,
			'publicly_queryable' => $publicly_queryable,
			'exclude_from_search'=> ! $publicly_queryable,
			'rewrite'            => [
				'slug'       => $slug,
				'with_front' => false,
			],
			'supports'           => [
				'title',
				'editor',
				'thumbnail',
				'page-attributes', // useful for ordering services
			],
			'menu_icon'          => 'dashicons-hammer',
		];

		register_post_type( 'service', $args );
	}

}
