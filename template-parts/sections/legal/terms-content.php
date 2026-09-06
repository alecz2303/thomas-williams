<?php
/**
 * Terms & Disclaimer content.
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
            <aside class="tw-legal-content__sidebar" aria-label="<?php echo esc_attr(tw_text('Terms and Disclaimer sections', 'Secciones de Términos y Aviso Legal')); ?>">
                <span class="tw-legal-content__sidebar-label"><?php tw_e('On this page', 'En esta página'); ?></span>
                <nav class="tw-legal-content__nav">
                    <a href="#general-information"><?php tw_e('General Information', 'Información general'); ?></a>
                    <a href="#no-professional-advice"><?php tw_e('No Professional Advice', 'Sin asesoría profesional'); ?></a>
                    <a href="#no-client-relationship"><?php tw_e('No Client Relationship', 'Sin relación con el cliente'); ?></a>
                    <a href="#accuracy-information"><?php tw_e('Accuracy of Information', 'Exactitud de la información'); ?></a>
                    <a href="#third-party-links"><?php tw_e('Third-Party Links & Services', 'Enlaces y servicios de terceros'); ?></a>
                    <a href="#investment-information"><?php tw_e('Investment Information', 'Información sobre inversiones'); ?></a>
                    <a href="#intellectual-property"><?php tw_e('Intellectual Property', 'Propiedad intelectual'); ?></a>
                    <a href="#website-availability"><?php tw_e('Website Availability & Security', 'Disponibilidad y seguridad del sitio'); ?></a>
                    <a href="#limitation-liability"><?php tw_e('Limitation of Liability', 'Limitación de responsabilidad'); ?></a>
                    <a href="#changes-terms"><?php tw_e('Changes to These Terms', 'Cambios a estos términos'); ?></a>
                    <a href="#terms-contact"><?php tw_e('Contact', 'Contacto'); ?></a>
                </nav>
            </aside>

            <article class="tw-legal-content__article">
                <div class="tw-legal-content__intro">
                    <p class="tw-legal-content__lead"><?php tw_e(
                        'This website is provided by Thomas Williams, CPA, PLLC for general informational and communication purposes.',
                        'Este sitio web es proporcionado por Thomas Williams, CPA, PLLC con fines generales de información y comunicación.'
                    ); ?></p>
                    <p><?php tw_e(
                        'By accessing or using this website, you acknowledge the following terms, notices and limitations. If you do not agree with these terms, you should discontinue use of the website.',
                        'Al acceder o utilizar este sitio web, reconoces los siguientes términos, avisos y limitaciones. Si no estás de acuerdo con ellos, debes dejar de utilizar el sitio web.'
                    ); ?></p>
                </div>

                <section id="general-information" class="tw-legal-content__section">
                    <span class="tw-legal-content__number">01</span>
                    <h2><?php tw_e('General Information', 'Información general'); ?></h2>
                    <p><?php tw_e(
                        'The information presented on this website is intended to provide general information about Thomas Williams, CPA, PLLC, its services and topics related to accounting, taxation, business and financial matters.',
                        'La información presentada en este sitio web tiene como finalidad ofrecer información general sobre Thomas Williams, CPA, PLLC, sus servicios y temas relacionados con contabilidad, impuestos, negocios y asuntos financieros.'
                    ); ?></p>
                    <p><?php tw_e(
                        'Website content is provided for general informational purposes and should be considered in light of the particular circumstances applicable to each person or business.',
                        'El contenido del sitio web se proporciona con fines informativos generales y debe considerarse a la luz de las circunstancias particulares aplicables a cada persona o empresa.'
                    ); ?></p>
                </section>

                <section id="no-professional-advice" class="tw-legal-content__section">
                    <span class="tw-legal-content__number">02</span>
                    <h2><?php tw_e('No Professional Advice', 'Sin asesoría profesional'); ?></h2>
                    <p><?php tw_e(
                        'Nothing on this website is intended to constitute individualized accounting, tax, legal, financial, investment or other professional advice.',
                        'Nada de lo contenido en este sitio web pretende constituir asesoría individualizada de carácter contable, fiscal, legal, financiero, de inversión o de otro tipo profesional.'
                    ); ?></p>
                    <p><?php tw_e(
                        'Laws, regulations, financial circumstances and individual objectives vary and may change over time. Information appropriate for one person or organization may not be appropriate for another.',
                        'Las leyes, regulaciones, circunstancias financieras y objetivos individuales varían y pueden cambiar con el tiempo. La información adecuada para una persona u organización puede no ser adecuada para otra.'
                    ); ?></p>
                    <div class="tw-legal-content__notice">
                        <strong><?php tw_e(
                            'Do not make important tax, accounting, legal or investment decisions solely on the basis of information presented on this website.',
                            'No tomes decisiones importantes en materia fiscal, contable, legal o de inversión únicamente con base en la información presentada en este sitio web.'
                        ); ?></strong>
                        <p><?php tw_e(
                            'Appropriate professional guidance should take into account the specific facts and circumstances involved.',
                            'La orientación profesional adecuada debe considerar los hechos y circunstancias específicos de cada caso.'
                        ); ?></p>
                    </div>
                </section>

                <section id="no-client-relationship" class="tw-legal-content__section">
                    <span class="tw-legal-content__number">03</span>
                    <h2><?php tw_e('No Client Relationship', 'Sin relación con el cliente'); ?></h2>
                    <p><?php tw_e(
                        'Visiting this website, reading its content or submitting a message through the website does not by itself create a professional, advisory or client relationship with Thomas Williams, CPA, PLLC.',
                        'Visitar este sitio web, leer su contenido o enviar un mensaje a través del sitio no crea por sí mismo una relación profesional, de asesoría o de cliente con Thomas Williams, CPA, PLLC.'
                    ); ?></p>
                    <p><?php tw_e(
                        'A professional relationship may be established only through an appropriate engagement process and agreement between the firm and the client.',
                        'Una relación profesional puede establecerse únicamente mediante un proceso de contratación adecuado y un acuerdo entre el despacho y el cliente.'
                    ); ?></p>
                    <p><?php tw_e(
                        'Until such a relationship has been established, you should not assume that information communicated through a general website inquiry will be treated as part of a professional engagement.',
                        'Hasta que dicha relación se haya establecido, no debes asumir que la información comunicada mediante una consulta general del sitio web será tratada como parte de un encargo profesional.'
                    ); ?></p>
                </section>

                <section id="accuracy-information" class="tw-legal-content__section">
                    <span class="tw-legal-content__number">04</span>
                    <h2><?php tw_e('Accuracy of Information', 'Exactitud de la información'); ?></h2>
                    <p><?php tw_e(
                        'Thomas Williams, CPA, PLLC seeks to provide useful and accurate information through this website. However, website content may become outdated as laws, regulations, standards, guidance and other circumstances change.',
                        'Thomas Williams, CPA, PLLC procura proporcionar información útil y precisa mediante este sitio web. Sin embargo, el contenido puede quedar desactualizado conforme cambian las leyes, regulaciones, normas, lineamientos y otras circunstancias.'
                    ); ?></p>
                    <p><?php tw_e(
                        'The firm does not represent that every item of information on the website will always be complete, current or applicable to every situation.',
                        'El despacho no declara que toda la información del sitio web será siempre completa, actual o aplicable a todas las situaciones.'
                    ); ?></p>
                    <p><?php tw_e(
                        'Content may be modified, corrected, supplemented or removed without prior notice.',
                        'El contenido puede modificarse, corregirse, complementarse o eliminarse sin previo aviso.'
                    ); ?></p>
                </section>

                <section id="third-party-links" class="tw-legal-content__section">
                    <span class="tw-legal-content__number">05</span>
                    <h2><?php tw_e('Third-Party Links & Services', 'Enlaces y servicios de terceros'); ?></h2>
                    <p><?php tw_e(
                        'This website may contain links to websites, platforms or services operated by third parties, including secure client portals, payment providers or other external resources.',
                        'Este sitio web puede contener enlaces a sitios, plataformas o servicios operados por terceros, incluidos portales seguros para clientes, proveedores de pago u otros recursos externos.'
                    ); ?></p>
                    <p><?php tw_e(
                        'These links are provided for convenience and access to relevant services. Thomas Williams, CPA, PLLC does not control the content, availability, security, policies or practices of third-party websites.',
                        'Estos enlaces se proporcionan por conveniencia y para facilitar el acceso a servicios relevantes. Thomas Williams, CPA, PLLC no controla el contenido, disponibilidad, seguridad, políticas o prácticas de sitios web de terceros.'
                    ); ?></p>
                    <p><?php tw_e(
                        'Your use of a third-party website or service is subject to the terms, privacy practices and other policies established by that third party.',
                        'El uso que hagas de un sitio web o servicio de terceros está sujeto a los términos, prácticas de privacidad y demás políticas establecidas por ese tercero.'
                    ); ?></p>
                </section>

                <section id="investment-information" class="tw-legal-content__section">
                    <span class="tw-legal-content__number">06</span>
                    <h2><?php tw_e('Investment Information', 'Información sobre inversiones'); ?></h2>
                    <p><?php tw_e(
                        'Any discussion of real estate, investments, financial planning or business opportunities on this website is provided for general informational purposes.',
                        'Cualquier referencia a bienes raíces, inversiones, planeación financiera u oportunidades de negocio en este sitio web se proporciona únicamente con fines informativos generales.'
                    ); ?></p>
                    <p><?php tw_e(
                        'Nothing on this website constitutes an offer, solicitation, recommendation or guarantee regarding any investment, security, transaction or financial result.',
                        'Nada en este sitio web constituye una oferta, solicitud, recomendación o garantía respecto de alguna inversión, valor, operación o resultado financiero.'
                    ); ?></p>
                    <p><?php tw_e(
                        'Investment and business decisions involve risks and should be evaluated based on the relevant financial, tax, legal and other circumstances.',
                        'Las decisiones de inversión y de negocio implican riesgos y deben evaluarse con base en las circunstancias financieras, fiscales, legales y demás factores relevantes.'
                    ); ?></p>
                </section>

                <section id="intellectual-property" class="tw-legal-content__section">
                    <span class="tw-legal-content__number">07</span>
                    <h2><?php tw_e('Intellectual Property', 'Propiedad intelectual'); ?></h2>
                    <p><?php tw_e(
                        'Unless otherwise indicated, the original text, design, branding, layout and other original website materials presented on this website are intended for the use of Thomas Williams, CPA, PLLC.',
                        'Salvo que se indique lo contrario, el texto, diseño, identidad visual, estructura y demás materiales originales de este sitio web están destinados al uso de Thomas Williams, CPA, PLLC.'
                    ); ?></p>
                    <p><?php tw_e(
                        'Website materials may be viewed and used for personal, informational and non-commercial purposes.',
                        'Los materiales del sitio web pueden consultarse y utilizarse con fines personales, informativos y no comerciales.'
                    ); ?></p>
                    <p><?php tw_e(
                        'Nothing on this website should be interpreted as granting permission to reproduce, distribute, modify, republish or commercially exploit protected materials without appropriate permission, except where otherwise permitted by law.',
                        'Nada en este sitio web debe interpretarse como autorización para reproducir, distribuir, modificar, republicar o explotar comercialmente materiales protegidos sin el permiso correspondiente, salvo cuando la ley disponga lo contrario.'
                    ); ?></p>
                    <p><?php tw_e(
                        'Third-party trademarks, service names, logos and materials remain the property of their respective owners.',
                        'Las marcas, nombres de servicios, logotipos y materiales de terceros siguen siendo propiedad de sus respectivos titulares.'
                    ); ?></p>
                </section>

                <section id="website-availability" class="tw-legal-content__section">
                    <span class="tw-legal-content__number">08</span>
                    <h2><?php tw_e('Website Availability & Security', 'Disponibilidad y seguridad del sitio'); ?></h2>
                    <p><?php tw_e(
                        'Reasonable efforts may be made to maintain the availability, functionality and security of this website. However, uninterrupted or error-free availability cannot be guaranteed.',
                        'Pueden realizarse esfuerzos razonables para mantener la disponibilidad, funcionalidad y seguridad de este sitio web. Sin embargo, no puede garantizarse un acceso ininterrumpido o libre de errores.'
                    ); ?></p>
                    <p><?php tw_e(
                        "Website access may occasionally be interrupted by maintenance, technical issues, service providers, network conditions or circumstances outside the firm's control.",
                        'El acceso al sitio web puede interrumpirse ocasionalmente por mantenimiento, problemas técnicos, proveedores de servicios, condiciones de red o circunstancias fuera del control del despacho.'
                    ); ?></p>
                    <div class="tw-legal-content__notice">
                        <strong><?php tw_e(
                            'Do not send confidential tax or financial documents through the general contact form.',
                            'No envíes documentos fiscales o financieros confidenciales mediante el formulario general de contacto.'
                        ); ?></strong>
                        <p><?php tw_e(
                            'Social Security numbers, tax returns, financial account information, passwords and other sensitive materials should be exchanged only through communication methods approved by the firm, including the secure client portal when appropriate.',
                            'Los números de Seguro Social, declaraciones de impuestos, información de cuentas financieras, contraseñas y otros materiales sensibles deben intercambiarse únicamente mediante métodos de comunicación aprobados por el despacho, incluido el portal seguro para clientes cuando corresponda.'
                        ); ?></p>
                    </div>
                </section>

                <section id="limitation-liability" class="tw-legal-content__section">
                    <span class="tw-legal-content__number">09</span>
                    <h2><?php tw_e('Limitation of Liability', 'Limitación de responsabilidad'); ?></h2>
                    <p><?php tw_e(
                        'To the extent permitted by applicable law, Thomas Williams, CPA, PLLC is not responsible for losses or damages arising solely from reliance on general website information, inability to access the website, technical interruptions or use of external websites linked from this site.',
                        'En la medida permitida por la ley aplicable, Thomas Williams, CPA, PLLC no es responsable por pérdidas o daños derivados únicamente de confiar en información general del sitio web, de la imposibilidad de acceder al sitio, de interrupciones técnicas o del uso de sitios externos enlazados desde este sitio.'
                    ); ?></p>
                    <p><?php tw_e(
                        'This provision is not intended to limit any responsibility that cannot lawfully be limited or excluded.',
                        'Esta disposición no pretende limitar ninguna responsabilidad que legalmente no pueda limitarse o excluirse.'
                    ); ?></p>
                </section>

                <section id="changes-terms" class="tw-legal-content__section">
                    <span class="tw-legal-content__number">10</span>
                    <h2><?php tw_e('Changes to These Terms', 'Cambios a estos términos'); ?></h2>
                    <p><?php tw_e(
                        'These Terms & Disclaimer may be updated from time to time to reflect changes to the website, its services or applicable practices.',
                        'Estos Términos y Aviso Legal pueden actualizarse ocasionalmente para reflejar cambios en el sitio web, sus servicios o las prácticas aplicables.'
                    ); ?></p>
                    <p><?php tw_e(
                        'Updated terms will be published on this page and the revision date displayed at the top of the page will be updated.',
                        'Los términos actualizados se publicarán en esta página y la fecha de revisión mostrada en la parte superior será actualizada.'
                    ); ?></p>
                    <p><?php tw_e(
                        'Continued use of the website after an update constitutes use of the website subject to the version then displayed.',
                        'Continuar utilizando el sitio web después de una actualización implica utilizarlo sujeto a la versión que se encuentre publicada en ese momento.'
                    ); ?></p>
                </section>

                <section id="terms-contact" class="tw-legal-content__section">
                    <span class="tw-legal-content__number">11</span>
                    <h2><?php tw_e('Contact', 'Contacto'); ?></h2>
                    <p><?php tw_e(
                        'Questions regarding this website or these Terms & Disclaimer may be directed to:',
                        'Las preguntas relacionadas con este sitio web o con estos Términos y Aviso Legal pueden dirigirse a:'
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
