<?php

namespace Enigma\CPT;

 class Reviews {

    public function __construct() {
        add_action( 'init', [ $this, 'register_cpt' ] );
        add_action( 'init', [ $this, 'register_service_taxonomy' ] );
    }

    /**
     * Register the Reviews CPT.
     */
    public function register_cpt() {

        // Fetch options (fallbacks included)
        $has_archive   = (bool) get_option( 'reviews_has_archive', false );
        $has_single    = (bool) get_option( 'reviews_has_single', true );
        $slug          = sanitize_title( get_option( 'reviews_slug', 'reviews' ) );

        // If single pages should be disabled, we fake it using a non-publicly_queryable setup.
        $publicly_queryable = $has_single;

        $labels = [
            'name'               => __( 'Reviews', 'theme' ),
            'singular_name'      => __( 'Review', 'theme' ),
            'add_new_item'       => __( 'Add New Review', 'theme' ),
            'edit_item'          => __( 'Edit Review', 'theme' ),
            'new_item'           => __( 'New Review', 'theme' ),
            'view_item'          => __( 'View Review', 'theme' ),
            'search_items'       => __( 'Search Reviews', 'theme' ),
            'not_found'          => __( 'No reviews found', 'theme' ),
            'not_found_in_trash' => __( 'No reviews found in Trash', 'theme' ),
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
                'excerpt'
            ],
            'menu_icon'          => 'dashicons-format-quote',
        ];

        register_post_type( 'review', $args );
    }

    /**
     * Register the Service taxonomy for Reviews.
     */
    public function register_service_taxonomy() {

        $labels = [
            'name'                       => __( 'Services', 'theme' ),
            'singular_name'              => __( 'Service', 'theme' ),
            'search_items'               => __( 'Search Services', 'theme' ),
            'popular_items'              => __( 'Popular Services', 'theme' ),
            'all_items'                  => __( 'All Services', 'theme' ),
            'parent_item'                => __( 'Parent Service', 'theme' ),
            'parent_item_colon'          => __( 'Parent Service:', 'theme' ),
            'edit_item'                  => __( 'Edit Service', 'theme' ),
            'view_item'                  => __( 'View Service', 'theme' ),
            'update_item'                => __( 'Update Service', 'theme' ),
            'add_new_item'               => __( 'Add New Service', 'theme' ),
            'new_item_name'              => __( 'New Service Name', 'theme' ),
            'separate_items_with_commas' => __( 'Separate services with commas', 'theme' ),
            'add_or_remove_items'        => __( 'Add or remove services', 'theme' ),
            'choose_from_most_used'      => __( 'Choose from the most used services', 'theme' ),
            'not_found'                  => __( 'No services found.', 'theme' ),
            'no_terms'                   => __( 'No services', 'theme' ),
            'items_list_navigation'      => __( 'Services list navigation', 'theme' ),
            'items_list'                 => __( 'Services list', 'theme' ),
            'menu_name'                  => __( 'Services', 'theme' ),
        ];

        $args = [
            'labels'            => $labels,
            'hierarchical'      => true,
            'public'            => true,
            'show_ui'           => true,
            'show_admin_column' => true,
            'show_in_nav_menus' => true,
            'show_in_rest'      => true,
            'rewrite'           => [
                'slug'       => 'review-service',
                'with_front' => false,
            ],
        ];

        register_taxonomy( 'review_service', [ 'review' ], $args );
    }

}
