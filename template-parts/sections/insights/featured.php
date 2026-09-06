<?php
/**
 * Insights - Featured post.
 *
 * @package ThomasWilliams
 */

if (!defined('ABSPATH')) {
    exit;
}

$featured_query = new WP_Query([
    'post_type' => 'post',
    'posts_per_page' => 1,
    'post_status' => 'publish',
    'ignore_sticky_posts' => true,
]);
?>
<section class="tw-insights-featured">
    <div class="tw-container">
        <?php if ($featured_query->have_posts()) : ?>
            <?php while ($featured_query->have_posts()) : $featured_query->the_post(); ?>
                <?php
                $categories = get_the_category();
                $category_name = !empty($categories) ? $categories[0]->name : tw_text('Insight', 'Perspectiva');
                $display_date = tw_is_spanish() ? get_the_date('j/m/Y') : get_the_date('F j, Y');
                ?>
                <article class="tw-insights-featured__article" data-reveal>
                    <div class="tw-insights-featured__media">
                        <a href="<?php the_permalink(); ?>" class="tw-insights-featured__image-link" aria-label="<?php echo esc_attr(get_the_title()); ?>">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('large', ['class' => 'tw-insights-featured__image', 'loading' => 'lazy']); ?>
                            <?php else : ?>
                                <div class="tw-insights-featured__placeholder" aria-hidden="true"><span>Thomas Williams, CPA, PLLC</span></div>
                            <?php endif; ?>
                        </a>
                    </div>
                    <div class="tw-insights-featured__content">
                        <div class="tw-insights-featured__meta">
                            <span class="tw-insights-featured__category"><?php echo esc_html($category_name); ?></span>
                            <span class="tw-insights-featured__date"><?php echo esc_html($display_date); ?></span>
                        </div>
                        <h2 class="tw-insights-featured__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <div class="tw-insights-featured__excerpt">
                            <?php if (has_excerpt()) : the_excerpt(); else : ?>
                                <p><?php echo esc_html(wp_trim_words(get_the_content(), 28, '...')); ?></p>
                            <?php endif; ?>
                        </div>
                        <a href="<?php the_permalink(); ?>" class="tw-insights-featured__link">
                            <?php tw_e('Read Insight', 'Leer Perspectiva'); ?> <span aria-hidden="true">→</span>
                        </a>
                    </div>
                </article>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        <?php else : ?>
            <div class="tw-insights-featured__empty" data-reveal>
                <span class="tw-insights-featured__empty-label"><?php tw_e('Featured Insight', 'Perspectiva Destacada'); ?></span>
                <h2><?php tw_e('Insights coming soon.', 'Próximamente compartiremos nuevas perspectivas.'); ?></h2>
                <p><?php tw_e(
                    'New perspectives on accounting, tax and business matters will appear here.',
                    'Aquí encontrarás nuevas perspectivas sobre contabilidad, impuestos y temas de negocios.'
                ); ?></p>
            </div>
        <?php endif; ?>
    </div>
</section>
