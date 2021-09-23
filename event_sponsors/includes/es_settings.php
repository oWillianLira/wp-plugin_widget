<?php

add_action('wp_enqueue_scripts', 'es_add_script');
function es_add_script()
{
  wp_enqueue_style(
    'es_style',
    plugins_url() . '/event_sponsors/css/styles.css'
  );
}
