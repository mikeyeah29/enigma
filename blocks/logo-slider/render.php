<?php
/**
 * Logo Slider block render
 *
 * @var array  $attributes
 * @var string $content
 */

$block_props = get_block_wrapper_attributes([
	'class' => 'enigma-logo-slider',
]);
?>

<div <?php echo $block_props; ?>>
	<div class="blaze-slider">
		<div class="blaze-container">
			<div class="blaze-track-container">
				<div class="blaze-track">
					<?php
					// Output logos added via InnerBlocks
					echo $content;

					// Duplicate for continuous scrolling
					echo $content;
					?>
				</div>
			</div>
		</div>
	</div>
</div>
