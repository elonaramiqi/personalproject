<?php
/**
 * Template Name: General Template
 *
 * A flexible template for displaying general content pages.
 *
 * @package Essence
 * @since Essence 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <div class="container">
            <div class="general-template">

                <?php if ( have_posts() ) : ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <header class="entry-header">
                                <h1 class="entry-title"><?php the_title(); ?></h1>
                            </header>

                            <div class="entry-content">
                                <?php the_content(); ?>
                            </div>
                        </article>
                    <?php endwhile; ?>
                <?php else : ?>
                    <div class="no-content">
                        <p><?php esc_html_e( 'Nothing yet to be displayed!', 'essence' ); ?></p>
                    </div>
                <?php endif; ?>

            </div><!-- .general-template -->
        </div><!-- .container -->
    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>