<?php
/**
 * Services hero.
 *
 * @package ThomasWilliams
 */

if (!defined('ABSPATH')) {
    exit;
}
?>
<section class="tw-services-hero" aria-labelledby="services-hero-title">
    <div class="tw-container">
        <div class="tw-services-hero__grid">
            <div class="tw-services-hero__content">
                <span class="tw-services-hero__eyebrow" data-reveal><?php tw_e('Specialized Services', 'Servicios Especializados'); ?></span>
                <h1 id="services-hero-title" class="tw-services-hero__title" data-reveal>
                    <?php tw_e('Practical guidance', 'Orientación práctica'); ?>
                    <span><?php tw_e('for complex decisions.', 'para decisiones complejas.'); ?></span>
                </h1>
                <p class="tw-services-hero__description" data-reveal><?php tw_e(
                    'Accounting, tax and advisory services designed to help businesses, individuals and investors navigate financial decisions with clarity and confidence.',
                    'Servicios de contabilidad, impuestos y asesoría diseñados para ayudar a empresas, personas e inversionistas a tomar decisiones financieras con claridad y confianza.'
                ); ?></p>
            </div>
            <div class="tw-services-hero__media" data-reveal>
                <div class="tw-services-hero__image-wrap">
                    <img src="<?php echo esc_url(TW_THEME_URI . '/assets/images/services/hero-services.png'); ?>"
                        alt="<?php echo esc_attr(tw_text('Professional advisory discussion in a modern office.', 'Reunión profesional de asesoría en una oficina moderna.')); ?>"
                        class="tw-services-hero__image">
                </div>
            </div>
        </div>
    </div>
</section>
