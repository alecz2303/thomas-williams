<?php
/**
 * Trayectoria y principios.
 *
 * @package ThomasWilliams
 */

if (!defined('ABSPATH')) {
    exit;
}

$principles = [
    [
        'number' => '01',
        'title'  => 'Accuracy',
        'text'   => 'Careful attention to detail supported by professional experience and modern technology.',
    ],
    [
        'number' => '02',
        'title'  => 'Efficiency',
        'text'   => 'A practical approach designed to make financial and tax processes clearer and more effective.',
    ],
    [
        'number' => '03',
        'title'  => 'Security',
        'text'   => 'Technology and responsible processes help support the secure handling of client information.',
    ],
    [
        'number' => '04',
        'title'  => 'Personal Attention',
        'text'   => 'A professional relationship built around communication, responsiveness and individual client needs.',
    ],
];
?>

<section
    class="tw-legacy"
    id="experience"
>

    <div class="tw-container">

        <div class="tw-legacy__header">

            <div
                class="tw-legacy__index"
                data-reveal
            >
                <span>03</span>
                <span>Experience</span>
            </div>

            <div class="tw-legacy__heading">

                <p
                    class="tw-legacy__eyebrow"
                    data-reveal
                >
                    Experience that moves forward
                </p>

                <h2
                    class="tw-legacy__title"
                    data-reveal
                >
                    Established in
                    <span>1990.</span>
                </h2>

            </div>

        </div>

        <div class="tw-legacy__body">

            <div class="tw-legacy__year-wrap">

                <div
                    class="tw-legacy__year"
                    data-legacy-year
                    aria-hidden="true"
                >
                    1990
                </div>

                <div class="tw-legacy__year-caption">
                    <span></span>

                    <p>
                        Decades of professional perspective,
                        adapted to an evolving financial world.
                    </p>
                </div>

            </div>

            <div class="tw-legacy__principles">

                <?php foreach ($principles as $principle) : ?>

                    <article
                        class="tw-principle"
                        data-reveal
                    >

                        <span class="tw-principle__number">
                            <?php echo esc_html($principle['number']); ?>
                        </span>

                        <div class="tw-principle__content">

                            <h3>
                                <?php echo esc_html($principle['title']); ?>
                            </h3>

                            <p>
                                <?php echo esc_html($principle['text']); ?>
                            </p>

                        </div>

                        <span
                            class="tw-principle__mark"
                            aria-hidden="true"
                        >
                            +
                        </span>

                    </article>

                <?php endforeach; ?>

            </div>

        </div>

    </div>

    <div
        class="tw-legacy__statement"
        data-reveal
    >
        <div class="tw-container">

            <p>
                Professional insight.
                <span>Personal perspective.</span>
            </p>

        </div>
    </div>

</section>