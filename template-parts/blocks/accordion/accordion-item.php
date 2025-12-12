<?php
/**
 * Template part for Accordion Item block
 *
 * @var array $attributes
 * @var string $content
 */

$id = $args['id'] ?? '';
$style = $args['style'] ?? '';
$content = $args['content'] ?? '';
$attributes = $args['attributes'] ?? [];

?>
<div class="rwd-accordion-item">
    <div class="rwd-accordion-heading">
        <?php echo esc_html( $attributes['heading'] ); ?>
        <span class="rwd-accordion-arrow">▼</span>
    </div>
    <div class="rwd-accordion-content">
        <?php echo $content; ?>
    </div>
</div>
