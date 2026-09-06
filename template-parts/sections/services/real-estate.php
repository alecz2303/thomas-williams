<?php
/**
 * Services - Real Estate Investment Consultancy.
 *
 * @package ThomasWilliams
 */

if (!defined('ABSPATH')) {
    exit;
}

$capabilities = [
    tw_text('Investment Evaluation', 'Evaluación de Inversiones'),
    tw_text('Financial Analysis', 'Análisis Financiero'),
    tw_text('Tax Considerations', 'Consideraciones Fiscales'),
    tw_text('Ownership Structure', 'Estructura de Propiedad'),
    tw_text('Strategic Advisory', 'Asesoría Estratégica'),
];
?>
<section class="tw-service-detail tw-service-detail--real-estate" id="real-estate-investment-consultancy">
    <div class="tw-container">
        <div class="tw-service-detail__grid">
            <div class="tw-service-detail__media" data-reveal>
                <div class="tw-service-detail__image-wrap">
                    <img src="<?php echo esc_url(TW_THEME_URI . '/assets/images/services/real-estate.png'); ?>"
                        alt="<?php echo esc_attr(tw_text('Modern real estate investment analysis and property planning.', 'Análisis moderno de inversión inmobiliaria y planeación de propiedades.')); ?>"
                        class="tw-service-detail__image" loading="lazy">
                    <span class="tw-service-detail__image-label" aria-hidden="true">03</span>
                </div>
            </div>
            <div class="tw-service-detail__content">
                <span class="tw-service-detail__eyebrow" data-reveal><?php tw_e('Real Estate Investment Consultancy', 'Asesoría en Inversión Inmobiliaria'); ?></span>
                <h2 class="tw-service-detail__title" data-reveal>
                    <?php tw_e('Better insight for', 'Mejor perspectiva para'); ?>
                    <span><?php tw_e('better investment decisions.', 'mejores decisiones de inversión.'); ?></span>
                </h2>
                <p class="tw-service-detail__lead" data-reveal><?php tw_e(
                    'Real estate decisions often involve more than the property itself.',
                    'Las decisiones inmobiliarias suelen involucrar mucho más que la propiedad en sí.'
                ); ?></p>
                <p class="tw-service-detail__text" data-reveal><?php tw_e(
                    'We provide financial and advisory support to help clients evaluate opportunities, understand tax considerations and approach real estate investments with greater clarity.',
                    'Brindamos apoyo financiero y de asesoría para ayudar a nuestros clientes a evaluar oportunidades, comprender consideraciones fiscales y abordar inversiones inmobiliarias con mayor claridad.'
                ); ?></p>
                <div class="tw-service-detail__capabilities" data-reveal>
                    <span class="tw-service-detail__capabilities-label"><?php tw_e('Areas of Support', 'Áreas de Apoyo'); ?></span>
                    <ul>
                        <?php foreach ($capabilities as $capability) : ?>
                            <li><span aria-hidden="true">→</span><?php echo esc_html($capability); ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
