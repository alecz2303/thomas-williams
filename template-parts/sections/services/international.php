<?php
/**
 * Services - International / Cross-Border.
 *
 * @package ThomasWilliams
 */

if (!defined('ABSPATH')) {
    exit;
}

$focus_areas = [
    'Foreign Nationals Investing in the U.S.',
    'U.S. Citizens & Residents Investing Abroad',
    'Cross-Border Tax Considerations',
    'International Compliance Support',
];
?>

<section
    class="tw-services-international"
    id="international"
    aria-labelledby="services-international-title"
>

    <div class="tw-container">

        <div class="tw-services-international__inner">

            <div class="tw-services-international__content">

                <span
                    class="tw-services-international__label"
                    data-reveal
                >
                    International Perspective
                </span>

                <h2
                    id="services-international-title"
                    class="tw-services-international__title"
                    data-reveal
                >
                    Financial decisions
                    <span>don't stop at the border.</span>
                </h2>

                <p
                    class="tw-services-international__lead"
                    data-reveal
                >
                    Cross-border financial matters can create
                    additional tax, reporting and compliance
                    considerations.
                </p>

                <p
                    class="tw-services-international__text"
                    data-reveal
                >
                    Thomas Williams, CPA, PLLC provides guidance
                    for foreign nationals investing in the United
                    States, as well as U.S. citizens and residents
                    with financial interests abroad.
                </p>

            </div>

            <div
                class="tw-services-international__areas"
                data-reveal
            >

                <span class="tw-services-international__areas-label">
                    Areas of Focus
                </span>

                <ul>

                    <?php foreach ($focus_areas as $area) : ?>

                        <li>
                            <span aria-hidden="true">→</span>

                            <?php echo esc_html($area); ?>
                        </li>

                    <?php endforeach; ?>

                </ul>

            </div>

        </div>

    </div>

</section>