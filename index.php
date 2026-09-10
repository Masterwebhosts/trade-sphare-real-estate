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
<?php if ( get_theme_mod( 'trade_sphare_real_estate_hero_enabled', true ) ) : ?>

<section class="hero">

	<div class="container">

		<div class="hero-content">

			<span class="hero-eyebrow">
				<?php
				echo esc_html(
					get_theme_mod(
						'trade_sphare_real_estate_hero_eyebrow',
						'Real Estate Development'
					)
				);
				?>
			</span>

			<h1>
				<?php
				echo esc_html(
					get_theme_mod(
						'trade_sphare_real_estate_hero_title',
						'Integrated Real Estate Solutions for a Better Future'
					)
				);
				?>
			</h1>

			<p>
				<?php
				echo esc_html(
					get_theme_mod(
						'trade_sphare_real_estate_hero_description',
						'A professional platform for showcasing properties, development projects, and real estate services in a clear, modern, and scalable way.'
					)
				);
				?>
			</p>

			<div class="hero-actions">

				<a
					href="<?php echo esc_url( home_url( get_theme_mod( 'trade_sphare_real_estate_hero_primary_url', '/projects/' ) ) ); ?>"
					class="btn btn-primary"
				>
					<?php
					echo esc_html(
						get_theme_mod(
							'trade_sphare_real_estate_hero_primary_text',
							'Explore Projects'
						)
					);
					?>
				</a>

				<a
					href="<?php echo esc_url( home_url( get_theme_mod( 'trade_sphare_real_estate_hero_secondary_url', '/properties/' ) ) ); ?>"
					class="btn btn-secondary"
				>
					<?php
					echo esc_html(
						get_theme_mod(
							'trade_sphare_real_estate_hero_secondary_text',
							'Browse Properties'
						)
					);
					?>
				</a>

			</div>

		</div>

	</div>

</section>

<?php endif; ?>


<!-- Services -->
<?php if ( get_theme_mod( 'trade_sphare_real_estate_services_enabled', true ) ) : ?>

<section class="section">

	<div class="container">

		<div class="section-header">

			<div>

				<span class="section-eyebrow">
					<?php
					echo esc_html(
						get_theme_mod(
							'trade_sphare_real_estate_services_eyebrow',
							'Our Services'
						)
					);
					?>
				</span>

				<h2>
					<?php
					echo esc_html(
						get_theme_mod(
							'trade_sphare_real_estate_services_title',
							'Complete Real Estate Expertise'
						)
					);
					?>
				</h2>

			</div>

			<a
				href="<?php echo esc_url( home_url( get_theme_mod( 'trade_sphare_real_estate_services_link_url', '/services/' ) ) ); ?>"
				class="section-link"
			>
				<?php
				echo esc_html(
					get_theme_mod(
						'trade_sphare_real_estate_services_link_text',
						'View All Services'
					)
				);
				?>
			</a>

		</div>

		<div
			id="featured-services"
			class="cards-grid cards-grid-3"
		></div>

	</div>

</section>

<?php endif; ?>


<!-- Projects -->
<?php if ( get_theme_mod( 'trade_sphare_real_estate_projects_enabled', true ) ) : ?>

<section class="section section-dark">

	<div class="container">

		<div class="section-header section-header-light">

			<div>

				<span class="section-eyebrow">
					<?php
					echo esc_html(
						get_theme_mod(
							'trade_sphare_real_estate_projects_eyebrow',
							'Development Projects'
						)
					);
					?>
				</span>

				<h2>
					<?php
					echo esc_html(
						get_theme_mod(
							'trade_sphare_real_estate_projects_title',
							'Projects We Build for the Future'
						)
					);
					?>
				</h2>

			</div>

			<a
				href="<?php echo esc_url( home_url( get_theme_mod( 'trade_sphare_real_estate_projects_link_url', '/projects/' ) ) ); ?>"
				class="section-link"
			>
				<?php
				echo esc_html(
					get_theme_mod(
						'trade_sphare_real_estate_projects_link_text',
						'View All Projects'
					)
				);
				?>
			</a>

		</div>

		<div
			id="featured-projects"
			class="cards-grid cards-grid-2"
		></div>

	</div>

</section>

<?php endif; ?>


<!-- Properties -->
<?php if ( get_theme_mod( 'trade_sphare_real_estate_properties_enabled', true ) ) : ?>

<section class="section">

	<div class="container">

		<div class="section-header">

			<div>

				<span class="section-eyebrow">
					<?php
					echo esc_html(
						get_theme_mod(
							'trade_sphare_real_estate_properties_eyebrow',
							'Featured Properties'
						)
					);
					?>
				</span>

				<h2>
					<?php
					echo esc_html(
						get_theme_mod(
							'trade_sphare_real_estate_properties_title',
							'Properties Designed for Modern Living'
						)
					);
					?>
				</h2>

			</div>

			<a
				href="<?php echo esc_url( home_url( get_theme_mod( 'trade_sphare_real_estate_properties_link_url', '/properties/' ) ) ); ?>"
				class="section-link"
			>
				<?php
				echo esc_html(
					get_theme_mod(
						'trade_sphare_real_estate_properties_link_text',
						'View All Properties'
					)
				);
				?>
			</a>

		</div>

		<div
			id="featured-properties"
			class="cards-grid cards-grid-3"
		></div>

	</div>

</section>

<?php endif; ?>


</main>

<?php
get_footer();
?>
