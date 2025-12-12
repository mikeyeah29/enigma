<?php

/*
===============================================
	Setup
===============================================
*/

require_once get_template_directory() . '/classes/class-setup.php';
require_once get_template_directory() . '/classes/class-scripts.php';
require_once get_template_directory() . '/classes/class-traffic.php';
require_once get_template_directory() . '/classes/class-menus.php';
require_once get_template_directory() . '/classes/customizer/class-customizer.php';

// get font url from customizer
$font_url = null;

$adobe_fonts_url = get_theme_mod('adobe_fonts_url', null);
$google_fonts_url = get_theme_mod('google_fonts_url', null);

if($adobe_fonts_url) {
    $font_url = $adobe_fonts_url;
}

if($google_fonts_url) {
    $font_url = $google_fonts_url;
}

new \Enigma\Theme\Setup();
new \Enigma\Theme\Scripts($font_url);
new \Enigma\Theme\Menus();

add_action('init', function() {
    new \Enigma\Theme\Customizer();
});

/*
===============================================
	Demo Setup
===============================================
*/

require_once get_template_directory() . '/classes/demo/class-customizer-setup.php';

new \Enigma\Theme\Demo\Customizer_Setup();

/*
===============================================
	Register Blocks
===============================================
*/

add_action(
	'init',
	function () {
		foreach ( glob( get_theme_file_path( 'blocks/*/block.json' ) ) as $block_json ) {
			register_block_type( $block_json );
		}
	}
);

/*
===============================================
	Register Custom Post Types
===============================================
*/

// require_once get_template_directory() . '/classes/cpt/class-services.php';
// new \Enigma\Theme\CPT\Services();

/*
===============================================
	Register Simple Meta Boxes
===============================================
*/

require_once get_template_directory() . '/classes/class-simple-meta-boxes.php';

/*
===============================================
	Functions
===============================================
*/

function getMeta($name, $post_id = null) {
	if(!$post_id) {
		$post_id = get_the_ID();
	}
	return get_post_meta($post_id, $name, true);
}

function getImageByID($id)
{
    // return the image url
    if($id) {
        return wp_get_attachment_image_url($id, 'full');
    }
    return '';
}

add_action( 'wp_enqueue_scripts', function() {
    $palette = wp_get_global_settings( [ 'color', 'palette' ] );

    if ( empty( $palette ) || ! is_array( $palette ) ) {
        return;
    }

    $css = '';
    foreach ( $palette as $color ) {
        if ( empty( $color['slug'] ) || empty( $color['color'] ) ) {
            continue;
        }

        $slug  = sanitize_title( $color['slug'] );
        $value = sanitize_hex_color( $color['color'] );

        $css .= ".has-{$slug}-fill-color .shape-fill { fill: {$value}; }";
    }

    wp_add_inline_style( 'enigma-global-styles', $css );
});

/*
===============================================
	Remove Enigma theme from update list
===============================================
*/

add_filter('site_transient_update_themes', function ($value) {

    if (!isset($value->response)) {
        return $value;
    }

    // Slug must match the theme folder name
    unset($value->response['enigma']);

    return $value;
});