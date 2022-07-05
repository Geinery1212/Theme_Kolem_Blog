<?php
add_theme_support('post-thumbnails');
add_image_size('homepage-thumb', 745, 372, true);

register_sidebar(array(
    'name' => 'sidebar',
    'before_widget' => '<div class="widget">',
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
