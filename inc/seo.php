<?php
/**
 * Lightweight SEO helpers used when no dedicated SEO plugin is active.
 *
 * @package ThomasWilliams
 */

if (!defined('ABSPATH')) {
    exit;
}

function tw_has_seo_plugin()
{
    return (
        defined('WPSEO_VERSION') ||
        defined('RANK_MATH_VERSION') ||
        defined('AIOSEO_VERSION')
    );
}

function tw_get_meta_description()
{
    if (is_single()) {
        if (has_excerpt()) {
            return wp_strip_all_tags(get_the_excerpt());
        }

        return wp_trim_words(wp_strip_all_tags(get_the_content()), 30, '');
    }

    if (is_front_page()) {
        return tw_text(
            'Thomas Williams, CPA, PLLC provides accounting, tax and advisory services for businesses and individuals from San Antonio, Texas.',
            'Thomas Williams, CPA, PLLC ofrece servicios contables, fiscales y de asesoría para empresas y personas desde San Antonio, Texas.'
        );
    }

    if (is_page()) {
        $descriptions = [
            'about' => [
                'Learn about Thomas Williams, CPA, PLLC, a San Antonio accounting, tax and advisory firm focused on clarity, experience and personal attention.',
                'Conoce Thomas Williams, CPA, PLLC, un despacho de San Antonio enfocado en servicios contables, fiscales y de asesoría con claridad, experiencia y atención personal.',
            ],
            'services' => [
                'Explore accounting, tax, compliance, business advisory, real estate investment and cross-border services from Thomas Williams, CPA, PLLC.',
                'Conoce los servicios contables, fiscales, de cumplimiento, asesoría empresarial, inversión inmobiliaria y asuntos transfronterizos de Thomas Williams, CPA, PLLC.',
            ],
            'insights' => [
                'Read practical insights from Thomas Williams, CPA, PLLC on accounting, tax, business, real estate and financial matters.',
                'Consulta artículos prácticos de Thomas Williams, CPA, PLLC sobre contabilidad, impuestos, negocios, bienes raíces y temas financieros.',
            ],
            'payments' => [
                'Review current payment guidance for clients of Thomas Williams, CPA, PLLC.',
                'Consulta la orientación vigente sobre pagos para clientes de Thomas Williams, CPA, PLLC.',
            ],
            'contact' => [
                'Contact Thomas Williams, CPA, PLLC in San Antonio for accounting, tax, business advisory and financial guidance.',
                'Contacta a Thomas Williams, CPA, PLLC en San Antonio para servicios contables, fiscales, de asesoría empresarial y orientación financiera.',
            ],
            'privacy-policy' => [
                'Read the Privacy Policy for the Thomas Williams, CPA, PLLC website.',
                'Consulta el Aviso de Privacidad del sitio web de Thomas Williams, CPA, PLLC.',
            ],
            'terms-disclaimer' => [
                'Review the website Terms and Disclaimer for Thomas Williams, CPA, PLLC.',
                'Consulta los Términos y el Aviso Legal del sitio web de Thomas Williams, CPA, PLLC.',
            ],
        ];

        $slug = get_post_field('post_name', get_queried_object_id());

        if (isset($descriptions[$slug])) {
            return tw_text($descriptions[$slug][0], $descriptions[$slug][1]);
        }

        if (has_excerpt()) {
            return wp_strip_all_tags(get_the_excerpt());
        }
    }

    if (is_search() || is_404()) {
        return '';
    }

    return get_bloginfo('description');
}

function tw_get_canonical_url()
{
    if (is_front_page()) {
        return tw_is_spanish() ? home_url('/es/') : home_url('/');
    }

    if (is_page()) {
        return tw_is_spanish()
            ? tw_get_language_url('es')
            : get_permalink(get_queried_object_id());
    }

    if (is_single()) {
        return get_permalink(get_queried_object_id());
    }

    if (is_home()) {
        $posts_page = get_option('page_for_posts');
        return $posts_page ? get_permalink($posts_page) : home_url('/');
    }

    if (is_category() || is_tag() || is_tax()) {
        $term = get_queried_object();
        if ($term && !is_wp_error($term)) {
            $url = get_term_link($term);
            return !is_wp_error($url) ? $url : '';
        }
    }

    return '';
}

function tw_get_social_image()
{
    if (is_singular() && has_post_thumbnail()) {
        $image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
        if (!empty($image[0])) {
            return $image[0];
        }
    }

    $fallback = TW_THEME_DIR . '/assets/images/social/default-share.png';
    return file_exists($fallback)
        ? TW_THEME_URI . '/assets/images/social/default-share.png'
        : '';
}

function tw_get_social_title()
{
    if (is_front_page()) {
        return sprintf(
            '%s | %s',
            get_bloginfo('name'),
            tw_text('Accounting, Tax & Advisory', 'Contabilidad, Impuestos y Asesoría')
        );
    }

    if (is_page()) {
        $slug = get_post_field('post_name', get_queried_object_id());
        $titles = [
            'about' => ['About', 'Nosotros'],
            'services' => ['Services', 'Servicios'],
            'insights' => ['Insights', 'Artículos'],
            'payments' => ['Payments', 'Pagos'],
            'contact' => ['Contact', 'Contacto'],
            'privacy-policy' => ['Privacy Policy', 'Aviso de Privacidad'],
            'terms-disclaimer' => ['Terms & Disclaimer', 'Términos y Aviso Legal'],
        ];

        if (isset($titles[$slug])) {
            return tw_text($titles[$slug][0], $titles[$slug][1]) . ' | ' . get_bloginfo('name');
        }
    }

    if (is_singular()) {
        return wp_strip_all_tags(get_the_title());
    }

    return wp_strip_all_tags(wp_get_document_title());
}

