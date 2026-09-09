<?php
/**
 * The footer for our theme.
 *
 * @package Trade_Sphare_Real_Estate
 */
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
					تطوير عقاري يصنع قيمة مستدامة.
				</p>

			</div>

			<nav
				class="site-footer-menu"
				aria-label="روابط الموقع"
			>

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

			</nav>

		</div>

		<div class="site-footer-bottom">

			<p>
				© <?php echo esc_html( wp_date( 'Y' ) ); ?>
				<?php bloginfo( 'name' ); ?>.
				جميع الحقوق محفوظة.
			</p>

		</div>

	</div>

</footer>

<?php wp_footer(); ?>

</body>
</html>