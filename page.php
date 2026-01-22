<?php

get_header();
?>

<main id="primary" class="site-main">

    <?php while ( have_posts() ) : the_post(); ?>

        <div class="page-header" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');">
            <div class="container container--wide">
                <h1><?php the_title(); ?></h1>
                <?php get_template_part('template-parts/breadcrumbs'); ?>
            </div>
        </div>

        <div class="wp-site-blocks">
            <?php the_content(); ?>
        </div>

    <?php endwhile; ?>

</main><!-- #primary -->

<?php

get_footer();
