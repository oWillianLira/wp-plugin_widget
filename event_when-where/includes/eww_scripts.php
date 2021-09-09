<?php

add_action('wp_enqueue_scripts', 'eww_add_scripts');

function eww_add_scripts()
{
  wp_enqueue_script('lib_countdown', plugins_url() . '/event_when-where/js/jquery.countdown.min.js', array('jquery'), null, true);

  wp_enqueue_script('eww_countdown', plugins_url() . '/event_when-where/js/eww_countdown.js', null, null, true);

  $date = get_option('eww_date');
  wp_localize_script('eww_countdown', 'date', $date);
}
