<?php
/**
 * Resumen visual de servicios.
 *
 * @package ThomasWilliams
 */

if (!defined('ABSPATH')) {
    exit;
}

$services = [
    [
        'number'      => '01',
        'title'       => 'Compliance Solutions',
        'description' => 'Practical support for tax, accounting and compliance needs.',
        'image'       => 'service-compliance.png',
        'url'         => home_url('/services/'),
    ],
    [
        'number'      => '02',
        'title'       => 'Business & Individuals',
        'description' => 'Professional guidance designed around businesses, individuals and their financial goals.',
        'image'       => 'service-business.png',
        'url'         => home_url('/services/'),
    ],
    [
        'number'      => '03',
        'title'       => 'Real Estate Investment Consultancy',
        'description' => 'Insight and advisory support for real estate investment decisions.',
        'image'       => 'service-real-estate.png',
        'url'         => home_url('/services/'),
    ],
];
?>

<section
    class="tw-home-services"
    id="services"
>

    <div class="tw-container">

        <header class="tw-home-services__header">

            <div class="tw-home-services__heading">

                <span
                    class="tw-home-services__label"
                    data-reveal
                >
                    Specialized Services
                </span>

                <h2
                    class="tw-home-services__title"
                    data-reveal
                >
                    Solutions designed around
                    <span>what matters to you.</span>
                </h2>

                <p
                    class="tw-home-services__intro"
                    data-reveal
                >
                    Professional accounting, tax and advisory
                    services with the perspective and attention
                    to help clients move forward with confidence.
                </p>

            </div>

            <a
                href="<?php echo esc_url(home_url('/services/')); ?>"
                class="tw-home-services__all"
                data-reveal
            >
                Explore All Services

                <span aria-hidden="true">
                    →
                </span>
            </a>

        </header>

        <div class="tw-home-services__grid">

            <?php foreach ($services as $service) : ?>

                <article
                    class="tw-home-service-card"
                    data-reveal
                >

                    <a
                        href="<?php echo esc_url($service['url']); ?>"
                        class="tw-home-service-card__media"
                        aria-label="<?php echo esc_attr($service['title']); ?>"
                    >

                        <img
                            src="<?php echo esc_url(
                                TW_THEME_URI
                                . '/assets/images/home/'
                                . $service['image']
                            ); ?>"
                            alt=""
                            class="tw-home-service-card__image"
                            loading="lazy"
                        >

                        <div
                            class="tw-home-service-card__overlay"
                            aria-hidden="true"
                        ></div>

                    </a>

                    <div class="tw-home-service-card__content">

                        <span class="tw-home-service-card__number">
                            <?php echo esc_html($service['number']); ?>
                        </span>

                        <h3 class="tw-home-service-card__title">

                            <a
                                href="<?php echo esc_url($service['url']); ?>"
                            >
                                <?php echo esc_html($service['title']); ?>
                            </a>

                        </h3>

                        <p class="tw-home-service-card__description">
                            <?php echo esc_html($service['description']); ?>
                        </p>

                        <a
                            href="<?php echo esc_url($service['url']); ?>"
                            class="tw-home-service-card__link"
                        >
                            Learn More

                            <span aria-hidden="true">
                                →
                            </span>
                        </a>

                    </div>

                </article>

            <?php endforeach; ?>

        </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    
    </div>

</section>