<?php
/**
 * Payments - Payment Options.
 *
 * @package ThomasWilliams
 */

if (!defined('ABSPATH')) {
    exit;
}

$payment_url = '#';
?>

<section
    class="tw-payment-options"
    aria-labelledby="payment-options-title"
>

    <div class="tw-container">

        <div class="tw-payment-options__header">

            <span
                class="tw-payment-options__label"
                data-reveal
            >
                Payment Options
            </span>

            <div class="tw-payment-options__heading">

                <h2
                    id="payment-options-title"
                    class="tw-payment-options__title"
                    data-reveal
                >
                    Choose the option
                    <span>that works for you.</span>
                </h2>

                <p
                    class="tw-payment-options__intro"
                    data-reveal
                >
                    Use the secure payment option below
                    to complete your transaction.
                </p>

            </div>

        </div>

        <div
            class="tw-payment-options__grid"
            data-reveal
        >

            <div class="tw-payment-options__card tw-payment-options__card--primary">

                <div class="tw-payment-options__card-content">

                    <span class="tw-payment-options__card-kicker">
                        Online Payment
                    </span>

                    <h3>
                        Make a Secure Payment
                    </h3>

                    <p>
                        Complete your payment online
                        using the secure payment portal.
                    </p>

                </div>

                <a
                    href="<?php echo esc_url($payment_url); ?>"
                    class="tw-payment-options__button"
                >
                    Make a Payment

                    <span aria-hidden="true">
                        →
                    </span>
                </a>

            </div>

            <div class="tw-payment-options__card">

                <div class="tw-payment-options__card-content">

                    <span class="tw-payment-options__card-kicker">
                        Payment Reference
                    </span>

                    <h3>
                        Help Us Identify Your Payment
                    </h3>

                    <p>
                        Please include your name, business name
                        or invoice reference when completing
                        your transaction.
                    </p>

                </div>

                <div class="tw-payment-options__note">

                    <span aria-hidden="true">
                        ✓
                    </span>

                    <span>
                        Verify your information before submitting.
                    </span>

                </div>

            </div>

        </div>

    </div>

</section>