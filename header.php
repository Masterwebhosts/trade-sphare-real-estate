<?php
/**
 * The header for our theme.
 *
 * @package Trade_Sphare_Real_Estate
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<header class="site-header">

        <div class="container">

                <nav class="site-nav" aria-label="Primary navigation">

                        <a
                                href="<?php echo esc_url( home_url( '/' ) ); ?>"
                                class="site-logo"
                        >
                                <?php
                                $header_logo = get_theme_mod(
                                        'trade_sphare_real_estate_header_logo'
                                );

                                $header_logo_width = absint(
                                        get_theme_mod(
                                                'trade_sphare_real_estate_header_logo_width',
                                                160
                                        )
                                );
                                ?>

                                <?php if ( $header_logo ) : ?>

                                        <?php
                                        echo wp_get_attachment_image(
                                                $header_logo,
                                                'full',
                                                false,
                                                array(
                                                        'class' => 'site-logo-image',
                                                        'alt'   => get_bloginfo( 'name' ),
                                                        'style' => 'width: ' . $header_logo_width . 'px; height: auto;',
                                                )
                                        );
                                        ?>

                                <?php else : ?>

                                        <?php bloginfo( 'name' ); ?>

                                <?php endif; ?>

                        </a>

                        <?php if ( get_theme_mod( 'trade_sphare_real_estate_header_menu', true ) ) : ?>

                                <?php
                                wp_nav_menu(
                                        array(
                                                'theme_location' => 'primary',
                                                'container'      => false,
                                                'menu_class'     => 'site-menu',
                                                'fallback_cb'    => false,
                                        )
                                );
                                ?>

                        <?php endif; ?>

                </nav>

        </div>

</header>

