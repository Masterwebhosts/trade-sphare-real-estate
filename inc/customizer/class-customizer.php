<?php
/**
 * Theme Customizer bootstrap.
 */

defined( 'ABSPATH' ) || exit;

require_once get_template_directory() . '/inc/customizer/sections/class-site-identity.php';
require_once get_template_directory() . '/inc/customizer/sections/class-header.php';
require_once get_template_directory() . '/inc/customizer/sections/class-footer.php';
require_once get_template_directory() . '/inc/customizer/sections/class-homepage.php';


/**
 * Output dynamic theme colors.
 */
function trade_sphare_real_estate_customizer_css() {

    $primary_color = get_theme_mod(
        'trade_sphare_real_estate_primary_color',
        '#173f32'
    );

    $secondary_color = get_theme_mod(
        'trade_sphare_real_estate_secondary_color',
        '#c6a15b'
    );

    $accent_color = get_theme_mod(
        'trade_sphare_real_estate_accent_color',
        '#2563eb'
    );

    $background_color = get_theme_mod(
        'trade_sphare_real_estate_background_color',
        '#f7f6f2'
    );

    $surface_color = get_theme_mod(
        'trade_sphare_real_estate_surface_color',
        '#ffffff'
    );

    $text_color = get_theme_mod(
        'trade_sphare_real_estate_text_color',
        '#26332e'
    );

    $heading_color = get_theme_mod(
        'trade_sphare_real_estate_heading_color',
        '#111827'
    );

    $border_color = get_theme_mod(
        'trade_sphare_real_estate_border_color',
        '#e2e0d8'
    );

    $custom_css = ':root {
        --color-primary: ' . esc_attr( $primary_color ) . ';
        --color-gold: ' . esc_attr( $secondary_color ) . ';
        --color-accent: ' . esc_attr( $accent_color ) . ';
        --color-background: ' . esc_attr( $background_color ) . ';
        --color-surface: ' . esc_attr( $surface_color ) . ';
        --color-text: ' . esc_attr( $text_color ) . ';
        --color-heading: ' . esc_attr( $heading_color ) . ';
        --color-border: ' . esc_attr( $border_color ) . ';
    }';

    wp_add_inline_style(
        'trade-sphare-real-estate-main',
        $custom_css
    );
}

add_action(
    'wp_enqueue_scripts',
    'trade_sphare_real_estate_customizer_css',
    20
);

