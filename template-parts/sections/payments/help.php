<?php
/**
 * Payments - Help.
 *
 * @package ThomasWilliams
 */

if (!defined('ABSPATH')) {
    exit;
}
?>

<section
    class="tw-payments-help"
    aria-labelledby="payments-help-title"
>

    <div class="tw-container">

        <div class="tw-payments-help__inner">

            <div class="tw-payments-help__content">

                <span
                    class="tw-payments-help__label"
                    data-reveal
                >
                    Need Assistance?
                </span>

                <h2
                    id="payments-help-title"
                    class="tw-payments-help__title"
                    data-reveal
                >
                    Questions about
                    <span>your payment?</span>
                </h2>

                <p
                    class="tw-payments-help__text"
                    data-reveal
                >
                    If you need help identifying an invoice,
                    confirming an amount or completing your
                    payment, contact our firm before submitting
                    your transaction.
                </p>

            </div>

            <div
                class="tw-payments-help__action"
                data-reveal
            >

                <a
                    href="<?php echo esc_url(home_url('/contact/')); ?>"
                    class="tw-payments-help__button"
                >
                    Contact Our Firm

                    <span aria-hidden="true">
                        →
                    </span>
                </a>

            </div>

        </div>

    </div>

</section>