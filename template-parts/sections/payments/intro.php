<?php
/**
 * Payments - Intro.
 *
 * @package ThomasWilliams
 */

if (!defined('ABSPATH')) {
    exit;
}
?>
<section class="tw-payments-intro">
    <div class="tw-container">
        <div class="tw-payments-intro__grid">
            <div class="tw-payments-intro__heading">
                <span class="tw-payments-intro__label" data-reveal><?php tw_e('Before You Pay', 'Antes de Pagar'); ?></span>
                <h2 class="tw-payments-intro__title" data-reveal>
                    <?php tw_e('A few details help us', 'Algunos datos nos ayudan a'); ?>
                    <span><?php tw_e('identify your payment correctly.', 'identificar correctamente tu pago.'); ?></span>
                </h2>
            </div>
            <div class="tw-payments-intro__content">
                <p class="tw-payments-intro__lead" data-reveal><?php tw_e(
                    'Before completing a payment, have the information associated with your account or invoice available and confirm the current payment instructions with the firm when needed.',
                    'Antes de realizar un pago, ten disponible la información asociada con tu cuenta o factura y confirma con el despacho las instrucciones de pago vigentes cuando sea necesario.'
                ); ?></p>
                <div class="tw-payments-intro__requirements" data-reveal>
                    <div class="tw-payments-intro__requirement"><span class="tw-payments-intro__number">01</span><div><h3><?php tw_e('Your Name or Business Name', 'Tu Nombre o Razón Social'); ?></h3><p><?php tw_e('Use the name associated with your account or engagement.', 'Usa el nombre asociado con tu cuenta o servicio contratado.'); ?></p></div></div>
                    <div class="tw-payments-intro__requirement"><span class="tw-payments-intro__number">02</span><div><h3><?php tw_e('Invoice or Reference', 'Factura o Referencia'); ?></h3><p><?php tw_e('Include an invoice number or other identifying reference when available.', 'Incluye el número de factura u otra referencia de identificación cuando esté disponible.'); ?></p></div></div>
                    <div class="tw-payments-intro__requirement"><span class="tw-payments-intro__number">03</span><div><h3><?php tw_e('Payment Amount', 'Importe del Pago'); ?></h3><p><?php tw_e('Confirm the amount and payment instructions before submitting your transaction.', 'Confirma el importe y las instrucciones de pago antes de realizar la transacción.'); ?></p></div></div>
                </div>
            </div>
        </div>
    </div>
</section>
