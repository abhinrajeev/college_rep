<?php

function college_theme_setup(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme','college_theme_setup');

/* Custom Post Type: Courses */
function college_register_courses(){

    register_post_type('course',array(
        'label' => 'Courses',
        'public' => true,
        'menu_icon' => 'dashicons-welcome-learn-more',
        'supports' => array('title','editor','thumbnail'),
        'has_archive' => true,
        'rewrite' => array('slug'=>'courses')
    ));
}
add_action('init','college_register_courses');
