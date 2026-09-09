<?php
/**
 * Main template file.
 *
 * @package Trade_Sphare_Real_Estate
 */

get_header();
?>

<main>

	<!-- Hero -->
	<section class="hero">

		<div class="container">

			<div class="hero-content">

				<span class="hero-eyebrow">
					التطوير العقاري
				</span>

				<h1>
					حلول عقارية متكاملة لبناء مستقبل أفضل
				</h1>

				<p>
					منصة احترافية لعرض العقارات والمشاريع والخدمات العقارية
					بطريقة واضحة حديثة وقابلة للتوسع.
				</p>

				<div class="hero-actions">

					<a
						href="<?php echo esc_url( home_url( '/projects/' ) ); ?>"
						class="btn btn-primary"
					>
						استكشف المشاريع
					</a>

					<a
						href="<?php echo esc_url( home_url( '/properties/' ) ); ?>"
						class="btn btn-secondary"
					>
						تصفح العقارات
					</a>

				</div>

			</div>

		</div>

	</section>


	<!-- Services -->
	<section class="section">

		<div class="container">

			<div class="section-header">

				<div>

					<span class="section-eyebrow">
						خدماتنا
					</span>

					<h2>
						خبرة عقارية متكاملة
					</h2>

				</div>

				<a
					href="<?php echo esc_url( home_url( '/services/' ) ); ?>"
					class="section-link"
				>
					جميع الخدمات
				</a>

			</div>

			<div
				id="featured-services"
				class="cards-grid cards-grid-3"
			></div>

		</div>

	</section>


	<!-- Projects -->
	<section class="section section-dark">

		<div class="container">

			<div class="section-header section-header-light">

				<div>

					<span class="section-eyebrow">
						مشاريع التطوير
					</span>

					<h2>
						مشاريع نصنع بها المستقبل
					</h2>

				</div>

				<a
					href="<?php echo esc_url( home_url( '/projects/' ) ); ?>"
					class="section-link"
				>
					جميع المشاريع
				</a>

			</div>

			<div
				id="featured-projects"
				class="cards-grid cards-grid-2"
			></div>

		</div>

	</section>


	<!-- Services -->
	<section class="section">

		<div class="container">

			<div class="section-header">

				<div>

					<span class="section-eyebrow">
						خدماتنا
					</span>

					<h2>
						خبرة عقارية متكاملة
					</h2>

				</div>

				<a
					href="<?php echo esc_url( home_url( '/services/' ) ); ?>"
					class="section-link"
				>
					جميع الخدمات
				</a>

			</div>

			<div
				id="featured-services-secondary"
				class="cards-grid cards-grid-3"
			></div>

		</div>

	</section>

</main>

<?php
get_footer();