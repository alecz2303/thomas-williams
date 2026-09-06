<?php
/**
 * Services - International / Cross-Border.
 *
 * @package ThomasWilliams
 */

if (!defined('ABSPATH')) {
    exit;
}

$focus_areas = [
    tw_text('Foreign Nationals Investing in the U.S.', 'Extranjeros que Invierten en Estados Unidos'),
    tw_text('U.S. Citizens & Residents Investing Abroad', 'Ciudadanos y Residentes de EE. UU. que Invierten en el Extranjero'),
    tw_text('Cross-Border Tax Considerations', 'Consideraciones Fiscales Transfronterizas'),
    tw_text('International Compliance Support', 'Apoyo en Cumplimiento Internacional'),
];
?>
<section class="tw-services-international" id="international" aria-labelledby="services-international-title">
    <div class="tw-container">
        <div class="tw-services-international__inner">
            <div class="tw-services-international__content">
                <span class="tw-services-international__label" data-reveal><?php tw_e('International Perspective', 'Perspectiva Internacional'); ?></span>
                <h2 id="services-international-title" class="tw-services-international__title" data-reveal>
                    <?php tw_e('Financial decisions', 'Las decisiones financieras'); ?>
                    <span><?php tw_e("don't stop at the border.", 'no se detienen en la frontera.'); ?></span>
                </h2>
                <p class="tw-services-international__lead" data-reveal><?php tw_e(
                    'Cross-border financial matters can create additional tax, reporting and compliance considerations.',
                    'Los asuntos financieros transfronterizos pueden generar consideraciones adicionales de impuestos, reportes y cumplimiento.'
                ); ?></p>
                <p class="tw-services-international__text" data-reveal><?php tw_e(
                    'Thomas Williams, CPA, PLLC provides guidance for foreign nationals investing in the United States, as well as U.S. citizens and residents with financial interests abroad.',
                    'Thomas Williams, CPA, PLLC brinda orientación a extranjeros que invierten en Estados Unidos, así como a ciudadanos y residentes estadounidenses con intereses financieros en el extranjero.'
                ); ?></p>
            </div>
            <div class="tw-services-international__areas" data-reveal>
                <span class="tw-services-international__areas-label"><?php tw_e('Areas of Focus', 'Áreas de Enfoque'); ?></span>
                <ul>
                    <?php foreach ($focus_areas as $area) : ?>
                        <li><span aria-hidden="true">→</span><?php echo esc_html($area); ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</section>
