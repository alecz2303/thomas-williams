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
                    href="<?php echo esc_url(home_url('/')); ?>"
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
                    Accounting, tax and advisory services
                    from San Antonio, Texas.
                </p>

            </div>

            <div class="tw-footer__nav">

                <div class="tw-footer__column">

                    <span class="tw-footer__heading">
                        Navigation
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

                <div class="tw-footer__column">

                    <span class="tw-footer__heading">
                        Client Access
                    </span>

                    <ul class="tw-footer__menu">

                        <li>

                            <a
                                href="<?php echo esc_url($smartvault_url); ?>"
                                target="_blank"
                                rel="noopener noreferrer"
                            >
                                SmartVault
                                <span aria-hidden="true">↗</span>
                            </a>

                        </li>

                        <li>

                            <a
                                href="<?php echo esc_url(home_url('/payments/')); ?>"
                            >
                                Make a Payment
                            </a>

                        </li>

                    </ul>

                </div>

                <div class="tw-footer__column">

                    <span class="tw-footer__heading">
                        Legal
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

                <span
                    class="tw-footer__language"
                    aria-label="English and Spanish"
                >
                    EN / ES
                </span>

            </div>

        </div>

    </div>

</footer>