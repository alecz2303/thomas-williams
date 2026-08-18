<?php
/**
 * Hero principal del Home.
 *
 * @package ThomasWilliams
 */

if (!defined('ABSPATH')) {
    exit;
}

$services_url = tw_is_spanish()
    ? home_url('/es/servicios/')
    : home_url('/services/');

$about_url = tw_is_spanish()
    ? home_url('/es/nosotros/')
    : home_url('/about/');
?>

<section class="tw-hero">

    <div
        class="tw-hero__background"
        aria-hidden="true"
    >
        <div class="tw-hero__grid"></div>

        <div
            class="tw-hero__glow tw-hero__glow--one"
        ></div>

        <div
            class="tw-hero__glow tw-hero__glow--two"
        ></div>
    </div>


    <div class="tw-container tw-hero__inner">

        <!-- =================================================
             CONTENT
        ================================================== -->

        <div class="tw-hero__content">

            <p
                class="tw-hero__eyebrow"
                data-reveal
            >
                <?php
                tw_e(
                    'Certified Public Accountants',
                    'Contadores Públicos Certificados'
                );
                ?>
            </p>


            <h1 class="tw-hero__title">

                <span
                    class="tw-hero__title-line"
                    data-reveal
                >
                    <?php
                    tw_e(
                        'Clarity for',
                        'Claridad para'
                    );
                    ?>
                </span>

                <span
                    class="tw-hero__title-line tw-hero__title-line--accent"
                    data-reveal
                >
                    <?php
                    tw_e(
                        'every decision.',
                        'cada decisión.'
                    );
                    ?>
                </span>

            </h1>


            <p
                class="tw-hero__description"
                data-reveal
            >
                <?php
                tw_e(
                    'Accounting, tax and advisory services designed to help businesses and individuals move forward with confidence.',
                    'Servicios de contabilidad, impuestos y asesoría diseñados para ayudar a empresas y personas a avanzar con confianza.'
                );
                ?>
            </p>


            <div
                class="tw-hero__actions"
                data-reveal
            >

                <a
                    href="<?php echo esc_url($services_url); ?>"
                    class="tw-button tw-button--primary"
                >
                    <?php
                    tw_e(
                        'Explore Our Services',
                        'Conoce Nuestros Servicios'
                    );
                    ?>

                    <span aria-hidden="true">
                        ↗
                    </span>
                </a>


                <a
                    href="<?php echo esc_url($about_url); ?>"
                    class="tw-button tw-button--text"
                >
                    <?php
                    tw_e(
                        'About Our Firm',
                        'Conoce Nuestro Despacho'
                    );
                    ?>
                </a>

            </div>

        </div>


        <!-- =================================================
             MEDIA
        ================================================== -->

        <div
            class="tw-hero__media"
            data-reveal
        >

            <div class="tw-hero__image-wrap">

                <img
                    src="<?php echo esc_url(
                        TW_THEME_URI
                        . '/assets/images/home/hero.png'
                    ); ?>"
                    alt="<?php
                    echo esc_attr(
                        tw_text(
                            'Modern corporate architecture representing professional accounting and advisory services.',
                            'Arquitectura corporativa moderna que representa servicios profesionales de contabilidad y asesoría.'
                        )
                    );
                    ?>"
                    class="tw-hero__image"
                    data-hero-image
                >


                <div
                    class="tw-hero__image-overlay"
                    aria-hidden="true"
                ></div>


                <div class="tw-hero__image-note">

                    <span>
                        San Antonio, Texas
                    </span>

                    <span>
                        <?php
                        tw_e(
                            'Established 1990',
                            'Desde 1990'
                        );
                        ?>
                    </span>

                </div>

            </div>

        </div>

    </div>


    <!-- =====================================================
         SCROLL INDICATOR
    ====================================================== -->

    <div
        class="tw-hero__scroll"
        aria-hidden="true"
    >

        <span>
            <?php
            tw_e(
                'Scroll',
                'Desliza'
            );
            ?>
        </span>

        <div class="tw-hero__scroll-line"></div>

    </div>

</section>