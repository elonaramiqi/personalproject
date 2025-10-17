<?php
/**
 * Template part for displaying single posts
 *
 * @package Essence
 * @since Essence 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <h1 class="entry-title"><?php the_title(); ?></h1>

        <div class="meta-info">
            <p>
                <?php
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
</article><!-- #post-## -->