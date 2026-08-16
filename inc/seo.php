<?php
/**
 * SEO helpers for Thomas Williams, CPA, PLLC.
 *
 * Provides lightweight SEO metadata when a dedicated
 * SEO plugin is not active.
 *
 * @package ThomasWilliams
 */

if (!defined('ABSPATH')) {
    exit;
}


/**
 * Determine whether a dedicated SEO plugin
 * appears to be active.
 *
 * @return bool
 */
function tw_has_seo_plugin()
{
    return (
        defined('WPSEO_VERSION') ||
        defined('RANK_MATH_VERSION') ||
        defined('AIOSEO_VERSION')
    );
}


/**
 * Build a contextual meta description.
 *
 * @return string
 */
function tw_get_meta_description()
{
    /*
     * Single Insight / post.
     */
    if (is_single()) {

        if (has_excerpt()) {
            return wp_strip_all_tags(
                get_the_excerpt()
            );
        }

        return wp_trim_words(
            wp_strip_all_tags(
                get_the_content()
            ),
            30,
            ''
        );
    }


    /*
     * Pages.
     */
    if (is_page()) {

        $descriptions = [
            'about' =>
                'Learn about Thomas Williams, CPA, PLLC, a San Antonio accounting, tax and advisory firm focused on clarity, experience and personal attention.',

            'services' =>
                'Explore accounting, tax, compliance, business advisory, real estate investment and cross-border services from Thomas Williams, CPA, PLLC.',

            'insights' =>
                'Read practical insights from Thomas Williams, CPA, PLLC on accounting, tax, business, real estate and financial matters.',

            'payments' =>
                'Access payment information and secure payment options for clients of Thomas Williams, CPA, PLLC.',

            'contact' =>
                'Contact Thomas Williams, CPA, PLLC in San Antonio for accounting, tax, business advisory and financial guidance.',

            'privacy-policy' =>
                'Read the Privacy Policy for the Thomas Williams, CPA, PLLC website.',

            'terms-disclaimer' =>
                'Review the website Terms and Disclaimer for Thomas Williams, CPA, PLLC.',
        ];

        $slug = get_post_field(
            'post_name',
            get_queried_object_id()
        );

        if (isset($descriptions[$slug])) {
            return $descriptions[$slug];
        }


        /*
         * Use manual excerpt if available.
         */
        if (has_excerpt()) {
            return wp_strip_all_tags(
                get_the_excerpt()
            );
        }
    }


    /*
     * Front page.
     */
    if (is_front_page()) {

        return 'Thomas Williams, CPA, PLLC provides accounting, tax and advisory services for businesses and individuals from San Antonio, Texas.';
    }


    /*
     * 404.
     */
    if (is_404()) {
        return '';
    }


    /*
     * Generic fallback.
     */
    return get_bloginfo('description');
}


/**
 * Get canonical URL.
 *
 * @return string
 */
function tw_get_canonical_url()
{
    if (is_singular()) {

        return get_permalink(
            get_queried_object_id()
        );
    }

    if (is_front_page()) {

        return home_url('/');
    }

    if (is_home()) {

        $posts_page = get_option(
            'page_for_posts'
        );

        return $posts_page
            ? get_permalink($posts_page)
            : home_url('/');
    }

    if (is_category() || is_tag() || is_tax()) {

        $term = get_queried_object();

        if (
            $term &&
            !is_wp_error($term)
        ) {

            $url = get_term_link($term);

            return !is_wp_error($url)
                ? $url
                : '';
        }
    }

    return '';
}


/**
 * Get social sharing image.
 *
 * @return string
 */
function tw_get_social_image()
{
    /*
     * Featured image for posts/pages.
     */
    if (
        is_singular() &&
        has_post_thumbnail()
    ) {

        $image = wp_get_attachment_image_src(
            get_post_thumbnail_id(),
            'full'
        );

        if (!empty($image[0])) {
            return $image[0];
        }
    }


    /*
     * Theme fallback.
     *
     * Create this later:
     * /assets/images/social/default-share.png
     */
    $fallback =
        TW_THEME_DIR .
        '/assets/images/social/default-share.png';

    if (file_exists($fallback)) {

        return TW_THEME_URI .
            '/assets/images/social/default-share.png';
    }

    return '';
}


/**
 * Get Open Graph title.
 *
 * @return string
 */
function tw_get_social_title()
{
    if (is_front_page()) {

        return sprintf(
            '%s | Accounting, Tax & Advisory',
            get_bloginfo('name')
        );
    }

    if (is_singular()) {

        return wp_strip_all_tags(
            get_the_title()
        );
    }

    return wp_strip_all_tags(
        wp_get_document_title()
    );
}


/**
 * Output meta tags.
 */
