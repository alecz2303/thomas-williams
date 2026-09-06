<?php
/**
 * Payments - Help.
 *
 * @package ThomasWilliams
 */

if (!defined('ABSPATH')) {
    exit;
}

$contact_url = tw_is_spanish() ? home_url('/es/contacto/') : home_url('/contact/');
?>
<section class="tw-payments-help" aria-labelledby="payments-help-title">
    <div class="tw-container">
        <div class="tw-payments-help__inner">
            <div class="tw-payments-help__content">
                <span class="tw-payments-help__label" data-reveal><?php tw_e('Need Assistance?', '¿Necesitas Ayuda?'); ?></span>
                <h2 id="payments-help-title" class="tw-payments-help__title" data-reveal>
                    <?php tw_e('Questions about', '¿Preguntas sobre'); ?>
                    <span><?php tw_e('your payment?', 'tu pago?'); ?></span>
                </h2>
                <p class="tw-payments-help__text" data-reveal><?php tw_e(
                    'If you need help identifying an invoice, confirming an amount or obtaining current payment instructions, contact our firm before submitting your transaction.',
                    'Si necesitas ayuda para identificar una factura, confirmar un importe u obtener instrucciones de pago vigentes, contacta al despacho antes de realizar la transacción.'
                ); ?></p>
            </div>
            <div class="tw-payments-help__action" data-reveal>
                <a href="<?php echo esc_url($contact_url); ?>" class="tw-payments-help__button">
                    <?php tw_e('Contact Our Firm', 'Contacta Nuestro Despacho'); ?> <span aria-hidden="true">→</span>
                </a>
            </div>
        </div>
    </div>
</section>
