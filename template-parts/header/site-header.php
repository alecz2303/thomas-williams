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

            <a href="<?php echo esc_url(home_url('/')); ?>" class="tw-header__logo"
                aria-label="<?php echo esc_attr(get_bloginfo('name')); ?>">

                <?php if (has_custom_logo()): ?>

                    <?php the_custom_logo(); ?>

                <?php else: ?>

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

            <div class="tw-language-switch tw-language-switch--header" aria-label="<?php
            echo esc_attr(
                tw_text(
                    'Language selector',
                    'Selector de idioma'
                )
            );
            ?>">

                <a href="<?php echo esc_url(
                    tw_get_language_url('en')
                ); ?>" class="tw-language-switch__option <?php echo !tw_is_spanish()
                     ? 'is-active'
                     : ''; ?>">
                    EN
                </a>

                <a href="<?php echo esc_url(
                    tw_get_language_url('es')
                ); ?>" class="tw-language-switch__option <?php echo tw_is_spanish()
                     ? 'is-active'
                     : ''; ?>">
                    ES
                </a>

            </div>

            <a href="..." class="tw-header__portal">
                Client Portal
            </a>

            <button class="tw-nav-toggle" ...>
                <span></span>
                <span></span>
            </button>

        </div>

    </div>

</header>