function tw_output_seo_meta()
{
    /*
     * Leave SEO entirely to dedicated plugins.
     */
    if (tw_has_seo_plugin()) {
        return;
    }


    $description =
        tw_get_meta_description();

    $canonical =
        tw_get_canonical_url();

    $social_title =
        tw_get_social_title();

    $social_image =
        tw_get_social_image();

    $site_name =
        get_bloginfo('name');

    $current_url = '';

    if (is_singular()) {

        $current_url =
            get_permalink(
                get_queried_object_id()
            );

    } elseif (is_front_page()) {

        $current_url =
            home_url('/');

    } elseif ($canonical !== '') {

        $current_url =
            $canonical;
    }


    /*
     * Meta description.
     */
    if ($description !== '') {

        printf(
            "\n<meta name=\"description\" content=\"%s\">\n",
            esc_attr($description)
        );
    }


    /*
     * Canonical.
     *
     * WordPress may already output canonicals
     * for singular content through rel_canonical().
     * Therefore we only add ours where appropriate
     * and remove the core action below.
     */
    if ($canonical !== '') {

        printf(
            "<link rel=\"canonical\" href=\"%s\">\n",
            esc_url($canonical)
        );
    }


    /*
     * Open Graph.
     */
    echo "<meta property=\"og:type\" content=\"";
    echo is_single() ? 'article' : 'website';
    echo "\">\n";

    printf(
        "<meta property=\"og:site_name\" content=\"%s\">\n",
        esc_attr($site_name)
    );

    printf(
        "<meta property=\"og:title\" content=\"%s\">\n",
        esc_attr($social_title)
    );

    if ($description !== '') {

        printf(
            "<meta property=\"og:description\" content=\"%s\">\n",
            esc_attr($description)
        );
    }

    if ($current_url !== '') {

        printf(
            "<meta property=\"og:url\" content=\"%s\">\n",
            esc_url($current_url)
        );
    }

    if ($social_image !== '') {

        printf(
            "<meta property=\"og:image\" content=\"%s\">\n",
            esc_url($social_image)
        );
    }


    /*
     * Twitter / X Card.
     */
    echo "<meta name=\"twitter:card\" content=\"summary_large_image\">\n";

    printf(
        "<meta name=\"twitter:title\" content=\"%s\">\n",
        esc_attr($social_title)
    );

    if ($description !== '') {

        printf(
            "<meta name=\"twitter:description\" content=\"%s\">\n",
            esc_attr($description)
        );
    }

    if ($social_image !== '') {

        printf(
            "<meta name=\"twitter:image\" content=\"%s\">\n",
            esc_url($social_image)
        );
    }


    /*
     * Article-specific metadata.
     */
    if (is_single()) {

        printf(
            "<meta property=\"article:published_time\" content=\"%s\">\n",
            esc_attr(
                get_the_date('c')
            )
        );

        printf(
            "<meta property=\"article:modified_time\" content=\"%s\">\n",
            esc_attr(
                get_the_modified_date('c')
            )
        );
    }

}

add_action(
    'wp_head',
    'tw_output_seo_meta',
    5
);


/**
 * Remove WordPress core canonical because
 * the theme outputs its own canonical tag.
 */
function tw_remove_core_canonical()
{
    if (tw_has_seo_plugin()) {
        return;
    }

    remove_action(
        'wp_head',
        'rel_canonical'
    );
}

add_action(
    'template_redirect',
    'tw_remove_core_canonical'
);


/**
 * Robots directives.
 *
 * 404 pages and internal search results should
 * not be indexed.
 *
 * @param array $robots Existing directives.
 *
 * @return array
 */
function tw_filter_robots($robots)
{
    if (tw_has_seo_plugin()) {
        return $robots;
    }

    if (
        is_404() ||
        is_search()
    ) {

        $robots['noindex'] = true;
        $robots['follow']  = true;
    }

    return $robots;
}

add_filter(
    'wp_robots',
    'tw_filter_robots'
);


/**
 * Organization structured data.
 */
function tw_output_schema()
{
    if (tw_has_seo_plugin()) {
        return;
    }

    if (
        !is_front_page() &&
        !is_page('about') &&
        !is_page('contact')
    ) {
        return;
    }

    $schema = [
        '@context' => 'https://schema.org',

        '@type' => 'AccountingService',

        'name' =>
            'Thomas Williams, CPA, PLLC',

        'url' =>
            home_url('/'),

        'description' =>
            'Accounting, tax and advisory services from San Antonio, Texas.',

        'areaServed' => [
            '@type' => 'City',
            'name'  => 'San Antonio',
        ],

        'address' => [
            '@type' =>
                'PostalAddress',

            'addressLocality' =>
                'San Antonio',

            'addressRegion' =>
                'TX',

            'addressCountry' =>
                'US',
        ],
    ];


    /*
     * Use Custom Logo if available.
     */
    $custom_logo_id =
        get_theme_mod('custom_logo');

    if ($custom_logo_id) {

        $logo = wp_get_attachment_image_src(
            $custom_logo_id,
            'full'
        );

        if (!empty($logo[0])) {
            $schema['logo'] = $logo[0];
        }
    }


    echo "\n<script type=\"application/ld+json\">";
    echo wp_json_encode(
        $schema,
        JSON_UNESCAPED_SLASHES |
        JSON_UNESCAPED_UNICODE
    );
    echo "</script>\n";
}

add_action(
    'wp_head',
    'tw_output_schema',
    20
);