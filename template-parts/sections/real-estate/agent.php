<?php
/**
 * Real Estate agent spotlight - Tania Valencia.
 *
 * @package ThomasWilliams
 */

if (!defined('ABSPATH')) {
    exit;
}
?>
<section class="tw-real-estate-agent">
    <div class="tw-container tw-real-estate-agent__grid">
        <div class="tw-real-estate-agent__photo" data-reveal>
            <img src="<?php echo esc_url(TW_THEME_URI . '/assets/images/real-estate/tania-valencia.webp'); ?>"
                alt="<?php echo esc_attr(tw_text('Tania Valencia, Real Estate Advisor.', 'Tania Valencia, Asesora de Bienes Raíces.')); ?>"
                loading="lazy">
        </div>
        <div class="tw-real-estate-agent__content" data-reveal>
            <span class="tw-real-estate-agent__eyebrow"><?php tw_e('Your Real Estate Advisor', 'Tu Asesora de Bienes Raíces'); ?></span>
            <h2><?php tw_e('Tania Valencia', 'Tania Valencia'); ?></h2>
            <p class="tw-real-estate-agent__role"><?php tw_e('Real Estate Advisor', 'Asesora de Bienes Raíces'); ?></p>
            <p><?php tw_e('Guiding clients through every step of their real estate decisions with clarity and personal attention.', 'Acompañando a cada cliente en cada paso de sus decisiones inmobiliarias con claridad y atención personal.'); ?></p>
            <a class="tw-real-estate-agent__link" href="https://wa.me/12102413260" target="_blank" rel="noopener noreferrer"><?php tw_e('Contact Tania', 'Contactar a Tania'); ?> &rarr;</a>
        </div>
    </div>
</section>
