<?php

    function scripts()
    {
        wp_register_style('style', get_template_directory_uri().'./dist/app.css', [], 1, 'all');
        wp_enqueue_style('style');

        wp_enqueue_script('jquery');
        wp_register_script('app', get_template_directory_uri().'./dist/app.js', ['jquery'], 1, true);
        wp_enqueue_script('app');
    }
    add_action('wp_enqueue_scripts', 'scripts');

add_theme_support('title-tag');
add_theme_support('menus');
add_theme_support('category-thumbnails');
add_theme_support('post-thumbnails');


register_nav_menus(
    array(
        'top-menu' => 'Top Menu'
    )
);


add_theme_support('custom-logo', array(
    'height'               => 36,
    'width'                => 141,
    'flex-height'          => true,
    'flex-width'           => true,
    'header-text'          => array( 'site-title', 'site-description' ),
    'unlink-homepage-logo' => true,
));

/* add navwalker*/
function register_navwalker()
{
    require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
}
add_action('after_setup_theme', 'register_navwalker');
if (! file_exists(get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php')) {
    // File does not exist... return an error.
    return new WP_Error('class-wp-bootstrap-navwalker-missing', __('It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker'));
} else {
    // File exists... require it.
    require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
}

/* gutenberg setting */
require_once get_template_directory() . '/inc/gutenberg.php';
