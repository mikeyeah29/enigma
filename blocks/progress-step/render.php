<?php
/**
 * Render callback for Progress Step block.
 *
 * @var array $attributes
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$attributes = wp_parse_args(
	$attributes,
	array(
		'alignment'   => 'left',
		'number'      => '01',
		'heading'     => '',
		'description' => 'In your initial consultation ...',
		'buttonLabel' => '',
		'buttonUrl'   => '#',
	)
);

$alignment = 'right' === $attributes['alignment'] ? 'right' : 'left';

$wrapper_attributes = get_block_wrapper_attributes(
	array(
		'class' => 'enigma-progress-step enigma-progress-step--' . $alignment,
	)
);
?>

<div <?php echo $wrapper_attributes; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>
	<div class="enigma-progress-step__inner">
		<div class="enigma-progress-step__number"><?php echo esc_html( $attributes['number'] ); ?></div>

		<div class="enigma-progress-step__content">
			<?php if ( ! empty( $attributes['heading'] ) ) : ?>
				<p class="enigma-progress-step__heading" data-aos="fade-up" data-aos-delay="200"><?php echo wp_kses_post( $attributes['heading'] ); ?></p>
			<?php endif; ?>

			<?php if ( ! empty( $attributes['description'] ) ) : ?>
				<p class="enigma-progress-step__description" data-aos="fade-up" data-aos-delay="200"><?php echo wp_kses_post( $attributes['description'] ); ?></p>
			<?php endif; ?>

			<?php if ( ! empty( $attributes['buttonLabel'] ) ) : ?>
				<a class="wp-block-button__link enigma-progress-step__button" href="<?php echo esc_url( $attributes['buttonUrl'] ); ?>" data-aos="fade-up" data-aos-delay="200">
					<?php echo esc_html( $attributes['buttonLabel'] ); ?>
				</a>
			<?php endif; ?>
		</div>
	</div>
</div>
