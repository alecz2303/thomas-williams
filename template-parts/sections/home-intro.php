<?php
/**
 * Home firm introduction.
 *
 * @package ThomasWilliams
 */

if (!defined('ABSPATH')) {
    exit;
}

$about_url = tw_is_spanish() ? home_url('/es/nosotros/') : home_url('/about/');
?>
<section class="tw-home-firm" id="about">
    <div class="tw-container">
        <div class="tw-home-firm__grid">
            <div class="tw-home-firm__content">
                <span class="tw-home-firm__label" data-reveal><?php tw_e('Our Firm', 'Nuestro Despacho'); ?></span>

                <h2 class="tw-home-firm__title" data-reveal>
                    <?php tw_e('Experience that brings', 'Experiencia que aporta'); ?>
                    <span><?php tw_e('perspective.', 'perspectiva.'); ?></span>
                </h2>

                <p class="tw-home-firm__text" data-reveal><?php tw_e(
                    'For more than three decades, Thomas Williams, CPA, PLLC has helped businesses, entrepreneurs, investors and individuals navigate accounting, tax and financial decisions with professional expertise, practical guidance and personal attention.',
                    'Por más de tres décadas, Thomas Williams, CPA, PLLC ha ayudado a empresas, emprendedores, inversionistas y personas a enfrentar decisiones contables, fiscales y financieras con experiencia profesional, orientación práctica y atención personalizada.'
                ); ?></p>

                <div class="tw-home-firm__meta" data-reveal>
                    <div class="tw-home-firm__established">
                        <span><?php tw_e('Serving clients for', 'Sirviendo a clientes por'); ?></span>
                        <strong><?php tw_e('3+ Decades', '3+ Décadas'); ?></strong>
                    </div>

                    <a href="<?php echo esc_url($about_url); ?>" class="tw-home-firm__link">
                        <?php tw_e('Learn More About Our Firm', 'Conoce Más Sobre Nuestro Despacho'); ?> <span aria-hidden="true">→</span>
                    </a>
                </div>
            </div>

            <div class="tw-home-firm__media" data-reveal>
                <div class="tw-home-firm__image-wrap">
                    <img src="<?php echo esc_url(TW_THEME_URI . '/assets/images/home/firm.png'); ?>"
                        alt="<?php echo esc_attr(tw_text('Professional environment representing Thomas Williams, CPA, PLLC.', 'Entorno profesional que representa a Thomas Williams, CPA, PLLC.')); ?>"
                        class="tw-home-firm__image" loading="lazy">
                    <div class="tw-home-firm__image-overlay" aria-hidden="true"></div>
                </div>
            </div>
        </div>
    </div>
</section>
