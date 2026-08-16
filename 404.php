<?php
/**
 * 404 Page.
 *
 * @package ThomasWilliams
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<main id="primary" class="site-main tw-404">

    <section
        class="tw-404__section"
        aria-labelledby="tw-404-title"
    >

        <div class="tw-container">

            <div class="tw-404__inner">

                <div
                    class="tw-404__visual"
                    data-reveal
                >

                    <div
                        class="tw-404__code"
                        aria-hidden="true"
                    >
                        <span>4</span>
                        <span class="tw-404__zero">0</span>
                        <span class="tw-404__misfit">4</span>
                    </div>

                    <p class="tw-404__joke">
                        Something isn't adding up.
                    </p>

                </div>

                <div class="tw-404__content">

                    <span
                        class="tw-404__eyebrow"
                        data-reveal
                    >
                        Page Not Found
                    </span>

                    <h1
                        id="tw-404-title"
                        class="tw-404__title"
                        data-reveal
                    >
                        This page doesn't
                        <span>seem to be here.</span>
                    </h1>

                    <p
                        class="tw-404__description"
                        data-reveal
                    >
                        The page you were looking for may have
                        moved, been removed or never existed.
                        You can return home or continue exploring
                        the firm and its services.
                    </p>

                    <div
                        class="tw-404__actions"
                        data-reveal
                    >

                        <a
                            href="<?php echo esc_url(home_url('/')); ?>"
                            class="tw-404__button tw-404__button--primary"
                        >
                            Return Home

                            <span aria-hidden="true">
                                →
                            </span>
                        </a>

                        <a
                            href="<?php echo esc_url(home_url('/services/')); ?>"
                            class="tw-404__button tw-404__button--secondary"
                        >
                            Explore Services
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </section>

</main>

<?php
get_footer();