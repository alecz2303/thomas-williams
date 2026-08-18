<?php
/**
 * Contact - Details.
 *
 * @package ThomasWilliams
 */

if (!defined('ABSPATH')) {
    exit;
}

$smartvault_url = 'https://thomaswilliamscpapllc.smartvault.com/secure/SignIn.aspx?ReturnUrl=%2fusers%2fsecure%2fHome.aspx';
?>

<section class="tw-contact-details">

    <div class="tw-container">

        <div class="tw-contact-details__header">

            <span
                class="tw-contact-details__label"
                data-reveal
            >
                Contact Information
            </span>

            <h2
                class="tw-contact-details__title"
                data-reveal
            >
                Simple access to
                <span>what you need.</span>
            </h2>

        </div>

        <div class="tw-contact-details__grid">

            <div
                class="tw-contact-details__card"
                data-reveal
            >

                <span class="tw-contact-details__card-number">
                    01
                </span>

                <div class="tw-contact-details__card-content">

                    <span class="tw-contact-details__card-kicker">
                        Office
                    </span>

                    <h3>
                        San Antonio, Texas
                    </h3>

                    <p>
                        Thomas Williams, CPA, PLLC provides
                        accounting, tax and advisory services
                        from San Antonio.
                    </p>

                </div>

            </div>

            <a
                href="<?php echo esc_url($smartvault_url); ?>"
                class="tw-contact-details__card tw-contact-details__card--link"
                target="_blank"
                rel="noopener noreferrer"
                data-reveal
            >

                <span class="tw-contact-details__card-number">
                    02
                </span>

                <div class="tw-contact-details__card-content">

                    <span class="tw-contact-details__card-kicker">
                        Existing Clients
                    </span>

                    <h3>
                        Client Portal
                    </h3>

                    <p>
                        Securely access your documents and
                        client account through SmartVault.
                    </p>

                </div>

                <span
                    class="tw-contact-details__arrow"
                    aria-hidden="true"
                >
                    ↗
                </span>

            </a>

            <a
                href="<?php echo esc_url(home_url('/payments/')); ?>"
                class="tw-contact-details__card tw-contact-details__card--blue"
                data-reveal
            >

                <span class="tw-contact-details__card-number">
                    03
                </span>

                <div class="tw-contact-details__card-content">

                    <span class="tw-contact-details__card-kicker">
                        Payments
                    </span>

                    <h3>
                        Make a Payment
                    </h3>

                    <p>
                        Access payment information and
                        secure online payment options.
                    </p>

                </div>

                <span
                    class="tw-contact-details__arrow"
                    aria-hidden="true"
                >
                    →
                </span>

            </a>

        </div>

    </div>

</section>