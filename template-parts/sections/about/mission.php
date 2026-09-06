<?php
/**
 * About - Mission.
 *
 * @package ThomasWilliams
 */

if (!defined('ABSPATH')) {
    exit;
}
?>
<section class="tw-about-mission" aria-labelledby="about-mission-title">
    <div class="tw-container">
        <div class="tw-about-mission__grid">
            <div class="tw-about-mission__label-wrap">
                <span class="tw-about-mission__label" data-reveal><?php tw_e('Our Mission', 'Nuestra Misión'); ?></span>
            </div>
            <div class="tw-about-mission__content">
                <h2 id="about-mission-title" class="tw-about-mission__title" data-reveal>
                    <?php tw_e('Objective. Independent.', 'Objetivos. Independientes.'); ?>
                    <span><?php tw_e('Forward-thinking.', 'Con visión de futuro.'); ?></span>
                </h2>
                <p class="tw-about-mission__lead" data-reveal><?php tw_e(
                    'Our mission is to provide professional solutions with objectivity, independence and a forward-looking perspective.',
                    'Nuestra misión es brindar soluciones profesionales con objetividad, independencia y una perspectiva orientada al futuro.'
                ); ?></p>
                <p class="tw-about-mission__text" data-reveal><?php tw_e(
                    'We aim to deliver timely, efficient guidance that helps clients navigate accounting, tax and business decisions with greater clarity and confidence.',
                    'Buscamos ofrecer orientación oportuna y eficiente que ayude a nuestros clientes a enfrentar decisiones contables, fiscales y empresariales con mayor claridad y confianza.'
                ); ?></p>
            </div>
        </div>
    </div>
</section>
