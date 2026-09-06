<?php
/**
 * About - CTA.
 *
 * @package ThomasWilliams
 */

if (!defined('ABSPATH')) {
    exit;
}

$contact_url = tw_is_spanish() ? home_url('/es/contacto/') : home_url('/contact/');
?>
<section class="tw-about-cta" aria-labelledby="about-cta-title">
    <div class="tw-container">
        <div class="tw-about-cta__inner">
            <div class="tw-about-cta__content">
                <span class="tw-about-cta__label" data-reveal><?php tw_e('Work With Us', 'Trabaja Con Nosotros'); ?></span>
                <h2 id="about-cta-title" class="tw-about-cta__title" data-reveal>
                    <?php tw_e('Looking for guidance', '¿Buscas orientación'); ?>
                    <span><?php tw_e('you can move forward with?', 'para avanzar con confianza?'); ?></span>
                </h2>
                <p class="tw-about-cta__text" data-reveal><?php tw_e(
                    'Start a conversation with Thomas Williams, CPA, PLLC and discover how our experience can support your next decision.',
                    'Inicia una conversación con Thomas Williams, CPA, PLLC y descubre cómo nuestra experiencia puede respaldar tu próxima decisión.'
                ); ?></p>
            </div>
            <div class="tw-about-cta__action" data-reveal>
                <a href="<?php echo esc_url($contact_url); ?>" class="tw-about-cta__button">
                    <?php tw_e('Contact Our Firm', 'Contacta Nuestro Despacho'); ?> <span aria-hidden="true">→</span>
                </a>
            </div>
        </div>
    </div>
</section>
