<?php get_header(); ?>

<main class="site-main">
    
    <div class="wp-block-rwd-hero" style="padding-bottom: 60px !important;">
        <div class="container">
            <h1 class="has-hero-font-size rwd-title-2">Blog</h1>
        </div>
        <div class="svg-divider-slant position-absolute has-transparent-background-color is-bottom left-0 w-100 ">
            <svg data-name="Layer 1" class="has-white-fill-color" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M1200 120L0 16.48 0 0 1200 0 1200 120z" class="shape-fill"></path>
            </svg>
        </div>
    </div>

    <div class="container container--wide">
        <div class="d-flex gap-8">

            <?php if ( have_posts() ) : $i = 0; while ( have_posts() ) : the_post(); ?>
                
                <div class="blog-post w-50">
                    <h2><?php the_title(); ?></h2>
                    <?php the_excerpt(); ?>
                    <a href="<?php the_permalink(); ?>" class="btn btn--primary">Read More</a>
                </div>

            <?php $i++; endwhile; else : ?>
                <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>

        </div>
    </div>

    <?php

        global $wp_query;

        $big = 999999999; // need an unlikely integer for pagination base

        $pagination = paginate_links(array(
            'base'      => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
            'format'    => '?paged=%#%',
            'current'   => max(1, get_query_var('paged')),
            'total'     => $wp_query->max_num_pages,
            'type'      => 'list',
            'prev_text' => false,
            'next_text' => false,
        ));

    ?>

    <?php if ($pagination) : ?>

        <div class="pagination">
            <div class="container-xxl">
                <div class="d-flex gap-8">
                    <div class="w-md-50">
                        <?php

                            echo str_replace('class="page-numbers"', 'class="pagination-list"', $pagination);

                        ?>
                    </div>
                </div>
            </div>
        </div>

    <?php endif; ?>

    <?php

        global $wp_query;

        $big = 999999999; // need an unlikely integer for pagination base

        $pagination = paginate_links(array(
            'base'      => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
            'format'    => '?paged=%#%',
            'current'   => max(1, get_query_var('paged')),
            'total'     => $wp_query->max_num_pages,
            'type'      => 'list',
            'prev_text' => false,
            'next_text' => false,
        ));

    ?>

    <?php if ($pagination) : ?>

        <div class="pagination">
            <div class="container-xxl">
                <div class="row">
                    <div class="col-12">
                        <?php

                            echo str_replace('class="page-numbers"', 'class="pagination-list"', $pagination);

                        ?>
                    </div>
                </div>
            </div>
        </div>

    <?php endif; ?>

</main>

<?php get_footer(); ?>
