<?php
/**
 * Theme setup.
 */

function trade_sphare_real_estate_setup() {

	load_theme_textdomain(
		'trade-sphare-real-estate-development',
		get_template_directory() . '/languages'
	);

	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );

	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	register_nav_menus(
		array(
			'primary' => __( 'القائمة الرئيسية', 'trade-sphare-real-estate-development' ),
		)
	);
}

add_action(
	'after_setup_theme',
	'trade_sphare_real_estate_setup'
);


/**
 * Enqueue theme styles and scripts.
 */
function trade_sphare_real_estate_enqueue_assets() {

	$theme_version      = wp_get_theme()->get( 'Version' );
    $theme_uri          = get_template_directory_uri();
    $project_detail_url = home_url( '/project/' );


	/*
	 * =========================
	 * CSS
	 * =========================
	 */

	wp_enqueue_style(
		'trade-sphare-real-estate-style',
		get_stylesheet_uri(),
		array(),
		$theme_version
	);

	wp_enqueue_style(
		'trade-sphare-real-estate-main',
		$theme_uri . '/assets/css/main.css',
		array( 'trade-sphare-real-estate-style' ),
		$theme_version
	);


	/*
	 * =========================
	 * JavaScript foundation
	 * =========================
	 */

	wp_enqueue_script(
		'trade-sphare-real-estate-config',
		$theme_uri . '/assets/js/core/config.js',
		array(),
		$theme_version,
		true
	);

	wp_enqueue_script(
		'trade-sphare-real-estate-utils',
		$theme_uri . '/assets/js/core/utils.js',
		array( 'trade-sphare-real-estate-config' ),
		$theme_version,
		true
	);

	wp_enqueue_script(
		'trade-sphare-real-estate-data',
		$theme_uri . '/assets/js/core/data.js',
		array(
			'trade-sphare-real-estate-config',
			'trade-sphare-real-estate-utils',
		),
		$theme_version,
		true
	);


	/*
	 * Pass WordPress data to JavaScript.
	 */

	wp_localize_script(
	'trade-sphare-real-estate-data',
	'TRADE_SPHARE_CONFIG',
	array(
		'dataUrl'          => trailingslashit(
			$theme_uri . '/data'
		),

		'projectDetailUrl' => trailingslashit(
			home_url( '/project/' )
		),

		'serviceDetailUrl' => trailingslashit(
			home_url( '/service/' )
		),

		'propertyDetailUrl' => trailingslashit(
			home_url( '/property/' )
		),
	)
);


	/*
	 * =========================
	 * Home page
	 * =========================
	 */

	if ( is_front_page() ) {

		wp_enqueue_script(
			'trade-sphare-real-estate-properties',
			$theme_uri . '/assets/js/modules/properties/properties.js',
			array( 'trade-sphare-real-estate-data' ),
			$theme_version,
			true
		);

		wp_enqueue_script(
			'trade-sphare-real-estate-projects',
			$theme_uri . '/assets/js/modules/projects/projects.js',
			array( 'trade-sphare-real-estate-data' ),
			$theme_version,
			true
		);

		wp_enqueue_script(
			'trade-sphare-real-estate-services',
			$theme_uri . '/assets/js/modules/services/services.js',
			array( 'trade-sphare-real-estate-data' ),
			$theme_version,
			true
		);

		wp_enqueue_script(
			'trade-sphare-real-estate-app',
			$theme_uri . '/assets/js/core/app.js',
			array(
				'trade-sphare-real-estate-properties',
				'trade-sphare-real-estate-projects',
				'trade-sphare-real-estate-services',
			),
			$theme_version,
			true
		);

		return;
	}


	/*
	 * =========================
	 * Projects page
	 * =========================
	 */

	if ( is_page( 'projects' ) ) {

		wp_enqueue_script(
			'trade-sphare-real-estate-projects',
			$theme_uri . '/assets/js/modules/projects/projects.js',
			array( 'trade-sphare-real-estate-data' ),
			$theme_version,
			true
		);

		wp_enqueue_script(
			'trade-sphare-real-estate-projects-filter',
			$theme_uri . '/assets/js/modules/projects/projects-filter.js',
			array( 'trade-sphare-real-estate-projects' ),
			$theme_version,
			true
		);

		wp_enqueue_script(
			'trade-sphare-real-estate-app',
			$theme_uri . '/assets/js/core/app.js',
			array( 'trade-sphare-real-estate-projects-filter' ),
			$theme_version,
			true
		);

		return;
	}


	/*
	 * =========================
	 * Properties page
	 * =========================
	 */

	if ( is_page( 'properties' ) ) {

		wp_enqueue_script(
			'trade-sphare-real-estate-properties',
			$theme_uri . '/assets/js/modules/properties/properties.js',
			array( 'trade-sphare-real-estate-data' ),
			$theme_version,
			true
		);

		wp_enqueue_script(
			'trade-sphare-real-estate-properties-filter',
			$theme_uri . '/assets/js/modules/search/properties-filter.js',
			array( 'trade-sphare-real-estate-properties' ),
			$theme_version,
			true
		);

		wp_enqueue_script(
			'trade-sphare-real-estate-app',
			$theme_uri . '/assets/js/core/app.js',
			array( 'trade-sphare-real-estate-properties-filter' ),
			$theme_version,
			true
		);

		return;
	}
    
		/*
	 * =========================
	 * Project detail page
	 * =========================
	 */

	if ( is_page( 'project' ) ) {

		wp_enqueue_script(
			'trade-sphare-real-estate-projects',
			$theme_uri . '/assets/js/modules/projects/projects.js',
			array( 'trade-sphare-real-estate-data' ),
			$theme_version,
			true
		);

		wp_enqueue_script(
			'trade-sphare-real-estate-project',
			$theme_uri . '/assets/js/modules/projects/project.js',
			array( 'trade-sphare-real-estate-data' ),
			$theme_version,
			true
		);

		wp_enqueue_script(
			'trade-sphare-real-estate-app',
			$theme_uri . '/assets/js/core/app.js',
			array( 'trade-sphare-real-estate-project' ),
			$theme_version,
			true
		);

		return;
	}

	/*
 * =========================
 * Service detail page
 * =========================
 */

if ( is_page( 'service' ) ) {

	wp_enqueue_script(
		'trade-sphare-real-estate-service',
		$theme_uri . '/assets/js/modules/services/service.js',
		array( 'trade-sphare-real-estate-data' ),
		$theme_version,
		true
	);

	wp_enqueue_script(
		'trade-sphare-real-estate-app',
		$theme_uri . '/assets/js/core/app.js',
		array( 'trade-sphare-real-estate-service' ),
		$theme_version,
		true
	);

	return;
}

	/*
	 * =========================
	 * Services page
	 * =========================
	 */

	if ( is_page( 'services' ) ) {

		wp_enqueue_script(
			'trade-sphare-real-estate-services',
			$theme_uri . '/assets/js/modules/services/services.js',
			array( 'trade-sphare-real-estate-data' ),
			$theme_version,
			true
		);

		wp_enqueue_script(
			'trade-sphare-real-estate-app',
			$theme_uri . '/assets/js/core/app.js',
			array( 'trade-sphare-real-estate-services' ),
			$theme_version,
			true
		);

		return;
	}


	/*
	 * =========================
	 * Contact page
	 * =========================
	 */

	if ( is_page( 'contact' ) ) {

		wp_enqueue_script(
			'trade-sphare-real-estate-contact',
			$theme_uri . '/assets/js/modules/contact/contact.js',
			array( 'trade-sphare-real-estate-utils' ),
			$theme_version,
			true
		);

		wp_enqueue_script(
			'trade-sphare-real-estate-app',
			$theme_uri . '/assets/js/core/app.js',
			array( 'trade-sphare-real-estate-contact' ),
			$theme_version,
			true
		);

		return;
	}
}

add_action(
	'wp_enqueue_scripts',
	'trade_sphare_real_estate_enqueue_assets'
);