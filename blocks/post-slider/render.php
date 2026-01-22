<?php
/**
 * Post Slider block render
 *
 * @var array $attributes
 */

$post_type      = $attributes['postType'] ?? 'post';
$limit          = (int) ($attributes['limit'] ?? 6);
$slides_to_show = (int) ($attributes['slidesToShow'] ?? 3);

$query = new WP_Query([
	'post_type'      => $post_type,
	'posts_per_page' => $limit,
	'post_status'    => 'publish',
]);

$block_props = get_block_wrapper_attributes([
	'class' => 'enigma-post-slider',
	'data-slides-to-show' => $slides_to_show,
]);

if (! $query->have_posts()) {
	return;
}

?>

<div <?php echo $block_props; ?>>
	<div class="blaze-slider">
		<div class="blaze-container">
			<div class="blaze-track-container">
				<div class="blaze-track">

					<?php while ($query->have_posts()) : $query->the_post(); ?>
						<article class="post-slide blaze-slide">
							<a href="<?php the_permalink(); ?>">
								<?php if (has_post_thumbnail()) : ?>
									<div class="post-slide__image">
										<?php the_post_thumbnail('medium'); ?>
									</div>
								<?php endif; ?>

								<h3 class="post-slide__title has-lg-font-size">
									<?php the_title(); ?>
								</h3>
								<p class="post-slide__excerpt has-md-font-size">
									<?php the_excerpt(); ?>
								</p>
								<a href="<?php the_permalink(); ?>" class="post-slide__link">Find Out More</a>
							</a>
						</article>
					<?php endwhile; ?>

				</div>
			</div>
		</div>
		<div class="d-flex justify-content-between align-items-center gap-4 pt-md" style="margin-top: 2rem;">
			<a href="<?php echo get_post_type_archive_link($post_type); ?>" class="wp-block-button__link has-accent-background-color">View all</a>
			<div class="d-flex gap-16">
				<button class="blaze-prev" aria-label="<?php esc_attr_e( 'Previous', 'enigma' ); ?> has-lg-font-size">
					<!-- <svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24"  
					fill="currentColor" viewBox="0 0 24 24" >
					<path d="M14.29 6.29 8.59 12l5.7 5.71 1.42-1.42-4.3-4.29 4.3-4.29z"></path>
					</svg> -->
					‹
				</button>
				<button class="blaze-next" aria-label="<?php esc_attr_e( 'Next', 'enigma' ); ?> has-lg-font-size">
					<!-- <svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24"  
					fill="currentColor" viewBox="0 0 24 24" >
					<path d="m9.71 17.71 5.7-5.71-5.7-5.71-1.42 1.42 4.3 4.29-4.3 4.29z"></path>
					</svg> -->
					›
				</button>
			</div>
		</div>
	</div>
	
</div>

<?php wp_reset_postdata(); ?>
