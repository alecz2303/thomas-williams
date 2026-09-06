<?php
/**
 * Home hero.
 *
 * @package ThomasWilliams
 */

if (!defined('ABSPATH')) {
    exit;
}

$services_url = tw_is_spanish() ? home_url('/es/servicios/') : home_url('/services/');
$about_url    = tw_is_spanish() ? home_url('/es/nosotros/') : home_url('/about/');
?>
<section class="tw-hero">
    <div class="tw-hero__background" aria-hidden="true">
        <div class="tw-hero__grid"></div>
        <div class="tw-hero__glow tw-hero__glow--one"></div>
        <div class="tw-hero__glow tw-hero__glow--two"></div>
    </div>

    <div class="tw-container tw-hero__inner">
        <div class="tw-hero__content">
            <p class="tw-hero__eyebrow" data-reveal><?php tw_e('Certified Public Accountants & Business Advisors', 'Contadores Públicos Certificados y Asesores de Negocios'); ?></p>

            <h1 class="tw-hero__title">
                <span class="tw-hero__title-line" data-reveal><?php tw_e('Clarity for', 'Claridad para'); ?></span>
                <span class="tw-hero__title-line tw-hero__title-line--accent" data-reveal><?php tw_e('every decision.', 'cada decisión.'); ?></span>
            </h1>

            <p class="tw-hero__description" data-reveal><?php tw_e(
                'Accounting, tax and business advisory services backed by more than three decades of experience and delivered with personal attention from San Antonio, Texas.',
                'Servicios de contabilidad, impuestos y asesoría de negocios respaldados por más de tres décadas de experiencia y brindados con atención personalizada desde San Antonio, Texas.'
            ); ?></p>

            <div class="tw-hero__actions" data-reveal>
                <a href="<?php echo esc_url($services_url); ?>" class="tw-button tw-button--primary">
                    <?php tw_e('Explore Our Services', 'Conoce Nuestros Servicios'); ?> <span aria-hidden="true">↗</span>
                </a>
                <a href="<?php echo esc_url($about_url); ?>" class="tw-button tw-button--text">
                    <?php tw_e('About Our Firm', 'Conoce Nuestro Despacho'); ?>
                </a>
            </div>
        </div>

        <div class="tw-hero__media" data-reveal>
            <div class="tw-hero__image-wrap">
                <img src="<?php echo esc_url(TW_THEME_URI . '/assets/images/home/hero.png'); ?>"
                    alt="<?php echo esc_attr(tw_text('Professional environment representing accounting and business advisory services.', 'Entorno profesional que representa servicios de contabilidad y asesoría de negocios.')); ?>"
                    class="tw-hero__image" data-hero-image>
                <div class="tw-hero__image-overlay" aria-hidden="true"></div>
                <div class="tw-hero__image-note">
                    <span>San Antonio, Texas</span>
                    <span><?php tw_e('More than three decades of experience', 'Más de tres décadas de experiencia'); ?></span>
                </div>
            </div>
        </div>
    </div>

    <div class="tw-hero__scroll" aria-hidden="true">
        <span><?php tw_e('Scroll', 'Desliza'); ?></span>
        <div class="tw-hero__scroll-line"></div>
    </div>
</section>
