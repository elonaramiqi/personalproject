<?php
/**
 * Essence Theme Customizer
 *
 * @package Essence
 * @since Essence 1.0
 */

/**
 * Register customizer settings and controls.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function essence_customize_register( $wp_customize ) {

    // Add Copyright Section.
    $wp_customize->add_section(
        'essence_copyright_section',
        array(
            'title'       => __( 'Copyright Settings', 'essence' ),
            'description' => __( 'Manage the copyright information displayed in the footer.', 'essence' ),
            'priority'    => 160, // After core sections.
        )
    );

    // Add setting for copyright text.
    $wp_customize->add_setting(
        'essence_copyright_text',
        array(
            'default'           => __( 'Copyright &copy; ' . date( 'Y' ) . ' Essence - All Rights Reserved', 'essence' ),
            'sanitize_callback' => 'sanitize_text_field',
            'type'              => 'theme_mod',
            'transport'         => 'refresh',
        )
    );

    // Add control for copyright text.
    $wp_customize->add_control(
        'essence_copyright_text',
        array(
            'label'       => __( 'Copyright Information', 'essence' ),
            'description' => __( 'Enter your copyright information to display in the footer.', 'essence' ),
            'section'     => 'essence_copyright_section',
            'type'        => 'text',
        )
    );
}
add_action( 'customize_register', 'essence_customize_register' );