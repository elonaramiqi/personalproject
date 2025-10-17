<?php
/**
 * The template for displaying all single posts
 *
 * @package Essence
 * @since Essence 1.0
 */

get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <div class="container">

            <?php
            while ( have_posts() ) :
                the_post();

                // Load content template part for single post
                get_template_part( 'parts/content', 'single' );
            ?>

            <nav class="wpdevs-pagination">
                <div class="pages previous">
                    <?php previous_post_link( '&laquo; %link' ); ?>
                </div>
                <div class="pages next">
                    <?php next_post_link( '%link &raquo;' ); ?>
                </div>
            </nav>

            <?php
                // If comments are open or there is at least one comment, load the comment template
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;

            endwhile; // End of the loop.
            ?>

        </div><!-- .container -->
    </main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>