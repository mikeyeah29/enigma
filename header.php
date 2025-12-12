<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" >

        <link rel="profile" href="https://gmpg.org/xfn/11">

        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo GOOGLE_ANALYTICS_CODE; ?>"></script>
        <script>

            // var user_ip = '<?php // echo rwd_get_user_ip(); ?>';
            var is_internal = <?php echo \Enigma\Theme\Traffic::is_internal() ? 'true' : 'false'; ?>;

            var ga_options = {
                'debug_mode': true
            };

            if (is_internal) {
                ga_options['traffic_type'] = 'internal';
            }

            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', '<?php echo GOOGLE_ANALYTICS_CODE; ?>', ga_options);
        </script>

        <?php wp_head(); ?>

    </head>
    <body <?php body_class(); ?>>

        <?php
            // Ensure the `wp_body_open` hook is available for themes with WordPress 5.2 or later.
            if ( function_exists( 'wp_body_open' ) ) {
                wp_body_open();
            }
        ?>

        <?php

            $header_layout = get_theme_mod('header_layout', 'default');

            if ($header_layout == 'minimal') {
                get_template_part('template-parts/header', 'minimal');
            } elseif ($header_layout == 'centered') {
                get_template_part('template-parts/header', 'centered');
            } else {
                get_template_part('template-parts/header', 'default');
            }

        ?>