<?php
namespace App;

/**
* Set default link type for WordPress galleries
*/

add_filter( 'media_view_settings', function($settings) {
    $settings['galleryDefaults']['link'] = 'file';
    return $settings;
});
