
<?php
/**
 * The footer for our theme.
 *
 * @package Trade_Sphare_Real_Estate
 */

defined( 'ABSPATH' ) || exit;

if ( ! get_theme_mod( 'trade_sphare_real_estate_footer_enabled', true ) ) {
	return;
}
?>

<footer class="site-footer">

	<div class="container">

		<div class="site-footer-inner">

			<div class="site-footer-brand">

				<a
					href="<?php echo esc_url( home_url( '/' ) ); ?>"
					class="site-logo"
				>
					<?php bloginfo( 'name' ); ?>
				</a>

				<p>
					<?php
					echo esc_html(
						get_theme_mod(
							'trade_sphare_real_estate_footer_description',
							'Building sustainable value through integrated real estate development and solutions.'
						)
					);
					?>
				</p>

			</div>

			<nav
				class="site-footer-menu"
				aria-label="<?php esc_attr_e( 'Footer navigation', 'trade-sphare-real-estate-development' ); ?>"
			>

				<a
					href="<?php echo esc_url( home_url( get_theme_mod( 'trade_sphare_real_estate_footer_properties_url', '/properties/' ) ) ); ?>"
				>
					<?php
					echo esc_html(
						get_theme_mod(
							'trade_sphare_real_estate_footer_properties_text',
							'Properties'
						)
					);
					?>
				</a>

				<a
					href="<?php echo esc_url( home_url( get_theme_mod( 'trade_sphare_real_estate_footer_projects_url', '/projects/' ) ) ); ?>"
				>
					<?php
					echo esc_html(
						get_theme_mod(
							'trade_sphare_real_estate_footer_projects_text',
							'Projects'
						)
					);
					?>
				</a>

				<a
					href="<?php echo esc_url( home_url( get_theme_mod( 'trade_sphare_real_estate_footer_services_url', '/services/' ) ) ); ?>"
				>
					<?php
					echo esc_html(
						get_theme_mod(
							'trade_sphare_real_estate_footer_services_text',
							'Services'
						)
					);
					?>
				</a>

				<a
					href="<?php echo esc_url( home_url( get_theme_mod( 'trade_sphare_real_estate_footer_about_url', '/about/' ) ) ); ?>"
				>
					<?php
					echo esc_html(
						get_theme_mod(
							'trade_sphare_real_estate_footer_about_text',
							'About Us'
						)
					);
					?>
				</a>

				<a
					href="<?php echo esc_url( home_url( get_theme_mod( 'trade_sphare_real_estate_footer_contact_url', '/contact/' ) ) ); ?>"
				>
					<?php
					echo esc_html(
						get_theme_mod(
							'trade_sphare_real_estate_footer_contact_text',
							'Contact Us'
						)
					);
					?>
				</a>

			</nav>

		</div>

		<div class="site-footer-bottom">

			<p>
				<?php
				echo esc_html(
					get_theme_mod(
						'trade_sphare_real_estate_footer_copyright',
						'All rights reserved.'
					)
				);
				?>
				&copy; <?php echo esc_html( wp_date( 'Y' ) ); ?>
				<?php bloginfo( 'name' ); ?>.
			</p>

		</div>

	</div>

</footer>

<?php wp_footer(); ?>

</body>
</html>
