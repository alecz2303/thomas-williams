<?php
/**
 * Resumen visual de servicios.
 *
 * @package ThomasWilliams
 */

if (!defined('ABSPATH')) {
    exit;
}

$services_url = tw_is_spanish()
    ? home_url('/es/servicios/')
    : home_url('/services/');

$services = [
    [
        'number' => '01',

        'title' => tw_text(
            'Compliance Solutions',
            'Soluciones de Cumplimiento'
        ),

        'description' => tw_text(
            'Practical support for tax, accounting and compliance needs.',
            'Apoyo práctico para necesidades fiscales, contables y de cumplimiento.'
        ),

        'image' => 'service-compliance.png',

        'url' => $services_url,
    ],

    [
        'number' => '02',

        'title' => tw_text(
            'Business & Individuals',
            'Empresas y Personas'
        ),

        'description' => tw_text(
            'Professional guidance designed around businesses, individuals and their financial goals.',
            'Orientación profesional diseñada para empresas, personas y sus objetivos financieros.'
        ),

        'image' => 'service-business.png',

        'url' => $services_url,
    ],

    [
        'number' => '03',

        'title' => tw_text(
            'Real Estate Investment Consultancy',
            'Asesoría en Inversión Inmobiliaria'
        ),

        'description' => tw_text(
            'Insight and advisory support for real estate investment decisions.',
            'Perspectiva y asesoría profesional para la toma de decisiones de inversión inmobiliaria.'
        ),

        'image' => 'service-real-estate.png',

        'url' => $services_url,
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
                    <?php
                    tw_e(
                        'Specialized Services',
                        'Servicios Especializados'
                    );
                    ?>
                </span>

                <h2
                    class="tw-home-services__title"
                    data-reveal
                >
                    <?php
                    tw_e(
                        'Solutions designed around',
                        'Soluciones diseñadas para'
                    );
                    ?>

                    <span>
                        <?php
                        tw_e(
                            'what matters to you.',
                            'lo que realmente importa.'
                        );
                        ?>
                    </span>
                </h2>

                <p
                    class="tw-home-services__intro"
                    data-reveal
                >
                    <?php
                    tw_e(
                        'Professional accounting, tax and advisory services with the perspective and attention to help clients move forward with confidence.',
                        'Servicios profesionales de contabilidad, impuestos y asesoría, con la perspectiva y atención necesarias para ayudar a nuestros clientes a avanzar con confianza.'
                    );
                    ?>
                </p>

            </div>

            <a
                href="<?php echo esc_url($services_url); ?>"
                class="tw-home-services__all"
                data-reveal
            >
                <?php
                tw_e(
                    'Explore All Services',
                    'Conoce Todos Nuestros Servicios'
                );
                ?>

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
                            <?php
                            tw_e(
                                'Learn More',
                                'Conoce Más'
                            );
                            ?>

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