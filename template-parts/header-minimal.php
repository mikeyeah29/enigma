<?php
/**
 * Default Header Minimal Template
 */

$burger_type = get_theme_mod('burger_menu_style', 'collapse');

$header_bg_color = get_theme_mod('header_bg_color', '');
$header_text_color = get_theme_mod('header_text_color', '');
$header_contact_bg_color = get_theme_mod('header_contact_bg_color', '');
$header_contact_text_color = get_theme_mod('header_contact_text_color', '');

// die($header_contact_text_color);

$header_blur_background = get_theme_mod('header_blur_background', false);
$header_bg_on_scroll = get_theme_mod('header_bg_on_scroll', false);

$header_bg_color_class = ($header_bg_color) ? 'has-' . $header_bg_color . '-background-color' : '';
$header_text_color_class = ($header_text_color) ? 'has-' . $header_text_color . '-color' : '';
$header_contact_bg_color_class = ($header_contact_bg_color) ? 'has-' . $header_contact_bg_color . '-background-color' : '';
$header_contact_text_color_class = ($header_contact_text_color) ? 'has-' . $header_contact_text_color . '-color' : '';

$apply_blur_background = ($header_blur_background && !$header_bg_on_scroll) ? true : false;

$header_title = get_bloginfo('name');

if(is_singular('demo')) {
    $header_title = get_the_title();
}

?>

<header class="header-minimal <?php echo false ? 'is-sticky' : ''; ?> <?php echo ( !$header_bg_on_scroll ? $header_bg_color_class : '' ); ?> <?php echo ( $apply_blur_background ? 'blur-background' : '' ); ?>">

    <div class="header-minimal-top">

        <div class="container-fluid">

            <div class="d-flex justify-content-between align-items-center">
                <div class="header-minimal__logo">
                    <a href="<?php echo esc_url(home_url('/')); ?>">
                        <?php if (has_custom_logo()) : ?>
                            <?php the_custom_logo(); ?>
                        <?php else : ?>
                            <h1 class="<?php echo $header_text_color_class; ?>"><?php echo $header_title; ?></h1>
                        <?php endif; ?>
                    </a>
                </div>
                <div class="header-minimal__menu <?php echo $header_text_color_class; ?>">
                    <?php wp_nav_menu(array(
                        'theme_location' => 'primary', 
                        'container' => false, 
                        'menu_class' => 'header-minimal__menu-list',
                        'menu_id' => 'header-minimal__menu-list',
                    )); ?>
                </div>
            </div>

        </div>
        
    </div>

    <div class="header-minimal-bottom <?php echo $header_contact_bg_color_class; ?>">
        <div class="container-fluid">

            <div class="d-flex align-items-center justify-content-between">
        
                <div class="d-flex align-items-center">
                    <a href="mailto:<?php echo get_theme_mod('contact_email', ''); ?>" class="header-minimal__email d-flex align-items-center <?php echo $header_contact_text_color_class; ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                        </svg>
                        <?php echo get_theme_mod('contact_email', ''); ?>
                    </a>
                    <a href="tel:<?php echo get_theme_mod('contact_phone', ''); ?>" class="header-minimal__phone d-flex align-items-center <?php echo $header_contact_text_color_class; ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                        </svg>
                        <?php echo get_theme_mod('contact_phone', ''); ?>
                    </a>
                </div>

                <div class="header-minimal__menu-social">
                    <ul class="ul-reset">
                        <?php if(get_theme_mod('social_facebook', '')): ?>
                            <li>
                                <a href="<?php echo get_theme_mod('social_facebook', ''); ?>">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                        <?php endif; ?>
                        <?php if(get_theme_mod('social_linkedin', '')): ?>
                            <li>
                                <a href="<?php echo get_theme_mod('social_linkedin', ''); ?>">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </li>
                        <?php endif; ?>
                        <?php if(get_theme_mod('social_youtube', '')): ?>
                            <li>
                                <a href="<?php echo get_theme_mod('social_youtube', ''); ?>">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </li>
                        <?php endif; ?>
                        <?php if(get_theme_mod('social_instagram', '')): ?>
                            <li>
                                <a href="<?php echo get_theme_mod('social_instagram', ''); ?>">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>

            </div>

        </div>
    </div>

</header>