<?php 
require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
require_once get_template_directory() . '/inc/class-wp-bottom-menu-walker.php';
require_once get_template_directory() . '/inc/mf-shortcode.php';

function movieflixtheme_setup() {
    add_theme_support( 'custom-logo', array(
        'height'               => 288,
        'width'                => 900,
        'flex-width'           => true,
    ) );
    add_theme_support('post-thumbnails');
    register_nav_menus(array(
        'menu-social' => 'Menu des réseaux sociaux (top)',
        'menu-principal' => 'Menu principal (center top)',
        'menu-bottom' => 'Menu du bas (bottom)',
    ));
}
add_action('after_setup_theme', 'movieflixtheme_setup');

function movieflixtheme_widgets_init(){
    register_sidebar(array(
        'name' => 'Footer col 1',
        'id' => 'footer-1',
        'before_widget' => '<div class="bloc-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="title-widget">',
        'after_title'   => '</div>',
    ));

    register_sidebar(array(
        'name' => 'Footer col 2',
        'id' => 'footer-2',
        'before_widget' => '<div class="bloc-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="title-widget">',
        'after_title'   => '</div>',
    ));

    register_sidebar(array(
        'name' => 'Footer copy',
        'id' => 'footer-copy',
        'before_widget' => '<div class="bloc-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="title-widget">',
        'after_title'   => '</div>',
    ));
}
add_action('widgets_init', 'movieflixtheme_widgets_init');