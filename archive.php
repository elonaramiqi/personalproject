<?php get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <div class="container">

            <?php if ( have_posts() ) : ?>

                <header class="page-header">
                    <?php
                        the_archive_title( '<h1 class="page-title">', '</h1>' );
                        the_archive_description( '<div class="archive-description">', '</div>' );
                    ?>
                </header><!-- .page-header -->

                <div class="archive-posts">
                    <?php
                        while ( have_posts() ) : the_post();
                            get_template_part( 'parts/content', get_post_format() );
                        endwhile;
                    ?>
                </div>

                <nav class="wpdevs-pagination" role="navigation">
                    <div class="nav-links">
                        <div class="nav-previous">
                            <?php previous_posts_link( esc_html__( '<< Newer Posts', 'essence' ) ); ?>
                        </div>
                        <div class="nav-next">
                            <?php next_posts_link( esc_html__( 'Older Posts >>', 'essence' ) ); ?>
                        </div>
                    </div>
                </nav>

            <?php else : ?>

                <div class="no-posts-found">
                    <h2><?php esc_html_e( 'Nothing yet to be displayed!', 'essence' ); ?></h2>
                </div>

            <?php endif; ?>

        </div><!-- .container -->
    </main><!-- .site-main -->
</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>