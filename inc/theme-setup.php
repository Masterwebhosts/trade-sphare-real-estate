```php
<?php
/**
 * Trade Sphare Real Estate - Theme Setup
 *
 * Creates the core pages when the theme is activated for the first time.
 *
 * @package Trade_Sphare_Real_Estate
 */

defined( 'ABSPATH' ) || exit;


/**
 * Register navigation menu locations.
 */
function trade_sphare_real_estate_register_menus() {

	register_nav_menus(
		array(
			'primary'  => __( 'Main Menu', 'trade-sphare-real-estate-development' ),
			'footer_1' => __( 'Footer 1', 'trade-sphare-real-estate-development' ),
		)
	);
}

add_action(
	'after_setup_theme',
	'trade_sphare_real_estate_register_menus'
);


/**
 * Create and configure the core theme pages.
 */
function trade_sphare_real_estate_install_pages() {

	$pages = array(

		'home' => array(
			'title'    => 'Home',
			'slug'     => 'home',
			'template' => '',
		),

		'about' => array(
			'title'    => 'About Us',
			'slug'     => 'about',
			'template' => 'page-about.php',
		),

		'services' => array(
			'title'    => 'Services',
			'slug'     => 'services',
			'template' => 'page-services.php',
		),

		'projects' => array(
			'title'    => 'Projects',
			'slug'     => 'projects',
			'template' => 'page-projects.php',
		),

		'properties' => array(
			'title'    => 'Properties',
			'slug'     => 'properties',
			'template' => 'page-properties.php',
		),

		'blog' => array(
			'title'    => 'Blog',
			'slug'     => 'blog',
			'template' => 'page-blog.php',
		),

		'contact' => array(
			'title'    => 'Contact Us',
			'slug'     => 'contact',
			'template' => 'page-contact.php',
		),

		'project-details' => array(
			'title'    => 'Project Details',
			'slug'     => 'project',
			'template' => 'page-project.php',
		),

		'property-details' => array(
			'title'    => 'Property Details',
			'slug'     => 'property',
			'template' => 'page-property.php',
		),

		'service-details' => array(
			'title'    => 'Service Details',
			'slug'     => 'service',
			'template' => 'page-service.php',
		),
	);

	$created_pages = array();

	foreach ( $pages as $key => $page ) {

		$existing_page = get_page_by_path(
			$page['slug'],
			OBJECT,
			'page'
		);

		if ( $existing_page instanceof WP_Post ) {

			$page_id = (int) $existing_page->ID;

		} else {

			$page_id = wp_insert_post(
				array(
					'post_title'  => $page['title'],
					'post_name'   => $page['slug'],
					'post_status' => 'publish',
					'post_type'   => 'page',
					'post_author' => get_current_user_id(),
				),
				true
			);

			if ( is_wp_error( $page_id ) ) {
				continue;
			}
		}

		if ( ! empty( $page['template'] ) ) {

			update_post_meta(
				$page_id,
				'_wp_page_template',
				$page['template']
			);
		}

		$created_pages[ $key ] = $page_id;
	}


	/*
	 * Configure the WordPress reading settings.
	 */

	if ( ! empty( $created_pages['home'] ) ) {

		update_option(
			'show_on_front',
			'page'
		);

		update_option(
			'page_on_front',
			$created_pages['home']
		);
	}


	if ( ! empty( $created_pages['blog'] ) ) {

		update_option(
			'page_for_posts',
			$created_pages['blog']
		);
	}


	/*
	 * Store an installation flag so the setup is not repeated.
	 */

	update_option(
		'trade_sphare_real_estate_setup_version',
		'1.0.0'
	);
}


/**
 * Run the installer when the theme is activated.
 */
function trade_sphare_real_estate_theme_activation() {

	if ( get_option( 'trade_sphare_real_estate_setup_version' ) ) {
		return;
	}

	trade_sphare_real_estate_install_pages();
}

add_action(
	'after_switch_theme',
	'trade_sphare_real_estate_theme_activation'
);
```
