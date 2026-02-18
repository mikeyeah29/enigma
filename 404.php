<?php

get_header();
?>

<main id="primary" class="site-main">
    <div class="page-header">
        <div class="container container--wide">
            <h1><?php esc_html_e('404', 'enigma'); ?></h1>
            <p><?php esc_html_e('Sorry, the page you are looking for could not be found.', 'enigma'); ?></p>
        </div>
    </div>

    <section class="error-404 not-found">
        <div class="container container--wide">
            <div class="wp-block-button">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="wp-block-button__link has-secondary-background-color has-white-color has-rounded-border">
                    <?php esc_html_e('Back to Home', 'enigma'); ?>
                </a>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
