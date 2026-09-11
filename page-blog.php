<?php
/**
 * Blog Page Template.
 *
 * Template Name: Blog Page
 *
 * @package Trade_Sphare_Real_Estate
 */

get_header();

wp_enqueue_style(
    'trade-sphare-real-estate-blog',
    get_template_directory_uri() . '/assets/css/blog.css',
    array( 'trade-sphare-real-estate-main' ),
    file_exists( get_template_directory() . '/assets/css/blog.css' )
        ? filemtime( get_template_directory() . '/assets/css/blog.css' )
        : null
);
?>

<main class="blog-home">

    <section class="blog-hero">

        <div class="container blog-hero-grid">

            <div class="blog-hero-content">

                <span class="blog-eyebrow">
                    Real Estate Intelligence
                </span>

                <h1>
                    Understanding markets.<br>
                    Developing opportunities.
                </h1>

                <p>
                    Insights on real estate markets, development,
                    investment, and the forces shaping the built environment.
                </p>

                <a
                    class="btn btn-primary"
                    href="#featured-intelligence"
                >
                    Explore Insights
                </a>

            </div>


            <div class="blog-hero-media">

                <?php
                $hero_query = new WP_Query(
                    array(
                        'post_type'           => 'post',
                        'posts_per_page'      => 1,
                        'ignore_sticky_posts' => false,
                    )
                );
                ?>

                <?php if ( $hero_query->have_posts() ) : ?>

                    <?php while ( $hero_query->have_posts() ) : $hero_query->the_post(); ?>

                        <a
                            class="blog-hero-image-link"
                            href="<?php the_permalink(); ?>"
                            aria-label="<?php the_title_attribute(); ?>"
                        >

                            <?php if ( has_post_thumbnail() ) : ?>

                                <?php
                                the_post_thumbnail(
                                    'large',
                                    array(
                                        'class' => 'blog-hero-image',
                                    )
                                );
                                ?>

                            <?php else : ?>

                                <div class="blog-hero-placeholder"></div>

                            <?php endif; ?>

                        </a>

                    <?php endwhile; ?>

                    <?php wp_reset_postdata(); ?>

                <?php else : ?>

                    <div class="blog-hero-placeholder"></div>

                <?php endif; ?>

            </div>

        </div>

    </section>


    <section
        class="blog-featured section"
        id="featured-intelligence"
    >

        <div class="container">

            <div class="blog-section-heading">

                <div>

                    <span class="section-eyebrow">
                        Featured Intelligence
                    </span>

                    <h2>
                        Perspectives that move the market forward.
                    </h2>

                </div>

            </div>


            <?php
            $featured_query = new WP_Query(
                array(
                    'post_type'           => 'post',
                    'posts_per_page'      => 1,
                    'ignore_sticky_posts' => false,
                )
            );
            ?>

            <?php if ( $featured_query->have_posts() ) : ?>

                <?php while ( $featured_query->have_posts() ) : $featured_query->the_post(); ?>

                    <article class="blog-featured-story">

                        <a
                            class="blog-featured-media"
                            href="<?php the_permalink(); ?>"
                            aria-label="<?php the_title_attribute(); ?>"
                        >

                            <?php if ( has_post_thumbnail() ) : ?>

                                <?php
                                the_post_thumbnail(
                                    'large',
                                    array(
                                        'class' => 'blog-featured-image',
                                    )
                                );
                                ?>

                            <?php else : ?>

                                <div class="blog-media-placeholder"></div>

                            <?php endif; ?>

                        </a>


                        <div class="blog-featured-content">

                            <?php
                            $categories = get_the_category();
                            $category   = ! empty( $categories )
                                ? $categories[0]->name
                                : 'Market Analysis';
                            ?>

                            <span class="blog-post-category">
                                <?php echo esc_html( $category ); ?>
                            </span>

                            <h3>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h3>

                            <p>
                                <?php
                                echo esc_html(
                                    wp_trim_words(
                                        get_the_excerpt(),
                                        32
                                    )
                                );
                                ?>
                            </p>

                            <div class="blog-post-meta">

                                <span>
                                    <?php echo esc_html( get_the_date() ); ?>
                                </span>

                                <span>
                                    Real Estate Intelligence
                                </span>

                            </div>

                            <a
                                class="blog-text-link"
                                href="<?php the_permalink(); ?>"
                            >
                                View Analysis
                                <span aria-hidden="true">→</span>
                            </a>

                        </div>

                    </article>

                <?php endwhile; ?>

                <?php wp_reset_postdata(); ?>

            <?php else : ?>

                <div class="blog-empty-state">
                    Insights will appear here as new articles are published.
                </div>

            <?php endif; ?>

        </div>

    </section>


    <section class="blog-market section section-dark">

        <div class="container">

            <div class="blog-section-heading blog-section-heading-light">

                <div>

                    <span class="section-eyebrow">
                        Market Intelligence
                    </span>

                    <h2>
                        Understanding the forces shaping real estate markets.
                    </h2>

                </div>

            </div>


            <div class="blog-market-list">

                <div class="blog-market-item">

                    <span class="blog-market-number">
                        01
                    </span>

                    <div>

                        <h3>
                            Residential Market
                        </h3>

                        <p>
                            Urban housing demand and residential development.
                        </p>

                    </div>

                    <a
                        href="<?php echo esc_url( home_url( '/blog/' ) ); ?>"
                        aria-label="View Residential Market insights"
                    >
                        →
                    </a>

                </div>


                <div class="blog-market-item">

                    <span class="blog-market-number">
                        02
                    </span>

                    <div>

                        <h3>
                            Investment Trends
                        </h3>

                        <p>
                            Where capital is moving and why.
                        </p>

                    </div>

                    <a
                        href="<?php echo esc_url( home_url( '/blog/' ) ); ?>"
                        aria-label="View Investment Trends insights"
                    >
                        →
                    </a>

                </div>


                <div class="blog-market-item">

                    <span class="blog-market-number">
                        03
                    </span>

                    <div>

                        <h3>
                            Urban Development
                        </h3>

                        <p>
                            The evolution of cities and communities.
                        </p>

                    </div>

                    <a
                        href="<?php echo esc_url( home_url( '/blog/' ) ); ?>"
                        aria-label="View Urban Development insights"
                    >
                        →
                    </a>

                </div>


                <div class="blog-market-item">

                    <span class="blog-market-number">
                        04
                    </span>

                    <div>

                        <h3>
                            Property Insights
                        </h3>

                        <p>
                            Data, demand, and real estate opportunities.
                        </p>

                    </div>

                    <a
                        href="<?php echo esc_url( home_url( '/blog/' ) ); ?>"
                        aria-label="View Property Insights"
                    >
                        →
                    </a>

                </div>

            </div>

        </div>

    </section>


    <section class="blog-latest section">

        <div class="container">

            <div class="blog-section-heading">

                <div>

                    <span class="section-eyebrow">
                        Latest Insights
                    </span>

                    <h2>
                        Ideas, analysis, and perspectives.
                    </h2>

                </div>

            </div>


            <?php
            $latest_query = new WP_Query(
                array(
                    'post_type'           => 'post',
                    'posts_per_page'      => 6,
                    'offset'              => 1,
                    'ignore_sticky_posts' => true,
                )
            );
            ?>

            <?php if ( $latest_query->have_posts() ) : ?>

                <div class="blog-posts-grid">

                    <?php while ( $latest_query->have_posts() ) : $latest_query->the_post(); ?>

                        <article class="blog-post-card">

                            <a
                                class="blog-post-card-media"
                                href="<?php the_permalink(); ?>"
                                aria-label="<?php the_title_attribute(); ?>"
                            >

                                <?php if ( has_post_thumbnail() ) : ?>

                                    <?php
                                    the_post_thumbnail(
                                        'medium_large',
                                        array(
                                            'class' => 'blog-card-image',
                                        )
                                    );
                                    ?>

                                <?php else : ?>

                                    <div class="blog-media-placeholder"></div>

                                <?php endif; ?>

                            </a>


                            <div class="blog-post-card-content">

                                <?php
                                $categories = get_the_category();
                                $category   = ! empty( $categories )
                                    ? $categories[0]->name
                                    : 'Insights';
                                ?>

                                <span class="blog-post-category">
                                    <?php echo esc_html( $category ); ?>
                                </span>

                                <h3>
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </h3>

                                <p>
                                    <?php
                                    echo esc_html(
                                        wp_trim_words(
                                            get_the_excerpt(),
                                            18
                                        )
                                    );
                                    ?>
                                </p>

                                <a
                                    class="blog-text-link"
                                    href="<?php the_permalink(); ?>"
                                >
                                    Read Insight
                                    <span aria-hidden="true">→</span>
                                </a>

                            </div>

                        </article>

                    <?php endwhile; ?>

                </div>

            <?php else : ?>

                <div class="blog-empty-state">
                    Insights will appear here as new articles are published.
                </div>

            <?php endif; ?>

            <?php wp_reset_postdata(); ?>

        </div>

    </section>


    <section class="blog-corporate-cta section-dark">

        <div class="container">

            <div class="blog-corporate-cta-inner">

                <span class="blog-eyebrow">
                    Trade Sphare
                </span>

                <h2>
                    Building value.<br>
                    Understanding markets.<br>
                    Developing opportunities.
                </h2>

                <a
                    class="btn btn-secondary"
                    href="<?php echo esc_url( home_url( '/projects/' ) ); ?>"
                >
                    Explore Our Developments
                </a>

            </div>

        </div>

    </section>

</main>

<?php get_footer(); ?>