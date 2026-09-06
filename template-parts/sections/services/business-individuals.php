<?php
/**
 * Services - Business & Individuals.
 *
 * @package ThomasWilliams
 */

if (!defined('ABSPATH')) {
    exit;
}

$capabilities = [
    tw_text('Business Tax Services', 'Servicios Fiscales para Empresas'),
    tw_text('Individual Tax Services', 'Servicios Fiscales para Personas'),
    tw_text('Tax Planning', 'Planeación Fiscal'),
    tw_text('Accounting & Financial Guidance', 'Orientación Contable y Financiera'),
    tw_text('Business Consulting', 'Consultoría de Negocios'),
];
?>
<section class="tw-service-detail tw-service-detail--reverse tw-service-detail--business" id="business-individuals">
    <div class="tw-container">
        <div class="tw-service-detail__grid">
            <div class="tw-service-detail__content">
                <span class="tw-service-detail__eyebrow" data-reveal><?php tw_e('Business & Individuals', 'Empresas y Personas'); ?></span>
                <h2 class="tw-service-detail__title" data-reveal>
                    <?php tw_e('Guidance built around', 'Orientación construida alrededor de'); ?>
                    <span><?php tw_e('your financial goals.', 'tus objetivos financieros.'); ?></span>
                </h2>
                <p class="tw-service-detail__lead" data-reveal><?php tw_e(
                    'Financial decisions are rarely isolated. Business priorities and personal goals often influence one another.',
                    'Las decisiones financieras rara vez están aisladas. Las prioridades del negocio y los objetivos personales con frecuencia se influyen entre sí.'
                ); ?></p>
                <p class="tw-service-detail__text" data-reveal><?php tw_e(
                    'We work with businesses and individuals to provide accounting, tax and advisory support shaped around their circumstances, responsibilities and long-term objectives.',
                    'Trabajamos con empresas y personas para brindar apoyo contable, fiscal y de asesoría adaptado a sus circunstancias, responsabilidades y objetivos de largo plazo.'
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
            <div class="tw-service-detail__media" data-reveal>
                <div class="tw-service-detail__image-wrap">
                    <img src="<?php echo esc_url(TW_THEME_URI . '/assets/images/services/business-individuals.png'); ?>"
                        alt="<?php echo esc_attr(tw_text('Business professionals discussing financial planning and advisory matters.', 'Profesionales conversando sobre planeación financiera y asesoría.')); ?>"
                        class="tw-service-detail__image" loading="lazy">
                    <span class="tw-service-detail__image-label" aria-hidden="true">02</span>
                </div>
            </div>
        </div>
    </div>
</section>
