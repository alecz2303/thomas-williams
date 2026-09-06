<?php
/**
 * Hero - Privacy Policy.
 *
 * @package ThomasWilliams
 */

if (!defined('ABSPATH')) {
    exit;
}
?>

<section class="tw-legal-hero" aria-labelledby="privacy-hero-title">
    <div class="tw-container">
        <div class="tw-legal-hero__inner">
            <div class="tw-legal-hero__content">
                <span class="tw-legal-hero__eyebrow" data-reveal>
                    <?php tw_e('Privacy', 'Privacidad'); ?>
                </span>

                <h1 id="privacy-hero-title" class="tw-legal-hero__title" data-reveal>
                    <?php tw_e('Your privacy', 'Tu privacidad'); ?>
                    <span><?php tw_e('matters.', 'importa.'); ?></span>
                </h1>
            </div>

            <div class="tw-legal-hero__aside" data-reveal>
                <p>
                    <?php tw_e(
                        'This Privacy Policy explains how Thomas Williams, CPA, PLLC collects, uses and protects information provided through this website.',
                        'Este Aviso de Privacidad explica cómo Thomas Williams, CPA, PLLC recopila, utiliza y protege la información proporcionada a través de este sitio web.'
                    ); ?>
                </p>

                <span class="tw-legal-hero__updated">
                    <?php tw_e('Last updated: August 2026', 'Última actualización: agosto de 2026'); ?>
                </span>
            </div>
        </div>
    </div>
</section>
