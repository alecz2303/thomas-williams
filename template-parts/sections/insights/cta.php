<?php
/**
 * Insights - CTA.
 *
 * @package ThomasWilliams
 */

if (!defined('ABSPATH')) {
    exit;
}

$contact_url = tw_is_spanish() ? home_url('/es/contacto/') : home_url('/contact/');
?>
<section class="tw-insights-cta" aria-labelledby="insights-cta-title">
    <div class="tw-container">
        <div class="tw-insights-cta__inner">
            <div class="tw-insights-cta__content">
                <span class="tw-insights-cta__label" data-reveal><?php tw_e('Have Questions?', '¿Tienes Preguntas?'); ?></span>
                <h2 id="insights-cta-title" class="tw-insights-cta__title" data-reveal>
                    <?php tw_e('Put the insight', 'Pon la perspectiva'); ?>
                    <span><?php tw_e('into context.', 'en contexto.'); ?></span>
                </h2>
                <p class="tw-insights-cta__text" data-reveal><?php tw_e(
                    'If a tax, accounting or business issue affects your situation, start a conversation with our firm.',
                    'Si un asunto fiscal, contable o de negocios afecta tu situación, inicia una conversación con nuestro despacho.'
                ); ?></p>
            </div>
            <div class="tw-insights-cta__action" data-reveal>
                <a href="<?php echo esc_url($contact_url); ?>" class="tw-insights-cta__button">
                    <?php tw_e('Contact Our Firm', 'Contacta Nuestro Despacho'); ?> <span aria-hidden="true">→</span>
                </a>
            </div>
        </div>
    </div>
</section>
