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
    [
        'number'      => '01',
        'title'       => 'Understand First',
        'description' => 'Every client brings different circumstances, priorities and goals. Good advice begins with understanding them.',
    ],
    [
        'number'      => '02',
        'title'       => 'Make It Clear',
        'description' => 'Complex accounting and tax matters should lead to understandable guidance and practical next steps.',
    ],
    [
        'number'      => '03',
        'title'       => 'Think Ahead',
        'description' => 'The greatest value often comes from looking beyond today and considering the decisions that come next.',
    ],
];
?>

<section
    class="tw-about-approach"
    aria-labelledby="about-approach-title"
>

    <div class="tw-container">

        <header class="tw-about-approach__header">

            <span
                class="tw-about-approach__label"
                data-reveal
            >
                Our Approach
            </span>

            <div class="tw-about-approach__heading">

                <h2
                    id="about-approach-title"
                    class="tw-about-approach__title"
                    data-reveal
                >
                    Expertise matters.
                    <span>So does how it's delivered.</span>
                </h2>

                <p
                    class="tw-about-approach__intro"
                    data-reveal
                >
                    Our approach combines professional
                    experience with responsive, personal
                    service at every stage of the relationship.
                </p>

            </div>

        </header>

        <div class="tw-about-approach__principles">

            <?php foreach ($principles as $principle) : ?>

                <article
                    class="tw-about-approach__principle"
                    data-reveal
                >

                    <span class="tw-about-approach__number">
                        <?php echo esc_html($principle['number']); ?>
                    </span>

                    <div class="tw-about-approach__principle-content">

                        <h3>
                            <?php echo esc_html($principle['title']); ?>
                        </h3>

                        <p>
                            <?php echo esc_html($principle['description']); ?>
                        </p>

                    </div>

                </article>

            <?php endforeach; ?>

        </div>

    </div>

</section>