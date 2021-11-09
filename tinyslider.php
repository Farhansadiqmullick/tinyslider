<?php
/*
Plugin Name: TinySlider
Plugin URI: 
Description: Slider using the shortcode
Version: 1.0
Author: farhan
Author URI: https://hasin.me
License: GPLv2 or later
Text Domain: tinyslider
Domain Path: /languages/
*/
function tinyload_textdomain()
{
    load_plugin_textdomain('tinyslider', false, dirname(__FILE__) . "/languages");
}
add_action('plugins_loaded', 'tinyload_textdomain');

function tiny_init()
{
    add_image_size('tiny_slider', 1024, 780, true);
}
add_action('init', 'tiny_init');
