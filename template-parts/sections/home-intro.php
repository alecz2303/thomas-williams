<?php
/**
 * Presentación breve del despacho.
 *
 * @package ThomasWilliams
 */

if (!defined('ABSPATH')) {
    exit;
}
?>

<section
    class="tw-home-firm"
    id="about"
>

    <div class="tw-container">

        <div class="tw-home-firm__grid">

            <div class="tw-home-firm__content">

                <span
                    class="tw-home-firm__label"
                    data-reveal
                >
                    Our Firm
                </span>

                <h2
                    class="tw-home-firm__title"
                    data-reveal
                >
                    Experience that brings
                    <span>perspective.</span>
                </h2>

                <p
                    class="tw-home-firm__text"
                    data-reveal
                >
                    Thomas Williams, CPA, PLLC provides
                    accounting, tax and advisory services
                    with a focus on clear guidance,
                    personal attention and practical solutions.
                </p>

                <div
                    class="tw-home-firm__meta"
                    data-reveal
                >

                    <div class="tw-home-firm__established">

                        <span>
                            Established
                        </span>

                        <strong>
                            1990
                        </strong>

                    </div>

                    <a
                        href="<?php echo esc_url(home_url('/about/')); ?>"
                        class="tw-home-firm__link"
                    >
                        Learn More About Our Firm

                        <span aria-hidden="true">
                            →
                        </span>
                    </a>

                </div>

            </div>

            <div
                class="tw-home-firm__media"
                data-reveal
            >

                <div class="tw-home-firm__image-wrap">

                    <img
                        src="<?php echo esc_url(
                            TW_THEME_URI . '/assets/images/home/firm.png'
                        ); ?>"
                        alt="Modern professional environment representing Thomas Williams, CPA, PLLC."
                        class="tw-home-firm__image"
                        loading="lazy"
                    >

                    <div
                        class="tw-home-firm__image-overlay"
                        aria-hidden="true"
                    ></div>

                </div>

            </div>

        </div>

    </div>

</section>