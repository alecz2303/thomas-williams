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

wp_footer();
?>

</body>
</html>