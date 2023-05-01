<?php
/**
 * Plugin Name:       Web Testimonial
 * Description:       Testimonial plugin with Elementor adon.
 * Version:           1.2.1
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            ''
 * License:           GPL v2 or later
 * TextDomain: webtestimonial
 */

if ( ! defined('ABSPATH')) exit;  // if direct access 

//enqueueing scripts and styles

function webtestimonial_plugin_scripts(){
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrajs', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js', array(), '1.0', false);
    wp_enqueue_script('carouseljs', 'https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/owl.carousel.js', array(), '1.0', false);
    wp_enqueue_style('bootstrapcss', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css', false, '1.0', 'all' );
    wp_enqueue_script('testimonials', plugins_url( 'assets/js/testimonials.js' , __FILE__ ), array('jquery'), '1.0', false);
    wp_enqueue_script('slick', plugins_url( 'assets/js/slick.min.js' , __FILE__ ), array('jquery'), '1.0', false);
    wp_enqueue_script('validationJs', 'https://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js', array('jquery'), '1.0', false);
    wp_enqueue_style('testimonialsCSS', plugins_url( 'assets/css/testimonials.css' , __FILE__ ), false, '1.0', 'all' );
    wp_enqueue_style('styleCSS', plugins_url( 'assets/css/style.css' , __FILE__ ), false, '1.0', 'all' );
    wp_enqueue_style('formStyleCSS', plugins_url( 'assets/css/form_style.css' , __FILE__ ), false, '1.0', 'all' );
    wp_enqueue_style('slickCSS', plugins_url( 'assets/css/slick.min.css' , __FILE__ ), false, '1.0', 'all' );
    wp_enqueue_style('carousel', 'https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.carousel.min.css', '1.0', 'all' );
}
add_action("wp_enqueue_scripts","webtestimonial_plugin_scripts");


// Admin
require_once( plugin_dir_path( __FILE__ ) . 'admin/webtestimonial_admin.php');

// shortcode
require_once( plugin_dir_path( __FILE__ ) . 'includes/shortcodes/slider-template-1.php');
require_once( plugin_dir_path( __FILE__ ) . 'includes/shortcodes/testimonialForm.php');

// elementor
require  plugin_dir_path( __FILE__ ) .'includes/elementor/widgets-loader.php';


/*==========================================================================
    Web Testimonials Shortcode Page
============================================================================*/

function webtestimonial_custom_submenu_page() {
    add_submenu_page( 'edit.php?post_type=webtestimonial', 'doc & shortcode', 'doc & shortcode', 'manage_options', 'testimonial_shortcode', 'webtestimonial_custom_shortcode_callback' ); 
}

function webtestimonial_custom_shortcode_callback() {

    include('includes/webtestimonial_shortcodes.php');

}
add_action('admin_menu', 'webtestimonial_custom_submenu_page');
