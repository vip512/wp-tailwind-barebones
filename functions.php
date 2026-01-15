<?php



function custom_theme_assets() {
    $css_file = get_template_directory() . '/dist/main.css';
    if ( file_exists( $css_file ) ) {
        $css_version = filemtime( $css_file );
    } else {
        $css_version = '1.0.0';
    }
    wp_enqueue_style(
        'custom-theme-style',
        get_template_directory_uri() . '/dist/main.css',
        array(),
        $css_version
    );


}
add_action('wp_enqueue_scripts', 'custom_theme_assets');
add_action('after_setup_theme', 'custom_theme_setup');

function custom_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', [
        'search-form',
        'comment-form',
        'comment-list', 
        'gallery', 
        'caption'
    ]);

}