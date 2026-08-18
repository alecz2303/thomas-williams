<?php
/**
 * Insights - CTA.
 *
 * @package ThomasWilliams
 */

if (!defined('ABSPATH')) {
    exit;
}
?>

<section
    class="tw-insights-cta"
    aria-labelledby="insights-cta-title"
>

    <div class="tw-container">

        <div class="tw-insights-cta__inner">

            <div class="tw-insights-cta__content">

                <span
                    class="tw-insights-cta__label"
                    data-reveal
                >
                    Have Questions?
                </span>

                <h2
                    id="insights-cta-title"
                    class="tw-insights-cta__title"
                    data-reveal
                >
                    Put the insight
                    <span>into context.</span>
                </h2>

                <p
                    class="tw-insights-cta__text"
                    data-reveal
                >
                    If a tax, accounting or business issue
                    affects your situation, start a conversation
                    with our firm.
                </p>

            </div>

            <div
                class="tw-insights-cta__action"
                data-reveal
            >

                <a
                    href="<?php echo esc_url(home_url('/contact/')); ?>"
                    class="tw-insights-cta__button"
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