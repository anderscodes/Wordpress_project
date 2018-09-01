<<?php

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

?>
