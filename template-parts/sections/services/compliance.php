<?php
/**
 * Services - Compliance Solutions.
 *
 * @package ThomasWilliams
 */

if (!defined('ABSPATH')) {
    exit;
}

$capabilities = [
    tw_text('Tax Compliance', 'Cumplimiento Fiscal'),
    tw_text('Tax Planning', 'Planeación Fiscal'),
    tw_text('Financial Reporting', 'Información Financiera'),
    tw_text('Accounting Support', 'Apoyo Contable'),
    tw_text('Business Advisory', 'Asesoría de Negocios'),
];
?>
<section class="tw-service-detail tw-service-detail--compliance" id="compliance-solutions">
    <div class="tw-container">
        <div class="tw-service-detail__grid">
            <div class="tw-service-detail__media" data-reveal>
                <div class="tw-service-detail__image-wrap">
                    <img src="<?php echo esc_url(TW_THEME_URI . '/assets/images/services/compliance.png'); ?>"
                        alt="<?php echo esc_attr(tw_text('Financial documents and accounting analysis in a professional office.', 'Documentos financieros y análisis contable en un entorno profesional.')); ?>"
                        class="tw-service-detail__image" loading="lazy">
                    <span class="tw-service-detail__image-label" aria-hidden="true">01</span>
                </div>
            </div>
            <div class="tw-service-detail__content">
                <span class="tw-service-detail__eyebrow" data-reveal><?php tw_e('Compliance Solutions', 'Soluciones de Cumplimiento'); ?></span>
                <h2 class="tw-service-detail__title" data-reveal>
                    <?php tw_e('Stay compliant.', 'Cumple con confianza.'); ?>
                    <span><?php tw_e('Plan beyond it.', 'Planea más allá del cumplimiento.'); ?></span>
                </h2>
                <p class="tw-service-detail__lead" data-reveal><?php tw_e(
                    'Compliance is essential, but strong financial guidance should also help you understand what comes next.',
                    'El cumplimiento es esencial, pero una buena orientación financiera también debe ayudarte a entender qué sigue.'
                ); ?></p>
                <p class="tw-service-detail__text" data-reveal><?php tw_e(
                    'Thomas Williams, CPA, PLLC provides accounting and tax support designed to help clients meet their responsibilities, maintain reliable financial information and make informed business decisions.',
                    'Thomas Williams, CPA, PLLC brinda apoyo contable y fiscal para ayudar a sus clientes a cumplir sus responsabilidades, mantener información financiera confiable y tomar decisiones de negocio informadas.'
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
