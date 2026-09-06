<?php
/**
 * Cabecera visual.
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

<header
    id="site-header"
    class="tw-header"
>

    <div class="tw-container tw-header__inner">

        <div class="tw-header__brand">

            <a
                href="<?php echo esc_url($home_url); ?>"
                class="tw-header__logo"
                aria-label="<?php echo esc_attr(
                    get_bloginfo('name')
                ); ?>"
            >

                <img
                    src="<?php echo esc_url($logo_url); ?>"
                    alt="<?php echo esc_attr(
                        get_bloginfo('name')
                    ); ?>"
                    class="tw-header__logo-image"
                    width="220"
                    height="215"
                >

            </a>

        </div>


        <?php
        get_template_part(
            'template-parts/header/main',
            'navigation'
        );
        ?>


        <div class="tw-header__actions">

            <div
                class="tw-language-switch tw-language-switch--header"
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


            <a
                href="<?php echo esc_url($smartvault_url); ?>"
                class="tw-header__portal"
                target="_blank"
                rel="noopener noreferrer"
            >
                <?php
                tw_e(
                    'Client Portal',
                    'Portal de Clientes'
                );
                ?>
            </a>


            <button
                type="button"
                class="tw-nav-toggle"
                aria-label="<?php
                echo esc_attr(
                    tw_text(
                        'Open navigation',
                        'Abrir navegación'
                    )
                );
                ?>"
                aria-controls="primary-navigation"
                aria-expanded="false"
            >

                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>

            </button>

        </div>

    </div>

</header>