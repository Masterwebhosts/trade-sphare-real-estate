<?php
/**
 * Header customizer settings.
 */

defined( 'ABSPATH' ) || exit;

/**
 * Register header customizer settings.
 *
 * @param WP_Customize_Manager $wp_customize Customizer manager.
 */
function trade_sphare_real_estate_customize_header( $wp_customize ) {

    $wp_customize->add_section(
        'trade_sphare_real_estate_header',
        array(
            'title'    => __( 'Header', 'trade-sphare-real-estate-development' ),
            'priority' => 40,
        )
    );

    /**
     * Main navigation visibility.
     */
    $wp_customize->add_setting(
        'trade_sphare_real_estate_header_menu',
        array(
            'default'           => true,
            'sanitize_callback' => 'rest_sanitize_boolean',
            'transport'         => 'refresh',
        )
    );

    $wp_customize->add_control(
        'trade_sphare_real_estate_header_menu',
        array(
            'label'       => __( 'Show Main Navigation', 'trade-sphare-real-estate-development' ),
            'section'     => 'trade_sphare_real_estate_header',
            'type'        => 'checkbox',
            'description' => __( 'Show or hide the main navigation links in the header.', 'trade-sphare-real-estate-development' ),
        )
    );

    /**
     * Header logo.
     */
    $wp_customize->add_setting(
        'trade_sphare_real_estate_header_logo',
        array(
            'default'           => '',
            'sanitize_callback' => 'absint',
            'transport'         => 'refresh',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Media_Control(
            $wp_customize,
            'trade_sphare_real_estate_header_logo',
            array(
                'label'       => __( 'Header Logo', 'trade-sphare-real-estate-development' ),
                'section'     => 'trade_sphare_real_estate_header',
                'mime_type'   => 'image',
                'description' => __( 'Select the logo image displayed in the header.', 'trade-sphare-real-estate-development' ),
            )
        )
    );

    /**
     * Header logo width.
     */
    $wp_customize->add_setting(
        'trade_sphare_real_estate_header_logo_width',
        array(
            'default'           => 160,
            'sanitize_callback' => 'absint',
            'transport'         => 'refresh',
        )
    );

    $wp_customize->add_control(
        'trade_sphare_real_estate_header_logo_width',
        array(
            'label'       => __( 'Logo Width', 'trade-sphare-real-estate-development' ),
            'section'     => 'trade_sphare_real_estate_header',
            'type'        => 'number',
            'description' => __( 'Set the logo width in pixels.', 'trade-sphare-real-estate-development' ),
            'input_attrs' => array(
                'min'  => 40,
                'max'  => 400,
                'step' => 1,
            ),
        )
    );
}

add_action(
    'customize_register',
    'trade_sphare_real_estate_customize_header'
);