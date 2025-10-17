<?php
/**
 * Template part for displaying posts in loop
 *
 * @package Essence
 * @since Essence 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <h2 class="entry-title">
            <a href="<?php the_permalink(); ?>" rel="bookmark">
                <?php the_title(); ?>
            </a>
        </h2>

        <?php if ( has_post_thumbnail() ) : ?>
            <a href="<?php the_permalink(); ?>" class="post-thumbnail" aria-hidden="true" tabindex="-1">
                <?php the_post_thumbnail( array( 275, 275 ) ); ?>
            </a>
        <?php endif; ?>
    </header><!-- .entry-header -->

    <div class="meta-info">
        <p>
            <?php
            /* translators: %s: post date */
            printf(
                esc_html__( 'Posted on %s by %s', 'essence' ),
                '<time datetime="' . esc_attr( get_the_date( 'c' ) ) . '">' . esc_html( get_the_date() ) . '</time>',
                get_the_author_posts_link()
            );
            ?>
        </p>

        <?php if ( has_category() ) : ?>
            <p class="categories">
                <?php esc_html_e( 'Categories:', 'essence' ); ?> <?php the_category( ', ' ); ?>
            </p>
        <?php endif; ?>

        <?php if ( has_tag() ) : ?>
            <p class="tags">
                <?php esc_html_e( 'Tags:', 'essence' ); ?> <?php the_tags( '', ', ' ); ?>
            </p>
        <?php endif; ?>
    </div><!-- .meta-info -->

    <div class="entry-summary">
        <?php the_excerpt(); ?>
    </div><!-- .entry-summary -->
</article><!-- #post-## -->