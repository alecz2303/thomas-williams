<?php
/**
 * CTA final del Home.
 *
 * @package ThomasWilliams
 */

if (!defined('ABSPATH')) {
    exit;
}

$contact_url = tw_is_spanish()
    ? home_url('/es/contacto/')
    : home_url('/contact/');
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
                <?php
                tw_e(
                    'Let\'s Talk',
                    'Hablemos'
                );
                ?>
            </span>

            <h2
                id="home-cta-title"
                class="tw-home-cta__title"
                data-reveal
            >
                <?php
                tw_e(
                    'Ready for a clearer',
                    '¿Listo para avanzar con'
                );
                ?>

                <span>
                    <?php
                    tw_e(
                        'path forward?',
                        'mayor claridad?'
                    );
                    ?>
                </span>
            </h2>

            <div
                class="tw-home-cta__footer"
                data-reveal
            >

                <p>
                    <?php
                    tw_e(
                        'Whether you need accounting, tax or advisory support, we\'re ready to start the conversation.',
                        'Ya sea que necesites apoyo contable, fiscal o de asesoría, estamos listos para iniciar la conversación.'
                    );
                    ?>
                </p>

                <a
                    href="<?php echo esc_url($contact_url); ?>"
                    class="tw-home-cta__button"
                >
                    <?php
                    tw_e(
                        'Contact Our Firm',
                        'Contacta a Nuestro Despacho'
                    );
                    ?>

                    <span aria-hidden="true">
                        →
                    </span>
                </a>

            </div>

        </div>

    </div>

</section>