<?php

/**
 * Functions and definitions
 * In WordPress, functions.php or the theme functions file is a template included in WordPress themes. It acts like a plugin for your WordPress site that's automatically activated with your aIn WordPress, functions.php or the theme functions file is a template included in WordPress themes. It acts like a plugin for your WordPress site that's automatically activated with your current theme.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 */


/**
 ** Enqueue style
 **/
function package_css()
{
    wp_enqueue_style('locomotive-css', 'https://cdn.jsdelivr.net/npm/locomotive-scroll@4.1.4/dist/locomotive-scroll.min.css');
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css');
}
add_action('wp_enqueue_scripts', 'package_css');

function main_css()
{
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'main_css');

/**
 ** Enqueue scripts
 **/
function package_scripts()
{
    wp_enqueue_script('barba-js', 'https://unpkg.com/@barba/core');
    wp_enqueue_script('gsap-js', 'https://unpkg.com/gsap@latest/dist/gsap.min.js');
    wp_enqueue_script('locomotive-js', 'https://cdn.jsdelivr.net/npm/locomotive-scroll@4.1.4/dist/locomotive-scroll.min.js', array(), null, true);
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js');
}
add_action('wp_enqueue_scripts', 'package_scripts');

function main_scripts()
{
    wp_enqueue_script('theme-script', get_template_directory_uri() . '/assets/js/barba-init.js', array(), null, true);
    wp_enqueue_script('accordion-script', get_template_directory_uri() . '/assets/js/accordion.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'main_scripts');

/**
 ** Get current template
 **/
function get_current_template()
{
    global $template;
    return basename($template, '.php');
}

add_action('acf/init', 'my_acf_blocks_init');
function my_acf_blocks_init()
{

    // Check function exists.
    if (function_exists('acf_register_block_type')) {

        // Register a testimonial block.
        acf_register_block_type(array(
            'name'              => 'button',
            'title'             => __('Button'),
            'description'       => __('Ein anpassbarer Button mit den Matheliebe-Farben'),
            'render_template'   => 'template-parts/blocks/button.php',
            'category'          => 'theme',
        ));
    }

    if (function_exists('acf_register_block_type')) {

        // Register a testimonial block.
        acf_register_block_type(array(
            'name'              => 'slider',
            'title'             => __('Slider'),
            'description'       => __('Anpassbarer slider'),
            'render_template'   => 'template-parts/blocks/slider.php',
            'category'          => 'theme',
        ));
    }

    if (function_exists('acf_register_block_type')) {

        // Register a testimonial block.
        acf_register_block_type(array(
            'name'              => 'quote',
            'title'             => __('Quote'),
            'description'       => __('Anpassbares Zitat'),
            'render_template'   => 'template-parts/blocks/quote.php',
            'category'          => 'theme',
        ));
    }

    if (function_exists('acf_register_block_type')) {

        // Register a testimonial block.
        acf_register_block_type(array(
            'name'              => 'fullimage',
            'title'             => __('Full Image'),
            'description'       => __('Bild auf die ganze Breite'),
            'render_template'   => 'template-parts/blocks/fullimage.php',
            'category'          => 'theme',
        ));
    }

    if (function_exists('acf_register_block_type')) {

        // Register a testimonial block.
        acf_register_block_type(array(
            'name'              => 'book',
            'title'             => __('Book'),
            'description'       => __('Block für das Buch'),
            'render_template'   => 'template-parts/blocks/book.php',
            'category'          => 'theme',
        ));
    }

    if (function_exists('acf_register_block_type')) {

        // Register a testimonial block.
        acf_register_block_type(array(
            'name'              => 'accordion',
            'title'             => __('Accordion'),
            'description'       => __('Block für ein Akkordeon'),
            'render_template'   => 'template-parts/blocks/accordion.php',
            'category'          => 'theme',
        ));
    }

    if (function_exists('acf_register_block_type')) {

        // Register a testimonial block.
        acf_register_block_type(array(
            'name'              => 'spacing',
            'title'             => __('Spacing'),
            'description'       => __('Block für anpassbare Abstände'),
            'render_template'   => 'template-parts/blocks/spacing.php',
            'category'          => 'theme',
        ));
    }
}

/**
 * Registering WordPress Theme Widgets
 *
 * @since 1.0
 */
add_action('widgets_init', 'address_widget');
function address_widget()
{
    $args = array(
        'name'          => 'Address Widget',
        'id'            => 'address_widget',
        'description'   => 'Feld für die Adresse',
        'class'         => '',
        'before_widget' => '',
        'after_widget'  => '',
    );

    register_sidebar($args);
}

add_action('widgets_init', 'contact_widget');
function contact_widget()
{
    $args = array(
        'name'          => 'Contact Widget',
        'id'            => 'contact_widget',
        'description'   => 'Feld für Kontakt',
        'class'         => '',
        'before_widget' => '',
        'after_widget'  => '',
    );

    register_sidebar($args);
}

/**
 * Registering WordPress Theme Menus
 *
 * @since 1.0
 */
function register_menus()
{
    register_nav_menus(
        array(
            'main-menu' => 'Main Menu',
            'footer-menu' => 'Footer Menu',
        )
    );
}
add_action('init', 'register_menus');
