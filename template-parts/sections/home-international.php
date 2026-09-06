<?php
/**
 * Home international perspective.
 *
 * @package ThomasWilliams
 */

if (!defined('ABSPATH')) {
    exit;
}

$services_url = tw_is_spanish() ? home_url('/es/servicios/') : home_url('/services/');
?>
<section class="tw-international">
    <div class="tw-container tw-international__inner">
        <div class="tw-international__meta" data-reveal>
            <span>04</span>
            <span><?php tw_e('International Perspective', 'Perspectiva Internacional'); ?></span>
        </div>

        <div class="tw-international__content">
            <p class="tw-international__eyebrow" data-reveal><?php tw_e('Cross-border experience', 'Experiencia transfronteriza'); ?></p>

            <h2 class="tw-international__title" data-reveal>
                <?php tw_e("Business doesn't stop", 'Los negocios no se detienen'); ?>
                <span><?php tw_e('at the border.', 'en la frontera.'); ?></span>
            </h2>

            <div class="tw-international__body">
                <p class="tw-international__lead" data-reveal><?php tw_e(
                    'Our perspective extends beyond domestic accounting and tax matters.',
                    'Nuestra perspectiva va más allá de los asuntos contables y fiscales nacionales.'
                ); ?></p>
                <p data-reveal><?php tw_e(
                    'We provide accounting, tax and compliance guidance for international clients with U.S. interests, as well as U.S. clients navigating financial activity abroad.',
                    'Brindamos orientación contable, fiscal y de cumplimiento a clientes internacionales con intereses en Estados Unidos, así como a clientes estadounidenses que realizan actividades financieras en el extranjero.'
                ); ?></p>
            </div>

            <a href="<?php echo esc_url($services_url); ?>" class="tw-international__link" data-reveal>
                <?php tw_e('Explore International Services', 'Conoce Nuestros Servicios Internacionales'); ?> <span aria-hidden="true">↗</span>
            </a>
        </div>

        <div class="tw-international__visual" aria-hidden="true">
            <div class="tw-international__globe">
                <div class="tw-international__orbit"></div>
                <div class="tw-international__orbit tw-international__orbit--two"></div>
                <span>US</span><i></i><strong>MX</strong>
            </div>
        </div>
    </div>
</section>
