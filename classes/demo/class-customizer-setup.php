<?php

namespace Enigma\Theme\Demo;

class Customizer_Setup {

	const OPTION_SETUP_COMPLETE = 'enigma_setup_complete';

	public function __construct() {
		add_action('admin_menu', [$this, 'register_setup_page']);
		add_action('admin_init', [$this, 'handle_setup_action']);
	}

	/**
	 * Register the setup page under Appearance
	 */
	public function register_setup_page() {
		add_theme_page(
			'Enigma Setup',
			'Enigma Setup',
			'manage_options',
			'enigma-setup',
			[$this, 'render_setup_page']
		);
	}

	/**
	 * Render the setup page UI
	 */
	public function render_setup_page() {

		if (get_option(self::OPTION_SETUP_COMPLETE)) {
			echo '<div class="wrap"><h1>Enigma Setup</h1><p>Setup has already been completed.</p></div>';
			return;
		}

		?>
		<div class="wrap">
			<h1>Enigma – Initial Setup</h1>
			<p>This will pre-populate recommended default details. You can edit everything later.</p>

			<form method="post">
				<?php wp_nonce_field('enigma_setup_action', 'enigma_setup_nonce'); ?>
				<input type="hidden" name="enigma_run_setup" value="1">
				<?php submit_button('Run Demo Setup'); ?>
			</form>
		</div>
		<?php
	}

	/**
	 * Handle the setup button action
	 */
	public function handle_setup_action() {

		if (
			! isset($_POST['enigma_run_setup']) ||
			! isset($_POST['enigma_setup_nonce']) ||
			! wp_verify_nonce($_POST['enigma_setup_nonce'], 'enigma_setup_action')
		) {
			return;
		}

		$defaults = $this->get_default_theme_mods();

		foreach ($defaults as $key => $value) {
			if (! get_theme_mod($key)) {
				set_theme_mod($key, $value);
			}
		}

		update_option(self::OPTION_SETUP_COMPLETE, true);

		add_action('admin_notices', function () {
			echo '<div class="notice notice-success"><p>Enigma demo setup complete.</p></div>';
		});
	}

	/**
	 * Default theme mods (filterable)
	 */
	protected function get_default_theme_mods() {

		$defaults = [
			'contact_phone'   => '01234 567890',
			'contact_email'   => 'hello@example.com',
			'contact_address' => '123 High Street, London, UK'
		];

		return apply_filters('enigma_demo_defaults', $defaults);
	}
}
