<?php
/**
 * The template for displaying search forms
 *
 * @package Essence
 * @since Essence 1.0
 */
?>

<form role="search" method="get" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div>
        <label class="screen-reader-text" for="s"><?php esc_html_e( 'Search for:', 'essence' ); ?></label>
        <input 
            type="search" 
            value="<?php echo esc_attr( get_search_query() ); ?>" 
            name="s" 
            id="s" 
            placeholder="<?php esc_attr_e( 'Search …', 'essence' ); ?>" 
            aria-label="<?php esc_attr_e( 'Search', 'essence' ); ?>"
            required
        >
        <button type="submit" id="searchsubmit"><?php esc_html_e( 'Search', 'essence' ); ?></button>
    </div>
</form>