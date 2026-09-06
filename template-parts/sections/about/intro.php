<?php
/**
 * About - Who We Are.
 *
 * @package ThomasWilliams
 */

if (!defined('ABSPATH')) {
    exit;
}
?>
<section class="tw-about-intro">
    <div class="tw-container">
        <div class="tw-about-intro__grid">
            <div class="tw-about-intro__heading">
                <span class="tw-about-intro__label" data-reveal><?php tw_e('Who We Are', 'Quiénes Somos'); ?></span>
                <h2 class="tw-about-intro__title" data-reveal>
                    <?php tw_e('Professional expertise.', 'Experiencia profesional.'); ?>
                    <span><?php tw_e('Personal perspective.', 'Perspectiva personal.'); ?></span>
                </h2>
            </div>

            <div class="tw-about-intro__content">
                <p class="tw-about-intro__lead" data-reveal><?php tw_e(
                    'For more than three decades, Thomas Williams, CPA, PLLC has provided accounting, tax and business advisory services from San Antonio, Texas.',
                    'Por más de tres décadas, Thomas Williams, CPA, PLLC ha brindado servicios de contabilidad, impuestos y asesoría de negocios desde San Antonio, Texas.'
                ); ?></p>
                <p data-reveal><?php tw_e(
                    "We serve businesses, entrepreneurs, investors, individuals and international clients with an approach centered on understanding each client's circumstances, goals and financial needs.",
                    'Atendemos a empresas, emprendedores, inversionistas, personas y clientes internacionales con un enfoque centrado en comprender las circunstancias, objetivos y necesidades financieras de cada cliente.'
                ); ?></p>
                <p data-reveal><?php tw_e(
                    'Technical experience and personal attention come together to provide practical guidance and solutions designed to support informed decisions with confidence.',
                    'La experiencia técnica y la atención personalizada se combinan para ofrecer orientación práctica y soluciones diseñadas para respaldar decisiones informadas con confianza.'
                ); ?></p>

                <div class="tw-about-intro__facts" data-reveal>
                    <div class="tw-about-intro__fact"><strong>3+</strong><span><?php tw_e('Decades of experience', 'Décadas de experiencia'); ?></span></div>
                    <div class="tw-about-intro__fact"><strong>San Antonio</strong><span>Texas</span></div>
                    <div class="tw-about-intro__fact"><strong>CPA</strong><span><?php tw_e('Accounting & Advisory', 'Contabilidad y Asesoría'); ?></span></div>
                </div>
            </div>
        </div>
    </div>
</section>
