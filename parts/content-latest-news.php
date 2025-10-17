<?php
/**
 * Template part for displaying latest news posts
 *
 * @package Essence
 * @since Essence 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php if ( has_post_thumbnail() ) : ?>
        <a href="<?php the_permalink(); ?>" class="post-thumbnail">
            <?php the_post_thumbnail( 'large' ); ?>
        </a>
    <?php endif; ?>

    <h3 class="entry-title">
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </h3>

    <div class="meta-info">
        <p>
            <?php esc_html_e( 'by', 'essence' ); ?> 
            <span class="author-link"><?php the_author_posts_link(); ?></span>
            <?php if ( has_category() ) : ?>
                | <?php esc_html_e( 'Categories:', 'essence' ); ?>
                <span class="cat-links"><?php the_category( ', ' ); ?></span>
            <?php endif; ?>
            <?php if ( has_tag() ) : ?>
                | <?php esc_html_e( 'Tags:', 'essence' ); ?>
                <span class="tag-links"><?php the_tags( '', ', ', '' ); ?></span>
            <?php endif; ?>
        </p>
        <p class="posted-on"><?php echo esc_html( get_the_date() ); ?></p>
    </div>

    <div class="entry-summary">
        <?php the_excerpt(); ?>
    </div>
</article>