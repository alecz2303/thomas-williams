<?php
/**
 * Footer principal.
 *
 * @package ThomasWilliams
 */

if (!defined('ABSPATH')) {
    exit;
}

$smartvault_url =
    'https://thomaswilliamscpapllc.smartvault.com/secure/SignIn.aspx?ReturnUrl=%2fusers%2fsecure%2fHome.aspx';

$home_url =
    tw_is_spanish()
        ? home_url('/es/')
        : home_url('/');

$logo_url =
    TW_THEME_URI
    . '/assets/images/branding/tw-logo-white.png';
?>

<footer class="tw-footer">

    <div class="tw-container">

        <div class="tw-footer__top">

            <div class="tw-footer__brand">

                <a
                    href="<?php echo esc_url($home_url); ?>"
                    class="tw-footer__brand-link"
                    aria-label="<?php echo esc_attr(
                        get_bloginfo('name')
                    ); ?>"
                >

                    <img
                        src="<?php echo esc_url($logo_url); ?>"
                        alt="<?php echo esc_attr(
                            get_bloginfo('name')
                        ); ?>"
                        class="tw-footer__logo"
                        width="220"
                        height="215"
                    >

                </a>

                <p>
                    <?php
                    tw_e(
                        'Accounting, tax and advisory services from San Antonio, Texas.',
                        'Servicios de contabilidad, impuestos y asesoría desde San Antonio, Texas.'
                    );
                    ?>
                </p>

                <div class="tw-footer__social" aria-label="<?php echo esc_attr(tw_text('Social media', 'Redes sociales')); ?>">
                    <a href="https://www.facebook.com/share/1EzyWUrKjV/?mibextid=wwXIfr" target="_blank" rel="noopener noreferrer">
                        <span class="tw-social-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24"><path fill="currentColor" d="M13.5 22v-9h3l.45-3.5H13.5V7.26c0-1.01.28-1.7 1.73-1.7H17V2.43c-.31-.04-1.38-.13-2.63-.13-2.6 0-4.37 1.58-4.37 4.5v2.7H7V13h3v9h3.5Z"/></svg>
                        </span>
                        <span>Facebook</span>
                    </a>
                    <a href="https://www.linkedin.com/company/thomas-williams-cpa-pllc/" target="_blank" rel="noopener noreferrer">
                        <span class="tw-social-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24"><path fill="currentColor" d="M5.34 7.5A2.17 2.17 0 1 1 5.34 3.16a2.17 2.17 0 0 1 0 4.34ZM3.47 9.1h3.75V21H3.47V9.1Zm5.82 0h3.6v1.63h.05c.5-.95 1.73-1.96 3.56-1.96 3.8 0 4.5 2.5 4.5 5.76V21h-3.75v-5.73c0-1.37-.03-3.13-1.91-3.13-1.91 0-2.2 1.49-2.2 3.03V21H9.29V9.1Z"/></svg>
                        </span>
                        <span>LinkedIn</span>
                    </a>
                </div>

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
                                href="<?php echo esc_url(
                                    $smartvault_url
                                ); ?>"
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
                                href="<?php
                                echo esc_url(
                                    tw_is_spanish()
                                        ? home_url('/es/pagos/')
                                        : home_url('/payments/')
                                );
                                ?>"
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
                    class="tw-language-switch tw-language-switch--footer"
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
                        class="tw-language-switch__option <?php
                        echo !tw_is_spanish()
                            ? 'is-active'
                            : '';
                        ?>"
                        <?php
                        echo !tw_is_spanish()
                            ? 'aria-current="page"'
                            : '';
                        ?>
                    >
                        EN
                    </a>

                    <a
                        href="<?php echo esc_url(
                            tw_get_language_url('es')
                        ); ?>"
                        class="tw-language-switch__option <?php
                        echo tw_is_spanish()
                            ? 'is-active'
                            : '';
                        ?>"
                        <?php
                        echo tw_is_spanish()
                            ? 'aria-current="page"'
                            : '';
                        ?>
                    >
                        ES
                    </a>

                </div>

            </div>

        </div>

    </div>

</footer>