    
<?php

    $contact_address = get_theme_mod('contact_address', '');
    $contact_address = explode("\n", $contact_address);

    $contact_email = get_theme_mod('contact_email', '');
    $contact_phone = get_theme_mod('contact_phone', '');

    $social_facebook = get_theme_mod('social_facebook', '');
    $social_linkedin = get_theme_mod('social_linkedin', '');
    $social_youtube = get_theme_mod('social_youtube', '');
    $social_instagram = get_theme_mod('social_instagram', '');

    $social_icon_style = '-light';

?>
    
    <footer class="footer">

        <div class="container container--full">
            <div class="d-md-flex">
                <div class="w-md-33">
                    <div class="footer-logo">
                        <?php if (has_custom_logo()) : ?>
                            <?php the_custom_logo(); ?>
                        <?php endif; ?>
                    </div>
                    <?php if($contact_address): ?>
                        <address>
                            <?php foreach($contact_address as $line): ?>
                                <?php echo $line; ?></br>
                            <?php endforeach; ?>
                        </address>
                    <?php endif; ?>
                    <ul class="ul-reset footer-contact">
                        <li>
                            <a href="mailto:<?php echo $contact_email; ?>">
                                <?php echo $contact_email; ?>
                            </a>
                        </li>
                        <li>
                            <a href="tel:<?php echo $contact_phone; ?>">
                                <?php echo $contact_phone; ?>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="w-md-33">
                    <h2 class="hdln-2 txt-xl">Legal</h2>
                    <?php wp_nav_menu(array('theme_location' => 'footer-one')); ?>
                </div>  
                <div class="w-md-33">
                    <h2 class="hdln-2 txt-xl">Social</h2>
                    <ul class="ul-reset footer-social">
                        <?php if($social_facebook): ?>
                            <li>
                                <a href="<?php echo $social_facebook; ?>">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/social/facebook<?php echo $social_icon_style; ?>.png" alt="Facebook Icon" />
                                </a>
                            </li>
                        <?php endif; ?>
                        <?php if($social_linkedin): ?>
                            <li>
                                <a href="<?php echo $social_linkedin; ?>">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/social/linkedin<?php echo $social_icon_style; ?>.png" alt="LinkedIn Icon" />
                                </a>
                            </li>
                        <?php endif; ?>
                        <?php if($social_youtube): ?>
                            <li>
                                <a href="<?php echo $social_youtube; ?>">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/social/youtube<?php echo $social_icon_style; ?>.png" alt="YouTube Icon" />
                                </a>
                            </li>
                        <?php endif; ?>
                        <?php if($social_instagram): ?>
                            <li>
                                <a href="<?php echo $social_instagram; ?>">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/social/instagram<?php echo $social_icon_style; ?>.png" alt="Instagram Icon" />
                                </a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>

            <hr />
            
            <div class="d-flex justify-content-between">
                <p class="legal-text mb-0">&copy; <?php echo date('Y'); ?> <?php echo get_bloginfo('name'); ?> | All Rights Reserved</p>
                <p class="legal-text mb-0">Website made by <a href="https://rockettwd.co.uk" target="_blank" class="txt-underline">RockettWD</a></p>
            </div>

        </div>

        <?php wp_footer(); ?>

    </footer>

    </body>
</html>
