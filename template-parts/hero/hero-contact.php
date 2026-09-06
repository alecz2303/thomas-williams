<?php
/**
 * Contact hero.
 *
 * @package ThomasWilliams
 */

if (!defined('ABSPATH')) {
    exit;
}

$smartvault_url = 'https://thomaswilliamscpapllc.smartvault.com/secure/SignIn.aspx?ReturnUrl=%2fusers%2fsecure%2fHome.aspx';
?>
<section class="tw-contact-hero" aria-labelledby="contact-hero-title">
    <div class="tw-container">
        <div class="tw-contact-hero__inner">
            <div class="tw-contact-hero__content">
                <span class="tw-contact-hero__eyebrow" data-reveal><?php tw_e('Contact', 'Contacto'); ?></span>
                <h1 id="contact-hero-title" class="tw-contact-hero__title" data-reveal>
                    <?php tw_e('Start the', 'Inicia la'); ?>
                    <span><?php tw_e('conversation.', 'conversación.'); ?></span>
                </h1>
                <p class="tw-contact-hero__description" data-reveal><?php tw_e(
                    'Tell us what you need help with and our firm will help you determine the right next step.',
                    'Cuéntanos en qué necesitas apoyo y nuestro despacho te ayudará a determinar el siguiente paso adecuado.'
                ); ?></p>
            </div>
            <div class="tw-contact-hero__aside" data-reveal>
                <span class="tw-contact-hero__aside-label"><?php tw_e('Client Portal', 'Portal de Clientes'); ?></span>
                <p><?php tw_e(
                    'Existing clients can securely access documents and account information through SmartVault.',
                    'Los clientes actuales pueden acceder de forma segura a sus documentos e información de cuenta mediante SmartVault.'
                ); ?></p>
                <a href="<?php echo esc_url($smartvault_url); ?>" target="_blank" rel="noopener noreferrer" class="tw-contact-hero__portal">
                    <?php tw_e('Open Client Portal', 'Abrir Portal de Clientes'); ?> <span aria-hidden="true">↗</span>
                </a>
            </div>
        </div>
    </div>
</section>
