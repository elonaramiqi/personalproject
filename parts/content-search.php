<?php
/**
 * Template part for displaying search results
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

        <?php if ( 'post' === get_post_type() ) : ?>
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
            </div>
        <?php endif; ?>
    </header><!-- .entry-header -->

    <div class="entry-summary">
        <?php the_excerpt(); ?>
    </div><!-- .entry-summary -->
</article><!-- #post-## -->