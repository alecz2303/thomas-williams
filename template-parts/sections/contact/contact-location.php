<?php
/**
 * Contact - Location.
 *
 * @package ThomasWilliams
 */

if (!defined('ABSPATH')) {
    exit;
}

$location =
    tw_get_office_location();

$maps_url =
    tw_get_google_maps_url();

$maps_embed_url =
    tw_get_google_maps_embed_url();
?>

<section class="tw-contact-location">

    <div class="tw-container">

        <div class="tw-contact-location__header">

            <span
                class="tw-contact-location__label"
                data-reveal
            >
                Visit Our Office
            </span>

            <h2
                class="tw-contact-location__title"
                data-reveal
            >
                Find us in
                <span>San Antonio.</span>
            </h2>

        </div>

        <div class="tw-contact-location__grid">

            <div
                class="tw-contact-location__map"
                data-reveal
            >

                <iframe
                    src="<?php echo esc_url($maps_embed_url); ?>"
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                    allowfullscreen
                    title="Map showing the Thomas Williams, CPA, PLLC office location"
                ></iframe>

            </div>

            <div
                class="tw-contact-location__details"
                data-reveal
            >

                <span class="tw-contact-location__kicker">
                    Office Address
                </span>

                <address>

                    <strong>
                        <?php echo esc_html($location['name']); ?>
                    </strong>

                    <span>
                        <?php echo esc_html($location['address_line_1']); ?>
                    </span>

                    <span>
                        <?php echo esc_html($location['address_line_2']); ?>
                    </span>

                    <span>
                        <?php
                        echo esc_html(
                            $location['city']
                            . ', '
                            . $location['state']
                            . ' '
                            . $location['postal_code']
                        );
                        ?>
                    </span>

                </address>

                <a
                    href="<?php echo esc_url($maps_url); ?>"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="tw-contact-location__directions"
                >
                    Get Directions

                    <span aria-hidden="true">
                        ↗
                    </span>
                </a>

            </div>

        </div>

    </div>

</section>