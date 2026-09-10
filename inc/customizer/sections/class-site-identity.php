<?php
/**
 * Site identity and brand settings.
 */

defined( 'ABSPATH' ) || exit;

/**
 * Register site identity settings.
 *
 * @param WP_Customize_Manager $wp_customize Customizer manager.
 */
function trade_sphare_real_estate_customize_site_identity( $wp_customize ) {

    $wp_customize->add_section(
        'trade_sphare_real_estate_site_identity',
        array(
            'title'    => __( 'الهوية والألوان', 'trade-sphare-real-estate-development' ),
            'priority' => 30,
        )
    );

    $wp_customize->add_setting(
        'trade_sphare_real_estate_primary_color',
        array(
            'default'           => '#173f32',
            'sanitize_callback' => 'sanitize_hex_color',
            'transport'         => 'refresh',
        )
    );

    $wp_customize->add_control(
        'trade_sphare_real_estate_primary_color',
        array(
            'label'   => __( 'اللون الأساسي', 'trade-sphare-real-estate-development' ),
            'section' => 'trade_sphare_real_estate_site_identity',
            'type'    => 'color',
        )
    );

    $wp_customize->add_setting(
        'trade_sphare_real_estate_secondary_color',
        array(
            'default'           => '#c6a15b',
            'sanitize_callback' => 'sanitize_hex_color',
            'transport'         => 'refresh',
        )
    );

    $wp_customize->add_control(
        'trade_sphare_real_estate_secondary_color',
        array(
            'label'   => __( 'اللون الثانوي', 'trade-sphare-real-estate-development' ),
            'section' => 'trade_sphare_real_estate_site_identity',
            'type'    => 'color',
        )
    );
}

add_action(
    'customize_register',
    'trade_sphare_real_estate_customize_site_identity'
);
