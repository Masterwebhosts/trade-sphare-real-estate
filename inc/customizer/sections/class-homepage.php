<?php
/**
 * Homepage customizer settings.
 *
 * @package Trade_Sphare_Real_Estate
 */

defined( 'ABSPATH' ) || exit;

/**
 * Register homepage customizer settings.
 *
 * @param WP_Customize_Manager $wp_customize Customizer manager.
 */
function trade_sphare_real_estate_customize_homepage( $wp_customize ) {

        /*
         * =========================================================
         * Homepage - Hero
         * =========================================================
         */

        $wp_customize->add_section(
                'trade_sphare_real_estate_homepage_hero',
                array(
                        'title'    => __( 'Homepage - Hero', 'trade-sphare-real-estate-development' ),
                        'priority' => 50,
                )
        );

        /*
         * Hero enabled.
         */
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

        /*
         * Hero eyebrow.
         */
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

        /*
         * Hero title.
         */
        $wp_customize->add_setting(
                'trade_sphare_real_estate_hero_title',
                array(
                        'default'           => 'Complete Real Estate Solutions for a Better Future',
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

        /*
         * Hero description.
         */
        $wp_customize->add_setting(
                'trade_sphare_real_estate_hero_description',
                array(
                        'default'           => 'A specialized platform for showcasing properties, development projects, and real estate services in a clear, modern, and scalable way.',
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

        /*
         * =========================================================
         * Hero Image
         * =========================================================
         */

        $wp_customize->add_setting(
                'trade_sphare_real_estate_hero_image',
                array(
                        'default'           => 0,
                        'sanitize_callback' => 'absint',
                        'transport'         => 'refresh',
                )
        );

        $wp_customize->add_control(
                new WP_Customize_Media_Control(
                        $wp_customize,
                        'trade_sphare_real_estate_hero_image',
                        array(
                                'label'       => __( 'Hero Image', 'trade-sphare-real-estate-development' ),
                                'description' => __( 'Upload an image from the WordPress Media Library. The uploaded image has priority over the external image URL.', 'trade-sphare-real-estate-development' ),
                                'section'     => 'trade-sphare_real_estate_homepage_hero',
                                'mime_type'   => 'image',
                        )
                )
        );

        /*
         * Optional external image URL.
         */
        $wp_customize->add_setting(
                'trade_sphare_real_estate_hero_image_url',
                array(
                        'default'           => '',
                        'sanitize_callback' => 'esc_url_raw',
                        'transport'         => 'refresh',
                )
        );

        $wp_customize->add_control(
                'trade_sphare_real_estate_hero_image_url',
                array(
                        'label'       => __( 'External Hero Image URL', 'trade-sphare-real-estate-development' ),
                        'description' => __( 'Optional. Use a direct image URL from another website.', 'trade-sphare-real-estate-development' ),
                        'section'     => 'trade-sphare-real-estate_homepage_hero',
                        'type'        => 'url',
                )
        );

        /*
         * =========================================================
         * Hero Animation
         * =========================================================
         */

        /*
         * Animation enabled.
         */
        $wp_customize->add_setting(
                'trade_sphare_real_estate_hero_animation_enabled',
                array(
                        'default'           => true,
                        'sanitize_callback' => 'rest_sanitize_boolean',
                        'transport'         => 'refresh',
                )
        );

        $wp_customize->add_control(
                'trade_sphare_real_estate_hero_animation_enabled',
                array(
                        'label'       => __( 'Enable Hero Image Animation', 'trade-sphare-real-estate-development' ),
                        'description' => __( 'Creates a slow cinematic CSS movement. No video is required.', 'trade-sphare-real-estate-development' ),
                        'section'     => 'trade_sphare_real_estate_homepage_hero',
                        'type'        => 'checkbox',
                )
        );

        /*
         * Animation duration / speed.
         */
        $wp_customize->add_setting(
                'trade_sphare_real_estate_hero_animation_duration',
                array(
                        'default'           => 18,
                        'sanitize_callback' => function ( $value ) {
                                return max( 5, min( 60, absint( $value ) ) );
                        },
                        'transport'         => 'refresh',
                )
        );

        $wp_customize->add_control(
                'trade_sphare_real_estate_hero_animation_duration',
                array(
                        'label'       => __( 'Hero Image Movement Speed', 'trade-sphare-real-estate-development' ),
                        'description' => __( '5 seconds = faster movement. 60 seconds = slower movement.', 'trade-sphare-real-estate-development' ),
                        'section'     => 'trade-sphare-real-estate_homepage_hero',
                        'type'        => 'range',
                        'input_attrs' => array(
                                'min'  => 5,
                                'max'  => 60,
                                'step' => 1,
                        ),
                )
        );

        /*
         * Animation intensity.
         */
        $wp_customize->add_setting(
                'trade_sphare_real_estate_hero_animation_intensity',
                array(
                        'default'           => 8,
                        'sanitize_callback' => function ( $value ) {
                                return max( 2, min( 20, absint( $value ) ) );
                        },
                        'transport'         => 'refresh',
                )
        );

        $wp_customize->add_control(
                'trade_sphare_real_estate_hero_animation_intensity',
                array(
                        'label'       => __( 'Hero Image Movement Intensity', 'trade-sphare-real-estate-development' ),
                        'description' => __( 'Controls how far the image zooms and moves.', 'trade-sphare-real-estate-development' ),
                        'section'     => 'trade-sphare-real-estate_homepage_hero',
                        'type'        => 'range',
                        'input_attrs' => array(
                                'min'  => 2,
                                'max'  => 20,
                                'step' => 1,
                        ),
                )
        );

        /*
         * Animation direction.
         */
        $wp_customize->add_setting(
                'trade_sphare_real_estate_hero_motion',
                array(
                        'default'           => 'zoom-in',
                        'sanitize_callback' => 'sanitize_key',
                        'transport'         => 'refresh',
                )
        );

        $wp_customize->add_control(
                'trade_sphare_real_estate_hero_motion',
                array(
                        'label'   => __( 'Hero Image Movement Direction', 'trade-sphare-real-estate-development' ),
                        'section' => 'trade_sphare_real_estate_homepage_hero',
                        'type'    => 'select',
                        'choices' => array(
                                'zoom-in'    => __( 'Zoom In', 'trade-sphare-real-estate-development' ),
                                'zoom-out'   => __( 'Zoom Out', 'trade-sphare-real-estate-development' ),
                                'left-right' => __( 'Left to Right', 'trade-sphare-real-estate-development' ),
                                'right-left' => __( 'Right to Left', 'trade-sphare-real-estate-development' ),
                                'top-bottom' => __( 'Top to Bottom', 'trade-sphare-real-estate-development' ),
                                'bottom-top' => __( 'Bottom to Top', 'trade-sphare-real-estate-development' ),
                        ),
                )
        );

        /*
         * =========================================================
         * Hero Buttons
         * =========================================================
         */

        /*
         * Primary button text.
         */
        $wp_customize->add_setting(
                'trade_sphare_real_estate_hero_primary_text',
                array(
                        'default'           => 'View Projects',
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

        /*
         * Primary button URL.
         */
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
                        'section' => 'trade-sphare-real-estate_homepage_hero',
                        'type'    => 'url',
                )
        );

        /*
         * Secondary button text.
         */
        $wp_customize->add_setting(
                'trade_sphare_real_estate_hero_secondary_text',
                array(
                        'default'           => 'View Properties',
                        'sanitize_callback' => 'sanitize_text_field',
                        'transport'         => 'refresh',
                )
        );

        $wp_customize->add_control(
                'trade_sphare_real_estate_hero_secondary_text',
                array(
                        'label'   => __( 'Secondary Button Text', 'trade-sphare-real-estate-development' ),
                        'section' => 'trade_sphare_real-estate_homepage_hero',
                        'type'    => 'text',
                )
        );

        /*
         * Secondary button URL.
         */
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
                        'section' => 'trade-sphare-real-estate_homepage_hero',
                        'type'    => 'url',
                )
        );

        /*
         * =========================================================
         * Homepage - Share Your Vision
         * =========================================================
         */

        $wp_customize->add_section(
                'trade_sphare_real_estate_homepage_share',
                array(
                        'title'    => __( 'Homepage - Share Your Vision', 'trade-sphare-real-estate-development' ),
                        'priority' => 55,
                )
        );

        /*
         * Share section enabled.
         */
        $wp_customize->add_setting(
                'trade_sphare_real_estate_share_enabled',
                array(
                        'default'           => true,
                        'sanitize_callback' => 'rest_sanitize_boolean',
                        'transport'         => 'refresh',
                )
        );

        $wp_customize->add_control(
                'trade_sphare_real_estate_share_enabled',
                array(
                        'label'   => __( 'Show Share Your Vision Section', 'trade-sphare-real-estate-development' ),
                        'section' => 'trade_sphare_real_estate_homepage_share',
                        'type'    => 'checkbox',
                )
        );

        /*
         * Share section fields.
         */
        $share_fields = array(
                'eyebrow' => array(
                        'default'  => 'Let\'s Build Together',
                        'label'    => 'Eyebrow',
                        'type'     => 'text',
                        'sanitize' => 'sanitize_text_field',
                ),

                'title' => array(
                        'default'  => 'Share Your Vision',
                        'label'    => 'Title',
                        'type'     => 'text',
                        'sanitize' => 'sanitize_text_field',
                ),

                'description' => array(
                        'default'  => 'Whether you are planning a new development project, looking for the right property, or exploring a strategic real estate opportunity, our team is ready to turn your vision into reality.',
                        'label'    => 'Description',
                        'type'     => 'textarea',
                        'sanitize' => 'sanitize_textarea_field',
                ),

                'button_text' => array(
                        'default'  => 'Start a Conversation',
                        'label'    => 'Button Text',
                        'type'     => 'text',
                        'sanitize' => 'sanitize_text_field',
                ),

                'button_url' => array(
                        'default'  => '/contact-us/',
                        'label'    => 'Button URL',
                        'type'     => 'url',
                        'sanitize' => 'esc_url_raw',
                ),
        );

        foreach ( $share_fields as $key => $field ) {

                $setting = 'trade_sphare_real_estate_share_' . $key;

                $wp_customize->add_setting(
                        $setting,
                        array(
                                'default'           => $field['default'],
                                'sanitize_callback' => $field['sanitize'],
                                'transport'         => 'refresh',
                        )
                );

                $wp_customize->add_control(
                        $setting,
                        array(
                                'label'   => __( $field['label'], 'trade-sphare-real-estate-development' ),
                                'section' => 'trade_sphare_real_estate_homepage_share',
                                'type'    => $field['type'],
                        )
                );
        }

        /*
         * =========================================================
         * Homepage Sections
         * =========================================================
         */

        $sections = array(
                'services' => array(
                        'priority'  => 60,
                        'enabled'   => 'Show Services Section',
                        'eyebrow'   => 'Our Services',
                        'title'     => 'Complete Real Estate Expertise',
                        'link_text' => 'View All Services',
                        'link_url'  => '/services/',
                ),

                'projects' => array(
                        'priority'  => 70,
                        'enabled'   => 'Show Projects Section',
                        'eyebrow'   => 'Development Projects',
                        'title'     => 'Projects We Build for the Future',
                        'link_text' => 'View All Projects',
                        'link_url'  => '/projects/',
                ),

                'properties' => array(
                        'priority'  => 80,
                        'enabled'   => 'Show Properties Section',
                        'eyebrow'   => 'Featured Properties',
                        'title'     => 'Properties Designed for Modern Living',
                        'link_text' => 'View All Properties',
                        'link_url'  => '/properties/',
                ),
        );

        foreach ( $sections as $key => $data ) {

                $section_id = 'trade_sphare_real_estate_homepage_' . $key;

                $wp_customize->add_section(
                        $section_id,
                        array(
                                'title'    => __( 'Homepage - ' . ucfirst( $key ), 'trade-sphare-real-estate-development' ),
                                'priority' => $data['priority'],
                        )
                );

                $prefix = 'trade_sphare_real_estate_' . $key;

                /*
                 * Enable / disable section.
                 */
                $wp_customize->add_setting(
                        $prefix . '_enabled',
                        array(
                                'default'           => true,
                                'sanitize_callback' => 'rest_sanitize_boolean',
                                'transport'         => 'refresh',
                        )
                );

                $wp_customize->add_control(
                        $prefix . '_enabled',
                        array(
                                'label'   => __( $data['enabled'], 'trade-sphare-real-estate-development' ),
                                'section' => $section_id,
                                'type'    => 'checkbox',
                        )
                );

                /*
                 * Text fields.
                 */
                foreach ( array( 'eyebrow', 'title', 'link_text' ) as $field ) {

                        $wp_customize->add_setting(
                                $prefix . '_' . $field,
                                array(
                                        'default'           => $data[ $field ],
                                        'sanitize_callback' => 'sanitize_text_field',
                                        'transport'         => 'refresh',
                                )
                        );

                        $wp_customize->add_control(
                                $prefix . '_' . $field,
                                array(
                                        'label'   => __( ucfirst( str_replace( '_', ' ', $field ) ), 'trade-sphare-real-estate-development' ),
                                        'section' => $section_id,
                                        'type'    => 'text',
                                )
                        );
                }

                /*
                 * Section link URL.
                 */
                $wp_customize->add_setting(
                        $prefix . '_link_url',
                        array(
                                'default'           => $data['link_url'],
                                'sanitize_callback' => 'esc_url_raw',
                                'transport'         => 'refresh',
                        )
                );

                $wp_customize->add_control(
                        $prefix . '_link_url',
                        array(
                                'label'   => __( 'Link URL', 'trade-sphare-real-estate-development' ),
                                'section' => $section_id,
                                'type'    => 'url',
                        )
                );
        }
}

add_action(
        'customize_register',
        'trade_sphare_real_estate_customize_homepage'
);

