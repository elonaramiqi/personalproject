<?php
/**
 * The template for displaying search results pages
 *
 * @package Essence
 * @since Essence 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <div class="container">

            <header class="page-header">
                <h1 class="page-title">
                    <?php
                    /* translators: %s: search query */
                    printf(
                        esc_html__( 'Search results for: %s', 'essence' ),
                        '<span>' . esc_html( get_search_query() ) . '</span>'
                    );
                    ?>
                </h1>
            </header>

            <?php get_search_form(); ?>

            <?php if ( have_posts() ) : ?>

                <div class="search-results">
                    <?php
                    while ( have_posts() ) :
                        the_post();
                        get_template_part( 'parts/content', 'search' );
                    endwhile;
                    ?>
                </div>

                <div class="pagination">
                    <?php
                    the_posts_pagination( array(
                        'prev_text' => __( '<< Newer Results', 'essence' ),
                        'next_text' => __( 'Older Results >>', 'essence' ),
                    ) );
                    ?>
                </div>

            <?php else : ?>

                <div class="no-results">
                    <p><?php esc_html_e( 'No results found. Try another search?', 'essence' ); ?></p>
                </div>

            <?php endif; ?>

        </div><!-- .container -->
    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>