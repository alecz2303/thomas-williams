<?php
/**
 * About - Our Approach.
 *
 * @package ThomasWilliams
 */

if (!defined('ABSPATH')) {
    exit;
}

$principles = [
    ['number' => '01', 'title' => tw_text('Understand First', 'Comprender Primero'), 'description' => tw_text('Every client brings different circumstances, priorities and goals. Good advice begins with understanding them.', 'Cada cliente tiene circunstancias, prioridades y objetivos distintos. Una buena asesoría comienza por comprenderlos.')],
    ['number' => '02', 'title' => tw_text('Make It Clear', 'Hacerlo Claro'), 'description' => tw_text('Complex accounting and tax matters should lead to understandable guidance and practical next steps.', 'Los asuntos contables y fiscales complejos deben traducirse en orientación comprensible y próximos pasos prácticos.')],
    ['number' => '03', 'title' => tw_text('Think Ahead', 'Pensar Hacia Adelante'), 'description' => tw_text('The greatest value often comes from looking beyond today and considering the decisions that come next.', 'El mayor valor suele surgir al mirar más allá del presente y anticipar las decisiones que vienen después.')],
];
?>
<section class="tw-about-approach" aria-labelledby="about-approach-title">
    <div class="tw-container">
        <header class="tw-about-approach__header">
            <span class="tw-about-approach__label" data-reveal><?php tw_e('Our Approach', 'Nuestro Enfoque'); ?></span>
            <div class="tw-about-approach__heading">
                <h2 id="about-approach-title" class="tw-about-approach__title" data-reveal>
                    <?php tw_e('Expertise matters.', 'La experiencia importa.'); ?>
                    <span><?php tw_e("So does how it's delivered.", 'También importa cómo se brinda.'); ?></span>
                </h2>
                <p class="tw-about-approach__intro" data-reveal><?php tw_e(
                    'Our approach combines professional experience with responsive, personal service at every stage of the relationship.',
                    'Nuestro enfoque combina experiencia profesional con un servicio cercano, ágil y personalizado en cada etapa de la relación.'
                ); ?></p>
            </div>
        </header>

        <div class="tw-about-approach__principles">
            <?php foreach ($principles as $principle) : ?>
                <article class="tw-about-approach__principle" data-reveal>
                    <span class="tw-about-approach__number"><?php echo esc_html($principle['number']); ?></span>
                    <div class="tw-about-approach__principle-content">
                        <h3><?php echo esc_html($principle['title']); ?></h3>
                        <p><?php echo esc_html($principle['description']); ?></p>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>
