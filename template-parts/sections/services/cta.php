<?php
/**
 * Services - CTA.
 *
 * @package ThomasWilliams
 */

if (!defined('ABSPATH')) {
    exit;
}

$contact_url = tw_is_spanish() ? home_url('/es/contacto/') : home_url('/contact/');
?>
<section class="tw-services-cta" aria-labelledby="services-cta-title">
    <div class="tw-container">
        <div class="tw-services-cta__inner">
            <div class="tw-services-cta__content">
                <span class="tw-services-cta__label" data-reveal><?php tw_e('Need Guidance?', '¿Necesitas Orientación?'); ?></span>
                <h2 id="services-cta-title" class="tw-services-cta__title" data-reveal>
                    <?php tw_e("Let's find the right", 'Encontremos el mejor'); ?>
                    <span><?php tw_e('path forward.', 'camino para avanzar.'); ?></span>
                </h2>
                <p class="tw-services-cta__text" data-reveal><?php tw_e(
                    "Tell us what you're working through and we'll help you determine the next step.",
                    'Cuéntanos qué necesitas resolver y te ayudaremos a determinar el siguiente paso.'
                ); ?></p>
            </div>
            <div class="tw-services-cta__action" data-reveal>
                <a href="<?php echo esc_url($contact_url); ?>" class="tw-services-cta__button">
                    <?php tw_e('Contact Our Firm', 'Contacta Nuestro Despacho'); ?> <span aria-hidden="true">→</span>
                </a>
            </div>
        </div>
    </div>
</section>
