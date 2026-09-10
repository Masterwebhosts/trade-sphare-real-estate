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
            'title'    => __( 'Site Identity', 'trade-sphare-real-estate-development' ),
            'priority' => 30,
        )
    );

    $colors = array(
        'primary_color' => array(
            'label'       => 'Primary Color',
            'default'     => '#173f32',
            'description' => 'Main brand color used across the website.',
        ),
        'secondary_color' => array(
            'label'       => 'Secondary Color',
            'default'     => '#c6a15b',
            'description' => 'Secondary brand color used for supporting elements and highlights.',
        ),
        'accent_color' => array(
            'label'       => 'Accent Color',
            'default'     => '#2563eb',
            'description' => 'Highlight color used for links, buttons, and interactive elements.',
        ),
        'background_color' => array(
            'label'       => 'Background Color',
            'default'     => '#f7f6f2',
            'description' => 'Main background color of the website.',
        ),
        'surface_color' => array(
            'label'       => 'Surface Color',
            'default'     => '#ffffff',
            'description' => 'Color used for cards, panels, sections, and other surfaces.',
        ),
        'text_color' => array(
            'label'       => 'Text Color',
            'default'     => '#26332e',
            'description' => 'Default color used for body text and supporting content.',
        ),
        'heading_color' => array(
            'label'       => 'Heading Color',
            'default'     => '#26332e',
            'description' => 'Color used for headings and important titles.',
        ),
        'border_color' => array(
            'label'       => 'Border Color',
            'default'     => '#e2e0d8',
            'description' => 'Color used for borders, dividers, and subtle outlines.',
        ),
    );

    foreach ( $colors as $key => $color ) {

        $setting_id = 'trade_sphare_real_estate_' . $key;

        $wp_customize->add_setting(
            $setting_id,
            array(
                'default'           => $color['default'],
                'sanitize_callback' => 'sanitize_hex_color',
                'transport'         => 'refresh',
            )
        );

        $wp_customize->add_control(
            $setting_id,
            array(
                'label'       => __( $color['label'], 'trade-sphare-real-estate-development' ),
                'section'     => 'trade_sphare_real_estate_site_identity',
                'type'        => 'color',
                'description' => __( $color['description'], 'trade-sphare-real-estate-development' ),
            )
        );
    }
}

add_action(
    'customize_register',
    'trade_sphare_real_estate_customize_site_identity'
);