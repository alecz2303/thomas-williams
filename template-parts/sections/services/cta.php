<?php
/**
 * Services - CTA.
 *
 * @package ThomasWilliams
 */

if (!defined('ABSPATH')) {
    exit;
}
?>

<section
    class="tw-services-cta"
    aria-labelledby="services-cta-title"
>

    <div class="tw-container">

        <div class="tw-services-cta__inner">

            <div class="tw-services-cta__content">

                <span
                    class="tw-services-cta__label"
                    data-reveal
                >
                    Need Guidance?
                </span>

                <h2
                    id="services-cta-title"
                    class="tw-services-cta__title"
                    data-reveal
                >
                    Let's find the right
                    <span>path forward.</span>
                </h2>

                <p
                    class="tw-services-cta__text"
                    data-reveal
                >
                    Tell us what you're working through
                    and we'll help you determine the next step.
                </p>

            </div>

            <div
                class="tw-services-cta__action"
                data-reveal
            >

                <a
                    href="<?php echo esc_url(home_url('/contact/')); ?>"
                    class="tw-services-cta__button"
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