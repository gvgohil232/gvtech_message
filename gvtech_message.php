<?php
/*
Plugin Name: gvtech_message
Plugin URI: <plugin URI>
Description: <plugin description>
Version: <plugin version>1.0.0
Author: <author>
Author URI: <author URI>https://www.gvtechnolab.in
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: wpb-tutorial
Domain Path: /languages
*/


add_shortcode( 'gvtech_message', 'gvtech_message_content_func' );
function gvtech_message_content_func( $atts ) {
  	$atts = shortcode_atts( array(
        'message' => '',
        'author' => 'default'
    ), $atts);
    return '<div class="gvtech_message_wrap"><p>'.$atts['message'].'</p><span><em>'.$atts['author'].'</em></span></div>';
}