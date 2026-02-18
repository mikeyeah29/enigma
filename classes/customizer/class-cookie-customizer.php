<?php

namespace Enigma\Theme;

class Cookie_Customizer {

    public static function register($wp_customize) {
        $wp_customize->add_section('cookie_notice_options', array(
            'title'    => __('Cookie Notice', 'enigma'),
            'priority' => 35,
        ));

        $wp_customize->add_setting('cookie_notice_message', array(
            'default'           => 'We use cookies to ensure that we give you the best experience on our website. If you continue to use this site we will assume that you are happy with it.',
            'transport'         => 'refresh',
            'sanitize_callback' => 'wp_kses_post',
        ));

        $wp_customize->add_control('cookie_notice_message', array(
            'label'       => __('Cookie Notice Text', 'enigma'),
            'description' => __('Plain textarea (you can still add basic HTML links if needed).', 'enigma'),
            'section'     => 'cookie_notice_options',
            'settings'    => 'cookie_notice_message',
            'type'        => 'textarea',
        ));
    }
}
