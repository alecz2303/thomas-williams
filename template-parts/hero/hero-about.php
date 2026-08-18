<?php
/**
 * Hero de About.
 *
 * @package ThomasWilliams
 */

if (!defined('ABSPATH')) {
    exit;
}
?>

<section class="tw-about-hero">

    <div class="tw-container">

        <div class="tw-about-hero__grid">

            <div class="tw-about-hero__content">

                <span
                    class="tw-about-hero__eyebrow"
                    data-reveal
                >
                    About Our Firm
                </span>

                <h1
                    class="tw-about-hero__title"
                    data-reveal
                >
                    Experience, perspective
                    <span>and personal attention.</span>
                </h1>

                <p
                    class="tw-about-hero__description"
                    data-reveal
                >
                    Thomas Williams, CPA, PLLC is a certified
                    public accounting and business advisory firm
                    based in San Antonio, Texas.
                </p>

            </div>

            <div
                class="tw-about-hero__media"
                data-reveal
            >

                <div class="tw-about-hero__image-wrap">

                    <img
                        src="<?php echo esc_url(
                            TW_THEME_URI .
                            '/assets/images/about/hero-about.png'
                        ); ?>"
                        alt="Professional collaboration in a modern office."
                        class="tw-about-hero__image"
                    >

                </div>

            </div>

        </div>

    </div>

</section>