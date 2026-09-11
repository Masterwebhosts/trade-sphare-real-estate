<?php
/**
 * Automatically creates the pages required by the theme.
 *
 * @package Trade_Sphare_Real_Estate
 */

defined( 'ABSPATH' ) || exit;


/**
 * Create and configure the theme's required pages after theme activation.
 *
 * Existing pages are never overwritten.
 * Existing pages are reused and their assigned theme templates are repaired
 * when necessary.
 *
 * @return void
 */
function trade_sphare_real_estate_install_pages() {

        $required_pages = array(

                'home' => array(
                        'title'    => 'Home',
                        'template' => '',
                ),

                'about' => array(
                        'title'    => 'About Us',
                        'template' => 'page-about.php',
                ),

                'services' => array(
                        'title'    => 'Services',
                        'template' => 'page-services.php',
                ),

                'projects' => array(
                        'title'    => 'Projects',
                        'template' => 'page-projects.php',
                ),

                'properties' => array(
                        'title'    => 'Properties',
                        'template' => 'page-properties.php',
                ),

                'blog' => array(
                        'title'    => 'Blog',
                        'template' => 'page-blog.php',
                ),

                'contact' => array(
                        'title'    => 'Contact Us',
                        'template' => 'page-contact.php',
                ),

                'project' => array(
                        'title'    => 'Project Details',
                        'template' => 'page-project.php',
                ),

                'property' => array(
                        'title'    => 'Property Details',
                        'template' => 'page-property.php',
                ),

                'service' => array(
                        'title'    => 'Service Details',
                        'template' => 'page-service.php',
                ),
        );


        $installed_pages = array();


        /*
         * Create missing pages or reuse existing pages.
         */

        foreach ( $required_pages as $slug => $page ) {

                $existing_page = get_page_by_path(
                        $slug,
                        OBJECT,
                        'page'
                );


                if ( $existing_page instanceof WP_Post ) {

                        $page_id = (int) $existing_page->ID;

                } else {

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
                }


                /*
                 * Assign the required page template.
                 *
                 * This also repairs existing pages that were created
                 * before the installer was introduced.
                 */

                if ( ! empty( $page['template'] ) ) {

                        $current_template = get_post_meta(
                                $page_id,
                                '_wp_page_template',
                                true
                        );


                        if ( $current_template !== $page['template'] ) {

                                update_post_meta(
                                        $page_id,
                                        '_wp_page_template',
                                        $page['template']
                                );
                        }
                }


                $installed_pages[ $slug ] = $page_id;
        }


        /*
         * Configure the Home page only when WordPress does not already
         * have a static front page configured.
         *
         * This prevents the theme from unexpectedly replacing an
         * existing website's front-page configuration.
         */

        if ( ! empty( $installed_pages['home'] ) ) {

                $show_on_front = get_option(
                        'show_on_front',
                        'posts'
                );

                $page_on_front = (int) get_option(
                        'page_on_front',
                        0
                );


                if (
                        'posts' === $show_on_front ||
                        ! $page_on_front
                ) {

                        update_option(
                                'show_on_front',
                                'page'
                        );

                        update_option(
                                'page_on_front',
                                $installed_pages['home']
                        );
                }
        }


        /*
         * Configure the Blog page only when WordPress does not already
         * have a posts page configured.
         */

        if ( ! empty( $installed_pages['blog'] ) ) {

                $page_for_posts = (int) get_option(
                        'page_for_posts',
                        0
                );


                if ( ! $page_for_posts ) {

                        update_option(
                                'page_for_posts',
                                $installed_pages['blog']
                        );
                }
        }


        /*
         * Store the page IDs for later theme use.
         */

        update_option(
                'trade_sphare_real_estate_required_pages',
                $installed_pages,
                false
        );


        /*
         * Refresh WordPress rewrite rules after creating pages.
         */

        flush_rewrite_rules();
}


/**
 * Run the page installer when the theme is activated.
 */
add_action(
        'after_switch_theme',
        'trade_sphare_real_estate_install_pages'
);

