<?php
/**
 * Main template file.
 *
 * @package Trade_Sphare_Real_Estate
 */

defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'trade_sphare_real_estate_resolve_url' ) ) {
	function trade_sphare_real_estate_resolve_url( $url ) {
		$url = trim( (string) $url );

		if ( '' === $url ) {
			return home_url( '/' );
		}

		if (
			preg_match( '#^(https?:)?//#i', $url ) ||
			0 === strpos( $url, 'mailto:' ) ||
			0 === strpos( $url, 'tel:' ) ||
			0 === strpos( $url, '#' )
		) {
			return esc_url( $url );
		}

		return esc_url(
			home_url( '/' . ltrim( $url, '/' ) )
		);
	}
}

get_header();

/*
 * Hero settings.
 */
$hero_image = get_theme_mod(
	'trade_sphare_real_estate_hero_image',
	''
);

/*
 * WP_Customize_Media_Control stores the attachment ID.
 * Convert it to the actual image URL.
 */
if ( $hero_image && is_numeric( $hero_image ) ) {
	$hero_image = wp_get_attachment_image_url(
		absint( $hero_image ),
		'full'
	);
}

$hero_image_url = get_theme_mod(
	'trade_sphare_real_estate_hero_image_url',
	''
);

$hero_animation = get_theme_mod(
	'trade_sphare_real_estate_hero_animation_enabled',
	true
);

$hero_duration = absint(
	get_theme_mod(
		'trade_sphare_real_estate_hero_animation_duration',
		18
	)
);

$hero_intensity = absint(
	get_theme_mod(
		'trade_sphare_real_estate_hero_animation_intensity',
		8
	)
);

$hero_motion = get_theme_mod(
	'trade_sphare_real_estate_hero_motion',
	'zoom-in'
);

/*
 * Keep animation values within the Customizer limits.
 */
$hero_duration  = max( 5, min( 60, $hero_duration ) );
$hero_intensity = max( 2, min( 20, $hero_intensity ) );

/*
 * Image priority:
 * 1. WordPress Media Library
 * 2. External image URL
 * 3. Default image
 */
if ( $hero_image ) {
	$hero_image_src = $hero_image;
} elseif ( $hero_image_url ) {
	$hero_image_src = $hero_image_url;
} else {
	$hero_image_src = 'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=2200&q=85';
}

$hero_motion_class = 'hero-motion-' . sanitize_html_class(
	$hero_motion
);

$hero_style = sprintf(
	'--hero-duration:%ss;--hero-intensity:%s;',
	$hero_duration,
	$hero_intensity
);
?>

<main>

	<?php if ( get_theme_mod( 'trade_sphare_real_estate_hero_enabled', true ) ) : ?>

		<section
			class="hero hero--image <?php echo esc_attr( $hero_motion_class ); ?><?php echo $hero_animation ? '' : ' hero--animation-disabled'; ?>"
			style="<?php echo esc_attr( $hero_style ); ?>"
		>

			<div class="hero-media" aria-hidden="true">

				<img
					class="hero-media-image"
					src="<?php echo esc_url( $hero_image_src ); ?>"
					alt=""
					loading="eager"
					fetchpriority="high"
				>

			</div>

			<div
				class="hero-overlay"
				aria-hidden="true"
			></div>

			<div class="container hero-container">

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
							href="<?php echo trade_sphare_real_estate_resolve_url( get_theme_mod( 'trade_sphare_real_estate_hero_primary_url', '/projects/' ) ); ?>"
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
							href="<?php echo trade_sphare_real_estate_resolve_url( get_theme_mod( 'trade_sphare_real_estate_hero_secondary_url', '/properties/' ) ); ?>"
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


	<?php if ( get_theme_mod( 'trade_sphare_real_estate_share_enabled', true ) ) : ?>

	<?php
	$share_eyebrow = get_theme_mod(
		'trade_sphare_real_estate_share_eyebrow',
		"Let's Build Together"
	);

	$share_title = get_theme_mod(
		'trade_sphare_real_estate_share_title',
		'Share Your Vision With Us'
	);

	$share_description = get_theme_mod(
		'trade_sphare_real_estate_share_description',
		'Whether you are planning a new development, looking for the right property, or exploring a strategic real estate opportunity, our team is ready to turn your vision into reality.'
	);

	$share_button_text = get_theme_mod(
		'trade_sphare_real_estate_share_button_text',
		'Start a Conversation'
	);

	$share_button_url = get_theme_mod(
		'trade_sphare_real_estate_share_button_url',
		'/contact-us/'
	);
	?>

	<section class="share-vision">

		<div class="container">

			<div class="share-vision-card">

				<div class="share-vision-content">

					<?php if ( '' !== trim( $share_eyebrow ) ) : ?>
						<span class="share-vision-eyebrow">
							<?php echo esc_html( $share_eyebrow ); ?>
						</span>
					<?php endif; ?>

					<?php if ( '' !== trim( $share_title ) ) : ?>
						<h2>
							<?php echo esc_html( $share_title ); ?>
						</h2>
					<?php endif; ?>

					<?php if ( '' !== trim( $share_description ) ) : ?>
						<p>
							<?php echo esc_html( $share_description ); ?>
						</p>
					<?php endif; ?>

					<?php if ( '' !== trim( $share_button_text ) ) : ?>
						<a
							class="btn btn-gold"
							href="<?php echo esc_url( trade_sphare_real_estate_resolve_url( $share_button_url ) ); ?>"
						>
							<?php echo esc_html( $share_button_text ); ?>
						</a>
					<?php endif; ?>

				</div>

			</div>

		</div>

	</section>

<?php endif; ?>


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
						href="<?php echo trade_sphare_real_estate_resolve_url( get_theme_mod( 'trade_sphare_real_estate_services_link_url', '/services/' ) ); ?>"
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
						href="<?php echo trade_sphare_real_estate_resolve_url( get_theme_mod( 'trade_sphare_real_estate_projects_link_url', '/projects/' ) ); ?>"
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
						href="<?php echo trade_sphare_real_estate_resolve_url( get_theme_mod( 'trade_sphare_real_estate_properties_link_url', '/properties/' ) ); ?>"
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

<?php get_footer(); ?>