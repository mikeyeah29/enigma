<?php

namespace Enigma;

class Plugin_Check {

    // Required plugins (Must be installed)
    private static $required_plugins = [
        // Email
        'contact-form-7/wp-contact-form-7.php' => 'Contact Form 7',
        'wp-mail-smtp/wp_mail_smtp.php' => 'WP Mail SMTP',
        // Other
        'hide-admin-bar/hide_admin_bar.php' => 'Hide Admin Bar'
    ];

    // Recommended plugins (Optional but useful)
    private static $recommended_plugins = [
        // Performance
        'webp-converter-for-media/webp-converter-for-media.php' => 'WP Converter for Media',
        // SEO
        'wordpress-seo/wp-seo.php' => 'Yoast SEO',
        // Design
        'view-transitions/view-transitions.php' => 'View Transitions'
        // Security
    ];

    public function __construct() {
        add_action('admin_notices', [$this, 'check_required_plugins']);
        add_action('admin_notices', [$this, 'check_recommended_plugins']);
        add_action('admin_enqueue_scripts', [$this, 'enqueue_admin_scripts']);
        add_action('wp_ajax_enigma_dismiss_recommended_plugins', [$this, 'dismiss_recommended_plugins']);
    }

    public function check_required_plugins() {
        if (!current_user_can('manage_options')) {
            return; // Only show to admins
        }

        $missing_required = $this->get_missing_plugins(self::$required_plugins);

        if (empty($missing_required)) {
            return; // No missing required plugins
        }

        echo '<div class="notice notice-error"><p><strong>⚠ Required Plugins Missing:</strong></p><ul>';
        foreach ($missing_required as $plugin_name => $install_url) {
            echo "<li><strong>$plugin_name</strong> - <a href='$install_url' target='_blank'><em>Install Now</em></a></li>";
        }
        echo '</ul></div>';
    }

    public function check_recommended_plugins() {
        if (!current_user_can('manage_options')) {
            return; // Only show to admins
        }

        // Check if the user has dismissed this notice
        if (get_user_meta(get_current_user_id(), 'enigma_dismiss_recommended_plugins', true)) {
            return; // User dismissed, don't show notice
        }

        $missing_recommended = $this->get_missing_plugins(self::$recommended_plugins);

        if (empty($missing_recommended)) {
            return; // No missing recommended plugins
        }

        echo '<div class="notice notice-info enigma-recommended-notice">
            <p><strong>✅ Recommended Plugins Missing (Optional):</strong></p>
            <ul>';
        foreach ($missing_recommended as $plugin_name => $install_url) {
            echo "<li><strong>$plugin_name</strong> - <a href='$install_url' target='_blank'><em>Install Now</em></a></li>";
        }
        echo '</ul>
            <button type="button" class="notice-dismiss" id="enigma-dismiss-recommended">
                <span class="screen-reader-text">Dismiss this notice.</span>
            </button>
        </div>';
    }

    private function get_missing_plugins($plugin_list) {
        $missing_plugins = [];
        foreach ($plugin_list as $plugin_path => $plugin_name) {
            if (!is_plugin_active($plugin_path)) {
                $install_url = esc_url(network_admin_url('plugin-install.php?s=' . urlencode($plugin_name) . '&tab=search&type=term'));
                $missing_plugins[$plugin_name] = $install_url;
            }
        }
        return $missing_plugins;
    }

    public function enqueue_admin_scripts() {
        wp_enqueue_script('enigma-plugin-check', get_template_directory_uri() . '/js/enigma-plugin-check.js', ['jquery'], null, true);
        wp_localize_script('enigma-plugin-check', 'enigmaPluginCheck', [
            'ajaxurl' => admin_url('admin-ajax.php'),
            'nonce'   => wp_create_nonce('enigma_dismiss_nonce')
        ]);
    }

    public function dismiss_recommended_plugins() {
        check_ajax_referer('enigma_dismiss_nonce', 'nonce');

        if (current_user_can('manage_options')) {
            update_user_meta(get_current_user_id(), 'enigma_dismiss_recommended_plugins', true);
            wp_send_json_success();
        }

        wp_send_json_error();
    }
}
