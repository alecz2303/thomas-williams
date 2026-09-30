<?php
/**
 * Real Estate listings.
 * @package ThomasWilliams
 */
if (!defined('ABSPATH')) { exit; }
$properties = new WP_Query(['post_type'=>'tw_property','post_status'=>'publish','posts_per_page'=>12,'orderby'=>['menu_order'=>'ASC','date'=>'DESC']]);
?>
<section class="tw-real-estate-listings" id="properties"><div class="tw-container">
<header class="tw-real-estate-listings__header" data-reveal><span><?php tw_e('Current Listings', 'Propiedades Actuales'); ?></span><h2><?php tw_e('Explore current opportunities.', 'Explora oportunidades actuales.'); ?></h2></header>
<?php if ($properties->have_posts()) : ?><div class="tw-property-grid">
<?php while ($properties->have_posts()) : $properties->the_post();
$price=tw_get_property_meta(get_the_ID(),'price'); $location=tw_get_property_meta(get_the_ID(),'location'); $status=tw_get_property_meta(get_the_ID(),'status') ?: 'available';
$labels=['available'=>tw_text('Available','Disponible'),'under-contract'=>tw_text('Under Contract','Bajo contrato'),'sold'=>tw_text('Sold','Vendido')]; ?>
<article <?php post_class('tw-property-card'); ?> data-reveal>
<a class="tw-property-card__media" href="<?php the_permalink(); ?>"><?php if(has_post_thumbnail()){the_post_thumbnail('large',['loading'=>'lazy']);}else{echo '<span class="tw-property-card__placeholder" aria-hidden="true">TW</span>';} ?></a>
<div class="tw-property-card__body"><span class="tw-property-card__status"><?php echo esc_html($labels[$status] ?? $labels['available']); ?></span>
<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
<?php if($location): ?><p class="tw-property-card__location"><?php echo esc_html($location); ?></p><?php endif; ?>
<?php if($price): ?><p class="tw-property-card__price"><?php echo esc_html($price); ?></p><?php endif; ?>
<a class="tw-property-card__link" href="<?php the_permalink(); ?>"><?php tw_e('View property','Ver propiedad'); ?> →</a></div></article>
<?php endwhile; ?></div><?php wp_reset_postdata(); ?>
<?php else: ?><div class="tw-property-empty" data-reveal><span><?php tw_e('Current Listings','Propiedades Actuales'); ?></span><h3><?php tw_e('New opportunities are coming soon.','Próximamente habrá nuevas oportunidades.'); ?></h3><p><?php tw_e('Contact our team to discuss real estate consulting and current opportunities.','Contacta a nuestro equipo para conversar sobre asesoría de bienes raíces y oportunidades actuales.'); ?></p></div><?php endif; ?>
</div></section>
