<?php
function real_estate_theme_setup() {
  add_theme_support('block-templates');
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'real_estate_theme_setup');