<?php
    $facebook = $args['facebook'];
    $linkedin = $args['linkedin'];
    $youtube = $args['youtube'];
    $instagram = $args['instagram'];
    $icon_style = $args['icon_style'];
?>

<ul class="ul-reset footer-social">
    <?php if($facebook): ?>
        <li>
            <a href="<?php echo $facebook; ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/img/social/facebook<?php echo $icon_style; ?>.png" alt="Facebook Icon" />
            </a>
        </li>
    <?php endif; ?>
    <?php if($linkedin): ?>
        <li>
            <a href="<?php echo $linkedin; ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/img/social/linkedin<?php echo $icon_style; ?>.png" alt="LinkedIn Icon" />
            </a>
        </li>
    <?php endif; ?>
    <?php if($youtube): ?>
        <li>
            <a href="<?php echo $youtube; ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/img/social/youtube<?php echo $icon_style; ?>.png" alt="YouTube Icon" />
            </a>
        </li>
    <?php endif; ?>
    <?php if($instagram): ?>
        <li>
            <a href="<?php echo $instagram; ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/img/social/instagram<?php echo $icon_style; ?>.png" alt="Instagram Icon" />
            </a>
        </li>
    <?php endif; ?>
</ul>