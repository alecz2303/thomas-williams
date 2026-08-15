<?php
/**
 * CTA final del Home.
 *
 * @package ThomasWilliams
 */

if (!defined('ABSPATH')) {
    exit;
}
?>

<section
    class="tw-home-cta"
    id="contact"
    aria-labelledby="home-cta-title"
>

    <div class="tw-container">

        <div class="tw-home-cta__inner">

            <span
                class="tw-home-cta__label"
                data-reveal
            >
                Let's Talk
            </span>

            <h2
                id="home-cta-title"
                class="tw-home-cta__title"
                data-reveal
            >
                Ready for a clearer
                <span>path forward?</span>
            </h2>

            <div
                class="tw-home-cta__footer"
                data-reveal
            >

                <p>
                    Whether you need accounting, tax or advisory
                    support, we're ready to start the conversation.
                </p>

                <a
                    href="<?php echo esc_url(home_url('/contact/')); ?>"
                    class="tw-home-cta__button"
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