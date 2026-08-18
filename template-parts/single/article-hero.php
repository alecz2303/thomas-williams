<?php
/**
 * Single Insight - Hero.
 *
 * @package ThomasWilliams
 */

if (!defined('ABSPATH')) {
    exit;
}

$categories = get_the_category();

$category_name = !empty($categories)
    ? $categories[0]->name
    : 'Insight';
?>

<section
    class="tw-article-hero"
    aria-labelledby="article-title"
>

    <div class="tw-container">

        <div class="tw-article-hero__inner">

            <div class="tw-article-hero__meta" data-reveal>

                <span class="tw-article-hero__category">
                    <?php echo esc_html($category_name); ?>
                </span>

                <span class="tw-article-hero__separator">
                    ·
                </span>

                <span class="tw-article-hero__date">
                    <?php echo esc_html(get_the_date('F j, Y')); ?>
                </span>

            </div>

            <h1
                id="article-title"
                class="tw-article-hero__title"
                data-reveal
            >
                <?php the_title(); ?>
            </h1>

            <?php if (has_excerpt()) : ?>

                <div
                    class="tw-article-hero__excerpt"
                    data-reveal
                >
                    <?php the_excerpt(); ?>
                </div>

            <?php endif; ?>

        </div>

    </div>

</section>