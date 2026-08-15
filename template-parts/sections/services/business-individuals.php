<?php
/**
 * Services - Business & Individuals.
 *
 * @package ThomasWilliams
 */

if (!defined('ABSPATH')) {
    exit;
}

$capabilities = [
    'Business Tax Services',
    'Individual Tax Services',
    'Tax Planning',
    'Accounting & Financial Guidance',
    'Business Consulting',
];
?>

<section
    class="tw-service-detail tw-service-detail--reverse tw-service-detail--business"
    id="business-individuals"
>

    <div class="tw-container">

        <div class="tw-service-detail__grid">

            <div class="tw-service-detail__content">

                <span
                    class="tw-service-detail__eyebrow"
                    data-reveal
                >
                    Business &amp; Individuals
                </span>

                <h2
                    class="tw-service-detail__title"
                    data-reveal
                >
                    Guidance built around
                    <span>your financial goals.</span>
                </h2>

                <p
                    class="tw-service-detail__lead"
                    data-reveal
                >
                    Financial decisions are rarely isolated.
                    Business priorities and personal goals
                    often influence one another.
                </p>

                <p
                    class="tw-service-detail__text"
                    data-reveal
                >
                    We work with businesses and individuals
                    to provide accounting, tax and advisory
                    support shaped around their circumstances,
                    responsibilities and long-term objectives.
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

            <div
                class="tw-service-detail__media"
                data-reveal
            >

                <div class="tw-service-detail__image-wrap">

                    <img
                        src="<?php echo esc_url(
                            TW_THEME_URI .
                            '/assets/images/services/business-individuals.png'
                        ); ?>"
                        alt="Business professionals discussing financial planning and advisory matters."
                        class="tw-service-detail__image"
                        loading="lazy"
                    >

                    <span
                        class="tw-service-detail__image-label"
                        aria-hidden="true"
                    >
                        02
                    </span>

                </div>

            </div>

        </div>

    </div>

</section>