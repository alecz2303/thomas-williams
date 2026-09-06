<?php
/**
 * Privacy Policy content.
 *
 * @package ThomasWilliams
 */

if (!defined('ABSPATH')) {
    exit;
}

$contact_url = tw_is_spanish() ? home_url('/es/contacto/') : home_url('/contact/');
?>

<section class="tw-legal-content">
    <div class="tw-container">
        <div class="tw-legal-content__layout">
            <aside class="tw-legal-content__sidebar" aria-label="<?php echo esc_attr(tw_text('Privacy Policy sections', 'Secciones del Aviso de Privacidad')); ?>">
                <span class="tw-legal-content__sidebar-label"><?php tw_e('On this page', 'En esta página'); ?></span>
                <nav class="tw-legal-content__nav">
                    <a href="#information-we-collect"><?php tw_e('Information We Collect', 'Información que recopilamos'); ?></a>
                    <a href="#how-we-use-information"><?php tw_e('How We Use Information', 'Cómo usamos la información'); ?></a>
                    <a href="#contact-form"><?php tw_e('Contact Form', 'Formulario de contacto'); ?></a>
                    <a href="#cookies-analytics"><?php tw_e('Cookies & Analytics', 'Cookies y analítica'); ?></a>
                    <a href="#third-party-services"><?php tw_e('Third-Party Services', 'Servicios de terceros'); ?></a>
                    <a href="#data-security"><?php tw_e('Data Security', 'Seguridad de la información'); ?></a>
                    <a href="#your-choices"><?php tw_e('Your Choices', 'Tus opciones'); ?></a>
                    <a href="#policy-changes"><?php tw_e('Changes to This Policy', 'Cambios a este aviso'); ?></a>
                    <a href="#privacy-contact"><?php tw_e('Contact', 'Contacto'); ?></a>
                </nav>
            </aside>

            <article class="tw-legal-content__article">
                <div class="tw-legal-content__intro">
                    <p class="tw-legal-content__lead"><?php tw_e(
                        'Thomas Williams, CPA, PLLC respects your privacy and is committed to handling information provided through this website responsibly.',
                        'Thomas Williams, CPA, PLLC respeta tu privacidad y se compromete a manejar responsablemente la información proporcionada a través de este sitio web.'
                    ); ?></p>
                    <p><?php tw_e(
                        'This Privacy Policy describes the types of information that may be collected when you visit this website, how that information may be used, and the choices available to you.',
                        'Este Aviso de Privacidad describe los tipos de información que pueden recopilarse cuando visitas este sitio web, cómo puede utilizarse dicha información y las opciones disponibles para ti.'
                    ); ?></p>
                </div>

                <section id="information-we-collect" class="tw-legal-content__section">
                    <span class="tw-legal-content__number">01</span>
                    <h2><?php tw_e('Information We Collect', 'Información que recopilamos'); ?></h2>
                    <p><?php tw_e(
                        'We may collect information that you voluntarily provide through this website, particularly when you use the contact form or otherwise communicate with the firm.',
                        'Podemos recopilar información que proporcionas voluntariamente a través de este sitio web, especialmente cuando utilizas el formulario de contacto o te comunicas con el despacho.'
                    ); ?></p>
                    <p><?php tw_e('This information may include:', 'Esta información puede incluir:'); ?></p>
                    <ul>
                        <li><?php tw_e('Your name.', 'Tu nombre.'); ?></li>
                        <li><?php tw_e('Your email address.', 'Tu dirección de correo electrónico.'); ?></li>
                        <li><?php tw_e('Your telephone number.', 'Tu número telefónico.'); ?></li>
                        <li><?php tw_e('Your company or organization name, when provided.', 'El nombre de tu empresa u organización, cuando lo proporciones.'); ?></li>
                        <li><?php tw_e('The general subject of your inquiry.', 'El tema general de tu consulta.'); ?></li>
                        <li><?php tw_e('Information included in a message submitted through the contact form.', 'La información incluida en un mensaje enviado mediante el formulario de contacto.'); ?></li>
                    </ul>
                    <p><?php tw_e(
                        'The website may also receive limited technical information normally transmitted by web browsers and servers, such as IP address, browser type, device information, referring pages and access times.',
                        'El sitio web también puede recibir información técnica limitada que normalmente transmiten los navegadores y servidores, como la dirección IP, tipo de navegador, información del dispositivo, páginas de referencia y horarios de acceso.'
                    ); ?></p>
                </section>

                <section id="how-we-use-information" class="tw-legal-content__section">
                    <span class="tw-legal-content__number">02</span>
                    <h2><?php tw_e('How We Use Information', 'Cómo usamos la información'); ?></h2>
                    <p><?php tw_e('Information provided through this website may be used to:', 'La información proporcionada a través de este sitio web puede utilizarse para:'); ?></p>
                    <ul>
                        <li><?php tw_e('Respond to questions and requests.', 'Responder preguntas y solicitudes.'); ?></li>
                        <li><?php tw_e('Communicate with prospective or existing clients.', 'Comunicarnos con clientes potenciales o actuales.'); ?></li>
                        <li><?php tw_e('Determine the appropriate next step for an inquiry.', 'Determinar el siguiente paso adecuado para una consulta.'); ?></li>
                        <li><?php tw_e('Operate, maintain and improve the website.', 'Operar, mantener y mejorar el sitio web.'); ?></li>
                        <li><?php tw_e('Protect the website and its users from misuse, fraud or security threats.', 'Proteger el sitio web y a sus usuarios frente a uso indebido, fraude o amenazas de seguridad.'); ?></li>
                    </ul>
                </section>

                <section id="contact-form" class="tw-legal-content__section">
                    <span class="tw-legal-content__number">03</span>
                    <h2><?php tw_e('Contact Form', 'Formulario de contacto'); ?></h2>
                    <p><?php tw_e(
                        'Information submitted through the contact form is intended only for general inquiries and initial communication with the firm.',
                        'La información enviada mediante el formulario de contacto está destinada únicamente a consultas generales y comunicación inicial con el despacho.'
                    ); ?></p>
                    <div class="tw-legal-content__notice">
                        <strong><?php tw_e('Please do not submit sensitive information through the contact form.', 'Por favor, no envíes información sensible mediante el formulario de contacto.'); ?></strong>
                        <p><?php tw_e(
                            'Do not include Social Security numbers, tax returns, financial account numbers, passwords, tax documents or other confidential financial information.',
                            'No incluyas números de Seguro Social, declaraciones de impuestos, números de cuentas financieras, contraseñas, documentos fiscales ni otra información financiera confidencial.'
                        ); ?></p>
                    </div>
                    <p><?php tw_e(
                        'Submitting a message through this website does not, by itself, establish a client-professional relationship with Thomas Williams, CPA, PLLC.',
                        'El envío de un mensaje a través de este sitio web no establece, por sí mismo, una relación cliente-profesional con Thomas Williams, CPA, PLLC.'
                    ); ?></p>
                </section>

                <section id="cookies-analytics" class="tw-legal-content__section">
                    <span class="tw-legal-content__number">04</span>
                    <h2><?php tw_e('Cookies & Analytics', 'Cookies y analítica'); ?></h2>
                    <p><?php tw_e(
                        'This website may use cookies and similar technologies that are necessary for the operation, security and functionality of the website.',
                        'Este sitio web puede utilizar cookies y tecnologías similares necesarias para su operación, seguridad y funcionamiento.'
                    ); ?></p>
                    <p><?php tw_e(
                        'The firm may also use website analytics services to better understand how visitors interact with the site. If analytics services are enabled, those services may collect information such as pages visited, approximate location, browser or device information, and interactions with the website.',
                        'El despacho también puede utilizar servicios de analítica web para comprender mejor cómo interactúan los visitantes con el sitio. Si estos servicios están habilitados, pueden recopilar información como páginas visitadas, ubicación aproximada, información del navegador o dispositivo e interacciones con el sitio web.'
                    ); ?></p>
                    <p><?php tw_e(
                        'Browser settings may allow you to block or delete cookies. Disabling certain cookies may affect some website functionality.',
                        'La configuración de tu navegador puede permitirte bloquear o eliminar cookies. Deshabilitar ciertas cookies puede afectar algunas funciones del sitio web.'
                    ); ?></p>
                </section>

                <section id="third-party-services" class="tw-legal-content__section">
                    <span class="tw-legal-content__number">05</span>
                    <h2><?php tw_e('Third-Party Services', 'Servicios de terceros'); ?></h2>
                    <p><?php tw_e(
                        'This website may provide links to services operated by third parties, including secure client portal and payment services.',
                        'Este sitio web puede proporcionar enlaces a servicios operados por terceros, incluidos portales seguros para clientes y servicios de pago.'
                    ); ?></p>
                    <p><?php tw_e(
                        'When you follow a link to a third-party website or service, information you provide to that service is subject to the privacy practices and terms of that third party. Thomas Williams, CPA, PLLC does not control the privacy practices of third-party websites.',
                        'Cuando sigues un enlace a un sitio web o servicio de terceros, la información que proporciones queda sujeta a las prácticas de privacidad y términos de ese tercero. Thomas Williams, CPA, PLLC no controla las prácticas de privacidad de sitios web de terceros.'
                    ); ?></p>
                </section>

                <section id="data-security" class="tw-legal-content__section">
                    <span class="tw-legal-content__number">06</span>
                    <h2><?php tw_e('Data Security', 'Seguridad de la información'); ?></h2>
                    <p><?php tw_e(
                        'Reasonable administrative and technical measures are used to help protect information handled through the website. However, no website, electronic communication or Internet transmission can be guaranteed to be completely secure.',
                        'Se utilizan medidas administrativas y técnicas razonables para ayudar a proteger la información manejada a través del sitio web. Sin embargo, ningún sitio web, comunicación electrónica o transmisión por Internet puede garantizarse como completamente segura.'
                    ); ?></p>
                    <p><?php tw_e(
                        'Sensitive client documents and confidential financial information should be exchanged only through communication methods specifically approved by the firm, such as the secure client portal when appropriate.',
                        'Los documentos sensibles de clientes y la información financiera confidencial deben intercambiarse únicamente mediante métodos de comunicación específicamente aprobados por el despacho, como el portal seguro para clientes cuando corresponda.'
                    ); ?></p>
                </section>

                <section id="your-choices" class="tw-legal-content__section">
                    <span class="tw-legal-content__number">07</span>
                    <h2><?php tw_e('Your Choices', 'Tus opciones'); ?></h2>
                    <p><?php tw_e(
                        'You may choose not to provide personal information through this website. However, certain information may be necessary for the firm to respond to an inquiry.',
                        'Puedes elegir no proporcionar información personal a través de este sitio web. Sin embargo, cierta información puede ser necesaria para que el despacho responda a una consulta.'
                    ); ?></p>
                    <p><?php tw_e(
                        'You may also contact the firm regarding personal information that you previously submitted through the website and request that the firm review or address your request as appropriate.',
                        'También puedes contactar al despacho respecto de información personal que hayas enviado previamente mediante el sitio web y solicitar que revise o atienda tu solicitud según corresponda.'
                    ); ?></p>
                </section>

                <section id="policy-changes" class="tw-legal-content__section">
                    <span class="tw-legal-content__number">08</span>
                    <h2><?php tw_e('Changes to This Policy', 'Cambios a este aviso'); ?></h2>
                    <p><?php tw_e(
                        "This Privacy Policy may be updated from time to time to reflect changes to the website, the services used by the website or the firm's practices.",
                        'Este Aviso de Privacidad puede actualizarse ocasionalmente para reflejar cambios en el sitio web, en los servicios utilizados por el sitio o en las prácticas del despacho.'
                    ); ?></p>
                    <p><?php tw_e(
                        'When this policy is updated, the revision date displayed at the top of the page will be changed accordingly.',
                        'Cuando este aviso sea actualizado, la fecha de revisión mostrada en la parte superior de la página se modificará en consecuencia.'
                    ); ?></p>
                </section>

                <section id="privacy-contact" class="tw-legal-content__section">
                    <span class="tw-legal-content__number">09</span>
                    <h2><?php tw_e('Contact', 'Contacto'); ?></h2>
                    <p><?php tw_e(
                        'If you have questions about this Privacy Policy or how information submitted through this website is handled, please contact:',
                        'Si tienes preguntas sobre este Aviso de Privacidad o sobre el manejo de la información enviada mediante este sitio web, por favor contacta a:'
                    ); ?></p>
                    <div class="tw-legal-content__contact">
                        <strong>Thomas Williams, CPA, PLLC</strong>
                        <span>San Antonio, Texas</span>
                        <a href="<?php echo esc_url($contact_url); ?>">
                            <?php tw_e('Contact Our Firm', 'Contactar al despacho'); ?> <span aria-hidden="true">→</span>
                        </a>
                    </div>
                </section>
            </article>
        </div>
    </div>
</section>
