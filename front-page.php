<?php
/**
 * Front Page.
 *
 * @package ThomasWilliams
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<main id="primary" class="site-main">

    <?php
    /**
     * Hero principal.
     */
    get_template_part(
        'template-parts/hero/hero',
        'home'
    );

    /**
     * Presentación breve del despacho.
     */
    get_template_part(
        'template-parts/sections/home',
        'intro'
    );

    /**
     * Resumen visual de servicios.
     */
    get_template_part(
        'template-parts/sections/home',
        'services'
    );

    /**
     * Accesos para clientes.
     * SmartVault + Payments.
     */
    get_template_part(
        'template-parts/sections/home',
        'client-access'
    );

    /**
     * CTA final de contacto.
     */
    get_template_part(
        'template-parts/sections/home',
        'contact-cta'
    );
    ?>

</main>

<?php
get_footer();