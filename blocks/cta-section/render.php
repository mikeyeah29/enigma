<?php
/**
 * Server render: CTA Section block
 *
 * @var array  $attributes
 * @var string $content InnerBlocks content
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$attributes = wp_parse_args(
	$attributes,
	array(
		'backgroundImageUrl'   => '',
		'backgroundFocalPoint' => array(
			'x' => 0.5,
			'y' => 0.5,
		),
		'overlayColor'         => '#E7E2DE',
		'overlayOpacity'       => 82,
	)
);

$styles = array();

if ( ! empty( $attributes['backgroundImageUrl'] ) ) {
	$styles[] = 'background-image:url(' . esc_url( $attributes['backgroundImageUrl'] ) . ')';
}

$focal_point = is_array( $attributes['backgroundFocalPoint'] )
	? wp_parse_args(
		$attributes['backgroundFocalPoint'],
		array(
			'x' => 0.5,
			'y' => 0.5,
		)
	)
	: array(
		'x' => 0.5,
		'y' => 0.5,
	);

$focal_x = max( 0, min( 1, (float) $focal_point['x'] ) );
$focal_y = max( 0, min( 1, (float) $focal_point['y'] ) );

$styles[] = 'background-position:' . round( $focal_x * 100 ) . '% ' . round( $focal_y * 100 ) . '%';

$overlay_color = ! empty( $attributes['overlayColor'] ) ? $attributes['overlayColor'] : '#E7E2DE';
$styles[]      = '--enigma-cta-overlay-color:' . esc_attr( $overlay_color );

$overlay_opacity = isset( $attributes['overlayOpacity'] ) ? (float) $attributes['overlayOpacity'] : 82;
$overlay_opacity = max( 0, min( 100, $overlay_opacity ) );
$styles[]        = '--enigma-cta-overlay-opacity:' . esc_attr( $overlay_opacity / 100 );

$wrapper_attributes = get_block_wrapper_attributes(
	array(
		'class' => 'enigma-cta-section',
		'style' => implode( ';', $styles ) . ';',
	)
);
?>

<section <?php echo $wrapper_attributes; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>
	<div class="container container--wide position-relative">
		<div class="enigma-cta-section__overlay"></div>
		<div class="enigma-cta-section__inner position-relative">
			<?php echo $content; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
		</div>
	</div>
</section>
