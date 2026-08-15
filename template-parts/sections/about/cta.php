<?php
/**
 * About - CTA.
 *
 * @package ThomasWilliams
 */

if (!defined('ABSPATH')) {
    exit;
}
?>

<section
    class="tw-about-cta"
    aria-labelledby="about-cta-title"
>

    <div class="tw-container">

        <div class="tw-about-cta__inner">

            <div class="tw-about-cta__content">

                <span
                    class="tw-about-cta__label"
                    data-reveal
                >
                    Work With Us
                </span>

                <h2
                    id="about-cta-title"
                    class="tw-about-cta__title"
                    data-reveal
                >
                    Looking for guidance
                    <span>you can move forward with?</span>
                </h2>

                <p
                    class="tw-about-cta__text"
                    data-reveal
                >
                    Start a conversation with Thomas Williams,
                    CPA, PLLC and discover how we can help.
                </p>

            </div>

            <div
                class="tw-about-cta__action"
                data-reveal
            >

                <a
                    href="<?php echo esc_url(home_url('/contact/')); ?>"
                    class="tw-about-cta__button"
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