<?php
/**
 * Contact - Main.
 *
 * @package ThomasWilliams
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Read form status.
 */
$contact_status = isset($_GET['contact_status'])
    ? sanitize_key(wp_unslash($_GET['contact_status']))
    : '';

/**
 * Recover previous values after validation error.
 */
$contact_name = isset($_GET['contact_name'])
    ? sanitize_text_field(rawurldecode(wp_unslash($_GET['contact_name'])))
    : '';

$contact_company = isset($_GET['contact_company'])
    ? sanitize_text_field(rawurldecode(wp_unslash($_GET['contact_company'])))
    : '';

$contact_email = isset($_GET['contact_email'])
    ? sanitize_email(rawurldecode(wp_unslash($_GET['contact_email'])))
    : '';

$contact_phone = isset($_GET['contact_phone'])
    ? sanitize_text_field(rawurldecode(wp_unslash($_GET['contact_phone'])))
    : '';

$contact_topic = isset($_GET['contact_topic'])
    ? sanitize_key(rawurldecode(wp_unslash($_GET['contact_topic'])))
    : '';

$contact_message = isset($_GET['contact_message'])
    ? sanitize_textarea_field(rawurldecode(wp_unslash($_GET['contact_message'])))
    : '';

/**
 * Status messages.
 */
$messages = [
    'success' => [
        'type'    => 'success',
        'title'   => 'Message sent.',
        'message' => 'Thank you for contacting us. Your message has been received.',
    ],

    'missing_fields' => [
        'type'    => 'error',
        'title'   => 'Please review the form.',
        'message' => 'Complete all required fields before submitting.',
    ],

    'invalid_email' => [
        'type'    => 'error',
        'title'   => 'Check your email address.',
        'message' => 'Please enter a valid email address.',
    ],

    'invalid_topic' => [
        'type'    => 'error',
        'title'   => 'Select a valid topic.',
        'message' => 'Please choose one of the available contact topics.',
    ],

    'security_error' => [
        'type'    => 'error',
        'title'   => 'Unable to verify your request.',
        'message' => 'Please refresh the page and try again.',
    ],

    'send_error' => [
        'type'    => 'error',
        'title'   => 'We could not send your message.',
        'message' => 'Please try again or contact the firm using another method.',
    ],
];

$current_message = isset($messages[$contact_status])
    ? $messages[$contact_status]
    : null;
?>

<section
    class="tw-contact-main"
    aria-labelledby="contact-main-title"
