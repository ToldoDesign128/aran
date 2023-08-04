<?php
/*  Theme setup
/* ------------------------------------ */
function aran_setup()
{
    // Enable title in header
    add_theme_support("title-tag");
    // Enable featured image
    add_theme_support("post-thumbnails");
    // Custom menu areas
    register_nav_menus(array(
        'header' => esc_html__('Header', 'slug-theme')
    ));

    // image size
    if (function_exists('add_image_size')) {
        add_image_size('xsmall', 100, 100, true);
        add_image_size('small', 150, 150, true);
        add_image_size('medium', 300, 300, true);
        add_image_size('large', 600, 600, true);
        add_image_size('xlarge', 900, 900, true);
        add_image_size('xxlarge', 1200, 1200, true);
        add_image_size('full', 1800, 1800, true);
    }
}
add_action('after_setup_theme', 'aran_setup');

// Editor di defoult
add_filter('use_block_editor_for_post', '__return_false');

// Il mio stile e i miei scripts
function add_aran_scripts()
{
    wp_enqueue_style('aran-style', get_template_directory_uri() . '/style.min.css');
    wp_enqueue_style('aran-style', get_template_directory_uri() . '/style.css');

    wp_enqueue_script("iconify-script", 'https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js', array("jquery"), null, true);
    wp_enqueue_script("aran-script", get_template_directory_uri() . '/script.min.js', array("jquery"), null, true);
}
add_action('wp_enqueue_scripts', 'add_aran_scripts');

// Functions part
// require dirname(__FILE__) . '/functions-part/customize-back.php';
require dirname(__FILE__) . '/functions-part/cpt-arredo.php';
require dirname(__FILE__) . '/functions-part/cpt-living.php';

/*ADD ACF Option Page*/
if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title'    => 'Header Link',
        'menu_title'   => 'Header Link',
        'menu_slug'    => 'header-link',
        'capability'   => 'edit_posts',
        'icon_url'      => 'dashicons-menu',
        'redirect'      => true
    ));
}
if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title'    => 'Footer',
        'menu_title'   => 'Footer',
        'menu_slug'    => 'footer',
        'capability'   => 'edit_posts',
        'icon_url'      => 'dashicons-layout',
        'redirect'      => true
    ));
}