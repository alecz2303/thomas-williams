<?php
/**
 * About hero.
 *
 * @package ThomasWilliams
 */

if (!defined('ABSPATH')) {
    exit;
}
?>
<section class="tw-about-hero">
    <div class="tw-container">
        <div class="tw-about-hero__grid">
            <div class="tw-about-hero__content">
                <span class="tw-about-hero__eyebrow" data-reveal><?php tw_e('About Our Firm', 'Sobre Nuestro Despacho'); ?></span>
                <h1 class="tw-about-hero__title" data-reveal>
                    <?php tw_e('Experience, perspective', 'Experiencia, perspectiva'); ?>
                    <span><?php tw_e('and personal attention.', 'y atención personalizada.'); ?></span>
                </h1>
                <p class="tw-about-hero__description" data-reveal><?php tw_e(
                    'Thomas Williams, CPA, PLLC is a certified public accounting and business advisory firm serving clients from San Antonio, Texas with more than three decades of professional experience.',
                    'Thomas Williams, CPA, PLLC es un despacho de contadores públicos certificados y asesoría de negocios que atiende a sus clientes desde San Antonio, Texas, con más de tres décadas de experiencia profesional.'
                ); ?></p>
            </div>

            <div class="tw-about-hero__media" data-reveal>
                <div class="tw-about-hero__image-wrap">
                    <img src="<?php echo esc_url(TW_THEME_URI . '/assets/images/about/hero-about.png'); ?>"
                        alt="<?php echo esc_attr(tw_text('Professional collaboration in a modern office.', 'Colaboración profesional en una oficina moderna.')); ?>"
                        class="tw-about-hero__image">
                </div>
            </div>
        </div>
    </div>
</section>