function tw_output_hreflang_links()
{
    if (tw_has_seo_plugin()) {
        return;
    }

    if (!is_front_page() && !is_page()) {
        return;
    }

    $en = tw_get_language_url('en');
    $es = tw_get_language_url('es');

    printf("<link rel=\"alternate\" hreflang=\"en-US\" href=\"%s\">\n", esc_url($en));
    printf("<link rel=\"alternate\" hreflang=\"es-MX\" href=\"%s\">\n", esc_url($es));
    printf("<link rel=\"alternate\" hreflang=\"x-default\" href=\"%s\">\n", esc_url($en));
}
add_action('wp_head', 'tw_output_hreflang_links', 6);

function tw_output_seo_meta()
{
    if (tw_has_seo_plugin()) {
        return;
    }

    $description  = tw_get_meta_description();
    $canonical    = tw_get_canonical_url();
    $social_title = tw_get_social_title();
    $social_image = tw_get_social_image();
    $site_name    = get_bloginfo('name');

    if ($description !== '') {
        printf("\n<meta name=\"description\" content=\"%s\">\n", esc_attr($description));
    }

    if ($canonical !== '') {
        printf("<link rel=\"canonical\" href=\"%s\">\n", esc_url($canonical));
    }

    echo '<meta property="og:type" content="' . (is_single() ? 'article' : 'website') . "\">\n";
    printf("<meta property=\"og:site_name\" content=\"%s\">\n", esc_attr($site_name));
    printf("<meta property=\"og:title\" content=\"%s\">\n", esc_attr($social_title));
    printf("<meta property=\"og:locale\" content=\"%s\">\n", tw_is_spanish() ? 'es_MX' : 'en_US');

    if ($description !== '') {
        printf("<meta property=\"og:description\" content=\"%s\">\n", esc_attr($description));
    }
    if ($canonical !== '') {
        printf("<meta property=\"og:url\" content=\"%s\">\n", esc_url($canonical));
    }
    if ($social_image !== '') {
        printf("<meta property=\"og:image\" content=\"%s\">\n", esc_url($social_image));
    }

    echo "<meta name=\"twitter:card\" content=\"summary_large_image\">\n";
    printf("<meta name=\"twitter:title\" content=\"%s\">\n", esc_attr($social_title));
    if ($description !== '') {
        printf("<meta name=\"twitter:description\" content=\"%s\">\n", esc_attr($description));
    }
    if ($social_image !== '') {
        printf("<meta name=\"twitter:image\" content=\"%s\">\n", esc_url($social_image));
    }

    if (is_single()) {
        printf("<meta property=\"article:published_time\" content=\"%s\">\n", esc_attr(get_the_date('c')));
        printf("<meta property=\"article:modified_time\" content=\"%s\">\n", esc_attr(get_the_modified_date('c')));
    }
}
add_action('wp_head', 'tw_output_seo_meta', 5);

function tw_remove_core_canonical()
{
    if (!tw_has_seo_plugin()) {
        remove_action('wp_head', 'rel_canonical');
    }
}
add_action('template_redirect', 'tw_remove_core_canonical');

function tw_filter_robots($robots)
{
    if (!tw_has_seo_plugin() && (is_404() || is_search())) {
        $robots['noindex'] = true;
        $robots['follow']  = true;
    }

    return $robots;
}
add_filter('wp_robots', 'tw_filter_robots');

function tw_output_schema()
{
    if (tw_has_seo_plugin()) {
        return;
    }

    if (!is_front_page() && !is_page('about') && !is_page('contact')) {
        return;
    }

    $location = function_exists('tw_get_office_location') ? tw_get_office_location() : [];

    $schema = [
        '@context' => 'https://schema.org',
        '@type' => 'AccountingService',
        'name' => 'Thomas Williams, CPA, PLLC',
        'url' => tw_get_canonical_url() ?: home_url('/'),
        'description' => tw_text(
            'Accounting, tax and advisory services from San Antonio, Texas.',
            'Servicios contables, fiscales y de asesoría desde San Antonio, Texas.'
        ),
        'telephone' => '+1-210-342-9999',
        'areaServed' => [
            '@type' => 'City',
            'name' => 'San Antonio',
        ],
    ];

    if (!empty($location)) {
        $schema['address'] = [
            '@type' => 'PostalAddress',
            'streetAddress' => $location['address_line_1'],
            'addressLocality' => $location['city'],
            'addressRegion' => $location['state'],
            'postalCode' => $location['postal_code'],
            'addressCountry' => $location['country'],
        ];
    }

    $custom_logo_id = get_theme_mod('custom_logo');
    if ($custom_logo_id) {
        $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
        if (!empty($logo[0])) {
            $schema['logo'] = $logo[0];
        }
    }

    echo "\n<script type=\"application/ld+json\">";
    echo wp_json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    echo "</script>\n";
}
add_action('wp_head', 'tw_output_schema', 20);
