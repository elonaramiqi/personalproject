<?php
/**
 * The sidebar containing the main widget area
 *
 * @package Essence
 * @since Essence 1.0
 */

if ( is_active_sidebar( 'essence-sidebar' ) ) : ?>
    <aside id="secondary" class="widget-area" role="complementary">
        <div class="container">
            <?php dynamic_sidebar( 'essence-sidebar' ); ?>
        </div>
    </aside>
<?php endif; ?>