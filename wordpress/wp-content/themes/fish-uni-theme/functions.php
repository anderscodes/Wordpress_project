<?php

function uni_files() {
  wp_enqueue_script('main-uni-js', get_theme_file_uri('/js/scripts-bundled.js'), NULL, microtime(), true);
  wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
  wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
  wp_enqueue_style('university_main_style', get_stylesheet_uri(), NULL, microtime());
}

add_action('wp_enqueue_scripts', 'uni_files');

function uni_features() {
  add_theme_support('title-tag');
}

add_action('after_setup_theme', 'uni_features');

function uni_post_types() {
  register_post_type('event', array(
    'public' => true,
    'labels' => array(
      'name' => 'Events'
    ),
    'menu_icon' => 'dashicons-tickets-alt'
  ));
};

add_action('init', 'uni_post_types');
