<?php
/**
 * The header for our theme.
 *
 * @package Trade_Sphare_Real_Estate
 */

defined( 'ABSPATH' ) || exit;

/*
 * =========================================================
 * Header Settings
 * =========================================================
 */

$header_menu = get_theme_mod(
	'trade_sphare_real_estate_header_menu',
	true
);

$header_logo = absint(
	get_theme_mod(
		'trade_sphare_real_estate_header_logo',
		0
	)
);

$header_logo_width = absint(
	get_theme_mod(
		'trade_sphare_real_estate_header_logo_width',
		160
	)
);

$header_background = get_theme_mod(
	'trade_sphare_real_estate_header_background',
	'#ffffff'
);

$header_background_secondary = get_theme_mod(
	'trade_sphare_real_estate_header_background_secondary',
	'#173f32'
);

$header_background_style = get_theme_mod(
	'trade_sphare_real_estate_header_background_style',
	'solid'
);

$header_background_opacity = absint(
	get_theme_mod(
		'trade_sphare_real_estate_header_background_opacity',
		96
	)
);

$header_background_animation = get_theme_mod(
	'trade_sphare_real_estate_header_background_animation',
	false
);

$header_animation_speed = absint(
	get_theme_mod(
		'trade_sphare_real_estate_header_animation_speed',
		18
	)
);

$header_animation_direction = get_theme_mod(
		'trade_sphare_real_estate_header_animation_direction',
		'left-right'
);

$header_sticky = get_theme_mod(
	'trade_sphare_real_estate_header_sticky',
	true
);

$header_shadow = get_theme_mod(
	'trade_sphare_real_estate_header_shadow',
	true
);


/*
 * =========================================================
 * Sanitize / Limit Values
 * =========================================================
 */

$header_logo_width = max(
	40,
	min( 400, $header_logo_width )
);

$header_background_opacity = max(
	0,
	min( 100, $header_background_opacity )
);

$header_animation_speed = max(
	5,
	min( 60, $header_animation_speed )
);


/*
 * =========================================================
 * Sanitize Colors
 * =========================================================
 */

$header_background = sanitize_hex_color(
	$header_background
);

if ( ! $header_background ) {
	$header_background = '#ffffff';
}

$header_background_secondary = sanitize_hex_color(
	$header_background_secondary
);

if ( ! $header_background_secondary ) {
	$header_background_secondary = '#173f32';
}


/*
 * =========================================================
 * Allowed Background Styles
 * =========================================================
 */

$allowed_background_styles = array(
	'solid',
	'transparent',
	'gradient',
	'animated',
);

if ( ! in_array( $header_background_style, $allowed_background_styles, true ) ) {
	$header_background_style = 'solid';
}


/*
 * =========================================================
 * Allowed Animation Directions
 * =========================================================
 */

$allowed_animation_directions = array(
	'left-right',
	'right-left',
	'top-bottom',
	'bottom-top',
);

if ( ! in_array( $header_animation_direction, $allowed_animation_directions, true ) ) {
	$header_animation_direction = 'left-right';
}


/*
 * =========================================================
 * Convert HEX → RGB
 * =========================================================
 */

$header_hex = ltrim(
	$header_background,
	'#'
);

if ( 3 === strlen( $header_hex ) ) {
	$header_hex =
		$header_hex[0] . $header_hex[0] .
		$header_hex[1] . $header_hex[1] .
		$header_hex[2] . $header_hex[2];
}

$header_rgb = array(
	hexdec( substr( $header_hex, 0, 2 ) ),
	hexdec( substr( $header_hex, 2, 2 ) ),
	hexdec( substr( $header_hex, 4, 2 ) ),
);


/*
 * =========================================================
 * Secondary Color RGB
 * =========================================================
 */

$secondary_hex = ltrim(
	$header_background_secondary,
	'#'
);

if ( 3 === strlen( $secondary_hex ) ) {
	$secondary_hex =
		$secondary_hex[0] . $secondary_hex[0] .
		$secondary_hex[1] . $secondary_hex[1] .
		$secondary_hex[2] . $secondary_hex[2];
}

$secondary_rgb = array(
	hexdec( substr( $secondary_hex, 0, 2 ) ),
	hexdec( substr( $secondary_hex, 2, 2 ) ),
	hexdec( substr( $secondary_hex, 4, 2 ) ),
);


/*
 * =========================================================
 * Opacity
 * =========================================================
 */

