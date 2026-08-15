<?php
/**
 * Hero de Services.
 *
 * @package ThomasWilliams
 */

if (!defined('ABSPATH')) {
    exit;
}
?>

<section
    class="tw-services-hero"
    aria-labelledby="services-hero-title"
>

    <div class="tw-container">

        <div class="tw-services-hero__grid">

            <div class="tw-services-hero__content">

                <span
                    class="tw-services-hero__eyebrow"
                    data-reveal
                >
                    Specialized Services
                </span>

                <h1
                    id="services-hero-title"
                    class="tw-services-hero__title"
                    data-reveal
                >
                    Practical guidance
                    <span>for complex decisions.</span>
                </h1>

                <p
                    class="tw-services-hero__description"
                    data-reveal
                >
                    Accounting, tax and advisory services
                    designed to help businesses and individuals
                    navigate financial decisions with clarity.
                </p>

            </div>

            <div
                class="tw-services-hero__media"
                data-reveal
            >

                <div class="tw-services-hero__image-wrap">

                    <img
                        src="<?php echo esc_url(
                            TW_THEME_URI .
                            '/assets/images/services/hero-services.png'
                        ); ?>"
                        alt="Professional advisory discussion in a modern office."
                        class="tw-services-hero__image"
                    >

                </div>

            </div>

        </div>

    </div>

</section>