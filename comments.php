<?php
/**
 * The template for displaying comments
 *
 * @package WordPress
 * @subpackage Essence (or your theme name)
 * @since Essence Theme 1.0
 */

if ( post_password_required() ) {
    return;
}
?>

<div id="comments" class="comments-area">

    <?php if ( have_comments() ) : ?>
        <h2 class="comments-title">
            <?php
                $comments_number = get_comments_number();
                if ( '1' === $comments_number ) {
                    printf(
                        esc_html__( 'One thought on “%s”', 'essence' ),
                        '<span>' . get_the_title() . '</span>'
                    );
                } else {
                    printf(
                        esc_html(
                            _nx(
                                '%1$s thought on “%2$s”',
                                '%1$s thoughts on “%2$s”',
                                $comments_number,
                                'comments title',
                                'essence'
                            )
                        ),
                        number_format_i18n( $comments_number ),
                        get_the_title()
                    );
                }
            ?>
        </h2>

        <?php the_comments_navigation(); ?>

        <ol class="comment-list">
            <?php
                wp_list_comments( array(
                    'style'      => 'ol',
                    'short_ping' => true,
                    'avatar_size'=> 42,
                ) );
            ?>
        </ol>

        <?php the_comments_navigation(); ?>

    <?php endif; ?>

    <?php
        if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
    ?>
        <p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'essence' ); ?></p>
    <?php endif; ?>

    <?php
        comment_form( array(
            'title_reply_before' => '<h2 id="reply-title" class="comment-reply-title">',
            'title_reply_after'  => '</h2>',
        ) );
    ?>

</div><!-- .comments-area -->