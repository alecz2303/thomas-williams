<?php
/**
 * Insights hero.
 *
 * @package ThomasWilliams
 */

if (!defined('ABSPATH')) {
    exit;
}
?>
<section class="tw-insights-hero" aria-labelledby="insights-hero-title">
    <div class="tw-container">
        <div class="tw-insights-hero__inner">
            <div class="tw-insights-hero__heading">
                <span class="tw-insights-hero__eyebrow" data-reveal><?php tw_e('Insights', 'Perspectivas'); ?></span>
                <h1 id="insights-hero-title" class="tw-insights-hero__title" data-reveal>
                    <?php tw_e('Perspective for', 'Perspectiva para'); ?>
                    <span><?php tw_e('informed decisions.', 'decisiones informadas.'); ?></span>
                </h1>
            </div>
            <div class="tw-insights-hero__intro" data-reveal>
                <p><?php tw_e(
                    'Practical perspectives on accounting, tax, business and financial matters that may affect the decisions ahead.',
                    'Perspectivas prácticas sobre contabilidad, impuestos, negocios y temas financieros que pueden influir en las decisiones que vienen.'
                ); ?></p>
            </div>
        </div>
    </div>
</section>
