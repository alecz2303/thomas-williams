<?php
/**
 * No content state.
 *
 * @package ThomasWilliams
 */

if (!defined('ABSPATH')) {
    exit;
}
?>

<section class="tw-no-content" aria-labelledby="tw-no-content-title">
    <h1 id="tw-no-content-title">
        <?php tw_e('No content was found.', 'No se encontró contenido.'); ?>
    </h1>

    <p>
        <?php tw_e(
            'Try a different search or return to the Insights page.',
            'Prueba una búsqueda diferente o vuelve a la página de Artículos.'
        ); ?>
    </p>
</section>
