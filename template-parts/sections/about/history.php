<?php
/**
 * About - History.
 *
 * @package ThomasWilliams
 */

if (!defined('ABSPATH')) {
    exit;
}
?>
<section class="tw-about-history">
    <div class="tw-container">
        <div class="tw-about-history__grid">
            <div class="tw-about-history__media" data-reveal>
                <div class="tw-about-history__image-wrap">
                    <img src="<?php echo esc_url(TW_THEME_URI . '/assets/images/about/history.png'); ?>"
                        alt="<?php echo esc_attr(tw_text('Professional business environment in San Antonio, Texas.', 'Entorno profesional de negocios en San Antonio, Texas.')); ?>"
                        class="tw-about-history__image" loading="lazy">
                    <div class="tw-about-history__image-overlay" aria-hidden="true"></div>
                    <div class="tw-about-history__image-caption">
                        <span><?php tw_e('Experience', 'Experiencia'); ?></span>
                        <strong>3+ <?php tw_e('Decades', 'Décadas'); ?></strong>
                    </div>
                </div>
            </div>

            <div class="tw-about-history__content">
                <span class="tw-about-history__label" data-reveal><?php tw_e('Our History', 'Nuestra Historia'); ?></span>
                <h2 class="tw-about-history__title" data-reveal>
                    <?php tw_e('Decades of experience.', 'Décadas de experiencia.'); ?>
                    <span><?php tw_e('A forward-looking approach.', 'Una visión hacia el futuro.'); ?></span>
                </h2>
                <p class="tw-about-history__lead" data-reveal><?php tw_e(
                    'Over more than three decades, Thomas Williams, CPA, PLLC has built its practice around professional expertise, responsive service and lasting client relationships.',
                    'A lo largo de más de tres décadas, Thomas Williams, CPA, PLLC ha construido su práctica sobre experiencia profesional, servicio cercano y relaciones duraderas con sus clientes.'
                ); ?></p>
                <p data-reveal><?php tw_e(
                    'Accounting, tax and business environments have grown increasingly complex. Technology has changed, regulations have evolved and businesses operate in a more connected world.',
                    'Los entornos contables, fiscales y empresariales se han vuelto cada vez más complejos. La tecnología ha cambiado, las regulaciones han evolucionado y los negocios operan en un mundo más conectado.'
                ); ?></p>
                <p data-reveal><?php tw_e(
                    "The firm's focus remains straightforward: understand the client, provide clear guidance and apply experience to the decisions that matter.",
                    'El enfoque del despacho se mantiene claro: comprender al cliente, ofrecer orientación precisa y aplicar la experiencia a las decisiones que realmente importan.'
                ); ?></p>
                <div class="tw-about-history__statement" data-reveal>
                    <span class="tw-about-history__statement-number">3+</span>
                    <span class="tw-about-history__statement-text"><?php tw_e('Decades serving clients from San Antonio, Texas', 'Décadas atendiendo a clientes desde San Antonio, Texas'); ?></span>
                </div>
            </div>
        </div>
    </div>
</section>
