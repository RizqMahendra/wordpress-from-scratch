<?php

function theme_color_features()
{
    add_theme_support('editor-color-palette', array(
        array(
            'name'  => esc_attr__('color number one', 'themeLangDomain'),
            'slug'  => 'color-number-one',
            'color' => '#a156b4',
        ),
        array(
            'name'  => esc_attr__('color number two', 'themeLangDomain'),
            'slug'  => 'color-number-two',
            'color' => '#d0a5db',
        ),
        array(
            'name'  => esc_attr__('color number three', 'themeLangDomain'),
            'slug'  => 'color-number-three',
            'color' => '#eee',
        ),
        array(
            'name'  => esc_attr__('color number four', 'themeLangDomain'),
            'slug'  => 'color-number-four',
            'color' => '#444',
        ),
    ));
}
 
add_action('after_setup_theme', 'theme_color_features');
