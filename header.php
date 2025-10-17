<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">

    <header id="masthead" class="site-header" role="banner">

        <!-- Top Bar with Logo and Search -->
        <section class="top-bar">
            <div class="container">

                <div class="site-branding logo">
                    <?php 
                        if ( has_custom_logo() ) {
                            the_custom_logo();
                        } else { ?>
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-title">
                                <span><?php bloginfo( 'name' ); ?></span>
                            </a>
                        <?php } ?>
                </div>

                <div class="searchbox">
                    <?php get_search_form(); ?>
                </div>

            </div><!-- .container -->
        </section>

        <!-- Main Menu Area -->
        <?php if ( ! is_page( 'landing_page' ) ) : ?>
            <section class="menu-area">
                <div class="container">
                    <nav class="main-menu" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'essence' ); ?>">
                        
                        <button class="menu-toggle check-button" aria-controls="primary-menu" aria-expanded="false">
                            <span class="screen-reader-text"><?php esc_html_e( 'Toggle menu', 'essence' ); ?></span>
                            <div class="menu-icon">
                                <div class="bar1"></div>
                                <div class="bar2"></div>
                                <div class="bar3"></div>
                            </div>
                        </button>

                        <?php
                        wp_nav_menu( array(
                            'theme_location' => 'wp_devs_main_menu',
                            'menu_id'        => 'primary-menu',
                            'depth'          => 2,
                            'container'      => false,
                        ) );
                        ?>
                    </nav>
                </div><!-- .container -->
            </section>
        <?php endif; ?>

    </header><!-- #masthead -->