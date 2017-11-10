<?php

if (function_exists('add_theme_support')) {
    add_theme_support('menus');
}
function bricks_setup()
{
// This theme supports a variety of post formats.
    add_theme_support('post-formats', array('aside', 'image', 'link', 'quote', 'status'));
}
add_action( 'after_setup_theme', 'bricks_setup' );

// Callback function to insert 'styleselect' into the $buttons array
function my_mce_buttons_2($buttons)
{
    array_unshift($buttons, 'styleselect');
    return $buttons;
}

// Register our callback to the appropriate filter
add_filter('mce_buttons_2', 'my_mce_buttons_2');

/*
* Callback function to filter the MCE settings
*/

function my_mce_before_init_insert_formats($init_array)
{

    // Define the style_formats array

    $style_formats = array(
        /*
        * Each array child is a format with it's own settings
        * Notice that each array has title, block, classes, and wrapper arguments
        * Title is the label which will be visible in Formats menu
        * Block defines whether it is a span, div, selector, or inline style
        * Classes allows you to define CSS classes
        * Wrapper whether or not to add a new block-level element around any selected elements
        */
        array(
            'title' => 'Аннотация',
            'block' => "div",
            'classes' => "post__annotation",
            'wrapper' => false,

        ),
//        array(
//            'title' => 'Blue Button',
//            'block' => 'span',
//            'classes' => 'blue-button',
//            'wrapper' => true,
//        ),
//        array(
//            'title' => 'Red Button',
//            'block' => 'span',
//            'classes' => 'red-button',
//            'wrapper' => true,
//        ),
    );
    // Insert the array, JSON ENCODED, into 'style_formats'
    $init_array['style_formats'] = json_encode($style_formats);

    return $init_array;

}

// Attach callback to 'tiny_mce_before_init'
add_filter('tiny_mce_before_init', 'my_mce_before_init_insert_formats');


add_editor_style('custom-editor-style.css');

//поддержка миниатюр поста
add_theme_support( 'post-thumbnails' );

//укорачиваем excerpt
function new_excerpt_length($length) {
    return 8;
}
add_filter('excerpt_length', 'new_excerpt_length');

add_filter('excerpt_more', function($more) {
    return '...';
});

function page_excerpt() {
    add_post_type_support('page', array('excerpt'));
}
add_action('init', 'page_excerpt');
//Добавление "Цитаты" для страниц end
