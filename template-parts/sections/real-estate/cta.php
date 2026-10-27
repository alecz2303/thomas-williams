<?php
/**
 * Real Estate CTA.
 * @package ThomasWilliams
 */
if (!defined('ABSPATH')) { exit; }
?>
<section class="tw-real-estate-cta"><div class="tw-container tw-real-estate-cta__inner" data-reveal>
<span><?php tw_e('Let’s Talk', 'Conversemos'); ?></span>
<h2><?php tw_e('Interested in a property or real estate consulting?', '¿Te interesa una propiedad o necesitas asesoría de bienes raíces?'); ?></h2>
<a href="<?php echo esc_url(tw_is_spanish()?home_url('/es/contacto/'):home_url('/contact/')); ?>"><?php tw_e('Contact our team','Contacta a nuestro equipo'); ?> →</a>
</div></section>
