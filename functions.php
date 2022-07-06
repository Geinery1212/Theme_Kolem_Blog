<?php
add_theme_support('post-thumbnails');
add_image_size('homepage-thumb', 745, 372, true);
register_nav_menus(array(
    'menu-top' => 'Menu Principal',
    'menu-bottom' => 'Menu Footer',
));
register_sidebar(array(
    'name' => 'sidebar',
    'before_widget' => '<div class="widget">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="widget__title">',
    'after_title' => '</h3>',
));

register_sidebar(array(
    'name' => 'author',
    'before_widget' => '<div class="single-post-autor">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="widget__title">',
    'after_title' => '</h3>',
));

function get_excerpt()
{
    $excerpt = get_the_content();
    $excerpt = preg_replace(" ([.*?])", '', $excerpt);
    $excerpt = strip_shortcodes($excerpt);
    $excerpt = strip_tags($excerpt);
    $excerpt = substr($excerpt, 0, 100);
    $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
    // $excerpt = trim(preg_replace('/s+/', ' ', $excerpt));
    $excerpt = $excerpt . '...';
    return $excerpt;
}

add_theme_support('custom-logo',  array(
    'height'               => 80,
    'width'                => 80,
    'flex-width'           => true,
    'flex-height'          => true,
    'unlink-homepage-logo' => true,
));

