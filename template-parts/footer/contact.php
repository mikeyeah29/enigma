<?php
    $contact_address = $args['contact_address'];
    $contact_email = $args['contact_email'];
    $contact_phone = $args['contact_phone'];
?>

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
    <?php if($contact_email): ?>
    <li>
        <a href="mailto:<?php echo $contact_email; ?>">
            <?php echo $contact_email; ?>
        </a>
    </li>
    <?php endif; ?>
    <?php if($contact_phone): ?>
    <li>
        <a href="tel:<?php echo $contact_phone; ?>">
            <?php echo $contact_phone; ?>
        </a>
    </li>
    <?php endif; ?>
</ul>