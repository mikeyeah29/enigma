<?php
/**
 * Centered Header Template
 *
 * Displays a compact header with the logo on the left and a burger menu on the
 * right. The primary menu opens in an off-canvas panel.
 */

$burger_type            = $args['burger_type'] ?? get_theme_mod( 'burger_menu_style', 'collapse' );
$header_bg_color        = $args['header_bg_color'] ?? get_theme_mod( 'header_bg_color', 'white' );
$header_text_color      = $args['header_text_color'] ?? get_theme_mod( 'header_text_color', 'black' );
$header_blur_background = $args['header_blur_background'] ?? get_theme_mod( 'header_blur_background', false );
$header_bg_on_scroll    = $args['header_bg_on_scroll'] ?? get_theme_mod( 'header_bg_on_scroll', false );

$header_bg_color_class   = $header_bg_color ? 'has-' . sanitize_html_class( $header_bg_color ) . '-background-color' : '';
$header_text_color_class = $header_text_color ? 'has-' . sanitize_html_class( $header_text_color ) . '-color' : '';
$apply_blur_background   = $header_blur_background && ! $header_bg_on_scroll;
$header_title            = get_bloginfo( 'name' );
$menu_id                 = 'header-centered-menu';

if ( is_singular( 'demo' ) ) {
	$header_title = get_the_title();
}
?>

<header class="header-centered is-sticky <?php echo esc_attr( ! $header_bg_on_scroll ? $header_bg_color_class : '' ); ?> <?php echo esc_attr( $apply_blur_background ? 'blur-background' : '' ); ?>">
	<div class="container-fluid w-100">
		<div class="header-centered__inner">
			<div class="header-centered__logo">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<?php if ( has_custom_logo() ) : ?>
						<?php the_custom_logo(); ?>
					<?php else : ?>
						<h1 class="<?php echo esc_attr( $header_text_color_class ); ?>"><?php echo esc_html( $header_title ); ?></h1>
					<?php endif; ?>
				</a>
			</div>

			<button
				class="hamburger hamburger--<?php echo esc_attr( sanitize_html_class( $burger_type ) ); ?> <?php echo esc_attr( $header_text_color_class ); ?> header-centered__toggle"
				type="button"
				aria-controls="<?php echo esc_attr( $menu_id ); ?>"
				aria-expanded="false"
				aria-label="<?php esc_attr_e( 'Open menu', 'enigma' ); ?>"
			>
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</button>
		</div>
	</div>

	<nav id="<?php echo esc_attr( $menu_id ); ?>" class="header-centered__menu <?php echo esc_attr( $header_bg_color_class ); ?>" aria-label="<?php esc_attr_e( 'Primary menu', 'enigma' ); ?>">
		<?php
		wp_nav_menu(
			array(
				'theme_location' => 'primary',
				'container'      => false,
				'menu_class'     => 'header-centered__menu-list ' . $header_text_color_class,
			)
		);
		?>
	</nav>
</header>

<script>
	(function () {
		var header = document.querySelector('.header-centered');
		var burger = document.querySelector('.header-centered__toggle');
		var menu = document.querySelector('.header-centered__menu');

		if (!header || !burger || !menu) {
			return;
		}

		var headerBackgroundColorClass = <?php echo wp_json_encode( $header_bg_color_class ); ?>;
		var headerBackgroundColorOnScroll = <?php echo wp_json_encode( (bool) $header_bg_on_scroll ); ?>;
		var headerBlurBackground = <?php echo wp_json_encode( (bool) $header_blur_background ); ?>;

		function setMenuState(isOpen) {
			menu.classList.toggle('is-active', isOpen);
			burger.classList.toggle('is-active', isOpen);
			burger.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
			burger.setAttribute('aria-label', isOpen ? <?php echo wp_json_encode( __( 'Close menu', 'enigma' ) ); ?> : <?php echo wp_json_encode( __( 'Open menu', 'enigma' ) ); ?>);
		}

		window.addEventListener('scroll', function () {
			var hasScrolled = window.scrollY > 100;
			header.classList.toggle('has-scrolled', hasScrolled);

			if (headerBackgroundColorOnScroll && headerBackgroundColorClass) {
				header.classList.toggle(headerBackgroundColorClass, hasScrolled);
			}

			if (headerBlurBackground) {
				header.classList.toggle('blur-background', hasScrolled);
			}
		});

		burger.addEventListener('click', function () {
			setMenuState(!menu.classList.contains('is-active'));
		});

		document.addEventListener('keydown', function (event) {
			if (event.key === 'Escape') {
				setMenuState(false);
			}
		});
	})();
</script>
