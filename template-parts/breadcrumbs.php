<?php
/**
 * Breadcrumbs template part
 */

if ( is_front_page() ) {
	return;
}

echo '<nav class="breadcrumbs" aria-label="Breadcrumbs">';
echo '<ol class="breadcrumbs__list">';

// Home
echo '<li class="breadcrumbs__item">';
echo '<a href="' . esc_url( home_url('/') ) . '">Home</a>';
echo '</li>';

if ( is_singular() ) {

	$post_type = get_post_type_object( get_post_type() );

	// Custom post type archive link (if not "post" or "page")
	if ( $post_type && ! is_page() && $post_type->has_archive ) {
		echo '<li class="breadcrumbs__item">';
		echo '<a href="' . esc_url( get_post_type_archive_link( $post_type->name ) ) . '">';
		echo esc_html( $post_type->labels->singular_name );
		echo '</a>';
		echo '</li>';
	}

	// Parent pages
	if ( is_page() && $post->post_parent ) {
		$parents = array_reverse( get_post_ancestors( $post->ID ) );
		foreach ( $parents as $parent_id ) {
			echo '<li class="breadcrumbs__item">';
			echo '<a href="' . esc_url( get_permalink( $parent_id ) ) . '">';
			echo esc_html( get_the_title( $parent_id ) );
			echo '</a>';
			echo '</li>';
		}
	}

	// Current item
	echo '<li class="breadcrumbs__item breadcrumbs__item--current" aria-current="page">';
	echo esc_html( get_the_title() );
	echo '</li>';

} elseif ( is_category() || is_tag() || is_tax() ) {

	$term = get_queried_object();

	if ( $term && ! is_wp_error( $term ) ) {

		// Parent terms
		if ( $term->parent ) {
			$parents = array_reverse( get_ancestors( $term->term_id, $term->taxonomy ) );
			foreach ( $parents as $parent_id ) {
				$parent = get_term( $parent_id, $term->taxonomy );
				echo '<li class="breadcrumbs__item">';
				echo '<a href="' . esc_url( get_term_link( $parent ) ) . '">';
				echo esc_html( $parent->name );
				echo '</a>';
				echo '</li>';
			}
		}

		// Current term
		echo '<li class="breadcrumbs__item breadcrumbs__item--current" aria-current="page">';
		echo esc_html( single_term_title( '', false ) );
		echo '</li>';
	}

} elseif ( is_post_type_archive() ) {

	echo '<li class="breadcrumbs__item breadcrumbs__item--current" aria-current="page">';
	post_type_archive_title();
	echo '</li>';

} elseif ( is_search() ) {

	echo '<li class="breadcrumbs__item breadcrumbs__item--current" aria-current="page">';
	echo 'Search results for “' . esc_html( get_search_query() ) . '”';
	echo '</li>';

} elseif ( is_404() ) {

	echo '<li class="breadcrumbs__item breadcrumbs__item--current" aria-current="page">';
	echo '404';
	echo '</li>';
}

echo '</ol>';
echo '</nav>';
