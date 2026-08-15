<?php
/**
 * Single Insight - Content.
 *
 * @package ThomasWilliams
 */

if (!defined('ABSPATH')) {
    exit;
}
?>

<article class="tw-article-content">

    <div class="tw-container">

        <?php if (has_post_thumbnail()) : ?>

            <div
                class="tw-article-content__media"
                data-reveal
            >

                <?php
                the_post_thumbnail(
                    'full',
                    [
                        'class'   => 'tw-article-content__image',
                        'loading' => 'eager',
                    ]
                );
                ?>

            </div>

        <?php endif; ?>

        <div class="tw-article-content__body">

            <div
                class="tw-article-content__entry"
                data-reveal
            >
                <?php the_content(); ?>
            </div>

        </div>

    </div>

</article>