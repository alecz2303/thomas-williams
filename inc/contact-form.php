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
    $language = isset($_POST['contact_lang'])
        ? sanitize_key(wp_unslash($_POST['contact_lang']))
        : 'en';

    $language = $language === 'es' ? 'es' : 'en';

    if (
        !isset($_SERVER['REQUEST_METHOD']) ||
        $_SERVER['REQUEST_METHOD'] !== 'POST'
    ) {
        tw_contact_redirect_with_status('security_error', [], $language);
    }

    if (
        !isset($_POST['tw_contact_nonce']) ||
        !wp_verify_nonce(
            sanitize_text_field(wp_unslash($_POST['tw_contact_nonce'])),
            'tw_contact_form_submit'
        )
    ) {
        tw_contact_redirect_with_status('security_error', [], $language);
    }

    $honeypot = isset($_POST['website'])
        ? sanitize_text_field(wp_unslash($_POST['website']))
        : '';

    if ($honeypot !== '') {
        tw_contact_redirect_with_status('success', [], $language);
    }

    $name = isset($_POST['name'])
        ? sanitize_text_field(wp_unslash($_POST['name']))
        : '';

    $company = isset($_POST['company'])
        ? sanitize_text_field(wp_unslash($_POST['company']))
        : '';

    $email = isset($_POST['email'])
        ? sanitize_email(wp_unslash($_POST['email']))
        : '';

    $phone_country_iso = isset($_POST['phone_country_iso'])
        ? strtoupper(sanitize_text_field(wp_unslash($_POST['phone_country_iso'])))
        : 'US';

    $phone = isset($_POST['phone'])
        ? sanitize_text_field(wp_unslash($_POST['phone']))
        : '';

    $topic = isset($_POST['topic'])
        ? sanitize_key(wp_unslash($_POST['topic']))
        : '';

    $message = isset($_POST['message'])
        ? sanitize_textarea_field(wp_unslash($_POST['message']))
        : '';

    $phone_country = tw_get_country_calling_code_by_iso($phone_country_iso);

    if (!$phone_country) {
        $phone_country_iso = 'US';
        $phone_country = tw_get_country_calling_code_by_iso('US');
    }

    $topics = [
        'tax'           => 'Tax Services',
        'accounting'    => 'Accounting & Financial Guidance',
        'business'      => 'Business Advisory',
        'real-estate'   => 'Real Estate Investment',
        'international' => 'International / Cross-Border',
        'other'         => 'Other',
    ];

    $form_values = [
        'name'              => $name,
        'company'           => $company,
        'email'             => $email,
        'phone_country_iso' => $phone_country_iso,
        'phone'             => $phone,
        'topic'             => $topic,
        'message'           => $message,
    ];

    if (
        $name === '' ||
        $email === '' ||
        $topic === '' ||
        $message === ''
    ) {
        tw_contact_redirect_with_status(
            'missing_fields',
            $form_values,
            $language
        );
    }

    if (!is_email($email)) {
        tw_contact_redirect_with_status(
            'invalid_email',
            $form_values,
            $language
        );
    }

    if (!array_key_exists($topic, $topics)) {
        tw_contact_redirect_with_status(
            'invalid_topic',
            $form_values,
            $language
        );
    }

    $full_phone = '';

    if ($phone !== '') {
        $full_phone = trim(
            $phone_country['dial'] . ' ' . $phone
        );
    }

    $recipient = get_option('admin_email');

    $subject = sprintf(
        '[Thomas Williams Website] %s - %s',
        $topics[$topic],
        $name
    );

    $email_body = [];
    $email_body[] = 'New contact form submission';
    $email_body[] = '----------------------------------------';
    $email_body[] = 'Name: ' . $name;

    if ($company !== '') {
        $email_body[] = 'Company: ' . $company;
    }

    $email_body[] = 'Email: ' . $email;

    if ($full_phone !== '') {
        $email_body[] = 'Phone: ' . $full_phone;
        $email_body[] = 'Phone country: '
            . $phone_country['name']
            . ' ('
            . $phone_country['iso']
            . ')';
    }

    $email_body[] = 'Topic: ' . $topics[$topic];
    $email_body[] = '';
    $email_body[] = 'Message:';
    $email_body[] = $message;
    $email_body[] = '';
    $email_body[] = '----------------------------------------';
    $email_body[] = 'Sent from: ' . (
        $language === 'es'
            ? home_url('/es/contacto/')
            : home_url('/contact/')
    );

    $email_body = implode("\n", $email_body);

    $site_name = wp_specialchars_decode(
        get_bloginfo('name'),
        ENT_QUOTES
    );

    $site_host = wp_parse_url(
        home_url(),
        PHP_URL_HOST
    );

    $site_host = preg_replace(
        '/^www\./',
        '',
        (string) $site_host
    );

    $from_email = 'wordpress@' . $site_host;

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

    $sent = wp_mail(
        $recipient,
        $subject,
        $email_body,
        $headers
    );

    if (!$sent) {
        tw_contact_redirect_with_status(
            'send_error',
            $form_values,
            $language
        );
    }

    tw_contact_redirect_with_status(
        'success',
        [],
        $language
    );
}

/**
 * Redirect back to the appropriate language
 * version of the Contact page.
 *
 * @param string $status   Status code.
 * @param array  $values   Optional form values.
 * @param string $language Current language.
 */
function tw_contact_redirect_with_status(
    $status,
    $values = [],
    $language = 'en'
) {
    $language = $language === 'es' ? 'es' : 'en';

    $args = [
        'contact_status' => sanitize_key($status),
    ];

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

    $base_url = $language === 'es'
        ? home_url('/es/contacto/')
        : home_url('/contact/');

    $url = add_query_arg(
        $args,
        $base_url
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
    $phpmailer->SMTPAutoTLS = false;
}

add_action(
    'phpmailer_init',
    'tw_configure_local_mailpit'
);

add_action(
    'admin_post_nopriv_tw_contact_form',
    'tw_handle_contact_form'
);

add_action(
    'admin_post_tw_contact_form',
    'tw_handle_contact_form'
);