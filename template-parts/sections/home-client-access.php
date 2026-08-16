<?php
/**
 * Client Access.
 *
 * @package ThomasWilliams
 */

if (!defined('ABSPATH')) {
    exit;
}

$smartvault_url = 'https://thomaswilliamscpapllc.smartvault.com/secure/SignIn.aspx?ReturnUrl=%2fusers%2fsecure%2fHome.aspx';

$payments_url = tw_is_spanish()
    ? home_url('/es/pagos/')
    : home_url('/payments/');
?>

<section
    class="tw-client-access"
    aria-labelledby="client-access-title"
>

    <div class="tw-container">

        <header class="tw-client-access__header">

            <span
                class="tw-client-access__label"
                data-reveal
            >
                <?php
                tw_e(
                    'Client Access',
                    'Acceso a Clientes'
                );
                ?>
            </span>

            <div class="tw-client-access__heading">

                <h2
                    id="client-access-title"
                    class="tw-client-access__title"
                    data-reveal
                >
                    <?php
                    tw_e(
                        'Everything you need,',
                        'Todo lo que necesitas,'
                    );
                    ?>

                    <span>
                        <?php
                        tw_e(
                            'within reach.',
                            'a tu alcance.'
                        );
                        ?>
                    </span>
                </h2>

                <p
                    class="tw-client-access__intro"
                    data-reveal
                >
                    <?php
                    tw_e(
                        'Quick access to your secure client portal and online payment options.',
                        'Acceso rápido a tu portal seguro de clientes y a las opciones de pago en línea.'
                    );
                    ?>
                </p>

            </div>

        </header>


        <div class="tw-client-access__grid">

            <!-- =================================================
                 SMARTVAULT
            ================================================== -->

            <a
                href="<?php echo esc_url($smartvault_url); ?>"
                class="tw-client-access__card"
                target="_blank"
                rel="noopener noreferrer"
                data-reveal
            >

                <div class="tw-client-access__card-content">

                    <span class="tw-client-access__card-kicker">
                        <?php
                        tw_e(
                            'Secure Client Portal',
                            'Portal Seguro para Clientes'
                        );
                        ?>
                    </span>

                    <h3>
                        SmartVault
                    </h3>

                    <p>
                        <?php
                        tw_e(
                            'Securely access your documents, files and client portal.',
                            'Accede de forma segura a tus documentos, archivos y portal de cliente.'
                        );
                        ?>
                    </p>

                </div>

                <span
                    class="tw-client-access__card-arrow"
                    aria-hidden="true"
                >
                    ↗
                </span>

            </a>


            <!-- =================================================
                 PAYMENTS
            ================================================== -->

            <a
                href="<?php echo esc_url($payments_url); ?>"
                class="tw-client-access__card tw-client-access__card--blue"
                data-reveal
            >

                <div class="tw-client-access__card-content">

                    <span class="tw-client-access__card-kicker">
                        <?php
                        tw_e(
                            'Client Payments',
                            'Pagos de Clientes'
                        );
                        ?>
                    </span>

                    <h3>
                        <?php
                        tw_e(
                            'Make a Payment',
                            'Realizar un Pago'
                        );
                        ?>
                    </h3>

                    <p>
                        <?php
                        tw_e(
                            'Convenient access to secure online payment options.',
                            'Acceso fácil y conveniente a opciones seguras de pago en línea.'
                        );
                        ?>
                    </p>

                </div>

                <span
                    class="tw-client-access__card-arrow"
                    aria-hidden="true"
                >
                    →
                </span>

            </a>

        </div>

    </div>

</section>