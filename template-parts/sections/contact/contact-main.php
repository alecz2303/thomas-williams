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
 * ------------------------------------------------------------
 * FORM STATUS
 * ------------------------------------------------------------
 */

$contact_status = isset($_GET['contact_status'])
    ? sanitize_key(
        wp_unslash($_GET['contact_status'])
    )
    : '';


/**
 * ------------------------------------------------------------
 * RECOVER FORM VALUES
 * ------------------------------------------------------------
 */

$contact_name = isset($_GET['contact_name'])
    ? sanitize_text_field(
        rawurldecode(
            wp_unslash($_GET['contact_name'])
        )
    )
    : '';

$contact_company = isset($_GET['contact_company'])
    ? sanitize_text_field(
        rawurldecode(
            wp_unslash($_GET['contact_company'])
        )
    )
    : '';

$contact_email = isset($_GET['contact_email'])
    ? sanitize_email(
        rawurldecode(
            wp_unslash($_GET['contact_email'])
        )
    )
    : '';

$contact_phone_country_iso =
    isset($_GET['contact_phone_country_iso'])
        ? strtoupper(
            sanitize_text_field(
                rawurldecode(
                    wp_unslash(
                        $_GET['contact_phone_country_iso']
                    )
                )
            )
        )
        : 'US';

$contact_phone = isset($_GET['contact_phone'])
    ? sanitize_text_field(
        rawurldecode(
            wp_unslash($_GET['contact_phone'])
        )
    )
    : '';

$contact_topic = isset($_GET['contact_topic'])
    ? sanitize_key(
        rawurldecode(
            wp_unslash($_GET['contact_topic'])
        )
    )
    : '';

$contact_message = isset($_GET['contact_message'])
    ? sanitize_textarea_field(
        rawurldecode(
            wp_unslash($_GET['contact_message'])
        )
    )
    : '';


/**
 * ------------------------------------------------------------
 * COUNTRY DATA
 * ------------------------------------------------------------
 */

$current_country =
    tw_get_country_calling_code_by_iso(
        $contact_phone_country_iso
    );

if (!$current_country) {
    $contact_phone_country_iso = 'US';

    $current_country =
        tw_get_country_calling_code_by_iso(
            'US'
        );
}

$country_calling_codes =
    tw_get_country_calling_codes();

$current_country_flag =
    TW_THEME_URI
    . '/assets/images/flags/'
    . strtolower(
        $contact_phone_country_iso
    )
    . '.svg';


/**
 * ------------------------------------------------------------
 * STATUS MESSAGES
 * ------------------------------------------------------------
 */

$messages = [

    'success' => [
        'type' => 'success',

        'title' => tw_text(
            'Message sent.',
            'Mensaje enviado.'
        ),

        'message' => tw_text(
            'Thank you for contacting us. Your message has been received.',
            'Gracias por contactarnos. Hemos recibido tu mensaje.'
        ),
    ],

    'missing_fields' => [
        'type' => 'error',

        'title' => tw_text(
            'Please review the form.',
            'Por favor revisa el formulario.'
        ),

        'message' => tw_text(
            'Complete all required fields before submitting.',
            'Completa todos los campos obligatorios antes de enviar.'
        ),
    ],

    'invalid_email' => [
        'type' => 'error',

        'title' => tw_text(
            'Check your email address.',
            'Revisa tu correo electrónico.'
        ),

        'message' => tw_text(
            'Please enter a valid email address.',
            'Ingresa una dirección de correo válida.'
        ),
    ],

    'invalid_topic' => [
        'type' => 'error',

        'title' => tw_text(
            'Select a valid topic.',
            'Selecciona un tema válido.'
        ),

        'message' => tw_text(
            'Please choose one of the available contact topics.',
            'Selecciona uno de los temas de contacto disponibles.'
        ),
    ],

    'security_error' => [
        'type' => 'error',

        'title' => tw_text(
            'Unable to verify your request.',
            'No pudimos verificar tu solicitud.'
        ),

        'message' => tw_text(
            'Please refresh the page and try again.',
            'Actualiza la página e inténtalo nuevamente.'
        ),
    ],

    'send_error' => [
        'type' => 'error',

        'title' => tw_text(
            'We could not send your message.',
            'No pudimos enviar tu mensaje.'
        ),

        'message' => tw_text(
            'Please try again or contact the firm using another method.',
            'Inténtalo nuevamente o contacta al despacho por otro medio.'
        ),
    ],
];

$current_message =
    isset($messages[$contact_status])
        ? $messages[$contact_status]
        : null;

?>

<section
    class="tw-contact-main"
    aria-labelledby="contact-main-title"
