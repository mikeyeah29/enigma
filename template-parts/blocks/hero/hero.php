<?php
/**
 * Template-part for Hero block output
 *
 * @var array $args
 */
$attributes = $args['attributes'] ?? [];
$style      = $args['style'] ?? '';
$content    = $args['content'] ?? '';

$wrapper_attributes = get_block_wrapper_attributes( [
    'class' => ! empty( $attributes['responsiveHeight'] )
        ? 'is-' . esc_attr( $attributes['responsiveHeight'] )
        : '',
    'style' => $style,
] );
?>

<section <?php echo $wrapper_attributes; ?>>
    <div class="hero__inner">
        <?php echo $content; ?>
    </div>
    <div class="svg-divider-slant position-absolute has-transparent-background-color is-bottom left-0 w-100 ">
        <svg data-name="Layer 1" class="has-white-fill-color" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M1200 120L0 16.48 0 0 1200 0 1200 120z" class="shape-fill"></path>
        </svg>
    </div>
</section>
