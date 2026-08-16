<?php
/**
 * Footer principal.
 *
 * @package ThomasWilliams
 */

if (!defined('ABSPATH')) {
    exit;
}

$smartvault_url = 'https://thomaswilliamscpapllc.smartvault.com/secure/SignIn.aspx?ReturnUrl=%2fusers%2fsecure%2fHome.aspx';
?>

<footer class="tw-footer">

    <div class="tw-container">

        <div class="tw-footer__top">

            <div class="tw-footer__brand">

                <a
                    href="<?php echo esc_url(
                        tw_is_spanish()
                            ? home_url('/es/')
                            : home_url('/')
                    ); ?>"
                    class="tw-footer__brand-link"
                    aria-label="<?php echo esc_attr(get_bloginfo('name')); ?>"
                >

                    <span class="tw-footer__brand-name">
                        Thomas Williams
                    </span>

                    <span class="tw-footer__brand-subtitle">
                        CPA, PLLC
                    </span>

                </a>

                <p>
                    <?php
                    tw_e(
                        'Accounting, tax and advisory services from San Antonio, Texas.',
                        'Servicios de contabilidad, impuestos y asesoría desde San Antonio, Texas.'
                    );
                    ?>
                </p>

            </div>


            <div class="tw-footer__nav">

                <!-- =================================================
                     NAVIGATION
                ================================================== -->

                <div class="tw-footer__column">

                    <span class="tw-footer__heading">
                        <?php
                        tw_e(
                            'Navigation',
                            'Navegación'
                        );
                        ?>
                    </span>

                    <?php
                    wp_nav_menu(
                        [
                            'theme_location' => 'footer',
                            'container'      => false,
                            'menu_class'     => 'tw-footer__menu',
                            'fallback_cb'    => false,
                        ]
                    );
                    ?>

                </div>


                <!-- =================================================
                     CLIENT ACCESS
                ================================================== -->

                <div class="tw-footer__column">

                    <span class="tw-footer__heading">
                        <?php
                        tw_e(
                            'Client Access',
                            'Acceso a Clientes'
                        );
                        ?>
                    </span>

                    <ul class="tw-footer__menu">

                        <li>

                            <a
                                href="<?php echo esc_url($smartvault_url); ?>"
                                target="_blank"
                                rel="noopener noreferrer"
                            >
                                SmartVault

                                <span aria-hidden="true">
                                    ↗
                                </span>
                            </a>

                        </li>

                        <li>

                            <a
                                href="<?php echo esc_url(
                                    tw_is_spanish()
                                        ? home_url('/es/pagos/')
                                        : home_url('/payments/')
                                ); ?>"
                            >
                                <?php
                                tw_e(
                                    'Make a Payment',
                                    'Realizar un Pago'
                                );
                                ?>
                            </a>

                        </li>

                    </ul>

                </div>


                <!-- =================================================
                     LEGAL
                ================================================== -->

                <div class="tw-footer__column">

                    <span class="tw-footer__heading">
                        <?php
                        tw_e(
                            'Legal',
                            'Legal'
                        );
                        ?>
                    </span>

                    <?php
                    wp_nav_menu(
                        [
                            'theme_location' => 'legal',
                            'container'      => false,
                            'menu_class'     => 'tw-footer__menu',
                            'fallback_cb'    => false,
                        ]
                    );
                    ?>

                </div>

            </div>

        </div>


        <!-- =====================================================
             FOOTER BOTTOM
        ====================================================== -->

        <div class="tw-footer__bottom">

            <p>
                &copy;
                <?php echo esc_html(wp_date('Y')); ?>
                Thomas Williams, CPA, PLLC
            </p>

            <div class="tw-footer__bottom-links">

                <span>
                    San Antonio, Texas
                </span>

                <div
                    class="tw-footer__language"
                    aria-label="<?php
                    echo esc_attr(
                        tw_text(
                            'Language selector',
                            'Selector de idioma'
                        )
                    );
                    ?>"
                >

                    <a
                        href="<?php echo esc_url(
                            tw_get_language_url('en')
                        ); ?>"
                        class="<?php echo !tw_is_spanish()
                            ? 'is-active'
                            : ''; ?>"
                        <?php echo !tw_is_spanish()
                            ? 'aria-current="page"'
                            : ''; ?>
                    >
                        EN
                    </a>

                    <span aria-hidden="true">
                        /
                    </span>

                    <a
                        href="<?php echo esc_url(
                            tw_get_language_url('es')
                        ); ?>"
                        class="<?php echo tw_is_spanish()
                            ? 'is-active'
                            : ''; ?>"
                        <?php echo tw_is_spanish()
                            ? 'aria-current="page"'
                            : ''; ?>
                    >
                        ES
                    </a>

                </div>

            </div>

        </div>

    </div>

</footer>