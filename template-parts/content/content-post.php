<?php
/**
 * Post listing content.
 *
 * @package ThomasWilliams
 */

if (!defined('ABSPATH')) {
    exit;
}
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('tw-post'); ?>>
    <header class="tw-post__header">
        <p class="tw-post__meta">
            <time datetime="<?php echo esc_attr(get_the_date('c')); ?>">
                <?php echo esc_html(get_the_date()); ?>
            </time>
        </p>

        <?php
        the_title(
            '<h2 class="tw-post__title"><a href="' . esc_url(get_permalink()) . '">',
            '</a></h2>'
        );
        ?>
    </header>

    <div class="tw-post__content">
        <?php the_excerpt(); ?>
    </div>

    <a class="tw-post__link" href="<?php the_permalink(); ?>">
        <?php tw_e('Read article', 'Leer artículo'); ?>
        <span aria-hidden="true">→</span>
    </a>
</article>
