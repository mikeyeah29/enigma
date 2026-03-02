    
<?php

    $contact_address = get_theme_mod('contact_address', '');
    $contact_address = explode("\n", $contact_address);

    $contact_email = get_theme_mod('contact_email', '');
    $contact_phone = get_theme_mod('contact_phone', '');

    $footer_bg_color = get_theme_mod('header_bg_color', 'white');
    $footer_text_color = get_theme_mod('header_text_color', 'black');
    $cookie_notice_message = get_theme_mod(
        'cookie_notice_message',
        'We use cookies to ensure that we give you the best experience on our website. If you continue to use this site we will assume that you are happy with it.'
    );

    $footer_bg_color_class = ($footer_bg_color) ? 'has-' . $footer_bg_color . '-background-color' : '';
    $footer_text_color_class = ($footer_text_color) ? 'has-' . $footer_text_color . '-color' : '';

    $menu_name = enigma_get_menu_name('footer-one', 'Legal');

?>
    
    <footer class="footer <?php echo $footer_bg_color_class; ?> <?php echo $footer_text_color_class; ?>">

        <div class="container container--full">
            <div class="d-md-flex">
                <div class="w-md-33 mb-1 mb-md-0">
                    <?php get_template_part('template-parts/footer/contact', null, [
                        'contact_address' => $contact_address,
                        'contact_email' => $contact_email,
                        'contact_phone' => $contact_phone,
                    ]); ?>
                </div>
                <div class="w-md-33 mb-1 mb-md-0">
                    <h2 class="hdln-2 has-md-font-size"><?php echo $menu_name; ?></h2>
                    <?php wp_nav_menu(array('theme_location' => 'footer-one')); ?>
                </div>  
                <div class="w-md-33">
                    <h2 class="hdln-2 has-md-font-size">Social</h2>
                    <?php get_template_part('template-parts/footer/socials', null, [
                        'facebook' => get_theme_mod('social_facebook', ''),
                        'linkedin' => get_theme_mod('social_linkedin', ''),
                        'youtube' => get_theme_mod('social_youtube', ''),
                        'instagram' => get_theme_mod('social_instagram', ''),
                        'icon_style' => '-light',
                    ]); ?>
                    <?php get_template_part('template-parts/footer/accreditations'); ?>
                </div>
            </div>

            <hr />
            
            <div class="d-md-flex justify-content-between">
                <p class="legal-text mb-0">&copy; <?php echo date('Y'); ?> <?php echo get_bloginfo('name'); ?> | All Rights Reserved</p>
                <p class="legal-text mb-0">Website made by <a href="https://rockettwd.co.uk" target="_blank" class="txt-underline">RockettWD</a></p>
            </div>

        </div>

        <?php wp_footer(); ?>

    </footer>

    <?php if (!empty($cookie_notice_message)) : ?>
        <div id="enigma-cookie-notice" class="enigma-cookie-notice" hidden aria-live="polite" role="region" aria-label="Cookie notice">
            <div class="enigma-cookie-notice__message">
                <?php echo wp_kses_post(wpautop($cookie_notice_message)); ?>
            </div>
            <button type="button" id="enigma-cookie-notice-accept" class="enigma-cookie-notice__button">
                <?php esc_html_e('OK', 'enigma'); ?>
            </button>
        </div>
    <?php endif; ?>

    </body>
</html>
