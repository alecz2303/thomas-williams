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
            '901 NE Loop 410, Suite 508',

        'address_line_2' =>
            'Alamo Towers West',

        'city' =>
            'San Antonio',

        'state' =>
            'TX',

        'postal_code' =>
            '78209-1306',

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

    return sprintf(
        '%s, %s, %s, %s %s',
        $location['address_line_1'],
        $location['address_line_2'],
        $location['city'],
        $location['state'],
        $location['postal_code']
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
 * This uses the standard maps query embed format.
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