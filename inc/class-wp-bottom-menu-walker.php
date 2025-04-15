<?php 
class WP_Bottom_Menu_Walker extends Walker_Nav_Menu {
    function start_el(&$output, $item, $depth=0, $args=[], $id=0 ){
        $classes = "d-inline-block me-2";
        $output .= '<li class="' .  $classes . '">';
        $output .= '<a href="' . esc_attr($item->url) . '">' . esc_html($item->title) . '</a>';
    }
    function end_el(&$output, $item, $depth=0, $args=[] ){
        $output .= '</li>';
    }


}