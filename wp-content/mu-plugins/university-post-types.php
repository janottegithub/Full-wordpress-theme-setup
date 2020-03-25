<?php
function university_post_types(){
    register_post_type('event', array(
        'supports' => array('title', 'editor', 'excerpt' ),
        'rewrite' => array('slug' => 'events'),
        'has_archive' => true,
        'public' => true,
        'labels' => array(
        'name' => 'Events',
        'add_new_item'=> 'Add New Event',
        'edit_item' => 'Edit Event',
        'All_items' => 'All Events',
        'singular_name' => 'Event'
        ),
        'menu_icon' => 'dashicons-calendar'
    ));
}

add_action('init', 'university_post_types');
?>

<?php

function art_post_types(){
    register_post_type('art', array(
        'supports' => array('title', 'editor', 'excerpt' ),
        'rewrite' => array('slug' => 'arts'),
        'has_archive' => true,
        'public' => true,
        'labels' => array(
        'name' => 'Arts',
        'add_new_item'=> 'Add New Art Post',
        'edit_item' => 'Edit Art Post',
        'All_items' => 'All Art Posts',
        'singular_name' => 'Art'
        ),
        'menu_icon' => 'dashicons-admin-customizer'
    ));
}

add_action('init', 'art_post_types');
?>

<?php

function music_post_types(){
    register_post_type('music', array(
        'supports' => array('title', 'editor', 'excerpt' ),
        'rewrite' => array('slug' => 'music'),
        'has_archive' => true,
        'public' => true,
        'labels' => array(
        'name' => 'music',
        'add_new_item'=> 'Add New Music',
        'edit_item' => 'Edit Music',
        'All_items' => 'All Music',
        'singular_name' => 'Music'
        ),
        'menu_icon' => 'dashicons-format-audio'
    ));
}

add_action('init', 'music_post_types');
?>