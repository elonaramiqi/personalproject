<?php
/**
 * The template for displaying all pages
 *
 * @package Essence
 * @since Essence 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <div class="container">

            <div class="page-item">
                <?php
                if ( have_posts() ) :
                    while ( have_posts() ) : the_post();

                        get_template_part( 'parts/content', 'page' );

                        // If comments are open or there is at least one comment, load the comment template.
                        if ( comments_open() || get_comments_number() ) :
                            comments_template();
                        endif;

                    endwhile;
                endif;
                ?>
            </div><!-- .page-item -->

        </div><!-- .container -->
    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>