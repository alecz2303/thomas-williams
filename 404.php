<?php
/**
 * 404 Page.
 *
 * @package ThomasWilliams
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();

$home_url = tw_is_spanish() ? home_url('/es/') : home_url('/');
$services_url = tw_is_spanish() ? home_url('/es/servicios/') : home_url('/services/');
?>

<main id="primary" class="site-main tw-404">
    <section class="tw-404__section" aria-labelledby="tw-404-title">
        <div class="tw-container">
            <div class="tw-404__inner">
                <div class="tw-404__visual" data-reveal>
                    <div class="tw-404__code" aria-hidden="true">
                        <span>4</span>
                        <span class="tw-404__zero">0</span>
                        <span class="tw-404__misfit">4</span>
                    </div>
                    <p class="tw-404__joke">
                        <?php tw_e("Something isn't adding up.", 'Algo no cuadra.'); ?>
                    </p>
                </div>

                <div class="tw-404__content">
                    <span class="tw-404__eyebrow" data-reveal>
                        <?php tw_e('Page Not Found', 'Página no encontrada'); ?>
                    </span>

                    <h1 id="tw-404-title" class="tw-404__title" data-reveal>
                        <?php tw_e("This page doesn't", 'Esta página no'); ?>
                        <span><?php tw_e('seem to be here.', 'parece estar aquí.'); ?></span>
                    </h1>

                    <p class="tw-404__description" data-reveal>
                        <?php tw_e(
                            'The page you were looking for may have moved, been removed or never existed. You can return home or continue exploring the firm and its services.',
                            'La página que buscabas pudo haberse movido, eliminado o quizá nunca existió. Puedes volver al inicio o continuar explorando el despacho y sus servicios.'
                        ); ?>
                    </p>

                    <div class="tw-404__actions" data-reveal>
                        <a href="<?php echo esc_url($home_url); ?>" class="tw-404__button tw-404__button--primary">
                            <?php tw_e('Return Home', 'Volver al inicio'); ?>
                            <span aria-hidden="true">→</span>
                        </a>

                        <a href="<?php echo esc_url($services_url); ?>" class="tw-404__button tw-404__button--secondary">
                            <?php tw_e('Explore Services', 'Explorar servicios'); ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
