<?php

function uni_files() {
  wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
  wp_enqueue_style('uni_main_style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'uni_files');
