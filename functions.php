<?php 

function movieflixtheme_setup() {
    add_theme_support( 'custom-logo', array(
        'height'               => 288,
        'width'                => 900,
        'flex-width'           => true,
    ) );
}
add_action('after_setup_theme', 'movieflixtheme_setup');