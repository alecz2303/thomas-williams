<?php
/**
 * Contact - CTA.
 *
 * @package ThomasWilliams
 */

if (!defined('ABSPATH')) {
    exit;
}
?>
<section class="tw-contact-cta" aria-labelledby="contact-cta-title">
    <div class="tw-container">
        <div class="tw-contact-cta__inner">
            <div class="tw-contact-cta__content">
                <span class="tw-contact-cta__label" data-reveal><?php tw_e("Let's Talk", 'Conversemos'); ?></span>
                <h2 id="contact-cta-title" class="tw-contact-cta__title" data-reveal>
                    <?php tw_e('Clear questions deserve', 'Las preguntas claras merecen'); ?>
                    <span><?php tw_e('clear conversations.', 'conversaciones claras.'); ?></span>
                </h2>
                <p class="tw-contact-cta__text" data-reveal><?php tw_e(
                    "Tell us what you are working through and let's determine the appropriate next step together.",
                    'Cuéntanos qué necesitas resolver y determinemos juntos el siguiente paso adecuado.'
                ); ?></p>
            </div>
            <div class="tw-contact-cta__action" data-reveal>
                <a href="#contact-main-title" class="tw-contact-cta__button">
                    <?php tw_e('Start a Conversation', 'Iniciar una Conversación'); ?> <span aria-hidden="true">↑</span>
                </a>
            </div>
        </div>
    </div>
</section>
