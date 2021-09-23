<?php

if (!defined('WP_UNINSTALL_PLUGIN')) {
  die;
}

global $wpdb;

$wpdb->query("DELETE FROM wp_options WHERE option_name='eww_address'");
$wpdb->query("DELETE FROM wp_options WHERE option_name='eww_city'");
$wpdb->query("DELETE FROM wp_options WHERE option_name='eww_date'");
