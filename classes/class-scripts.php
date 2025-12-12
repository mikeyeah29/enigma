<?php

namespace Enigma\Theme;

/**
 * Theme scripts and styles loader
 */

class Scripts {

	var $font_url = '';
	
	public function __construct($font_url) {
		
		$this->font_url = $font_url;

		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_frontend_assets' ) );
		add_action( 'enqueue_block_editor_assets', array( $this, 'enqueue_editor_assets' ) );

		add_action( 'enqueue_block_assets', function() {
			$css_path = get_theme_file_path( 'build/style-index.css' );
			if ( file_exists( $css_path ) ) {
				wp_enqueue_style(
					'enigma-global-styles',
					get_theme_file_uri( 'build/style-index.css' ),
					[],
					filemtime( $css_path )
				);
			}
		});
	}

	/**
	 * Enqueue frontend assets (global styles + JS)
	 */
	public function enqueue_frontend_assets() {
		// Global CSS
		$css_path = get_theme_file_path('build/style-index.css');
		if ( file_exists($css_path) ) {
			wp_enqueue_style('enigma-global-styles', get_theme_file_uri('build/style-index.css'), [], filemtime($css_path));
		}

		// Global JS (frontend)
		$asset_file = get_theme_file_path('build/index.asset.php');
		$js_path    = get_theme_file_path('build/index.js');
		if ( file_exists($asset_file) && file_exists($js_path) ) {
			$asset = include $asset_file;
			wp_enqueue_script('enigma-frontend', get_theme_file_uri('build/index.js'), $asset['dependencies'], $asset['version'], true);
		}

		if($this->font_url) {
			wp_enqueue_style('enigma-adobe-fonts', $this->font_url, [], null);
		}
	}	

	public function enqueue_editor_assets() {

        // Editor-only CSS (block editor.scss + editor-global.scss)
        $editor_css = get_theme_file_path( 'build/editor.css' );
        if ( file_exists( $editor_css ) ) {
            wp_enqueue_style(
                'enigma-editor-styles',
                get_theme_file_uri( 'build/editor.css' ),
                [],
                filemtime( $editor_css )
            );
        }

        // Editor JS (registers all blocks)
        $asset_path = get_theme_file_path( 'build/editor.asset.php' );
        $js_path    = get_theme_file_path( 'build/editor.js' );
        if ( file_exists( $asset_path ) && file_exists( $js_path ) ) {
            $asset = include $asset_path;
            wp_enqueue_script(
                'enigma-blocks-editor',
                get_theme_file_uri( 'build/editor.js' ),
                $asset['dependencies'],
                $asset['version'],
                true
            );
        }
    }
}
