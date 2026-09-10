<?php
/**
 * Footer customizer settings.
 */

defined( 'ABSPATH' ) || exit;

/**
 * Register Footer Customizer settings.
 *
 * @param WP_Customize_Manager $wp_customize Customizer manager.
 */
function trade_sphare_real_estate_footer_customizer( $wp_customize ) {

	$wp_customize->add_section(
		'trade_sphare_real_estate_footer',
		array(
			'title'    => __( 'Footer', 'trade-sphare-real-estate-development' ),
			'priority' => 90,
		)
	);

	$wp_customize->add_setting(
		'trade_sphare_real_estate_footer_enabled',
		array(
			'default'           => true,
			'sanitize_callback' => 'rest_sanitize_boolean',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		'trade_sphare_real_estate_footer_enabled',
		array(
			'label'   => __( 'Show Footer', 'trade-sphare-real-estate-development' ),
			'section' => 'trade_sphare_real_estate_footer',
			'type'    => 'checkbox',
		)
	);

	$wp_customize->add_setting(
		'trade_sphare_real_estate_footer_description',
		array(
			'default'           => 'Real estate development that creates sustainable value.',
			'sanitize_callback' => 'sanitize_textarea_field',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		'trade_sphare_real_estate_footer_description',
		array(
			'label'   => __( 'Footer Description', 'trade-sphare-real-estate-development' ),
			'section' => 'trade_sphare_real_estate_footer',
			'type'    => 'textarea',
		)
	);

	$wp_customize->add_setting(
		'trade_sphare_real_estate_footer_properties_text',
		array(
			'default'           => 'Properties',
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		'trade_sphare_real_estate_footer_properties_text',
		array(
			'label'   => __( 'Properties Link Text', 'trade-sphare-real-estate-development' ),
			'section' => 'trade_sphare_real_estate_footer',
			'type'    => 'text',
		)
	);

	$wp_customize->add_setting(
		'trade_sphare_real_estate_footer_properties_url',
		array(
			'default'           => '/properties/',
			'sanitize_callback' => 'esc_url_raw',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		'trade_sphare_real_estate_footer_properties_url',
		array(
			'label'   => __( 'Properties Link URL', 'trade-sphare-real-estate-development' ),
			'section' => 'trade_sphare_real_estate_footer',
			'type'    => 'url',
		)
	);

	$wp_customize->add_setting(
		'trade_sphare_real_estate_footer_projects_text',
		array(
			'default'           => 'Projects',
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		'trade_sphare_real_estate_footer_projects_text',
		array(
			'label'   => __( 'Projects Link Text', 'trade-sphare-real-estate-development' ),
			'section' => 'trade_sphare_real_estate_footer',
			'type'    => 'text',
		)
	);

	$wp_customize->add_setting(
		'trade_sphare_real_estate_footer_projects_url',
		array(
			'default'           => '/projects/',
			'sanitize_callback' => 'esc_url_raw',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		'trade_sphare_real_estate_footer_projects_url',
		array(
			'label'   => __( 'Projects Link URL', 'trade-sphare-real-estate-development' ),
			'section' => 'trade_sphare_real_estate_footer',
			'type'    => 'url',
		)
	);

	$wp_customize->add_setting(
		'trade_sphare_real_estate_footer_services_text',
		array(
			'default'           => 'Services',
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		'trade_sphare_real_estate_footer_services_text',
		array(
			'label'   => __( 'Services Link Text', 'trade-sphare-real-estate-development' ),
			'section' => 'trade_sphare_real_estate_footer',
			'type'    => 'text',
		)
	);

	$wp_customize->add_setting(
		'trade_sphare_real_estate_footer_services_url',
		array(
			'default'           => '/services/',
			'sanitize_callback' => 'esc_url_raw',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		'trade_sphare_real_estate_footer_services_url',
		array(
			'label'   => __( 'Services Link URL', 'trade-sphare-real-estate-development' ),
			'section' => 'trade_sphare_real_estate_footer',
			'type'    => 'url',
		)
	);

	$wp_customize->add_setting(
		'trade_sphare_real_estate_footer_about_text',
		array(
			'default'           => 'About Us',
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		'trade_sphare_real_estate_footer_about_text',
		array(
			'label'   => __( 'About Link Text', 'trade-sphare-real-estate-development' ),
			'section' => 'trade_sphare_real_estate_footer',
			'type'    => 'text',
		)
	);

	$wp_customize->add_setting(
		'trade_sphare_real_estate_footer_about_url',
		array(
			'default'           => '/about/',
			'sanitize_callback' => 'esc_url_raw',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		'trade_sphare_real_estate_footer_about_url',
		array(
			'label'   => __( 'About Link URL', 'trade-sphare-real-estate-development' ),
			'section' => 'trade_sphare_real_estate_footer',
			'type'    => 'url',
		)
	);

	$wp_customize->add_setting(
		'trade_sphare_real_estate_footer_contact_text',
		array(
			'default'           => 'Contact Us',
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		'trade_sphare_real_estate_footer_contact_text',
		array(
			'label'   => __( 'Contact Link Text', 'trade-sphare-real-estate-development' ),
			'section' => 'trade_sphare_real_estate_footer',
			'type'    => 'text',
		)
	);

	$wp_customize->add_setting(
		'trade_sphare_real_estate_footer_contact_url',
		array(
			'default'           => '/contact/',
			'sanitize_callback' => 'esc_url_raw',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		'trade_sphare_real_estate_footer_contact_url',
		array(
			'label'   => __( 'Contact Link URL', 'trade-sphare-real-estate-development' ),
			'section' => 'trade_sphare_real_estate_footer',
			'type'    => 'url',
		)
	);

	$wp_customize->add_setting(
		'trade_sphare_real_estate_footer_copyright',
		array(
			'default'           => 'All rights reserved.',
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		'trade_sphare_real_estate_footer_copyright',
		array(
			'label'   => __( 'Copyright Text', 'trade-sphare-real-estate-development' ),
			'section' => 'trade_sphare_real_estate_footer',
			'type'    => 'text',
		)
	);
}

add_action(
	'customize_register',
	'trade_sphare_real_estate_footer_customizer'
);
