<?php
/**
 * Template part for displaying page content
 *
 * @package Essence
 * @since Essence 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <h1 class="entry-title">
            <?php the_title(); ?>
        </h1>
    </header><!-- .entry-header -->

    <div class="entry-content">
        <?php
            the_content();

            wp_link_pages( array(
                'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'essence' ),
                'after'  => '</div>',
            ) );
        ?>
    </div><!-- .entry-content -->
</article>