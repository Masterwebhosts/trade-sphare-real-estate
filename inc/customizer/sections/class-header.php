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

	/*
	 * =========================================================
	 * Header
	 * =========================================================
	 */

	$wp_customize->add_section(
		'trade_sphare_real_estate_header',
		array(
			'title'    => __( 'Header', 'trade-sphare-real-estate-development' ),
			'priority' => 40,
		)
	);

	/*
	 * =========================================================
	 * Main Navigation
	 * =========================================================
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
			'description' => __( 'Show or hide the main navigation links in the header.', 'trade-sphare-real-estate-development' ),
			'section'     => 'trade_sphare_real_estate_header',
			'type'        => 'checkbox',
		)
	);

	/*
	 * =========================================================
	 * Header Logo
	 * =========================================================
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
				'description' => __( 'Select the logo image displayed in the header.', 'trade-sphare-real-estate-development' ),
				'section'     => 'trade_sphare_real_estate_header',
				'mime_type'   => 'image',
			)
		)
	);

	/*
	 * =========================================================
	 * Logo Width
	 * =========================================================
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
			'description' => __( 'Set the logo width in pixels.', 'trade-sphare-real-estate-development' ),
			'section'     => 'trade_sphare_real_estate_header',
			'type'        => 'number',
			'input_attrs' => array(
				'min'  => 40,
				'max'  => 400,
				'step' => 1,
			),
		)
	);

	/*
	 * =========================================================
	 * Header Background
	 * =========================================================
	 */

	$wp_customize->add_setting(
		'trade_sphare_real_estate_header_background',
		array(
			'default'           => '#ffffff',
			'sanitize_callback' => 'sanitize_hex_color',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'trade_sphare_real_estate_header_background',
			array(
				'label'       => __( 'Header Background', 'trade-sphare-real-estate-development' ),
				'description' => __( 'Choose the main header background color.', 'trade-sphare-real-estate-development' ),
				'section'     => 'trade_sphare_real_estate_header',
			)
		)
	);

	/*
	 * =========================================================
	 * Background Style
	 * =========================================================
	 */

	$wp_customize->add_setting(
		'trade_sphare_real_estate_header_background_style',
		array(
			'default'           => 'solid',
			'sanitize_callback' => 'sanitize_key',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		'trade_sphare_real_estate_header_background_style',
		array(
			'label'       => __( 'Background Style', 'trade-sphare-real-estate-development' ),
			'description' => __( 'Choose how the header background should appear.', 'trade-sphare-real-estate-development' ),
			'section'     => 'trade_sphare_real_estate_header',
			'type'        => 'select',
			'choices'     => array(
				'solid'      => __( 'Solid', 'trade-sphare-real-estate-development' ),
				'transparent' => __( 'Transparent', 'trade-sphare-real-estate-development' ),
				'gradient'   => __( 'Gradient', 'trade-sphare-real-estate-development' ),
				'animated'   => __( 'Animated Gradient', 'trade-sphare-real-estate-development' ),
			),
		)
	);

	/*
	 * =========================================================
	 * Secondary Background Color
	 * =========================================================
	 */

	$wp_customize->add_setting(
		'trade_sphare_real_estate_header_background_secondary',
		array(
			'default'           => '#173f32',
			'sanitize_callback' => 'sanitize_hex_color',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'trade_sphare_real_estate_header_background_secondary',
			array(
				'label'       => __( 'Secondary Background Color', 'trade-sphare-real-estate-development' ),
				'description' => __( 'Used for gradients and animated backgrounds.', 'trade-sphare-real-estate-development' ),
				'section'     => 'trade_sphare_real_estate_header',
			)
		)
	);

	/*
	 * =========================================================
	 * Background Opacity
	 * =========================================================
	 */

	$wp_customize->add_setting(
		'trade_sphare_real_estate_header_background_opacity',
		array(
			'default'           => 96,
			'sanitize_callback' => function ( $value ) {
				return max( 0, min( 100, absint( $value ) ) );
			},
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		'trade_sphare_real_estate_header_background_opacity',
		array(
			'label'       => __( 'Background Opacity', 'trade-sphare-real-estate-development' ),
			'description' => __( 'Control the header background opacity.', 'trade-sphare-real-estate-development' ),
			'section'     => 'trade_sphare_real_estate_header',
			'type'        => 'range',
			'input_attrs' => array(
				'min'  => 0,
				'max'  => 100,
				'step' => 1,
			),
		)
	);

	/*
	 * =========================================================
	 * Background Animation
	 * =========================================================
	 */

	$wp_customize->add_setting(
		'trade_sphare_real_estate_header_background_animation',
		array(
			'default'           => false,
			'sanitize_callback' => 'rest_sanitize_boolean',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		'trade_sphare_real_estate_header_background_animation',
		array(
			'label'       => __( 'Enable Background Animation', 'trade-sphare-real-estate-development' ),
			'description' => __( 'Adds a subtle animated gradient effect to the header background.', 'trade-sphare-real-estate-development' ),
			'section'     => 'trade_sphare_real_estate_header',
			'type'        => 'checkbox',
		)
	);

	/*
	 * =========================================================
	 * Animation Speed
	 * =========================================================
	 */

	$wp_customize->add_setting(
		'trade_sphare_real_estate_header_animation_speed',
		array(
			'default'           => 18,
			'sanitize_callback' => function ( $value ) {
				return max( 5, min( 60, absint( $value ) ) );
			},
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		'trade_sphare_real_estate_header_animation_speed',
		array(
			'label'       => __( 'Background Animation Speed', 'trade-sphare-real-estate-development' ),
			'description' => __( 'Lower values create faster movement. Higher values create slower movement.', 'trade-sphare-real-estate-development' ),
			'section'     => 'trade-sphare_real_estate_header',
			'type'        => 'range',
			'input_attrs' => array(
				'min'  => 5,
				'max'  => 60,
				'step' => 1,
			),
		)
	);

	/*
	 * =========================================================
	 * Animation Direction
	 * =========================================================
	 */

	$wp_customize->add_setting(
		'trade_sphare_real_estate_header_animation_direction',
		array(
			'default'           => 'left-right',
			'sanitize_callback' => 'sanitize_key',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		'trade_sphare_real_estate_header_animation_direction',
		array(
			'label'   => __( 'Background Animation Direction', 'trade-sphare-real-estate-development' ),
			'section' => 'trade_sphare_real_estate_header',
			'type'    => 'select',
			'choices' => array(
				'left-right' => __( 'Left to Right', 'trade-sphare-real-estate-development' ),
				'right-left' => __( 'Right to Left', 'trade-sphare-real-estate-development' ),
				'top-bottom' => __( 'Top to Bottom', 'trade-sphare-real-estate-development' ),
				'bottom-top' => __( 'Bottom to Top', 'trade-sphare-real-estate-development' ),
			),
		)
	);

	/*
	 * =========================================================
	 * Sticky Header
	 * =========================================================
	 */

	$wp_customize->add_setting(
		'trade_sphare_real_estate_header_sticky',
		array(
			'default'           => true,
			'sanitize_callback' => 'rest_sanitize_boolean',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		'trade_sphare_real_estate_header_sticky',
		array(
			'label'       => __( 'Enable Sticky Header', 'trade-sphare-real-estate-development' ),
			'description' => __( 'Keep the header visible while scrolling.', 'trade-sphare-real-estate-development' ),
			'section'     => 'trade_sphare_real_estate_header',
			'type'        => 'checkbox',
		)
	);

	/*
	 * =========================================================
	 * Header Shadow
	 * =========================================================
	 */

	$wp_customize->add_setting(
		'trade_sphare_real_estate_header_shadow',
		array(
			'default'           => true,
			'sanitize_callback' => 'rest_sanitize_boolean',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		'trade_sphare_real_estate_header_shadow',
		array(
			'label'       => __( 'Enable Header Shadow', 'trade-sphare-real-estate-development' ),
			'description' => __( 'Add a subtle shadow below the header.', 'trade-sphare-real-estate-development' ),
			'section'     => 'trade_sphare_real_estate_header',
			'type'        => 'checkbox',
		)
	);
}

add_action(
	'customize_register',
	'trade_sphare_real_estate_customize_header'
);