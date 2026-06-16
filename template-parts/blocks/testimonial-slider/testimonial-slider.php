<?php

$attributes = $args['attributes'] ?? [];
$styles = $args['styles'] ?? [];

$preheadline = $attributes['preheadline'];
$headline = $attributes['headline'];
$limit = $attributes['limit'] ?? 5;

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

        <!-- <p class="eyebrow">
            <?php // echo esc_html( $preheadline ); ?>
        </p>

        <h2 class="hdln-2">
            <?php // echo esc_html( $headline ); ?>
        </h2> -->

		<svg width="91" height="68" viewBox="0 0 91 68" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M37.8522 0V27.7162C37.8522 49.1062 23.7055 63.6037 3.79167 67.5L0.0189583 59.4338C9.24029 55.995 15.1667 45.7913 15.1667 37.5H0V0H37.8522ZM91 0V27.7162C91 49.1062 76.7888 63.6075 56.875 67.5L53.0985 59.4338C62.3236 55.995 68.25 45.7913 68.25 37.5H53.1478V0H91Z" fill="#C7C3B0"/>
		</svg>


		<div class="blaze-track-container">

			<!-- <svg class="blaze-track-icon" width="100" height="100" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M88.7543 16.6665C90.4668 16.6665 91.6668 17.9707 91.6668 19.429C91.6668 20.4623 91.0626 21.5748 89.5959 22.354C82.146 26.304 73.521 39.9624 73.521 48.3874C86.0876 48.004 91.546 59.1457 91.546 66.129C91.546 74.4915 84.3043 83.3332 73.596 83.3332C60.096 83.3332 53.471 72.7207 53.471 61.2207C53.471 36.304 81.946 16.6665 88.7543 16.6665ZM43.6168 16.6665C45.3251 16.6665 46.5293 17.9707 46.5293 19.429C46.5293 20.4623 45.9251 21.5748 44.4585 22.354C37.0085 26.304 28.3835 39.9624 28.3835 48.3874C40.9501 48.004 46.4085 59.1457 46.4085 66.129C46.4085 74.4915 39.1626 83.3332 28.4585 83.3332C14.9543 83.3332 8.3335 72.7207 8.3335 61.2207C8.3335 36.304 36.8043 16.6665 43.6168 16.6665Z" fill="#862E48"/>
			</svg> -->
			
			<div class="blaze-track">

				<?php if ( $query->have_posts() ) : ?>
					<?php while ( $query->have_posts() ) : $query->the_post(); ?>

						<div class="blaze-slide enigma-testimonial-slide">

							<div class="enigma-testimonial-content clamp-6">
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

			<!-- <svg class="blaze-track-icon" width="100" height="100" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M11.246 83.3335C9.53346 83.3335 8.33347 82.0293 8.33347 80.571C8.33347 79.5377 8.93763 78.4252 10.4043 77.646C17.8543 73.696 26.4793 60.0376 26.4793 51.6126C13.9126 51.996 8.45429 40.8543 8.45429 33.871C8.45429 25.5084 15.696 16.6668 26.4043 16.6668C39.9043 16.6668 46.5293 27.2793 46.5293 38.7793C46.5293 63.696 18.0543 83.3335 11.246 83.3335ZM56.3834 83.3335C54.6751 83.3335 53.4709 82.0293 53.4709 80.571C53.4709 79.5377 54.0751 78.4252 55.5418 77.646C62.9918 73.696 71.6168 60.0376 71.6168 51.6126C59.0501 51.996 53.5918 40.8543 53.5918 33.871C53.5918 25.5084 60.8376 16.6668 71.5418 16.6668C85.0459 16.6668 91.6667 27.2793 91.6667 38.7793C91.6667 63.696 63.1959 83.3335 56.3834 83.3335Z" fill="#862E48"/>
			</svg> -->

		</div>

		<!-- optional nav + pagination -->
		<!-- <button class="blaze-prev" aria-label="<?php // esc_attr_e( 'Previous', 'enigma' ); ?>">‹</button>
		<button class="blaze-next" aria-label="<?php // esc_attr_e( 'Next', 'enigma' ); ?>">›</button> -->

		<button class="blaze-prev" aria-label="<?php esc_attr_e( 'Previous', 'enigma' ); ?>">
			<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
			<mask id="path-1-inside-1_72_72" fill="white">
			<path fill-rule="evenodd" clip-rule="evenodd" d="M2.117 12L9.644 18.235L9 19L0 11.479L9 4L9.645 4.764L2.116 11H24V12H2.117Z"/>
			</mask>
			<path fill-rule="evenodd" clip-rule="evenodd" d="M2.117 12L9.644 18.235L9 19L0 11.479L9 4L9.645 4.764L2.116 11H24V12H2.117Z" fill="#1F2C39"/>
			<path d="M2.117 12L-1.7105 16.6206L-14.5319 6H2.117V12ZM9.644 18.235L13.4715 13.6144L18.129 17.4724L14.2341 22.0991L9.644 18.235ZM9 19L13.5901 22.8641L9.73997 27.4376L5.15256 23.604L9 19ZM0 11.479L-3.84744 16.083L-9.37231 11.4661L-3.83475 6.86438L0 11.479ZM9 4L5.16525 -0.614619L9.7441 -4.41964L13.5846 0.129458L9 4ZM9.645 4.764L14.2296 0.893458L18.1367 5.52141L13.4723 9.38483L9.645 4.764ZM2.116 11V17H-14.5343L-1.71127 6.37917L2.116 11ZM24 11V5H30V11H24ZM24 12H30V18H24V12ZM2.117 12L5.94451 7.37937L13.4715 13.6144L9.644 18.235L5.8165 22.8556L-1.7105 16.6206L2.117 12ZM9.644 18.235L14.2341 22.0991L13.5901 22.8641L9 19L4.40991 15.1359L5.05391 14.3709L9.644 18.235ZM9 19L5.15256 23.604L-3.84744 16.083L0 11.479L3.84744 6.87496L12.8474 14.396L9 19ZM0 11.479L-3.83475 6.86438L5.16525 -0.614619L9 4L12.8347 8.61462L3.83475 16.0936L0 11.479ZM9 4L13.5846 0.129458L14.2296 0.893458L9.645 4.764L5.06036 8.63454L4.41536 7.87054L9 4ZM9.645 4.764L13.4723 9.38483L5.94326 15.6208L2.116 11L-1.71127 6.37917L5.81774 0.143173L9.645 4.764ZM2.116 11V5H24V11V17H2.116V11ZM24 11H30V12H24H18V11H24ZM24 12V18H2.117V12V6H24V12Z" fill="#1F2C39" mask="url(#path-1-inside-1_72_72)"/>
			</svg>
		</button>
		<button class="blaze-next" aria-label="<?php esc_attr_e( 'Next', 'enigma' ); ?>">
			<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
			<mask id="path-1-inside-1_72_69" fill="white">
			<path fill-rule="evenodd" clip-rule="evenodd" d="M21.883 12L14.356 18.235L15 19L24 11.479L15 4L14.355 4.764L21.884 11H0V12H21.883Z"/>
			</mask>
			<path fill-rule="evenodd" clip-rule="evenodd" d="M21.883 12L14.356 18.235L15 19L24 11.479L15 4L14.355 4.764L21.884 11H0V12H21.883Z" fill="#1F2C39"/>
			<path d="M21.883 12L25.7105 16.6206L38.5319 6H21.883V12ZM14.356 18.235L10.5285 13.6144L5.87103 17.4724L9.76591 22.0991L14.356 18.235ZM15 19L10.4099 22.8641L14.26 27.4376L18.8474 23.604L15 19ZM24 11.479L27.8474 16.083L33.3723 11.4661L27.8347 6.86438L24 11.479ZM15 4L18.8347 -0.614619L14.2559 -4.41964L10.4154 0.129458L15 4ZM14.355 4.764L9.77036 0.893458L5.86326 5.52141L10.5277 9.38483L14.355 4.764ZM21.884 11V17H38.5343L25.7113 6.37917L21.884 11ZM0 11V5H-6V11H0ZM0 12H-6V18H0V12ZM21.883 12L18.0555 7.37937L10.5285 13.6144L14.356 18.235L18.1835 22.8556L25.7105 16.6206L21.883 12ZM14.356 18.235L9.76591 22.0991L10.4099 22.8641L15 19L19.5901 15.1359L18.9461 14.3709L14.356 18.235ZM15 19L18.8474 23.604L27.8474 16.083L24 11.479L20.1526 6.87496L11.1526 14.396L15 19ZM24 11.479L27.8347 6.86438L18.8347 -0.614619L15 4L11.1653 8.61462L20.1653 16.0936L24 11.479ZM15 4L10.4154 0.129458L9.77036 0.893458L14.355 4.764L18.9396 8.63454L19.5846 7.87054L15 4ZM14.355 4.764L10.5277 9.38483L18.0567 15.6208L21.884 11L25.7113 6.37917L18.1823 0.143173L14.355 4.764ZM21.884 11V5H0V11V17H21.884V11ZM0 11H-6V12H0H6V11H0ZM0 12V18H21.883V12V6H0V12Z" fill="#1F2C39" mask="url(#path-1-inside-1_72_69)"/>
			</svg>
		</button>

		<div class="blaze-pagination"></div>
	</div>
</div>

<?php
wp_reset_postdata();
?>
