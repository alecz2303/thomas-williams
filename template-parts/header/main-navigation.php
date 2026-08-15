<?php
/**
 * Navegación principal.
 *
 * @package ThomasWilliams
 */

if (!defined('ABSPATH')) {
    exit;
}
?>

<nav
    id="primary-navigation"
    class="tw-navigation"
    aria-label="Primary Navigation"
>

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

    <div class="tw-navigation__language">
        <a href="#" class="is-active">EN</a>

        <span>/</span>

        <a href="#">ES</a>
    </div>

</nav>