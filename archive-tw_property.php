<?php
/**
 * Real Estate archive.
 * @package ThomasWilliams
 */
if (!defined('ABSPATH')) { exit; }
get_header();
?>
<main id="primary" class="site-main tw-real-estate">
<section class="tw-real-estate__hero"><div class="tw-container">
<span class="tw-real-estate__eyebrow"><?php tw_e('Real Estate', 'Bienes Raíces'); ?></span>
<h1><?php tw_e('Properties & opportunities', 'Propiedades y oportunidades'); ?><span>.</span></h1>
<p><?php tw_e('Explore current real estate opportunities supported by the firm’s financial, tax and strategic perspective.', 'Conoce oportunidades inmobiliarias actuales respaldadas por la perspectiva financiera, fiscal y estratégica del despacho.'); ?></p>
</div></section>
<section class="tw-real-estate__listings"><div class="tw-container">
<?php if (have_posts()) : ?><div class="tw-property-grid">
<?php while (have_posts()) : the_post();
$price=tw_get_property_meta(get_the_ID(),'price');
$location=tw_get_property_meta(get_the_ID(),'location');
$status=tw_get_property_meta(get_the_ID(),'status') ?: 'available';
$labels=['available'=>tw_text('Available','Disponible'),'under-contract'=>tw_text('Under Contract','Bajo contrato'),'sold'=>tw_text('Sold','Vendido')];
?>
<article <?php post_class('tw-property-card'); ?>>
<a class="tw-property-card__media" href="<?php the_permalink(); ?>"><?php if (has_post_thumbnail()) { the_post_thumbnail('large', ['loading'=>'lazy']); } else { echo '<span class="tw-property-card__placeholder" aria-hidden="true">TW</span>'; } ?></a>
<div class="tw-property-card__body">
<span class="tw-property-card__status"><?php echo esc_html($labels[$status] ?? $labels['available']); ?></span>
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<?php if ($location) : ?><p class="tw-property-card__location"><?php echo esc_html($location); ?></p><?php endif; ?>
<?php if ($price) : ?><p class="tw-property-card__price"><?php echo esc_html($price); ?></p><?php endif; ?>
<a class="tw-property-card__link" href="<?php the_permalink(); ?>"><?php tw_e('View property', 'Ver propiedad'); ?> →</a>
</div></article>
<?php endwhile; ?></div><?php the_posts_pagination(); ?>
<?php else : ?><div class="tw-property-empty">
<span><?php tw_e('Current Listings', 'Propiedades Actuales'); ?></span>
<h2><?php tw_e('New opportunities are coming soon.', 'Próximamente habrá nuevas oportunidades.'); ?></h2>
<p><?php tw_e('Contact our team to discuss real estate consulting and current opportunities.', 'Contacta a nuestro equipo para conversar sobre asesoría inmobiliaria y oportunidades actuales.'); ?></p>
<a href="<?php echo esc_url(tw_is_spanish()?home_url('/es/contacto/'):home_url('/contact/')); ?>"><?php tw_e('Contact us', 'Contáctanos'); ?> →</a>
</div><?php endif; ?>
</div></section></main>
<?php get_footer(); ?>
