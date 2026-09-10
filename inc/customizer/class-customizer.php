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

    $primary_color   = get_theme_mod(
        'trade_sphare_real_estate_primary_color',
        '#173f32'
    );

    $secondary_color = get_theme_mod(
        'trade_sphare_real_estate_secondary_color',
        '#c6a15b'
    );

    $custom_css = ':root {
        --color-primary: ' . esc_attr( $primary_color ) . ';
        --color-gold: ' . esc_attr( $secondary_color ) . ';
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


