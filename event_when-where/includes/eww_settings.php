<?php

add_action('admin_menu', 'eww_menu');

function eww_menu()
{
  add_menu_page(
    'Event, when and where',
    'Event WW',
    'manage_options',
    'event_when-where',
    'event_when-where_page',
    'dashicons-calendar-alt',
    2
  );
}
