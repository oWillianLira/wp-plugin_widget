<style>
  .main_sponsors {
    margin: 20px;
  }

  h3.sponsors_title {
    font-size: 20px;
    font-weight: 500;
    margin-bottom: 20px;
  }

  .sponsors_list li:not(:last-child) {
    margin-bottom: 20px;
  }

  .sponsors_list li img {
    width: 150px;
    height: auto;
  }
</style>

<?php

/**
 * Plugin Name: Event Sponsors
 * Description: Select the sponsors for your big event.
 * Author: Willian Lira (feat. Alura)
 * Author URI: https://owillianlira.com/en/
 * Version: 0.1.0
 */

if (!defined('ABSPATH')) {
  die;
}

require_once plugin_dir_path(__FILE__) . '/includes/es_widget.php';
