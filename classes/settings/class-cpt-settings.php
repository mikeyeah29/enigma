<?php

namespace Enigma\Theme\Settings;

class CPT_Settings {

	const MENU_SLUG      = 'enigma-settings';
	const SETTINGS_GROUP = 'enigma_cpt_settings_group';
	const SETTINGS_PAGE  = 'enigma-content-types';

	private $did_flush_rewrites = false;

	public function __construct() {
		add_action( 'admin_menu', [ $this, 'register_menu' ] );
		add_action( 'admin_init', [ $this, 'register_settings' ] );
		$this->register_rewrite_hooks();
	}

	public function register_menu() {
		add_menu_page(
			__( 'Enigma Settings', 'enigma' ),
			__( 'Enigma', 'enigma' ),
			'manage_options',
			self::MENU_SLUG,
			[ $this, 'render_page' ],
			'dashicons-admin-generic',
			59
		);
	}

	public function register_settings() {
		$checkbox_settings = [
			'reviews_has_archive',
			'reviews_has_single',
			'services_has_archive',
			'services_has_single',
		];

		foreach ( $checkbox_settings as $setting ) {
			register_setting(
				self::SETTINGS_GROUP,
				$setting,
				[
					'type'              => 'boolean',
					'sanitize_callback' => [ $this, 'sanitize_checkbox' ],
					'default'           => in_array( $setting, [ 'reviews_has_single', 'services_has_single' ], true ),
				]
			);
		}

		register_setting(
			self::SETTINGS_GROUP,
			'reviews_slug',
			[
				'type'              => 'string',
				'sanitize_callback' => [ $this, 'sanitize_reviews_slug' ],
				'default'           => 'reviews',
			]
		);

		register_setting(
			self::SETTINGS_GROUP,
			'services_slug',
			[
				'type'              => 'string',
				'sanitize_callback' => [ $this, 'sanitize_services_slug' ],
				'default'           => 'services',
			]
		);

		add_settings_section(
			'enigma_reviews_section',
			__( 'Reviews', 'enigma' ),
			'__return_false',
			self::SETTINGS_PAGE
		);

		add_settings_field(
			'reviews_has_archive',
			__( 'Enable archive', 'enigma' ),
			[ $this, 'render_checkbox_field' ],
			self::SETTINGS_PAGE,
			'enigma_reviews_section',
			[
				'option_name' => 'reviews_has_archive',
				'default'     => false,
			]
		);

		add_settings_field(
			'reviews_has_single',
			__( 'Enable single pages', 'enigma' ),
			[ $this, 'render_checkbox_field' ],
			self::SETTINGS_PAGE,
			'enigma_reviews_section',
			[
				'option_name' => 'reviews_has_single',
				'default'     => true,
			]
		);

		add_settings_field(
			'reviews_slug',
			__( 'Slug', 'enigma' ),
			[ $this, 'render_slug_field' ],
			self::SETTINGS_PAGE,
			'enigma_reviews_section',
			[
				'option_name' => 'reviews_slug',
				'default'     => 'reviews',
			]
		);

		add_settings_section(
			'enigma_services_section',
			__( 'Services', 'enigma' ),
			'__return_false',
			self::SETTINGS_PAGE
		);

		add_settings_field(
			'services_has_archive',
			__( 'Enable archive', 'enigma' ),
			[ $this, 'render_checkbox_field' ],
			self::SETTINGS_PAGE,
			'enigma_services_section',
			[
				'option_name' => 'services_has_archive',
				'default'     => false,
			]
		);

		add_settings_field(
			'services_has_single',
			__( 'Enable single pages', 'enigma' ),
			[ $this, 'render_checkbox_field' ],
			self::SETTINGS_PAGE,
			'enigma_services_section',
			[
				'option_name' => 'services_has_single',
				'default'     => true,
			]
		);

		add_settings_field(
			'services_slug',
			__( 'Slug', 'enigma' ),
			[ $this, 'render_slug_field' ],
			self::SETTINGS_PAGE,
			'enigma_services_section',
			[
				'option_name' => 'services_slug',
				'default'     => 'services',
			]
		);
	}

	public function render_page() {
		if ( ! current_user_can( 'manage_options' ) ) {
			return;
		}
		?>
		<div class="wrap">
			<h1><?php esc_html_e( 'Content Types', 'enigma' ); ?></h1>
			<form method="post" action="options.php">
				<?php settings_fields( self::SETTINGS_GROUP ); ?>
				<?php do_settings_sections( self::SETTINGS_PAGE ); ?>
				<?php submit_button( __( 'Save Settings', 'enigma' ) ); ?>
			</form>
		</div>
		<?php
	}

	public function render_checkbox_field( $args ) {
		$option_name = $args['option_name'];
		$default     = ! empty( $args['default'] );
		$value       = (bool) get_option( $option_name, $default );
		?>
		<input type="hidden" name="<?php echo esc_attr( $option_name ); ?>" value="0" />
		<label>
			<input
				type="checkbox"
				name="<?php echo esc_attr( $option_name ); ?>"
				value="1"
				<?php checked( $value ); ?>
			/>
		</label>
		<?php
	}

	public function render_slug_field( $args ) {
		$option_name = $args['option_name'];
		$default     = $args['default'];
		$value       = (string) get_option( $option_name, $default );
		?>
		<input
			type="text"
			name="<?php echo esc_attr( $option_name ); ?>"
			value="<?php echo esc_attr( $value ); ?>"
			class="regular-text"
		/>
		<?php
	}

	public function sanitize_checkbox( $value ) {
		return ! empty( $value ) ? 1 : 0;
	}

	public function sanitize_reviews_slug( $value ) {
		$slug = sanitize_title( $value );

		return '' !== $slug ? $slug : 'reviews';
	}

	public function sanitize_services_slug( $value ) {
		$slug = sanitize_title( $value );

		return '' !== $slug ? $slug : 'services';
	}

	private function register_rewrite_hooks() {
		$options = [
			'reviews_has_archive',
			'reviews_has_single',
			'reviews_slug',
			'services_has_archive',
			'services_has_single',
			'services_slug',
		];

		foreach ( $options as $option_name ) {
			add_action( 'update_option_' . $option_name, [ $this, 'flush_rewrites_on_option_change' ], 10, 2 );
		}
	}

	public function flush_rewrites_on_option_change( $old_value, $new_value ) {
		if ( $this->did_flush_rewrites || $old_value === $new_value ) {
			return;
		}

		flush_rewrite_rules();
		$this->did_flush_rewrites = true;
	}
}
