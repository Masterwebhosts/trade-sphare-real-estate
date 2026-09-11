<?php
/**
 * About page template.
 *
 * @package Trade_Sphare_Real_Estate
 */

get_header();

$page_title     = get_the_title();
$page_content   = get_the_content();
$featured_image = get_the_post_thumbnail_url( get_the_ID(), 'large' );
?>

<main>

        <!-- About Hero -->
        <section class="page-hero">
                <div class="container">

                        <div class="page-hero-content">

                                <span class="section-eyebrow">
                                        About Us
                                </span>

                                <h1>
                                        <?php echo esc_html( $page_title ); ?>
                                </h1>

                                <?php if ( $page_content ) : ?>

                                        <div class="page-hero-description">
                                                <?php
                                                echo wp_kses_post(
                                                        wpautop( $page_content )
                                                );
                                                ?>
                                        </div>

                                <?php else : ?>

                                        <p>
                                                We develop real estate opportunities
                                                that combine thoughtful design,
                                                efficient execution, and a clear
                                                understanding of market needs.
                                        </p>

                                <?php endif; ?>

                        </div>

                </div>
        </section>


        <!-- Vision -->
        <section class="section">
                <div class="container">

                        <div class="property-detail-grid">

                                <div class="property-detail-media">

                                        <?php if ( $featured_image ) : ?>

                                                <img
                                                        src="<?php echo esc_url( $featured_image ); ?>"
                                                        alt="<?php echo esc_attr( $page_title ); ?>"
                                                        loading="lazy"
                                                >

                                        <?php else : ?>

                                                <div class="media-placeholder">
                                                        Real Estate Development
                                                </div>

                                        <?php endif; ?>

                                </div>


                                <div class="property-detail-content">

                                        <span class="section-eyebrow">
                                                Our Vision
                                        </span>

                                        <h2>
                                                Real estate development built
                                                around quality and long-term value
                                        </h2>

                                        <p>
                                                Successful real estate development
                                                starts with understanding the
                                                location, the market, and the needs
                                                of the end user.
                                        </p>

                                        <p>
                                                We focus on creating projects with
                                                a clear identity, thoughtful planning,
                                                strong execution, and experiences
                                                that add meaningful value to places
                                                and communities.
                                        </p>

                                </div>

                        </div>

                </div>
        </section>


        <!-- Principles -->
        <section class="section section-alt">
                <div class="container">

                        <div class="section-heading">

                                <span class="section-eyebrow">
                                        What We Believe
                                </span>

                                <h2>
                                        Principles that guide our decisions
                                </h2>

                                <p>
                                        We place a clear set of principles at the
                                        heart of every project and investment decision.
                                </p>

                        </div>


                        <div class="cards-grid">

                                <article class="service-card">

                                        <span class="service-detail-number">
                                                01
                                        </span>

                                        <h3>
                                                Quality
                                        </h3>

                                        <p>
                                                We focus on detail and execution
                                                quality to create reliable projects
                                                built for the long term.
                                        </p>

                                </article>


                                <article class="service-card">

                                        <span class="service-detail-number">
                                                02
                                        </span>

                                        <h3>
                                                Value
                                        </h3>

                                        <p>
                                                We identify development opportunities
                                                that create meaningful value for
                                                investors, users, and the market.
                                        </p>

                                </article>


                                <article class="service-card">

                                        <span class="service-detail-number">
                                                03
                                        </span>

                                        <h3>
                                                Sustainability
                                        </h3>

                                        <p>
                                                We approach projects with a long-term
                                                perspective that balances returns,
                                                quality, and lasting value.
                                        </p>

                                </article>


                                <article class="service-card">

                                        <span class="service-detail-number">
                                                04
                                        </span>

                                        <h3>
                                                Transparency
                                        </h3>

                                        <p>
                                                We prioritize clear information and
                                                effective communication throughout
                                                every stage of a project.
                                        </p>

                                </article>

                        </div>

                </div>
        </section>


        <!-- Expertise -->
        <section class="section">
                <div class="container">

                        <div class="section-heading">

                                <span class="section-eyebrow">
                                        Our Expertise
                                </span>

                                <h2>
                                        An integrated approach to real estate development
                                </h2>

                        </div>


                        <div class="cards-grid">

                                <article class="service-card">

                                        <h3>
                                                Opportunity Assessment
                                        </h3>

                                        <p>
                                                We analyze locations, investment
                                                opportunities, and feasibility before
                                                development decisions are made.
                                        </p>

                                </article>


                                <article class="service-card">

                                        <h3>
                                                Project Development
                                        </h3>

                                        <p>
                                                We transform ideas and plans into
                                                integrated real estate projects
                                                with a clear identity.
                                        </p>

                                </article>


                                <article class="service-card">

                                        <h3>
                                                Value Management
                                        </h3>

                                        <p>
                                                We focus on creating the strongest
                                                possible value throughout the
                                                project's lifecycle.
                                        </p>

                                </article>

                        </div>

                </div>
        </section>


        <!-- CTA -->
        <section class="section">
                <div class="container">

                        <div class="cta">

                                <div>

                                        <span class="section-eyebrow">
                                                Let's Talk
                                        </span>

                                        <h2>
                                                Have a real estate opportunity
                                                or project?
                                        </h2>

                                        <p>
                                                Talk to us about your idea and explore
                                                how it could become a scalable
                                                development opportunity.
                                        </p>

                                </div>


                                <div class="hero-actions">

                                        <a
                                                href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"
                                                class="button button-primary"
                                        >
                                                Contact Us
                                        </a>

                                        <a
                                                href="<?php echo esc_url( home_url( '/projects/' ) ); ?>"
                                                class="button button-secondary"
                                        >
                                                Explore Our Projects
                                        </a>

                                </div>

                        </div>

                </div>
        </section>

</main>

<?php
get_footer();
?>

