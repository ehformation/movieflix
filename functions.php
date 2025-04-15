<?php 

function movieflixtheme_setup() {
    add_theme_support( 'custom-logo', array(
        'height'               => 288,
        'width'                => 900,
        'flex-width'           => true,
    ) );
    register_nav_menus(array(
        'menu-social' => 'Menu des réseaux sociaux (top)'
    ));
}
add_action('after_setup_theme', 'movieflixtheme_setup');