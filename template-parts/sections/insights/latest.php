<?php
/**
 * Insights - Latest posts.
 *
 * @package ThomasWilliams
 */

if (!defined('ABSPATH')) {
    exit;
}

$latest_query = new WP_Query(
    [
        'post_type'           => 'post',
        'posts_per_page'      => 6,
        'post_status'         => 'publish',
        'offset'              => 1,
        'ignore_sticky_posts' => true,
    ]
);
?>

<section class="tw-insights-latest">

    <div class="tw-container">

        <header class="tw-insights-latest__header">

            <div>

                <span
                    class="tw-insights-latest__label"
                    data-reveal
                >
                    Latest Insights
                </span>

                <h2
                    class="tw-insights-latest__title"
                    data-reveal
                >
                    Recent perspectives
                    <span>from our firm.</span>
                </h2>

            </div>

        </header>

        <?php if ($latest_query->have_posts()) : ?>

            <div class="tw-insights-latest__grid">

                <?php while ($latest_query->have_posts()) : ?>

                    <?php
                    $latest_query->the_post();

                    $categories = get_the_category();

                    $category_name = !empty($categories)
                        ? $categories[0]->name
                        : 'Insight';
                    ?>

                    <article
                        class="tw-insight-card"
                        data-reveal
                    >

                        <a
                            href="<?php the_permalink(); ?>"
                            class="tw-insight-card__media"
                            aria-label="<?php echo esc_attr(get_the_title()); ?>"
                        >

                            <?php if (has_post_thumbnail()) : ?>

                                <?php
                                the_post_thumbnail(
                                    'medium_large',
                                    [
                                        'class'   => 'tw-insight-card__image',
                                        'loading' => 'lazy',
                                    ]
                                );
                                ?>

                            <?php else : ?>

                                <div
                                    class="tw-insight-card__placeholder"
                                    aria-hidden="true"
                                >
                                    <span>
                                        Thomas Williams
                                    </span>
                                </div>

                            <?php endif; ?>

                        </a>

                        <div class="tw-insight-card__content">

                            <div class="tw-insight-card__meta">

                                <span class="tw-insight-card__category">
                                    <?php echo esc_html($category_name); ?>
                                </span>

                                <span class="tw-insight-card__date">
                                    <?php echo esc_html(
                                        get_the_date('M j, Y')
                                    ); ?>
                                </span>

                            </div>

                            <h3 class="tw-insight-card__title">

                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>

                            </h3>

                            <div class="tw-insight-card__excerpt">

                                <?php if (has_excerpt()) : ?>

                                    <?php the_excerpt(); ?>

                                <?php else : ?>

                                    <p>
                                        <?php
                                        echo esc_html(
                                            wp_trim_words(
                                                get_the_content(),
                                                20,
                                                '...'
                                            )
                                        );
                                        ?>
                                    </p>

                                <?php endif; ?>

                            </div>

                            <a
                                href="<?php the_permalink(); ?>"
                                class="tw-insight-card__link"
                            >
                                Read More

                                <span aria-hidden="true">
                                    →
                                </span>
                            </a>

                        </div>

                    </article>

                <?php endwhile; ?>

            </div>

            <?php wp_reset_postdata(); ?>

        <?php else : ?>

            <div
                class="tw-insights-latest__empty"
                data-reveal
            >

                <p>
                    More insights will be published here soon.
                </p>

            </div>

        <?php endif; ?>

    </div>

</section>