$header_opacity = $header_background_opacity / 100;

/*
 * =========================================================
 * Header Background RGB
 * =========================================================
 */

$header_hex = ltrim( $header_background, '#' );

if ( 3 === strlen( $header_hex ) ) {
	$header_hex =
		$header_hex[0] . $header_hex[0] .
		$header_hex[1] . $header_hex[1] .
		$header_hex[2] . $header_hex[2];
}

$header_rgb_r = hexdec( substr( $header_hex, 0, 2 ) );
$header_rgb_g = hexdec( substr( $header_hex, 2, 2 ) );
$header_rgb_b = hexdec( substr( $header_hex, 4, 2 ) );

/*
 * =========================================================
 * Automatic Navigation Color
 * =========================================================
 *
 * Determines whether the main navigation should use
 * dark or light text according to the selected background.
 */

$calculate_luminance = static function ( $rgb ) {

	$channels = array();

	foreach ( $rgb as $channel ) {

		$value = $channel / 255;

		if ( $value <= 0.03928 ) {
			$value = $value / 12.92;
		} else {
			$value = pow(
				( $value + 0.055 ) / 1.055,
				2.4
			);
		}

		$channels[] = $value;
	}

	return (
		0.2126 * $channels[0] +
		0.7152 * $channels[1] +
		0.0722 * $channels[2]
	);
};

$primary_luminance = $calculate_luminance(
	$header_rgb
);

$secondary_luminance = $calculate_luminance(
	$secondary_rgb
);


/*
 * Default menu colors.
 */

if ( $primary_luminance > 0.55 ) {

	$header_menu_color = '#111827';
	$header_menu_hover = '#173f32';

} else {

	$header_menu_color = '#ffffff';
	$header_menu_hover = '#e4c98d';
}


/*
 * Gradient / Animated backgrounds:
 * choose a readable color based on the darker side.
 */

if (
	'gradient' === $header_background_style ||
	'animated' === $header_background_style
) {

	$darker_luminance = min(
		$primary_luminance,
		$secondary_luminance
	);

	if ( $darker_luminance < 0.55 ) {

		$header_menu_color = '#ffffff';
		$header_menu_hover = '#e4c98d';

	} else {

		$header_menu_color = '#111827';
		$header_menu_hover = '#173f32';
	}
}


/*
 * Transparent header.
 */

if ( 'transparent' === $header_background_style ) {

	$header_menu_color = '#111827';
	$header_menu_hover = '#173f32';
}


/*
 * =========================================================
 * Build Header Classes
 * =========================================================
 */

$header_classes = array(
	'site-header',
	'header-bg-' . sanitize_html_class( $header_background_style ),
	'header-animation-' . sanitize_html_class( $header_animation_direction ),
);

if ( $header_sticky ) {
	$header_classes[] = 'site-header--sticky';
}

if ( $header_shadow ) {
	$header_classes[] = 'site-header--shadow';
}

if (
	$header_background_animation ||
	'animated' === $header_background_style
) {
	$header_classes[] = 'site-header--animated';
}


/*
 * =========================================================
 * Dynamic CSS Variables
 * =========================================================
 */

$header_style = sprintf(
	'--header-bg:%1$s;--header-bg-secondary:%2$s;--header-bg-opacity:%3$s;--header-bg-r:%4$d;--header-bg-g:%5$d;--header-bg-b:%6$d;--header-animation-speed:%7$ss;',
	esc_attr( $header_background ),
	esc_attr( $header_background_secondary ),
	esc_attr( $header_opacity ),
	$header_rgb_r,
	$header_rgb_g,
	$header_rgb_b,
	esc_attr( $header_animation_speed )
);
?>

<!doctype html>

<html <?php language_attributes(); ?>>

<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">

	<meta
		name="viewport"
		content="width=device-width, initial-scale=1"
	>

	<?php wp_head(); ?>

</head>


<body <?php body_class(); ?>>

<?php wp_body_open(); ?>


<header
	class="<?php echo esc_attr( implode( ' ', $header_classes ) ); ?>"
	style="<?php echo esc_attr( $header_style ); ?>"
>

	<div class="container">

		<nav
			class="site-nav"
			aria-label="<?php esc_attr_e( 'Primary navigation', 'trade-sphare-real-estate-development' ); ?>"
		>

			<a
				href="<?php echo esc_url( home_url( '/' ) ); ?>"
				class="site-logo"
			>

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


			<?php if ( $header_menu ) : ?>

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