<?php
/**
 * Payments hero.
 *
 * @package ThomasWilliams
 */

if (!defined('ABSPATH')) {
    exit;
}

$smartvault_url = 'https://thomaswilliamscpapllc.smartvault.com/secure/SignIn.aspx?ReturnUrl=%2fusers%2fsecure%2fHome.aspx';
?>
<section class="tw-payments-hero" aria-labelledby="payments-hero-title">
    <div class="tw-container">
        <div class="tw-payments-hero__inner">
            <div class="tw-payments-hero__content">
                <span class="tw-payments-hero__eyebrow" data-reveal><?php tw_e('Client Payments', 'Pagos de Clientes'); ?></span>
                <h1 id="payments-hero-title" class="tw-payments-hero__title" data-reveal>
                    <?php tw_e('Payment guidance', 'Orientación para'); ?>
                    <span><?php tw_e('for current clients.', 'clientes actuales.'); ?></span>
                </h1>
                <p class="tw-payments-hero__description" data-reveal><?php tw_e(
                    'Review the information below before submitting a payment. If you need current payment instructions, contact our firm so we can confirm the appropriate method and reference information.',
                    'Revisa la información siguiente antes de realizar un pago. Si necesitas instrucciones de pago vigentes, contacta al despacho para confirmar el método adecuado y la información de referencia.'
                ); ?></p>
            </div>
            <div class="tw-payments-hero__aside" data-reveal>
                <span class="tw-payments-hero__aside-label"><?php tw_e('Need your documents?', '¿Necesitas tus documentos?'); ?></span>
                <p><?php tw_e('Access your secure client portal through SmartVault.', 'Accede a tu portal seguro de clientes mediante SmartVault.'); ?></p>
                <a href="<?php echo esc_url($smartvault_url); ?>" target="_blank" rel="noopener noreferrer" class="tw-payments-hero__portal">
                    <?php tw_e('Open Client Portal', 'Abrir Portal de Clientes'); ?> <span aria-hidden="true">↗</span>
                </a>
            </div>
        </div>
    </div>
</section>
