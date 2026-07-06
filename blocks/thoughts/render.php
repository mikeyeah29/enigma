<?php
/**
 * Render callback for Thoughts block.
 *
 * @var array $attributes
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$attributes = wp_parse_args(
	$attributes,
	array(
		'thoughts'  => array(),
		'animation' => 'fade',
		'interval'  => 4500,
	)
);

$thoughts = is_array( $attributes['thoughts'] ) ? $attributes['thoughts'] : array();
$thoughts = array_values(
	array_filter(
		array_map(
			static function ( $thought ) {
				return is_string( $thought ) ? trim( $thought ) : '';
			},
			$thoughts
		)
	)
);

if ( empty( $thoughts ) ) {
	return;
}

$animation = 'fall' === $attributes['animation'] ? 'fall' : 'fade';
$interval  = isset( $attributes['interval'] ) ? (int) $attributes['interval'] : 4500;
$interval  = max( 2000, min( 10000, $interval ) );

$wrapper_attributes = get_block_wrapper_attributes(
	array(
		'class'          => 'enigma-thoughts enigma-thoughts--' . $animation,
		'data-animation' => $animation,
		'data-interval'  => $interval,
	)
);
?>

<div <?php echo $wrapper_attributes; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>
	<div class="enigma-thoughts__deck" aria-live="polite">
		<?php foreach ( $thoughts as $index => $thought ) : ?>
			<article
				class="enigma-thoughts__card<?php echo 0 === $index ? ' is-active' : ''; ?><?php echo 1 === $index ? ' is-next' : ''; ?><?php echo 2 === $index ? ' is-after-next' : ''; ?>"
				<?php echo 0 === $index ? '' : 'aria-hidden="true"'; ?>
			>
				<p><?php echo esc_html( $thought ); ?></p>
			</article>
		<?php endforeach; ?>
	</div>
</div>
