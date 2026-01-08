<?php

$attributes = $args['attributes'] ?? [];
$styles = $args['styles'] ?? [];

$preheadline = $attributes['preheadline'];
$headline = $attributes['headline'];

// Build inline style string
$style = '';
foreach ( $styles as $key => $value ) {
    $style .= $key . ':' . $value . ';';
}

$wrapper_attributes = get_block_wrapper_attributes( [
	'style' => $style,
	'class' => 'enigma-testimonial-slider blaze-slider',
	'data-slider' => 'reviews',
] );

$query = new WP_Query( [
	'post_type'           => 'review',
	'posts_per_page'      => $limit,
	'post_status'         => 'publish',
	'ignore_sticky_posts' => true,
] );

?>

<div <?php echo $wrapper_attributes; ?>>
	<div class="container">

        <p class="eyebrow">
            <?php echo esc_html( $preheadline ); ?>
        </p>

        <h2 class="hdln-2">
            <?php echo esc_html( $headline ); ?>
        </h2>

		<div class="blaze-track-container">

			<svg class="blaze-track-icon" width="100" height="100" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M88.7543 16.6665C90.4668 16.6665 91.6668 17.9707 91.6668 19.429C91.6668 20.4623 91.0626 21.5748 89.5959 22.354C82.146 26.304 73.521 39.9624 73.521 48.3874C86.0876 48.004 91.546 59.1457 91.546 66.129C91.546 74.4915 84.3043 83.3332 73.596 83.3332C60.096 83.3332 53.471 72.7207 53.471 61.2207C53.471 36.304 81.946 16.6665 88.7543 16.6665ZM43.6168 16.6665C45.3251 16.6665 46.5293 17.9707 46.5293 19.429C46.5293 20.4623 45.9251 21.5748 44.4585 22.354C37.0085 26.304 28.3835 39.9624 28.3835 48.3874C40.9501 48.004 46.4085 59.1457 46.4085 66.129C46.4085 74.4915 39.1626 83.3332 28.4585 83.3332C14.9543 83.3332 8.3335 72.7207 8.3335 61.2207C8.3335 36.304 36.8043 16.6665 43.6168 16.6665Z" fill="#862E48"/>
			</svg>
			
			<div class="blaze-track">

				<?php if ( $query->have_posts() ) : ?>
					<?php while ( $query->have_posts() ) : $query->the_post(); ?>

						<div class="blaze-slide enigma-testimonial-slide">

							<div class="enigma-testimonial-content">
								<?php echo wp_kses_post( wpautop( get_the_content() ) ); ?>
							</div>

							<div class="enigma-testimonial-meta">
								<strong class="enigma-testimonial-author">
									- <?php echo esc_html( get_the_title() ); ?>
								</strong>
							</div>

						</div>

					<?php endwhile; ?>
				<?php else : ?>

					<p><?php esc_html_e( 'No reviews found.', 'enigma' ); ?></p>

				<?php endif; ?>

			</div>

			<svg class="blaze-track-icon" width="100" height="100" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M11.246 83.3335C9.53346 83.3335 8.33347 82.0293 8.33347 80.571C8.33347 79.5377 8.93763 78.4252 10.4043 77.646C17.8543 73.696 26.4793 60.0376 26.4793 51.6126C13.9126 51.996 8.45429 40.8543 8.45429 33.871C8.45429 25.5084 15.696 16.6668 26.4043 16.6668C39.9043 16.6668 46.5293 27.2793 46.5293 38.7793C46.5293 63.696 18.0543 83.3335 11.246 83.3335ZM56.3834 83.3335C54.6751 83.3335 53.4709 82.0293 53.4709 80.571C53.4709 79.5377 54.0751 78.4252 55.5418 77.646C62.9918 73.696 71.6168 60.0376 71.6168 51.6126C59.0501 51.996 53.5918 40.8543 53.5918 33.871C53.5918 25.5084 60.8376 16.6668 71.5418 16.6668C85.0459 16.6668 91.6667 27.2793 91.6667 38.7793C91.6667 63.696 63.1959 83.3335 56.3834 83.3335Z" fill="#862E48"/>
			</svg>

		</div>

		<!-- optional nav + pagination -->
		<button class="blaze-prev" aria-label="<?php esc_attr_e( 'Previous', 'enigma' ); ?>">‹</button>
		<button class="blaze-next" aria-label="<?php esc_attr_e( 'Next', 'enigma' ); ?>">›</button>

		<div class="blaze-pagination"></div>
	</div>
</div>

<?php
wp_reset_postdata();
?>
