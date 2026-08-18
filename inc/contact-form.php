<?php
/**
 * Contact form processing.
 *
 * @package ThomasWilliams
 */

if (!defined('ABSPATH')) {
    exit;
}


/**
 * Process contact form submission.
 */
function tw_handle_contact_form()
{
    /*
     * Only allow POST requests.
     */
    if (
        !isset($_SERVER['REQUEST_METHOD']) ||
        $_SERVER['REQUEST_METHOD'] !== 'POST'
    ) {
        wp_safe_redirect(
            home_url('/contact/')
        );

        exit;
    }


    /*
     * Verify nonce.
     */
    if (
        !isset($_POST['tw_contact_nonce']) ||
        !wp_verify_nonce(
            sanitize_text_field(
                wp_unslash($_POST['tw_contact_nonce'])
            ),
            'tw_contact_form_submit'
        )
    ) {
        tw_contact_redirect_with_status(
            'security_error'
        );
    }


    /*
     * Honeypot.
     *
     * Real visitors should leave this empty.
     */
    $honeypot = isset($_POST['website'])
        ? sanitize_text_field(
            wp_unslash($_POST['website'])
        )
        : '';

    if ($honeypot !== '') {

        /*
         * Do not reveal to bots that the honeypot
         * caused the rejection.
         */
        tw_contact_redirect_with_status(
            'success'
        );
    }


    /*
     * Collect and sanitize values.
     */
    $name = isset($_POST['name'])
        ? sanitize_text_field(
            wp_unslash($_POST['name'])
        )
        : '';

    $company = isset($_POST['company'])
        ? sanitize_text_field(
            wp_unslash($_POST['company'])
        )
        : '';

    $email = isset($_POST['email'])
        ? sanitize_email(
            wp_unslash($_POST['email'])
        )
        : '';

    $phone = isset($_POST['phone'])
        ? sanitize_text_field(
            wp_unslash($_POST['phone'])
        )
        : '';

    $topic = isset($_POST['topic'])
        ? sanitize_key(
            wp_unslash($_POST['topic'])
        )
        : '';

    $message = isset($_POST['message'])
        ? sanitize_textarea_field(
            wp_unslash($_POST['message'])
        )
        : '';


    /*
     * Allowed contact topics.
     */
    $topics = [
        'tax' => 'Tax Services',

        'accounting' =>
            'Accounting & Financial Guidance',

        'business' =>
            'Business Advisory',

        'real-estate' =>
            'Real Estate Investment',

        'international' =>
            'International / Cross-Border',

        'other' =>
            'Other',
    ];


    /*
     * Validate required fields.
     */
    if (
        $name === '' ||
        $email === '' ||
        $topic === '' ||
        $message === ''
    ) {
        tw_contact_redirect_with_status(
            'missing_fields',
            [
                'name'    => $name,
                'company' => $company,
                'email'   => $email,
                'phone'   => $phone,
                'topic'   => $topic,
                'message' => $message,
            ]
        );
    }


    /*
     * Validate email.
     */
    if (!is_email($email)) {

        tw_contact_redirect_with_status(
            'invalid_email',
            [
                'name'    => $name,
                'company' => $company,
                'email'   => $email,
                'phone'   => $phone,
                'topic'   => $topic,
                'message' => $message,
            ]
        );
    }


    /*
     * Validate topic.
     */
    if (!array_key_exists($topic, $topics)) {

        tw_contact_redirect_with_status(
            'invalid_topic',
            [
                'name'    => $name,
                'company' => $company,
                'email'   => $email,
                'phone'   => $phone,
                'message' => $message,
            ]
        );
    }


    /*
     * Recipient.
     *
     * Uses WordPress Administration Email:
     * Settings > General > Administration Email Address
     */
    $recipient = get_option(
        'admin_email'
    );


    /*
     * Email subject.
     */
    $subject = sprintf(
        '[Thomas Williams Website] %s - %s',
        $topics[$topic],
        $name
    );


    /*
     * Build email content.
     */
    $email_body = [];

    $email_body[] =
        'New contact form submission';

    $email_body[] =
        '----------------------------------------';

    $email_body[] =
        'Name: ' . $name;

    if ($company !== '') {
        $email_body[] =
            'Company: ' . $company;
    }

    $email_body[] =
        'Email: ' . $email;

    if ($phone !== '') {
        $email_body[] =
            'Phone: ' . $phone;
    }

    $email_body[] =
        'Topic: ' . $topics[$topic];

    $email_body[] =
        '';

    $email_body[] =
        'Message:';

    $email_body[] =
        $message;

    $email_body[] =
        '';

    $email_body[] =
        '----------------------------------------';

    $email_body[] =
        'Sent from: ' . home_url('/contact/');

    $email_body = implode(
        "\n",
        $email_body
    );


    /*
     * Email headers.
     *
     * Never use visitor-controlled content
     * as the From address.
     */
    $site_name =
        wp_specialchars_decode(
            get_bloginfo('name'),
            ENT_QUOTES
        );

    $site_host = wp_parse_url(
        home_url(),
        PHP_URL_HOST
    );

    /*
     * Remove www. if present.
     */
    $site_host = preg_replace(
        '/^www\./',
        '',
        (string) $site_host
    );

    $from_email =
        'wordpress@' . $site_host;

    $headers = [
        'Content-Type: text/plain; charset=UTF-8',

        sprintf(
            'From: %s <%s>',
            $site_name,
            $from_email
        ),

        sprintf(
            'Reply-To: %s <%s>',
            $name,
            $email
        ),
    ];


    /*
     * Send email.
     */
    $sent = wp_mail(
        $recipient,
        $subject,
        $email_body,
        $headers
    );


    if (!$sent) {

        tw_contact_redirect_with_status(
            'send_error',
            [
                'name'    => $name,
                'company' => $company,
                'email'   => $email,
                'phone'   => $phone,
                'topic'   => $topic,
                'message' => $message,
            ]
        );
    }


    /*
     * Success.
     */
    tw_contact_redirect_with_status(
        'success'
    );
}


