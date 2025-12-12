<?php

namespace Enigma\Theme;

class Social_Customizer {

    public static function register($wp_customize) {

        $wp_customize->add_section('social_options', array(
            'title'    => __('Social Options', 'enigma'),
            'priority' => 31,
        ));

        $wp_customize->add_setting('social_facebook', array(
            'default'   => '',
            'transport' => 'refresh',
        ));

        $wp_customize->add_control('social_facebook', array(
            'label'    => __('Social Facebook URL', 'enigma'),
            'section'  => 'social_options',
            'settings' => 'social_facebook',
            'type'     => 'text',
        ));

        $wp_customize->add_setting('social_linkedin', array(
            'default'   => '',
            'transport' => 'refresh',
        ));

        $wp_customize->add_control('social_linkedin', array(
            'label'    => __('Social LinkedIn URL', 'enigma'),
            'section'  => 'social_options',
            'settings' => 'social_linkedin',
            'type'     => 'text',
        ));

        $wp_customize->add_setting('social_youtube', array(
            'default'   => '',
            'transport' => 'refresh',
        ));

        $wp_customize->add_control('social_youtube', array(
            'label'    => __('Social YouTube URL', 'enigma'),
            'section'  => 'social_options',
            'settings' => 'social_youtube',
            'type'     => 'text',
        ));

        $wp_customize->add_setting('social_instagram', array(
            'default'   => '',
            'transport' => 'refresh',
        ));
        
        $wp_customize->add_control('social_instagram', array(
            'label'    => __('Social Instagram URL', 'enigma'),
            'section'  => 'social_options',
            'settings' => 'social_instagram',
            'type'     => 'text',
        ));
    }

}
