<?php
/**
 * Template part for Accordion block
 *
 * @var array $attributes
 * @var string $style
 * @var string $id
 * @var string $content
 */

$id = $args['id'] ?? '';
$style = $args['style'] ?? '';
$content = $args['content'] ?? '';
$attributes = $args['attributes'] ?? [];

$theme = $attributes['theme'] ?? 'default';

?>

<div <?php echo get_block_wrapper_attributes( [ 'class' => 'rwd-accordion theme-' . $theme ] ); ?> 
     <?php echo $id; ?> 
     style="<?php echo esc_attr( $style ); ?>">
    <?php echo $content; ?>
</div>
