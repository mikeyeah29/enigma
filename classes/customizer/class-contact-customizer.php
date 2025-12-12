<?php

namespace Enigma\Theme;

class Contact_Customizer {

    public static function register($wp_customize) {

        $wp_customize->add_section('contact_options', array(
            'title'    => __('Contact Options', 'enigma'),
            'priority' => 31,
        ));

        $wp_customize->add_setting('contact_phone', array(
            'default'   => '',
            'transport' => 'refresh',
        ));

        $wp_customize->add_control('contact_phone', array(
            'label'    => __('Contact Phone', 'enigma'),
            'section'  => 'contact_options',
            'settings' => 'contact_phone',
            'type'     => 'text',
        ));

        $wp_customize->add_setting('contact_email', array(
            'default'   => '',
            'transport' => 'refresh',
        ));

        $wp_customize->add_control('contact_email', array(
            'label'    => __('Contact Email', 'enigma'),
            'section'  => 'contact_options',
            'settings' => 'contact_email',
            'type'     => 'text',
        ));

        $wp_customize->add_setting('contact_address', array(
            'default'   => '',
            'transport' => 'refresh',
        ));

        $wp_customize->add_control('contact_address', array(
            'label'    => __('Contact Address', 'enigma'),
            'section'  => 'contact_options',
            'settings' => 'contact_address',
            'type'     => 'textarea',
        ));
        
    }

}