/**
 * Redirect back to contact page with status.
 *
 * @param string $status Status code.
 * @param array  $values Optional form values.
 */
function tw_contact_redirect_with_status(
    $status,
    $values = []
) {

    $args = [
        'contact_status' =>
            sanitize_key($status),
    ];


    /*
     * Preserve non-sensitive form values
     * when validation fails.
     */
    if (!empty($values)) {

        foreach ($values as $key => $value) {

            if ($value === '') {
                continue;
            }

            $args[
                'contact_' . sanitize_key($key)
            ] = rawurlencode($value);
        }

    }


    $url = add_query_arg(
        $args,
        home_url('/contact/')
    );

    $url .= '#contact-main-title';

    wp_safe_redirect($url);

    exit;
}


/**
 * Configure WordPress mail for Mailpit
 * in local development.
 */
function tw_configure_local_mailpit($phpmailer)
{
    /*
     * Only use Mailpit on the local
     * thomaswilliams.test environment.
     */
    $host = wp_parse_url(
        home_url(),
        PHP_URL_HOST
    );

    if ($host !== 'thomaswilliams.test') {
        return;
    }

    $phpmailer->isSMTP();

    $phpmailer->Host = '127.0.0.1';
    $phpmailer->Port = 1025;

    $phpmailer->SMTPAuth = false;
    $phpmailer->SMTPSecure = false;

    /*
     * Prevent PHPMailer from attempting
     * opportunistic TLS against Mailpit.
     */
    $phpmailer->SMTPAutoTLS = false;
}

add_action(
    'phpmailer_init',
    'tw_configure_local_mailpit'
);


/**
 * Register public and authenticated
 * form handlers.
 */
add_action(
    'admin_post_nopriv_tw_contact_form',
    'tw_handle_contact_form'
);

add_action(
    'admin_post_tw_contact_form',
    'tw_handle_contact_form'
);