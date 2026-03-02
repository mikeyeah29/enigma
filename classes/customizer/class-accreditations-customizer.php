<?php

namespace Enigma\Theme;

class Accreditations_Customizer {

    public static function register($wp_customize) {
        $wp_customize->add_section('footer_accreditations_options', array(
            'title'    => __('Footer Accreditations', 'enigma'),
            'priority' => 36,
        ));

        $choices = self::get_choices();

        if (empty($choices)) {
            $wp_customize->add_setting('footer_accreditations_none', array(
                'default' => '',
            ));

            $wp_customize->add_control('footer_accreditations_none', array(
                'label'       => __('No accreditation files found in /img/accreditations', 'enigma'),
                'section'     => 'footer_accreditations_options',
                'settings'    => 'footer_accreditations_none',
                'type'        => 'hidden',
                'description' => __('Add image files and refresh Customizer.', 'enigma'),
            ));
            return;
        }

        $index = 0;
        foreach ($choices as $slug => $label) {
            $setting_id = 'footer_accreditation_' . $slug;
            $wp_customize->add_setting($setting_id, array(
                'default'           => false,
                'transport'         => 'refresh',
                'sanitize_callback' => array(__CLASS__, 'sanitize_checkbox'),
            ));

            $wp_customize->add_control($setting_id, array(
                'label'       => $label,
                'description' => $index === 0 ? __('Select one or more accreditation logos to show in the footer.', 'enigma') : '',
                'section'     => 'footer_accreditations_options',
                'settings'    => $setting_id,
                'type'        => 'checkbox',
            ));

            $index++;
        }
    }

    private static function get_choices() {
        $files = glob(get_theme_file_path('img/accreditations/*.{png,jpg,jpeg,webp,svg}'), GLOB_BRACE);
        $choices = array();

        $labels = array(
            'bapc' => 'BAPC',
            'br'   => 'BR',
            'psa'  => 'PSA',
        );

        if (! is_array($files)) {
            return $choices;
        }

        foreach ($files as $file) {
            $basename = basename($file);
            if (strpos($basename, '.') === 0) {
                continue;
            }

            $slug = sanitize_title(pathinfo($basename, PATHINFO_FILENAME));
            $choices[$slug] = $labels[$slug] ?? strtoupper($slug);
        }

        ksort($choices);

        return $choices;
    }

    public static function sanitize_checkbox($checked) {
        return (bool) $checked;
    }
}
