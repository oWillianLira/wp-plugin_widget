<?php

/**
 * Plugin Name: Event, when and where
 * Description: Tell everyone the date and location for your big event.
 * Author: Willian Lira (feat. Alura)
 * Author URI: https://owillianlira.com/en/
 * Version: 0.1.0 
 */

if (!defined('ABSPATH')) {
  die;
}

require_once plugin_dir_path(__FILE__) . './includes/eww_settings.php';
require_once plugin_dir_path(__FILE__) . './includes/eww_shortcode.php';
require_once plugin_dir_path(__FILE__) . './includes/eww_scripts.php';
