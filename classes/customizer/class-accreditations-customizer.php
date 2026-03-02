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
        if (! function_exists('enigma_get_accreditation_options')) {
            return array();
        }

        $choices = enigma_get_accreditation_options();

        if (! is_array($choices)) {
            return array();
        }

        $normalized = array();
        foreach ($choices as $slug => $label) {
            $slug = sanitize_title((string) $slug);
            if ($slug === '') {
                continue;
            }
            $normalized[$slug] = (string) $label;
        }

        return $normalized;
    }

    public static function sanitize_checkbox($checked) {
        return (bool) $checked;
    }
}
