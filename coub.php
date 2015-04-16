<?php
/*
Plugin Name: Coub
Description: Embed coub.com looped videos into your WordPress site
Version:     1.0
Author:      Rami Yushuvaev
Author URI:  http://GenerateWP.com/
Text Domain: coub
Domain Path: /languages
*/


function coub_oembed_provider() {

	wp_oembed_add_provider( '#https?://(www\.)?coub.com/view/.*#i', 'https://coub.com/api/oembed.json', true );

}

add_action( 'init', 'coub_oembed_provider' );
