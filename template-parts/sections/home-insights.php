<?php
/**
 * Últimos artículos.
 *
 * @package ThomasWilliams
 */

if (!defined('ABSPATH')) {
    exit;
}

$insights = new WP_Query([
    'post_type'      => 'post',
    'posts_per_page' => 3,
    'post_status'    => 'publish',
]);
?>

<section
    class="tw-insights"
    id="insights"
>

    <div class="tw-container">

        <header class="tw-insights__header">

            <div data-reveal>

                <span>
                    06 / Insights
                </span>

            </div>

            <div>

                <h2 data-reveal>
                    Perspective for
                    <em>what comes next.</em>
                </h2>

                <a
                    href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>"
                    class="tw-insights__all"
                    data-reveal
                >
                    View All Insights ↗
                </a>

            </div>

        </header>

        <?php if ($insights->have_posts()) : ?>

            <div class="tw-insights__grid">

                <?php
                while ($insights->have_posts()) :
                    $insights->the_post();
                    ?>

                    <article
                        class="tw-insight-card"
                        data-reveal
                    >

                        <a
                            href="<?php the_permalink(); ?>"
                            class="tw-insight-card__image"
                        >

                            <?php if (has_post_thumbnail()) : ?>

                                <?php
                                the_post_thumbnail(
                                    'tw-article-card'
                                );
                                ?>

                            <?php else : ?>

                                <div class="tw-insight-card__placeholder">
                                    TW
                                </div>

                            <?php endif; ?>

                        </a>

                        <div class="tw-insight-card__meta">

                            <span>
                                <?php echo esc_html(get_the_date('M d, Y')); ?>
                            </span>

                            <span>
                                Insight
                            </span>

                        </div>

                        <h3>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </h3>

                        <a
                            href="<?php the_permalink(); ?>"
                            class="tw-insight-card__link"
                        >
                            Read Article ↗
                        </a>

                    </article>

                <?php endwhile; ?>

            </div>

            <?php wp_reset_postdata(); ?>

        <?php else : ?>

            <div
                class="tw-insights__empty"
                data-reveal
            >
                <p>
                    New insights and articles will
                    be published here.
                </p>
            </div>

        <?php endif; ?>

    </div>

</section>