<?php
/**
 * Map integration helpers.
 *
 * @package ThomasWilliams
 */

if (!defined('ABSPATH')) {
    exit;
}


/**
 * Return office location data.
 *
 * @return array
 */
function tw_get_office_location()
{
    return [
        'name' => 'Thomas Williams, CPA, PLLC',

        'address_line_1' =>
            '248 E. Summit Avenue',

        'address_line_2' =>
            '',

        'city' =>
            'San Antonio',

        'state' =>
            'TX',

        'postal_code' =>
            '78212',

        'country' =>
            'US',
    ];
}


/**
 * Return formatted office address.
 *
 * @return string
 */
function tw_get_office_address()
{
    $location =
        tw_get_office_location();

    $parts = [
        $location['address_line_1'],
        $location['address_line_2'],
        $location['city'],
        $location['state'] . ' ' . $location['postal_code'],
    ];

    /*
     * Remove empty address components.
     */
    $parts = array_filter(
        $parts
    );

    return implode(
        ', ',
        $parts
    );
}


/**
 * Return Google Maps directions URL.
 *
 * @return string
 */
function tw_get_google_maps_url()
{
    $address =
        tw_get_office_address();

    return add_query_arg(
        [
            'api'         => 1,
            'destination' => $address,
        ],
        'https://www.google.com/maps/dir/'
    );
}


/**
 * Return Google Maps embed URL.
 *
 * @return string
 */
function tw_get_google_maps_embed_url()
{
    $address =
        tw_get_office_address();

    return add_query_arg(
        [
            'q'      => $address,
            'output' => 'embed',
        ],
        'https://www.google.com/maps'
    );
}