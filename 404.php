<?php get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <section class="error-404 not-found">
            <div class="container">
                <header class="page-header">
                    <h1 class="page-title"><?php esc_html_e( 'Oops! That page can’t be found.', 'essence' ); ?></h1>
                    <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search or check out recent posts?', 'essence' ); ?></p>
                </header>

                <div class="page-content">
                    <?php get_search_form(); ?>

                    <?php
                        the_widget( 'WP_Widget_Recent_Posts', array(
                            'title'  => esc_html__( 'Latest Posts', 'essence' ),
                            'number' => 3,
                        ) );
                    ?>

                    <p><?php esc_html_e( 'Still can’t find what you’re looking for? Try visiting the homepage or browsing categories.', 'essence' ); ?></p>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="button"><?php esc_html_e( 'Back to Homepage', 'essence' ); ?></a>
                </div>
            </div>
        </section>
    </main>
</div>

<?php get_footer(); ?>