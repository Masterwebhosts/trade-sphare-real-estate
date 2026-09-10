<?php
/**
 * Homepage customizer settings.
 */

defined( 'ABSPATH' ) || exit;

/**
 * Register homepage customizer settings.
 *
 * @param WP_Customize_Manager $wp_customize Customizer manager.
 */
function trade_sphare_real_estate_customize_homepage( $wp_customize ) {

	/*
	 * Homepage - Hero
	 */
	$wp_customize->add_section(
		'trade_sphare_real_estate_homepage_hero',
		array(
			'title'    => __( 'Homepage - Hero', 'trade-sphare-real-estate-development' ),
			'priority' => 50,
		)
	);

	$wp_customize->add_setting(
		'trade_sphare_real_estate_hero_enabled',
		array(
			'default'           => true,
			'sanitize_callback' => 'rest_sanitize_boolean',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		'trade_sphare_real_estate_hero_enabled',
		array(
			'label'   => __( 'Show Hero Section', 'trade-sphare-real-estate-development' ),
			'section' => 'trade_sphare_real_estate_homepage_hero',
			'type'    => 'checkbox',
		)
	);

	$wp_customize->add_setting(
		'trade_sphare_real_estate_hero_eyebrow',
		array(
			'default'           => 'Real Estate Development',
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		'trade_sphare_real_estate_hero_eyebrow',
		array(
			'label'   => __( 'Eyebrow', 'trade-sphare-real-estate-development' ),
			'section' => 'trade_sphare_real_estate_homepage_hero',
			'type'    => 'text',
		)
	);

	$wp_customize->add_setting(
		'trade_sphare_real_estate_hero_title',
		array(
			'default'           => 'Integrated Real Estate Solutions for a Better Future',
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		'trade_sphare_real_estate_hero_title',
		array(
			'label'   => __( 'Title', 'trade-sphare-real-estate-development' ),
			'section' => 'trade_sphare_real_estate_homepage_hero',
			'type'    => 'text',
		)
	);

	$wp_customize->add_setting(
		'trade_sphare_real_estate_hero_description',
		array(
			'default'           => 'A professional platform for showcasing properties, development projects, and real estate services in a clear, modern, and scalable way.',
			'sanitize_callback' => 'sanitize_textarea_field',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		'trade_sphare_real_estate_hero_description',
		array(
			'label'   => __( 'Description', 'trade-sphare-real-estate-development' ),
			'section' => 'trade_sphare_real_estate_homepage_hero',
			'type'    => 'textarea',
		)
	);

	$wp_customize->add_setting(
		'trade_sphare_real_estate_hero_primary_text',
		array(
			'default'           => 'Explore Projects',
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		'trade_sphare_real_estate_hero_primary_text',
		array(
			'label'   => __( 'Primary Button Text', 'trade-sphare-real-estate-development' ),
			'section' => 'trade_sphare_real_estate_homepage_hero',
			'type'    => 'text',
		)
	);

	$wp_customize->add_setting(
		'trade_sphare_real_estate_hero_primary_url',
		array(
			'default'           => '/projects/',
			'sanitize_callback' => 'esc_url_raw',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		'trade_sphare_real_estate_hero_primary_url',
		array(
			'label'   => __( 'Primary Button URL', 'trade-sphare-real-estate-development' ),
			'section' => 'trade_sphare_real_estate_homepage_hero',
			'type'    => 'url',
		)
	);

	$wp_customize->add_setting(
		'trade_sphare_real_estate_hero_secondary_text',
		array(
			'default'           => 'Browse Properties',
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		'trade_sphare_real_estate_hero_secondary_text',
		array(
			'label'   => __( 'Secondary Button Text', 'trade-sphare-real-estate-development' ),
			'section' => 'trade_sphare_real_estate_homepage_hero',
			'type'    => 'text',
		)
	);

	$wp_customize->add_setting(
		'trade_sphare_real_estate_hero_secondary_url',
		array(
			'default'           => '/properties/',
			'sanitize_callback' => 'esc_url_raw',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		'trade_sphare_real_estate_hero_secondary_url',
		array(
			'label'   => __( 'Secondary Button URL', 'trade-sphare-real-estate-development' ),
			'section' => 'trade_sphare_real_estate_homepage_hero',
			'type'    => 'url',
		)
	);


	/*
	 * Homepage - Services
	 */
	$wp_customize->add_section(
		'trade_sphare_real_estate_homepage_services',
		array(
			'title'    => __( 'Homepage - Services', 'trade-sphare-real-estate-development' ),
			'priority' => 60,
		)
	);

	$wp_customize->add_setting(
		'trade_sphare_real_estate_services_enabled',
		array(
			'default'           => true,
			'sanitize_callback' => 'rest_sanitize_boolean',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		'trade_sphare_real_estate_services_enabled',
		array(
			'label'   => __( 'Show Services Section', 'trade-sphare-real-estate-development' ),
			'section' => 'trade_sphare_real_estate_homepage_services',
			'type'    => 'checkbox',
		)
	);

	$wp_customize->add_setting(
		'trade_sphare_real_estate_services_eyebrow',
		array(
			'default'           => 'Our Services',
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		'trade_sphare_real_estate_services_eyebrow',
		array(
			'label'   => __( 'Eyebrow', 'trade-sphare-real-estate-development' ),
			'section' => 'trade_sphare_real_estate_homepage_services',
			'type'    => 'text',
		)
	);

	$wp_customize->add_setting(
		'trade_sphare_real_estate_services_title',
		array(
			'default'           => 'Complete Real Estate Expertise',
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		'trade_sphare_real_estate_services_title',
		array(
			'label'   => __( 'Title', 'trade-sphare-real-estate-development' ),
			'section' => 'trade_sphare_real_estate_homepage_services',
			'type'    => 'text',
		)
	);

	$wp_customize->add_setting(
		'trade_sphare_real_estate_services_link_text',
		array(
			'default'           => 'View All Services',
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		'trade_sphare_real_estate_services_link_text',
		array(
			'label'   => __( 'Link Text', 'trade-sphare-real-estate-development' ),
			'section' => 'trade_sphare_real_estate_homepage_services',
			'type'    => 'text',
		)
	);

	$wp_customize->add_setting(
		'trade_sphare_real_estate_services_link_url',
		array(
			'default'           => '/services/',
			'sanitize_callback' => 'esc_url_raw',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		'trade_sphare_real_estate_services_link_url',
		array(
			'label'   => __( 'Link URL', 'trade-sphare-real-estate-development' ),
			'section' => 'trade_sphare_real_estate_homepage_services',
			'type'    => 'url',
		)
	);

		/*
	 * Homepage - Projects
	 */
	$wp_customize->add_section(
		'trade_sphare_real_estate_homepage_projects',
		array(
			'title'    => __( 'Homepage - Projects', 'trade-sphare-real-estate-development' ),
			'priority' => 70,
		)
	);

	$wp_customize->add_setting(
		'trade_sphare_real_estate_projects_enabled',
		array(
			'default'           => true,
			'sanitize_callback' => 'rest_sanitize_boolean',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		'trade_sphare_real_estate_projects_enabled',
		array(
			'label'   => __( 'Show Projects Section', 'trade-sphare-real-estate-development' ),
			'section' => 'trade_sphare_real_estate_homepage_projects',
			'type'    => 'checkbox',
		)
	);

	$wp_customize->add_setting(
		'trade_sphare_real_estate_projects_eyebrow',
		array(
			'default'           => 'Development Projects',
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		'trade_sphare_real_estate_projects_eyebrow',
		array(
			'label'   => __( 'Eyebrow', 'trade-sphare-real-estate-development' ),
			'section' => 'trade_sphare_real_estate_homepage_projects',
			'type'    => 'text',
		)
	);

	$wp_customize->add_setting(
		'trade_sphare_real_estate_projects_title',
		array(
			'default'           => 'Projects We Build for the Future',
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		'trade_sphare_real_estate_projects_title',
		array(
			'label'   => __( 'Title', 'trade-sphare-real-estate-development' ),
			'section' => 'trade_sphare_real_estate_homepage_projects',
			'type'    => 'text',
		)
	);

	$wp_customize->add_setting(
		'trade_sphare_real_estate_projects_link_text',
		array(
			'default'           => 'View All Projects',
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		'trade_sphare_real_estate_projects_link_text',
		array(
			'label'   => __( 'Link Text', 'trade-sphare-real-estate-development' ),
			'section' => 'trade_sphare_real_estate_homepage_projects',
			'type'    => 'text',
		)
	);

	$wp_customize->add_setting(
		'trade_sphare_real_estate_projects_link_url',
		array(
			'default'           => '/projects/',
			'sanitize_callback' => 'esc_url_raw',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		'trade_sphare_real_estate_projects_link_url',
		array(
			'label'   => __( 'Link URL', 'trade-sphare-real-estate-development' ),
			'section' => 'trade-sphare_real_estate_homepage_projects',
			'type'    => 'url',
		)
	);

		/*
	 * Homepage - Properties
	 */
	$wp_customize->add_section(
		'trade_sphare_real_estate_homepage_properties',
		array(
			'title'    => __( 'Homepage - Properties', 'trade-sphare-real-estate-development' ),
			'priority' => 80,
		)
	);

	$wp_customize->add_setting(
		'trade_sphare_real_estate_properties_enabled',
		array(
			'default'           => true,
			'sanitize_callback' => 'rest_sanitize_boolean',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		'trade_sphare_real_estate_properties_enabled',
		array(
			'label'   => __( 'Show Properties Section', 'trade-sphare-real-estate-development' ),
			'section' => 'trade_sphare_real_estate_homepage_properties',
			'type'    => 'checkbox',
		)
	);

	$wp_customize->add_setting(
		'trade_sphare_real_estate_properties_eyebrow',
		array(
			'default'           => 'Featured Properties',
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		'trade_sphare_real_estate_properties_eyebrow',
		array(
			'label'   => __( 'Eyebrow', 'trade-sphare-real-estate-development' ),
			'section' => 'trade_sphare_real_estate_homepage_properties',
			'type'    => 'text',
		)
	);

	$wp_customize->add_setting(
		'trade_sphare_real_estate_properties_title',
		array(
			'default'           => 'Properties Designed for Modern Living',
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		'trade_sphare_real_estate_properties_title',
		array(
			'label'   => __( 'Title', 'trade-sphare-real-estate-development' ),
			'section' => 'trade_sphare_real_estate_homepage_properties',
			'type'    => 'text',
		)
	);

	$wp_customize->add_setting(
		'trade_sphare_real_estate_properties_link_text',
		array(
			'default'           => 'View All Properties',
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		'trade_sphare_real_estate_properties_link_text',
		array(
			'label'   => __( 'Link Text', 'trade-sphare-real-estate-development' ),
			'section' => 'trade-sphare_real_estate_homepage_properties',
			'type'    => 'text',
		)
	);

	$wp_customize->add_setting(
		'trade_sphare_real_estate_properties_link_url',
		array(
			'default'           => '/properties/',
			'sanitize_callback' => 'esc_url_raw',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		'trade_sphare_real_estate_properties_link_url',
		array(
			'label'   => __( 'Link URL', 'trade-sphare-real-estate-development' ),
			'section' => 'trade_sphare_real_estate_homepage_properties',
			'type'    => 'url',
		)
	);
}

add_action(
	'customize_register',
	'trade_sphare_real_estate_customize_homepage'
);
