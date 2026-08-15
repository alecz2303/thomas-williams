<?php
/**
 * Client Access.
 *
 * @package ThomasWilliams
 */

if (!defined('ABSPATH')) {
    exit;
}

$smartvault_url = 'https://thomaswilliamscpapllc.smartvault.com/secure/SignIn.aspx?ReturnUrl=%2fusers%2fsecure%2fHome.aspx';
?>

<section
    class="tw-client-access"
    aria-labelledby="client-access-title"
>

    <div class="tw-container">

        <header class="tw-client-access__header">

            <span
                class="tw-client-access__label"
                data-reveal
            >
                Client Access
            </span>

            <div class="tw-client-access__heading">

                <h2
                    id="client-access-title"
                    class="tw-client-access__title"
                    data-reveal
                >
                    Everything you need,
                    <span>within reach.</span>
                </h2>

                <p
                    class="tw-client-access__intro"
                    data-reveal
                >
                    Quick access to your secure client portal
                    and online payment options.
                </p>

            </div>

        </header>

        <div class="tw-client-access__grid">

            <a
                href="<?php echo esc_url($smartvault_url); ?>"
                class="tw-client-access__card"
                target="_blank"
                rel="noopener noreferrer"
                data-reveal
            >

                <div class="tw-client-access__card-content">

                    <span class="tw-client-access__card-kicker">
                        Secure Client Portal
                    </span>

                    <h3>
                        SmartVault
                    </h3>

                    <p>
                        Securely access your documents,
                        files and client portal.
                    </p>

                </div>

                <span
                    class="tw-client-access__card-arrow"
                    aria-hidden="true"
                >
                    ↗
                </span>

            </a>

            <a
                href="<?php echo esc_url(home_url('/payments/')); ?>"
                class="tw-client-access__card tw-client-access__card--blue"
                data-reveal
            >

                <div class="tw-client-access__card-content">

                    <span class="tw-client-access__card-kicker">
                        Client Payments
                    </span>

                    <h3>
                        Make a Payment
                    </h3>

                    <p>
                        Convenient access to secure
                        online payment options.
                    </p>

                </div>

                <span
                    class="tw-client-access__card-arrow"
                    aria-hidden="true"
                >
                    →
                </span>

            </a>

        </div>

    </div>

</section>