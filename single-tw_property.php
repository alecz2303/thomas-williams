<?php
/**
 * Single property.
 * @package ThomasWilliams
 */
if (!defined('ABSPATH')) { exit; }
get_header();
while (have_posts()) : the_post();
$id=get_the_ID(); $meta=[];
foreach (['price','location','property_type','status','bedrooms','bathrooms','area'] as $key) $meta[$key]=tw_get_property_meta($id,$key);
$status_labels=['available'=>tw_text('Available','Disponible'),'under-contract'=>tw_text('Under Contract','Bajo contrato'),'sold'=>tw_text('Sold','Vendido')];
?>
<main id="primary" class="site-main tw-property-single">
<section class="tw-property-single__hero"><div class="tw-container">
<a class="tw-property-single__back" href="<?php echo esc_url(get_post_type_archive_link('tw_property')); ?>">← <?php tw_e('Real Estate', 'Bienes Raíces'); ?></a>
<span class="tw-property-single__status"><?php echo esc_html($status_labels[$meta['status']] ?? $status_labels['available']); ?></span>
<h1><?php the_title(); ?></h1>
<?php if ($meta['location']) : ?><p><?php echo esc_html($meta['location']); ?></p><?php endif; ?>
<?php if ($meta['price']) : ?><strong class="tw-property-single__price"><?php echo esc_html($meta['price']); ?></strong><?php endif; ?>
</div></section>
<?php if (has_post_thumbnail()) : ?><div class="tw-property-single__image"><?php the_post_thumbnail('full'); ?></div><?php endif; ?>
<section class="tw-property-single__content"><div class="tw-container tw-property-single__grid">
<article class="tw-property-single__description"><?php the_content(); ?></article>
<aside class="tw-property-single__facts"><h2><?php tw_e('Property details', 'Detalles de la propiedad'); ?></h2>
<?php $facts=['property_type'=>tw_text('Type','Tipo'),'bedrooms'=>tw_text('Bedrooms','Recámaras'),'bathrooms'=>tw_text('Bathrooms','Baños'),'area'=>tw_text('Area','Superficie')];
foreach($facts as $key=>$label) if($meta[$key]) echo '<p><span>'.esc_html($label).'</span><strong>'.esc_html($meta[$key]).'</strong></p>'; ?>
<a class="tw-property-single__contact" href="<?php echo esc_url(tw_is_spanish()?home_url('/es/contacto/'):home_url('/contact/')); ?>"><?php tw_e('Request information', 'Solicitar información'); ?> →</a>
</aside></div></section></main>
<?php endwhile; get_footer(); ?>