>

    <div class="tw-container">

        <div class="tw-contact-main__grid">


            <!-- =================================================
                 INTRO
            ================================================== -->

            <div class="tw-contact-main__intro">

                <span
                    class="tw-contact-main__label"
                    data-reveal
                >
                    <?php
                    tw_e(
                        'Get in Touch',
                        'Contáctanos'
                    );
                    ?>
                </span>


                <h2
                    id="contact-main-title"
                    class="tw-contact-main__title"
                    data-reveal
                >

                    <?php
                    tw_e(
                        'How can we',
                        '¿Cómo podemos'
                    );
                    ?>

                    <span>
                        <?php
                        tw_e(
                            'help?',
                            'ayudarte?'
                        );
                        ?>
                    </span>

                </h2>


                <p
                    class="tw-contact-main__text"
                    data-reveal
                >
                    <?php
                    tw_e(
                        'Whether you have a tax question, need accounting support or want to discuss a business or investment matter, tell us a little about what you need.',
                        'Ya sea que tengas una pregunta fiscal, necesites apoyo contable o quieras conversar sobre un asunto empresarial o de inversión, cuéntanos brevemente cómo podemos ayudarte.'
                    );
                    ?>
                </p>


                <div
                    class="tw-contact-main__note"
                    data-reveal
                >

                    <span class="tw-contact-main__note-number">
                        01
                    </span>

                    <p>
                        <?php
                        tw_e(
                            'Complete the form with your contact information and a brief description of how we can assist.',
                            'Completa el formulario con tus datos de contacto y una breve descripción de cómo podemos ayudarte.'
                        );
                        ?>
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
                        <?php
                        tw_e(
                            'Please do not include Social Security numbers, tax documents or other sensitive information in this form.',
                            'No incluyas números de Seguro Social, documentos fiscales ni otra información sensible en este formulario.'
                        );
                        ?>
                    </p>

                </div>

            </div>


            <!-- =================================================
                 FORM CARD
            ================================================== -->

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
                            <?php
                            echo esc_html(
                                $current_message['title']
                            );
                            ?>
                        </strong>

                        <p>
                            <?php
                            echo esc_html(
                                $current_message['message']
                            );
                            ?>
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

                    <input
                        type="hidden"
                        name="contact_lang"
                        value="<?php echo esc_attr(tw_current_language()); ?>"
                    >


                    <?php
                    wp_nonce_field(
                        'tw_contact_form_submit',
                        'tw_contact_nonce'
                    );
                    ?>


                    <!-- =========================================
                         HONEYPOT
                    ========================================== -->

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


                    <!-- =========================================
                         NAME / COMPANY
                    ========================================== -->

                    <div class="tw-contact-form__row">

                        <div class="tw-contact-form__field">

                            <label for="tw-contact-name">
                                <?php
                                tw_e(
                                    'Name',
                                    'Nombre'
                                );
                                ?>
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

                                <?php
                                tw_e(
                                    'Company',
                                    'Empresa'
                                );
                                ?>

                                <span>
                                    <?php
                                    tw_e(
                                        'Optional',
                                        'Opcional'
                                    );
                                    ?>
                                </span>

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


                    <!-- =========================================
                         EMAIL / PHONE
                    ========================================== -->

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

                                <?php
                                tw_e(
                                    'Phone',
                                    'Teléfono'
                                );
                                ?>

                                <span>
                                    <?php
                                    tw_e(
                                        'Optional',
                                        'Opcional'
                                    );
                                    ?>
                                </span>

                            </label>


                            <!-- =================================
                                 PHONE GROUP
                            ================================== -->

                            <div
                                class="tw-contact-form__phone-group"
                                data-phone-picker
                            >


                                <!-- =============================
                                     COUNTRY PICKER
                                ============================== -->

                                <div class="tw-phone-picker">


                                    <input
                                        type="hidden"
                                        name="phone_country_iso"
                                        value="<?php echo esc_attr($contact_phone_country_iso); ?>"
                                        data-phone-country-input
                                    >


                                    <button
                                        type="button"
                                        class="tw-phone-picker__trigger"
                                        aria-haspopup="listbox"
                                        aria-expanded="false"
                                        aria-label="<?php
                                        echo esc_attr(
                                            tw_text(
                                                'Select international calling code',
                                                'Seleccionar lada internacional'
                                            )
                                        );
                                        ?>"
                                        data-phone-picker-trigger
                                    >

                                        <img
                                            src="<?php echo esc_url($current_country_flag); ?>"
                                            alt=""
                                            class="tw-phone-picker__flag"
                                            data-phone-picker-flag
                                        >

                                        <span
                                            class="tw-phone-picker__dial"
                                            data-phone-picker-dial
                                        >
                                            <?php
                                            echo esc_html(
                                                $current_country['dial']
                                            );
                                            ?>
                                        </span>

                                        <span
                                            class="tw-phone-picker__chevron"
                                            aria-hidden="true"
                                        >
                                            ▾
                                        </span>

                                    </button>


                                    <!-- =========================
                                         COUNTRY DROPDOWN
                                    ========================== -->

                                    <div
                                        class="tw-phone-picker__menu"
                                        role="listbox"
                                        aria-label="<?php
                                        echo esc_attr(
                                            tw_text(
                                                'Countries and calling codes',
                                                'Países y ladas internacionales'
                                            )
                                        );
                                        ?>"
                                        data-phone-picker-menu
                                    >

                                        <?php foreach ($country_calling_codes as $country) : ?>

                                            <?php

                                            $flag_url =
                                                TW_THEME_URI
                                                . '/assets/images/flags/'
                                                . strtolower(
                                                    $country['iso']
                                                )
                                                . '.svg';

                                            $is_selected =
                                                $country['iso']
                                                ===
                                                $contact_phone_country_iso;

                                            ?>

                                            <button
                                                type="button"
                                                class="tw-phone-picker__option<?php echo $is_selected ? ' is-selected' : ''; ?>"
                                                role="option"
                                                aria-selected="<?php echo $is_selected ? 'true' : 'false'; ?>"
                                                data-phone-picker-option
                                                data-country-iso="<?php echo esc_attr($country['iso']); ?>"
                                                data-country-dial="<?php echo esc_attr($country['dial']); ?>"
                                                data-country-flag="<?php echo esc_url($flag_url); ?>"
                                            >

                                                <img
                                                    src="<?php echo esc_url($flag_url); ?>"
                                                    alt=""
                                                    class="tw-phone-picker__option-flag"
                                                    loading="lazy"
                                                >

                                                <span class="tw-phone-picker__option-name">
                                                    <?php
                                                    echo esc_html(
                                                        $country['name']
                                                    );
                                                    ?>
                                                </span>

                                                <span class="tw-phone-picker__option-dial">
                                                    <?php
                                                    echo esc_html(
                                                        $country['dial']
                                                    );
                                                    ?>
                                                </span>

                                            </button>

                                        <?php endforeach; ?>

                                    </div>

                                </div>


                                <!-- =============================
                                     PHONE NUMBER
                                ============================== -->

                                <input
                                    type="tel"
                                    id="tw-contact-phone"
                                    name="phone"
                                    value="<?php echo esc_attr($contact_phone); ?>"
                                    autocomplete="tel-national"
                                    inputmode="tel"
                                    placeholder="<?php
                                    echo esc_attr(
                                        tw_text(
                                            'Phone number',
                                            'Número telefónico'
                                        )
                                    );
                                    ?>"
                                >

                            </div>

                        </div>

                    </div>


                    <!-- =========================================
                         TOPIC
                    ========================================== -->

                    <div class="tw-contact-form__field">

                        <label for="tw-contact-topic">
                            <?php
                            tw_e(
                                'What can we help with?',
                                '¿En qué podemos ayudarte?'
                            );
                            ?>
                        </label>

                        <select
                            id="tw-contact-topic"
                            name="topic"
                            required
                        >

                            <option value="">
                                <?php
                                tw_e(
                                    'Select a topic',
                                    'Selecciona un tema'
                                );
                                ?>
                            </option>

                            <option
                                value="tax"
                                <?php selected($contact_topic, 'tax'); ?>
                            >
                                <?php
                                tw_e(
                                    'Tax Services',
                                    'Servicios Fiscales'
                                );
                                ?>
                            </option>

                            <option
                                value="accounting"
                                <?php selected($contact_topic, 'accounting'); ?>
                            >
                                <?php
                                tw_e(
                                    'Accounting & Financial Guidance',
                                    'Contabilidad y Orientación Financiera'
                                );
                                ?>
                            </option>

                            <option
                                value="business"
                                <?php selected($contact_topic, 'business'); ?>
                            >
                                <?php
                                tw_e(
                                    'Business Advisory',
                                    'Asesoría Empresarial'
                                );
                                ?>
                            </option>

                            <option
                                value="real-estate"
                                <?php selected($contact_topic, 'real-estate'); ?>
                            >
                                <?php
                                tw_e(
                                    'Real Estate Investment',
                                    'Inversión Inmobiliaria'
                                );
                                ?>
                            </option>

                            <option
                                value="international"
                                <?php selected($contact_topic, 'international'); ?>
                            >
                                <?php
                                tw_e(
                                    'International / Cross-Border',
                                    'Internacional / Transfronterizo'
                                );
                                ?>
                            </option>

                            <option
                                value="other"
                                <?php selected($contact_topic, 'other'); ?>
                            >
                                <?php
                                tw_e(
                                    'Other',
                                    'Otro'
                                );
                                ?>
                            </option>

                        </select>

                    </div>


                    <!-- =========================================
                         MESSAGE
                    ========================================== -->

                    <div class="tw-contact-form__field">

                        <label for="tw-contact-message">
                            <?php
                            tw_e(
                                'Tell us a little about your needs',
                                'Cuéntanos un poco sobre lo que necesitas'
                            );
                            ?>
                        </label>

                        <textarea
                            id="tw-contact-message"
                            name="message"
                            rows="6"
                            required
                        ><?php echo esc_textarea($contact_message); ?></textarea>

                    </div>


                    <!-- =========================================
                         FORM FOOTER
                    ========================================== -->

                    <div class="tw-contact-form__footer">

                        <p>
                            <?php
                            tw_e(
                                'By submitting this form, you understand that sending a message does not establish a client relationship.',
                                'Al enviar este formulario, entiendes que el envío de un mensaje no establece una relación profesional con el despacho.'
                            );
                            ?>
                        </p>

                        <button
                            type="submit"
                            class="tw-contact-form__submit"
                        >

                            <?php
                            tw_e(
                                'Send Message',
                                'Enviar Mensaje'
                            );
                            ?>

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