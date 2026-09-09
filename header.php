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

		<nav class="site-nav" aria-label="التنقل الرئيسي">

			<a
				href="<?php echo esc_url( home_url( '/' ) ); ?>"
				class="site-logo"
			>
				<?php bloginfo( 'name' ); ?>
			</a>

			<div class="site-menu">

				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
					الرئيسية
				</a>

				<a href="<?php echo esc_url( home_url( '/properties/' ) ); ?>">
					العقارات
				</a>

				<a href="<?php echo esc_url( home_url( '/projects/' ) ); ?>">
					المشاريع
				</a>

				<a href="<?php echo esc_url( home_url( '/services/' ) ); ?>">
					الخدمات
				</a>

				<a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">
					من نحن
				</a>

				<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">
					تواصل معنا
				</a>

			</div>

		</nav>

	</div>

</header>