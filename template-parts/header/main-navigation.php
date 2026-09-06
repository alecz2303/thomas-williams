<?php
/**
 * Navegación principal.
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
    . '/assets/images/branding/tw-logo-navy.png';
?>

<nav
    id="primary-navigation"
    class="tw-navigation"
    aria-label="<?php
    echo esc_attr(
        tw_text(
            'Primary Navigation',
            'Navegación principal'
        )
    );
    ?>"
>

    <div class="tw-navigation__mobile-head">

        <a
            href="<?php echo esc_url($home_url); ?>"
            class="tw-navigation__mobile-brand"
            aria-label="<?php echo esc_attr(
                get_bloginfo('name')
            ); ?>"
        >

            <img
                src="<?php echo esc_url($logo_url); ?>"
                alt="<?php echo esc_attr(
                    get_bloginfo('name')
                ); ?>"
                class="tw-navigation__mobile-logo"
                width="220"
                height="215"
            >

        </a>

    </div>


    <div class="tw-navigation__main">

        <?php
        wp_nav_menu(
            [
                'theme_location' => 'primary',
                'container'      => false,
                'menu_class'     => 'tw-navigation__menu',
                'fallback_cb'    => false,
            ]
        );
        ?>

    </div>


    <div class="tw-navigation__mobile-actions">

        <a
            href="<?php echo esc_url($smartvault_url); ?>"
            class="tw-navigation__mobile-portal"
            target="_blank"
            rel="noopener noreferrer"
        >

            <span>
                <?php
                tw_e(
                    'Client Portal',
                    'Portal de Clientes'
                );
                ?>
            </span>

            <span aria-hidden="true">
                ↗
            </span>

        </a>

    </div>


    <div class="tw-navigation__mobile-footer">

        <span class="tw-navigation__location">
            San Antonio, Texas
        </span>


        <div
            class="tw-language-switch tw-language-switch--mobile"
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

</nav>