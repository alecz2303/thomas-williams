<?php
/**
 * Services - Real Estate Investment Consultancy.
 *
 * @package ThomasWilliams
 */

if (!defined('ABSPATH')) {
    exit;
}

$capabilities = [
    'Investment Evaluation',
    'Financial Analysis',
    'Tax Considerations',
    'Ownership Structure',
    'Strategic Advisory',
];
?>

<section
    class="tw-service-detail tw-service-detail--real-estate"
    id="real-estate-investment-consultancy"
>

    <div class="tw-container">

        <div class="tw-service-detail__grid">

            <div
                class="tw-service-detail__media"
                data-reveal
            >

                <div class="tw-service-detail__image-wrap">

                    <img
                        src="<?php echo esc_url(
                            TW_THEME_URI .
                            '/assets/images/services/real-estate.png'
                        ); ?>"
                        alt="Modern real estate investment analysis and property planning."
                        class="tw-service-detail__image"
                        loading="lazy"
                    >

                    <span
                        class="tw-service-detail__image-label"
                        aria-hidden="true"
                    >
                        03
                    </span>

                </div>

            </div>

            <div class="tw-service-detail__content">

                <span
                    class="tw-service-detail__eyebrow"
                    data-reveal
                >
                    Real Estate Investment Consultancy
                </span>

                <h2
                    class="tw-service-detail__title"
                    data-reveal
                >
                    Better insight for
                    <span>better investment decisions.</span>
                </h2>

                <p
                    class="tw-service-detail__lead"
                    data-reveal
                >
                    Real estate decisions often involve more
                    than the property itself.
                </p>

                <p
                    class="tw-service-detail__text"
                    data-reveal
                >
                    We provide financial and advisory support
                    to help clients evaluate opportunities,
                    understand tax considerations and approach
                    real estate investments with greater clarity.
                </p>

                <div
                    class="tw-service-detail__capabilities"
                    data-reveal
                >

                    <span class="tw-service-detail__capabilities-label">
                        Areas of Support
                    </span>

                    <ul>

                        <?php foreach ($capabilities as $capability) : ?>

                            <li>
                                <span aria-hidden="true">→</span>

                                <?php echo esc_html($capability); ?>
                            </li>

                        <?php endforeach; ?>

                    </ul>

                </div>

            </div>

        </div>

    </div>

</section>