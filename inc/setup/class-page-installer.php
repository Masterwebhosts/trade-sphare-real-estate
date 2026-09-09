<?php
/**
 * Automatically creates the pages required by the theme.
 *
 * @package Trade_Sphare_Real_Estate
 */

defined( 'ABSPATH' ) || exit;

/**
 * Create the theme's required pages after theme activation.
 *
 * Existing pages are never overwritten.
 *
 * @return void
 */
function trade_sphare_real_estate_install_pages() {
    $required_pages = array(
        'properties' => array(
            'title'    => 'العقارات',
            'template' => 'page-properties.php',
        ),
        'projects' => array(
            'title'    => 'المشاريع',
            'template' => 'page-projects.php',
        ),
        'services' => array(
            'title'    => 'الخدمات',
            'template' => 'page-services.php',
        ),
        'about' => array(
            'title'    => 'من نحن',
            'template' => 'page-about.php',
        ),
        'contact' => array(
            'title'    => 'تواصل معنا',
            'template' => 'page-contact.php',
        ),
        'property' => array(
            'title'    => 'تفاصيل العقار',
            'template' => 'page-property.php',
        ),
        'project' => array(
            'title'    => 'تفاصيل المشروع',
            'template' => 'page-project.php',
        ),
        'service' => array(
            'title'    => 'تفاصيل الخدمة',
            'template' => 'page-service.php',
        ),
    );

    $installed_pages = array();

    foreach ( $required_pages as $slug => $page ) {
        $existing_page = get_page_by_path( $slug, OBJECT, 'page' );

        if ( $existing_page instanceof WP_Post ) {
            $installed_pages[ $slug ] = (int) $existing_page->ID;
            continue;
        }

        $page_id = wp_insert_post(
            array(
                'post_title'     => $page['title'],
                'post_name'      => $slug,
                'post_content'   => '',
                'post_status'    => 'publish',
                'post_type'      => 'page',
                'comment_status' => 'closed',
                'ping_status'    => 'closed',
            ),
            true
        );

        if ( is_wp_error( $page_id ) ) {
            continue;
        }

        update_post_meta( $page_id, '_wp_page_template', $page['template'] );
        $installed_pages[ $slug ] = (int) $page_id;
    }

    update_option( 'trade_sphare_real_estate_required_pages', $installed_pages, false );
}

add_action(
    'after_switch_theme',
    'trade_sphare_real_estate_install_pages'
);
