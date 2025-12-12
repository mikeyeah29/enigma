<?php
/**
 * Register theme menus
 */

namespace Enigma\Theme;

class Menus {

	public function __construct() {
		add_action( 'after_setup_theme', array( $this, 'register_menus' ) );
	}

	/**
	 * Register navigation menus
	 */
	public function register_menus() {
		register_nav_menus(
			array(
				'primary'   => __( 'Primary Menu', 'enigma' ),
				'secondary' => __( 'Secondary Menu', 'enigma' ),
				'footer-one'    => __( 'Footer Menu One', 'enigma' ),
				'footer-two'    => __( 'Footer Menu Two', 'enigma' )
			)
		);
	}
}
