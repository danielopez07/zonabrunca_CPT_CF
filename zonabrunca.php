<?php
/**
 * @package Zona Brunca CPT CF
 * @version 1.0.0
 */
/*
Plugin Name: Zona Brunca CPT CF
Plugin URI:
Description: Custom post types and custom fields for Zona Brunca.
Author: Sandstorm Agency
Version: 1.0.0
Author URI: https://sandstormagency.com
Text Domain: zonabrunca-cpt-cf
Domain Path: /lang
*/

include_once 'inc/custom-post-types.php';

function zonabrunca_CPT_CF_load_plugin_textdomain() {
    load_plugin_textdomain( 'zonabrunca-cpt-cf', FALSE, basename( dirname( __FILE__ ) ) . '/lang/' );
}
add_action( 'plugins_loaded', 'zonabrunca_CPT_CF_load_plugin_textdomain' );
