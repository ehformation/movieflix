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

function movieflix_comments($comment, $args, $depth) {
    ?>
    <?php exit(); ?>
    <div class="blog_1l5 mt-3" id="comment-<?php comment_ID(); ?>">
        <div class="blog_1l5i row">
            <div class="col-md-2 col-2 pe-0">
                <div class="blog_1l5il">
                    <?php echo get_avatar($comment, 60, '', '', ['class' => 'w-100']); ?>
                </div>
            </div>
            <div class="col-md-10 col-10">
                <div class="blog_1l5ir">
                    <h5>
                        <a href="<?php echo esc_url(get_comment_author_url()); ?>">
                            <?php comment_author(); ?>
                        </a> 
                        <span class="font_14 col_light">/ <?php echo get_comment_date(); ?></span>
                    </h5>
                    <p class="font_14"><?php comment_text(); ?></p>
                    <h6 class="font_14 mb-0 mt-3">
                        <?php 
                        comment_reply_link([
                            'depth'      => $depth,
                            'max_depth'  => $args['max_depth'],
                            'reply_text' => 'Répondre',
                            'class'      => 'button p-3 pt-2 pb-2'
                        ]); 
                        ?>
                    </h6>
                </div>
            </div>
        </div>
    </div>
    <?php
}
