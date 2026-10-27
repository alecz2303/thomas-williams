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
                    <p><strong><?php tw_e('Office', 'Oficina'); ?>:</strong> <a href="tel:+12103429999">+1 (210) 342-9999</a><br>
                    <strong>Fax:</strong> +1 (210) 349-1080</p>
                    <p><a href="mailto:abraham@tomwilliamscpa.com">abraham@tomwilliamscpa.com</a><br>
                    <a href="mailto:accounting@tomwilliamscpa.com">accounting@tomwilliamscpa.com</a></p>
                    <div class="tw-contact-details__social" aria-label="<?php echo esc_attr(tw_text('Social media', 'Redes sociales')); ?>">
                        <a href="https://www.facebook.com/share/1EzyWUrKjV/?mibextid=wwXIfr" target="_blank" rel="noopener noreferrer">
                            <span class="tw-social-icon" aria-hidden="true">
                                <svg viewBox="0 0 24 24" role="img"><path fill="currentColor" d="M13.5 22v-9h3l.45-3.5H13.5V7.26c0-1.01.28-1.7 1.73-1.7H17V2.43c-.31-.04-1.38-.13-2.63-.13-2.6 0-4.37 1.58-4.37 4.5v2.7H7V13h3v9h3.5Z"/></svg>
                            </span>
                            <span>Facebook</span>
                        </a>
                        <a href="https://www.linkedin.com/company/thomas-williams-cpa-pllc/" target="_blank" rel="noopener noreferrer">
                            <span class="tw-social-icon" aria-hidden="true">
                                <svg viewBox="0 0 24 24" role="img"><path fill="currentColor" d="M5.34 7.5A2.17 2.17 0 1 1 5.34 3.16a2.17 2.17 0 0 1 0 4.34ZM3.47 9.1h3.75V21H3.47V9.1Zm5.82 0h3.6v1.63h.05c.5-.95 1.73-1.96 3.56-1.96 3.8 0 4.5 2.5 4.5 5.76V21h-3.75v-5.73c0-1.37-.03-3.13-1.91-3.13-1.91 0-2.2 1.49-2.2 3.03V21H9.29V9.1Z"/></svg>
                            </span>
                            <span>LinkedIn</span>
                        </a>
                    </div>
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
