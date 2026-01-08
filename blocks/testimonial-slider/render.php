<?php
/**
 * Server render: Testimonial (Reviews) Slider block
 *
 * @var array $attributes
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$attributes = wp_parse_args(
    $attributes,
    [
        'limit'   => 5,
        'preheadline' => 'Client Testimonials',
        'headline' => 'From Those I’ve Worked With',
    ]
);

$background = ! empty( $attributes['backgroundColor'] )
	? 'var(--wp--preset--color--' . $attributes['backgroundColor'] . ')'
	: 'transparent';

$text = ! empty( $attributes['textColor'] )
	? 'var(--wp--preset--color--' . $attributes['textColor'] . ')'
	: 'inherit';


get_template_part(
    'template-parts/blocks/testimonial-slider/testimonial-slider',
    null,
    [
        'attributes' => $attributes,
        'content'    => $content,
        'styles'     => [
			'background' => $background,
			'color'      => $text,
		],
    ]
);

?>

