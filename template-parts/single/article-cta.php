<?php
/**
 * Single Insight - CTA.
 *
 * @package ThomasWilliams
 */

if (!defined('ABSPATH')) {
    exit;
}
?>

<section
    class="tw-article-cta"
    aria-labelledby="article-cta-title"
>

    <div class="tw-container">

        <div class="tw-article-cta__inner">

            <div class="tw-article-cta__content">

                <span
                    class="tw-article-cta__label"
                    data-reveal
                >
                    Need Guidance?
                </span>

                <h2
                    id="article-cta-title"
                    class="tw-article-cta__title"
                    data-reveal
                >
                    Every situation
                    <span>deserves context.</span>
                </h2>

                <p
                    class="tw-article-cta__text"
                    data-reveal
                >
                    If this topic affects your business or
                    financial situation, our firm can help you
                    understand the considerations that may apply.
                </p>

            </div>

            <div
                class="tw-article-cta__action"
                data-reveal
            >

                <a
                    href="<?php echo esc_url(home_url('/contact/')); ?>"
                    class="tw-article-cta__button"
                >
                    Contact Our Firm

                    <span aria-hidden="true">
                        →
                    </span>
                </a>

            </div>

        </div>

    </div>

</section>