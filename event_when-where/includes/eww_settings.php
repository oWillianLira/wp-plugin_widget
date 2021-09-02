<?php

add_action('admin_menu', 'eww_menu');

function eww_menu()
{
  add_menu_page(
    'Event, when and where', // Page title
    'Event WW', // Menu title
    'manage_options', // Capability
    'event_when-where', // Slug
    'eww_panel', // Callback Function
    'dashicons-calendar-alt', // Icon
    2 // Menu position
  );
}

function eww_panel()
{
?>
  <section id="eww_panel">
    <h1>Event, when and where</h1>
    <form action="options.php" method="post">
      <?php
      do_settings_sections('event_when-where');
      settings_fields('eww_settings');
      submit_button();
      ?>
    </form>
  </section>
<?php
};

add_action('admin_menu', 'eww_sections');

function eww_sections()
{
  add_settings_section(
    'eww_section_form', // ID
    'Locale settings', // Title
    'eww_section_details', // Callback Function
    'event_when-where' // Page (where to show)
  );

  add_settings_field(
    'eww_address', // ID
    'Address', // Title
    'eww_field_address', // Callback Function
    'event_when-where', // Page (where to show)
    'eww_section_form', // Section
  );

  register_setting(
    'eww_settings',
    'eww_field_address'
  );

  add_settings_field(
    'eww_city', // ID
    'City', // Title
    'eww_field_city', // Callback Function
    'event_when-where', // Page (where to show)
    'eww_section_form', // Section
  );

  register_setting(
    'eww_settings',
    'eww_city'
  );

  add_settings_field(
    'eww_date', // ID
    'Date', // Title
    'eww_field_date', // Callback Function
    'event_when-where', // Page (where to show)
    'eww_section_form', // Section
  );

  register_setting(
    'eww_settings',
    'eww_date'
  );
};

function eww_section_details()
{
?>
  <h4>Insert the address for your next event</h4>
<?php
}

function eww_field_address()
{
?>
  <input type="text" name="eww_address" id="eww_address" required>
<?php
}

function eww_field_city()
{
?>
  <input type="text" name="eww_city" id="eww_city" required>
<?php
}

function eww_field_date()
{
?>
  <input type="date" name="eww_date" id="eww_date" required>
<?php
}
