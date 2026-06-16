<?php

namespace Enigma\CPT;

 class Reviews {

    public function __construct() {
        add_action( 'init', [ $this, 'register_cpt' ] );
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

}
