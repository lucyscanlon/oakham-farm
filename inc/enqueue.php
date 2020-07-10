<?php

function oakhamfarm_scripts() {

  wp_enqueue_style('oakhamfarm', get_template_directory_uri() . '/css/oakhamfarm.css', array(), '1.0.0', 'all');

  wp_register_script('custom', get_template_directory_uri() . '/js/jquery.js', false, '3.3.1', true);
  wp_enqueue_script('custom');

  wp_register_script('oakhamfarmjquery', get_template_directory_uri() . '/js/oakhamfarm.js', false, '1.0.0', true);
  wp_enqueue_script('oakhamfarmjquery');

}

add_action('wp_enqueue_scripts', 'oakhamfarm_scripts');
