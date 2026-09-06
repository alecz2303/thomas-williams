<?php
/**
 * Payments - Payment Options.
 *
 * @package ThomasWilliams
 */

if (!defined('ABSPATH')) {
    exit;
}

$contact_url = tw_is_spanish() ? home_url('/es/contacto/') : home_url('/contact/');
?>
<section class="tw-payment-options" aria-labelledby="payment-options-title">
    <div class="tw-container">
        <div class="tw-payment-options__header">
            <span class="tw-payment-options__label" data-reveal><?php tw_e('Payment Instructions', 'Instrucciones de Pago'); ?></span>
            <div class="tw-payment-options__heading">
                <h2 id="payment-options-title" class="tw-payment-options__title" data-reveal>
                    <?php tw_e('Confirm the right', 'Confirma el método'); ?>
                    <span><?php tw_e('payment method first.', 'de pago adecuado primero.'); ?></span>
                </h2>
                <p class="tw-payment-options__intro" data-reveal><?php tw_e(
                    'No public online payment destination is currently configured on this website. Contact the firm for current payment instructions before sending funds.',
                    'Actualmente este sitio no tiene configurado un destino público de pago en línea. Contacta al despacho para obtener instrucciones de pago vigentes antes de enviar fondos.'
                ); ?></p>
            </div>
        </div>
        <div class="tw-payment-options__grid" data-reveal>
            <div class="tw-payment-options__card tw-payment-options__card--primary">
                <div class="tw-payment-options__card-content">
                    <span class="tw-payment-options__card-kicker"><?php tw_e('Current Instructions', 'Instrucciones Vigentes'); ?></span>
                    <h3><?php tw_e('Contact the Firm Before Paying', 'Contacta al Despacho Antes de Pagar'); ?></h3>
                    <p><?php tw_e(
                        'We can confirm the appropriate payment method, amount and identifying reference for your account or invoice.',
                        'Podemos confirmar el método de pago adecuado, el importe y la referencia de identificación para tu cuenta o factura.'
                    ); ?></p>
                </div>
                <a href="<?php echo esc_url($contact_url); ?>" class="tw-payment-options__button">
                    <?php tw_e('Contact Our Firm', 'Contacta Nuestro Despacho'); ?> <span aria-hidden="true">→</span>
                </a>
            </div>
            <div class="tw-payment-options__card">
                <div class="tw-payment-options__card-content">
                    <span class="tw-payment-options__card-kicker"><?php tw_e('Payment Reference', 'Referencia de Pago'); ?></span>
                    <h3><?php tw_e('Help Us Identify Your Payment', 'Ayúdanos a Identificar tu Pago'); ?></h3>
                    <p><?php tw_e(
                        'Use your name, business name, invoice number or another reference provided by the firm when completing a transaction.',
                        'Usa tu nombre, razón social, número de factura u otra referencia proporcionada por el despacho al realizar una transacción.'
                    ); ?></p>
                </div>
                <div class="tw-payment-options__note"><span aria-hidden="true">✓</span><span><?php tw_e('Verify the instructions and reference before submitting.', 'Verifica las instrucciones y la referencia antes de enviar el pago.'); ?></span></div>
            </div>
        </div>
    </div>
</section>
