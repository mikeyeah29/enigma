<?php

get_header();
?>

<main id="primary" class="site-main">

    <?php while ( have_posts() ) : the_post(); ?>

        <div class="wp-site-blocks">
            <?php the_content(); ?>
        </div>

    <?php endwhile; ?>

</main><!-- #primary -->

<?php

get_footer();