>

    <div class="tw-container">

        <div class="tw-contact-main__grid">

            <div class="tw-contact-main__intro">

                <span
                    class="tw-contact-main__label"
                    data-reveal
                >
                    Get in Touch
                </span>

                <h2
                    id="contact-main-title"
                    class="tw-contact-main__title"
                    data-reveal
                >
                    How can we
                    <span>help?</span>
                </h2>

                <p
                    class="tw-contact-main__text"
                    data-reveal
                >
                    Whether you have a tax question,
                    need accounting support or want to
                    discuss a business or investment matter,
                    tell us a little about what you need.
                </p>

                <div
                    class="tw-contact-main__note"
                    data-reveal
                >
                    <span class="tw-contact-main__note-number">
                        01
                    </span>

                    <p>
                        Complete the form with your contact
                        information and a brief description
                        of how we can assist.
                    </p>
                </div>

                <div
                    class="tw-contact-main__note"
                    data-reveal
                >
                    <span class="tw-contact-main__note-number">
                        02
                    </span>

                    <p>
                        Please do not include Social Security
                        numbers, tax documents or other
                        sensitive information in this form.
                    </p>
                </div>

            </div>


            <div
                class="tw-contact-form"
                data-reveal
            >

                <?php if ($current_message) : ?>

                    <div
                        class="tw-contact-form__notice tw-contact-form__notice--<?php echo esc_attr($current_message['type']); ?>"
                        role="status"
                        aria-live="polite"
                    >

                        <strong>
                            <?php echo esc_html($current_message['title']); ?>
                        </strong>

                        <p>
                            <?php echo esc_html($current_message['message']); ?>
                        </p>

                    </div>

                <?php endif; ?>


                <form
                    class="tw-contact-form__form"
                    method="post"
                    action="<?php echo esc_url(admin_url('admin-post.php')); ?>"
                >

                    <input
                        type="hidden"
                        name="action"
                        value="tw_contact_form"
                    >

                    <?php
                    wp_nonce_field(
                        'tw_contact_form_submit',
                        'tw_contact_nonce'
                    );
                    ?>

                    <div
                        class="tw-contact-form__honeypot"
                        aria-hidden="true"
                    >

                        <label for="tw-contact-website">
                            Website
                        </label>

                        <input
                            type="text"
                            id="tw-contact-website"
                            name="website"
                            tabindex="-1"
                            autocomplete="off"
                        >

                    </div>


                    <div class="tw-contact-form__row">

                        <div class="tw-contact-form__field">

                            <label for="tw-contact-name">
                                Name
                            </label>

                            <input
                                type="text"
                                id="tw-contact-name"
                                name="name"
                                value="<?php echo esc_attr($contact_name); ?>"
                                autocomplete="name"
                                required
                            >

                        </div>

                        <div class="tw-contact-form__field">

                            <label for="tw-contact-company">
                                Company
                                <span>Optional</span>
                            </label>

                            <input
                                type="text"
                                id="tw-contact-company"
                                name="company"
                                value="<?php echo esc_attr($contact_company); ?>"
                                autocomplete="organization"
                            >

                        </div>

                    </div>


                    <div class="tw-contact-form__row">

                        <div class="tw-contact-form__field">

                            <label for="tw-contact-email">
                                Email
                            </label>

                            <input
                                type="email"
                                id="tw-contact-email"
                                name="email"
                                value="<?php echo esc_attr($contact_email); ?>"
                                autocomplete="email"
                                required
                            >

                        </div>

                        <div class="tw-contact-form__field">

                            <label for="tw-contact-phone">
                                Phone
                                <span>Optional</span>
                            </label>

                            <input
                                type="tel"
                                id="tw-contact-phone"
                                name="phone"
                                value="<?php echo esc_attr($contact_phone); ?>"
                                autocomplete="tel"
                            >

                        </div>

                    </div>


                    <div class="tw-contact-form__field">

                        <label for="tw-contact-topic">
                            What can we help with?
                        </label>

                        <select
                            id="tw-contact-topic"
                            name="topic"
                            required
                        >

                            <option value="">
                                Select a topic
                            </option>

                            <option
                                value="tax"
                                <?php selected($contact_topic, 'tax'); ?>
                            >
                                Tax Services
                            </option>

                            <option
                                value="accounting"
                                <?php selected($contact_topic, 'accounting'); ?>
                            >
                                Accounting &amp; Financial Guidance
                            </option>

                            <option
                                value="business"
                                <?php selected($contact_topic, 'business'); ?>
                            >
                                Business Advisory
                            </option>

                            <option
                                value="real-estate"
                                <?php selected($contact_topic, 'real-estate'); ?>
                            >
                                Real Estate Investment
                            </option>

                            <option
                                value="international"
                                <?php selected($contact_topic, 'international'); ?>
                            >
                                International / Cross-Border
                            </option>

                            <option
                                value="other"
                                <?php selected($contact_topic, 'other'); ?>
                            >
                                Other
                            </option>

                        </select>

                    </div>


                    <div class="tw-contact-form__field">

                        <label for="tw-contact-message">
                            Tell us a little about your needs
                        </label>

                        <textarea
                            id="tw-contact-message"
                            name="message"
                            rows="6"
                            required
                        ><?php echo esc_textarea($contact_message); ?></textarea>

                    </div>


                    <div class="tw-contact-form__footer">

                        <p>
                            By submitting this form, you understand
                            that sending a message does not establish
                            a client relationship.
                        </p>

                        <button
                            type="submit"
                            class="tw-contact-form__submit"
                        >
                            Send Message

                            <span aria-hidden="true">
                                →
                            </span>
                        </button>

                    </div>

                </form>

            </div>

        </div>

    </div>

</section>