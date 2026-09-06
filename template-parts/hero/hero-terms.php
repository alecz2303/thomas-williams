<?php
/**
 * Hero - Terms & Disclaimer.
 *
 * @package ThomasWilliams
 */

if (!defined('ABSPATH')) {
    exit;
}
?>

<section class="tw-legal-hero" aria-labelledby="terms-hero-title">
    <div class="tw-container">
        <div class="tw-legal-hero__inner">
            <div class="tw-legal-hero__content">
                <span class="tw-legal-hero__eyebrow" data-reveal>
                    <?php tw_e('Terms & Disclaimer', 'Términos y Aviso Legal'); ?>
                </span>

                <h1 id="terms-hero-title" class="tw-legal-hero__title" data-reveal>
                    <?php tw_e('Website terms', 'Términos del sitio'); ?>
                    <span><?php tw_e('and important notices.', 'y avisos importantes.'); ?></span>
                </h1>
            </div>

            <div class="tw-legal-hero__aside" data-reveal>
                <p>
                    <?php tw_e(
                        'These terms describe the general conditions that apply when using the Thomas Williams, CPA, PLLC website and explain important limitations regarding the information presented here.',
                        'Estos términos describen las condiciones generales aplicables al uso del sitio web de Thomas Williams, CPA, PLLC y explican limitaciones importantes sobre la información presentada aquí.'
                    ); ?>
                </p>

                <span class="tw-legal-hero__updated">
                    <?php tw_e('Last updated: August 2026', 'Última actualización: agosto de 2026'); ?>
                </span>
            </div>
        </div>
    </div>
</section>
