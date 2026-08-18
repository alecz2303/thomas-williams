<?php
/**
 * Insights - Featured post.
 *
 * @package ThomasWilliams
 */

if (!defined('ABSPATH')) {
    exit;
}

$featured_query = new WP_Query(
    [
        'post_type'           => 'post',
        'posts_per_page'      => 1,
        'post_status'         => 'publish',
        'ignore_sticky_posts' => true,
    ]
);
?>

<section class="tw-insights-featured">

    <div class="tw-container">

        <?php if ($featured_query->have_posts()) : ?>

            <?php while ($featured_query->have_posts()) : ?>

                <?php
                $featured_query->the_post();

                $categories = get_the_category();

                $category_name = !empty($categories)
                    ? $categories[0]->name
                    : 'Insight';
                ?>

                <article
                    class="tw-insights-featured__article"
                    data-reveal
                >

                    <div class="tw-insights-featured__media">

                        <a
                            href="<?php the_permalink(); ?>"
                            class="tw-insights-featured__image-link"
                            aria-label="<?php echo esc_attr(get_the_title()); ?>"
                        >

                            <?php if (has_post_thumbnail()) : ?>

                                <?php
                                the_post_thumbnail(
                                    'large',
                                    [
                                        'class'   => 'tw-insights-featured__image',
                                        'loading' => 'lazy',
                                    ]
                                );
                                ?>

                            <?php else : ?>

                                <div
                                    class="tw-insights-featured__placeholder"
                                    aria-hidden="true"
                                >
                                    <span>
                                        Thomas Williams, CPA, PLLC
                                    </span>
                                </div>

                            <?php endif; ?>

                        </a>

                    </div>

                    <div class="tw-insights-featured__content">

                        <div class="tw-insights-featured__meta">

                            <span class="tw-insights-featured__category">
                                <?php echo esc_html($category_name); ?>
                            </span>

                            <span class="tw-insights-featured__date">
                                <?php echo esc_html(get_the_date('F j, Y')); ?>
                            </span>

                        </div>

                        <h2 class="tw-insights-featured__title">

                            <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>

                        </h2>

                        <div class="tw-insights-featured__excerpt">

                            <?php if (has_excerpt()) : ?>

                                <?php the_excerpt(); ?>

                            <?php else : ?>

                                <p>
                                    <?php
                                    echo esc_html(
                                        wp_trim_words(
                                            get_the_content(),
                                            28,
                                            '...'
                                        )
                                    );
                                    ?>
                                </p>

                            <?php endif; ?>

                        </div>

                        <a
                            href="<?php the_permalink(); ?>"
                            class="tw-insights-featured__link"
                        >
                            Read Insight

                            <span aria-hidden="true">
                                →
                            </span>
                        </a>

                    </div>

                </article>

            <?php endwhile; ?>

            <?php wp_reset_postdata(); ?>

        <?php else : ?>

            <div
                class="tw-insights-featured__empty"
                data-reveal
            >

                <span class="tw-insights-featured__empty-label">
                    Featured Insight
                </span>

                <h2>
                    Insights coming soon.
                </h2>

                <p>
                    New perspectives on accounting,
                    tax and business matters will appear here.
                </p>

            </div>

        <?php endif; ?>

    </div>

</section>