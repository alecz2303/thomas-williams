<?php
/**
 * Presentación breve del despacho.
 *
 * @package ThomasWilliams
 */

if (!defined('ABSPATH')) {
    exit;
}

$about_url = tw_is_spanish()
    ? home_url('/es/nosotros/')
    : home_url('/about/');
?>

<section
    class="tw-home-firm"
    id="about"
>

    <div class="tw-container">

        <div class="tw-home-firm__grid">

            <div class="tw-home-firm__content">

                <span
                    class="tw-home-firm__label"
                    data-reveal
                >
                    <?php
                    tw_e(
                        'Our Firm',
                        'Nuestro Despacho'
                    );
                    ?>
                </span>

                <h2
                    class="tw-home-firm__title"
                    data-reveal
                >
                    <?php
                    tw_e(
                        'Experience that brings',
                        'Experiencia que aporta'
                    );
                    ?>

                    <span>
                        <?php
                        tw_e(
                            'perspective.',
                            'perspectiva.'
                        );
                        ?>
                    </span>
                </h2>

                <p
                    class="tw-home-firm__text"
                    data-reveal
                >
                    <?php
                    tw_e(
                        'Thomas Williams, CPA, PLLC provides accounting, tax and advisory services with a focus on clear guidance, personal attention and practical solutions.',
                        'Thomas Williams, CPA, PLLC ofrece servicios de contabilidad, impuestos y asesoría con un enfoque en orientación clara, atención personalizada y soluciones prácticas.'
                    );
                    ?>
                </p>

                <div
                    class="tw-home-firm__meta"
                    data-reveal
                >

                    <div class="tw-home-firm__established">

                        <span>
                            <?php
                            tw_e(
                                'Established',
                                'Fundado en'
                            );
                            ?>
                        </span>

                        <strong>
                            1990
                        </strong>

                    </div>

                    <a
                        href="<?php echo esc_url($about_url); ?>"
                        class="tw-home-firm__link"
                    >
                        <?php
                        tw_e(
                            'Learn More About Our Firm',
                            'Conoce Más Sobre Nuestro Despacho'
                        );
                        ?>

                        <span aria-hidden="true">
                            →
                        </span>
                    </a>

                </div>

            </div>

            <div
                class="tw-home-firm__media"
                data-reveal
            >

                <div class="tw-home-firm__image-wrap">

                    <img
                        src="<?php echo esc_url(
                            TW_THEME_URI
                            . '/assets/images/home/firm.png'
                        ); ?>"
                        alt="<?php
                        echo esc_attr(
                            tw_text(
                                'Modern professional environment representing Thomas Williams, CPA, PLLC.',
                                'Entorno profesional moderno que representa a Thomas Williams, CPA, PLLC.'
                            )
                        );
                        ?>"
                        class="tw-home-firm__image"
                        loading="lazy"
                    >

                    <div
                        class="tw-home-firm__image-overlay"
                        aria-hidden="true"
                    ></div>

                </div>

            </div>

        </div>

    </div>

</section>