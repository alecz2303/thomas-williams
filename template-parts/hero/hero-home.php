<?php
/**
 * Hero principal del Home.
 *
 * @package ThomasWilliams
 */

if (!defined('ABSPATH')) {
    exit;
}
?>

<section class="tw-hero">

    <div
        class="tw-hero__background"
        aria-hidden="true"
    >
        <div class="tw-hero__grid"></div>
        <div class="tw-hero__glow tw-hero__glow--one"></div>
        <div class="tw-hero__glow tw-hero__glow--two"></div>
    </div>

    <div class="tw-container tw-hero__inner">

        <div class="tw-hero__content">

            <p
                class="tw-hero__eyebrow"
                data-reveal
            >
                Certified Public Accountants
            </p>

            <h1 class="tw-hero__title">

                <span
                    class="tw-hero__title-line"
                    data-reveal
                >
                    Clarity for
                </span>

                <span
                    class="tw-hero__title-line tw-hero__title-line--accent"
                    data-reveal
                >
                    every decision.
                </span>

            </h1>

            <p
                class="tw-hero__description"
                data-reveal
            >
                Accounting, tax and advisory services
                designed to help businesses and individuals
                move forward with confidence.
            </p>

            <div
                class="tw-hero__actions"
                data-reveal
            >

                <a
                    href="<?php echo esc_url(home_url('/services/')); ?>"
                    class="tw-button tw-button--primary"
                >
                    Explore Our Services

                    <span aria-hidden="true">
                        ↗
                    </span>
                </a>

                <a
                    href="<?php echo esc_url(home_url('/about/')); ?>"
                    class="tw-button tw-button--text"
                >
                    About Our Firm
                </a>

            </div>

        </div>

        <div
            class="tw-hero__media"
            data-reveal
        >

            <div class="tw-hero__image-wrap">

                <img
                    src="<?php echo esc_url(
                        TW_THEME_URI . '/assets/images/home/hero.png'
                    ); ?>"
                    alt="Modern corporate architecture representing professional accounting and advisory services."
                    class="tw-hero__image"
                    data-hero-image
                >

                <div
                    class="tw-hero__image-overlay"
                    aria-hidden="true"
                ></div>

                <div class="tw-hero__image-note">

                    <span>
                        San Antonio, Texas
                    </span>

                    <span>
                        Established 1990
                    </span>

                </div>

            </div>

        </div>

    </div>

    <div
        class="tw-hero__scroll"
        aria-hidden="true"
    >
        <span>Scroll</span>
        <div class="tw-hero__scroll-line"></div>
    </div>

</section>