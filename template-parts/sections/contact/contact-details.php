<?php
/**
 * Contact - Details.
 *
 * @package ThomasWilliams
 */

if (!defined('ABSPATH')) {
    exit;
}

$smartvault_url = 'https://thomaswilliamscpapllc.smartvault.com/secure/SignIn.aspx?ReturnUrl=%2fusers%2fsecure%2fHome.aspx';
$payments_url = tw_is_spanish() ? home_url('/es/pagos/') : home_url('/payments/');
?>
<section class="tw-contact-details">
    <div class="tw-container">
        <div class="tw-contact-details__header">
            <span class="tw-contact-details__label" data-reveal><?php tw_e('Contact Information', 'Información de Contacto'); ?></span>
            <h2 class="tw-contact-details__title" data-reveal>
                <?php tw_e('Simple access to', 'Acceso sencillo a'); ?>
                <span><?php tw_e('what you need.', 'lo que necesitas.'); ?></span>
            </h2>
        </div>
        <div class="tw-contact-details__grid">
            <div class="tw-contact-details__card" data-reveal>
                <span class="tw-contact-details__card-number">01</span>
                <div class="tw-contact-details__card-content">
                    <span class="tw-contact-details__card-kicker"><?php tw_e('Office', 'Oficina'); ?></span>
                    <h3>San Antonio, Texas</h3>
                    <p><?php tw_e(
                        'Thomas Williams, CPA, PLLC provides accounting, tax and advisory services from San Antonio.',
                        'Thomas Williams, CPA, PLLC brinda servicios contables, fiscales y de asesoría desde San Antonio.'
                    ); ?></p>
                </div>
            </div>
            <a href="<?php echo esc_url($smartvault_url); ?>" class="tw-contact-details__card tw-contact-details__card--link" target="_blank" rel="noopener noreferrer" data-reveal>
                <span class="tw-contact-details__card-number">02</span>
                <div class="tw-contact-details__card-content">
                    <span class="tw-contact-details__card-kicker"><?php tw_e('Existing Clients', 'Clientes Actuales'); ?></span>
                    <h3><?php tw_e('Client Portal', 'Portal de Clientes'); ?></h3>
                    <p><?php tw_e(
                        'Securely access your documents and client account through SmartVault.',
                        'Accede de forma segura a tus documentos y cuenta de cliente mediante SmartVault.'
                    ); ?></p>
                </div>
                <span class="tw-contact-details__arrow" aria-hidden="true">↗</span>
            </a>
            <a href="<?php echo esc_url($payments_url); ?>" class="tw-contact-details__card tw-contact-details__card--blue" data-reveal>
                <span class="tw-contact-details__card-number">03</span>
                <div class="tw-contact-details__card-content">
                    <span class="tw-contact-details__card-kicker"><?php tw_e('Payments', 'Pagos'); ?></span>
                    <h3><?php tw_e('Payment Information', 'Información de Pago'); ?></h3>
                    <p><?php tw_e(
                        'Review payment guidance and contact the firm if you need help confirming instructions.',
                        'Consulta la orientación de pago y contacta al despacho si necesitas confirmar instrucciones.'
                    ); ?></p>
                </div>
                <span class="tw-contact-details__arrow" aria-hidden="true">→</span>
            </a>
        </div>
    </div>
</section>
