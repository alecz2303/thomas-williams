<?php
/**
 * Footer wrapper.
 *
 * @package ThomasWilliams
 */

if (!defined('ABSPATH')) {
    exit;
}

get_template_part(
    'template-parts/footer/site',
    'footer'
);

<a class="tw-whatsapp-float"
   href="https://wa.me/12102413260"
   target="_blank"
   rel="noopener noreferrer"
   aria-label="<?php echo esc_attr(tw_text('Contact us on WhatsApp', 'Contáctanos por WhatsApp')); ?>">
    <span class="tw-whatsapp-float__icon" aria-hidden="true">WA</span>
    <span class="tw-whatsapp-float__label">WhatsApp</span>
</a>

wp_footer();
?>

</body>
</html>