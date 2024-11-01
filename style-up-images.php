<?php
/*
Plugin Name: Style Up Images
Description: Style Up Images helps you to make your images looks little more good & informative on mouseover.
Version: 1.0
Author: App Swifters
*/

/*  Copyright 2011  App Swifters

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

//Add the nedded styles & script
add_action('wp_print_styles', 'style_up_img_add_style');
add_action('init', 'style_up_img_add_script');

/** Link the needed stylesheet */
function style_up_img_add_style() {
	wp_enqueue_style('style-up-style', WP_PLUGIN_URL.'/style-up-images/style.css');
}

/** Link the needed script */
function style_up_img_add_script() {
	if ( !is_admin() ){
		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'jquery.styleup', plugins_url('/script.js', __FILE__), array('jquery') );
	}
}
?>