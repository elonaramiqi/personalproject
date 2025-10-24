<?php get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        
        <div class="container">

            <header class="page-header">
                <h1 class="page-title"><?php esc_html_e( 'Blog', 'essence' ); ?></h1>
            </header>

            <div class="blog-items">
                <?php if ( have_posts() ) : ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                        <?php get_template_part( 'parts/content', get_post_format() ); ?>
                    <?php endwhile; ?>

                    <nav class="wpdevs-pagination" role="navigation" aria-label="<?php esc_attr_e( 'Pagination', 'essence' ); ?>">
                        <div class="pages new">
                            <?php previous_posts_link( esc_html__( '<< Newer posts', 'essence' ) ); ?>
                        </div>
                        <div class="pages old">
                            <?php next_posts_link( esc_html__( 'Older posts >>', 'essence' ) ); ?>
                        </div>
                    </nav>

                <?php else : ?>
                    <p><?php esc_html_e( 'Nothing yet to be displayed!', 'essence' ); ?></p>
                <?php endif; ?>
            </div><!-- .blog-items -->

            <?php get_sidebar(); ?>

        </div><!-- .container -->

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>