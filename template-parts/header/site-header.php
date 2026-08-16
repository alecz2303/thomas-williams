<?php
/**
 * Cabecera visual.
 *
 * @package ThomasWilliams
 */

if (!defined('ABSPATH')) {
    exit;
}

$smartvault_url = 'https://thomaswilliamscpapllc.smartvault.com/secure/SignIn.aspx?ReturnUrl=%2fusers%2fsecure%2fHome.aspx';
?>

<header id="site-header" class="tw-header">

    <div class="tw-container tw-header__inner">

        <div class="tw-header__brand">

            <a
                href="<?php echo esc_url(home_url('/')); ?>"
                class="tw-header__logo"
                aria-label="<?php echo esc_attr(get_bloginfo('name')); ?>"
            >

                <?php if (has_custom_logo()) : ?>

                    <?php the_custom_logo(); ?>

                <?php else : ?>

                    <span class="tw-header__logo-text">
                        Thomas Williams
                    </span>

                    <span class="tw-header__logo-subtitle">
                        CPA, PLLC
                    </span>

                <?php endif; ?>

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
                class="tw-header__language"
                aria-label="Language selector"
            >
                <a
                    href="<?php echo esc_url(tw_get_language_url('en')); ?>"
                    class="<?php echo !tw_is_spanish() ? 'is-active' : ''; ?>"
                    <?php echo !tw_is_spanish() ? 'aria-current="page"' : ''; ?>
                >
                    EN
                </a>

                <span aria-hidden="true">
                    /
                </span>

                <a
                    href="<?php echo esc_url(tw_get_language_url('es')); ?>"
                    class="<?php echo tw_is_spanish() ? 'is-active' : ''; ?>"
                    <?php echo tw_is_spanish() ? 'aria-current="page"' : ''; ?>
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
                Client Portal

                <span
                    class="tw-header__portal-arrow"
                    aria-hidden="true"
                >
                    ↗
                </span>
            </a>

            <button
                class="tw-nav-toggle"
                type="button"
                aria-expanded="false"
                aria-controls="primary-navigation"
                aria-label="<?php esc_attr_e(
                    'Open navigation',
                    'thomas-williams'
                ); ?>"
            >
                <span></span>
                <span></span>
            </button>

        </div>

    </div>

</header>