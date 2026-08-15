<?php
/**
 * Services - Compliance Solutions.
 *
 * @package ThomasWilliams
 */

if (!defined('ABSPATH')) {
    exit;
}

$capabilities = [
    'Tax Compliance',
    'Tax Planning',
    'Financial Reporting',
    'Accounting Support',
    'Business Advisory',
];
?>

<section
    class="tw-service-detail tw-service-detail--compliance"
    id="compliance-solutions"
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
                            '/assets/images/services/compliance.png'
                        ); ?>"
                        alt="Financial documents and accounting analysis in a professional office."
                        class="tw-service-detail__image"
                        loading="lazy"
                    >

                    <span
                        class="tw-service-detail__image-label"
                        aria-hidden="true"
                    >
                        01
                    </span>

                </div>

            </div>

            <div class="tw-service-detail__content">

                <span
                    class="tw-service-detail__eyebrow"
                    data-reveal
                >
                    Compliance Solutions
                </span>

                <h2
                    class="tw-service-detail__title"
                    data-reveal
                >
                    Stay compliant.
                    <span>Plan beyond it.</span>
                </h2>

                <p
                    class="tw-service-detail__lead"
                    data-reveal
                >
                    Compliance is essential, but strong
                    financial guidance should also help you
                    understand what comes next.
                </p>

                <p
                    class="tw-service-detail__text"
                    data-reveal
                >
                    Thomas Williams, CPA, PLLC provides
                    accounting and tax support designed to
                    help clients meet their responsibilities,
                    maintain reliable financial information
                    and make informed business decisions.
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