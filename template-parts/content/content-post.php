<?php
/**
 * Contenido de una publicación.
 *
 * @package ThomasWilliams
 */

if (!defined('ABSPATH')) {
    exit;
}
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('tw-post'); ?>>

    <header class="tw-post__header">

        <?php
        the_title(
            '<h2 class="tw-post__title">',
            '</h2>'
        );
        ?>

    </header>

    <div class="tw-post__content">
        <?php the_excerpt(); ?>
    </div>

</article>