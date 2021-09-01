<?php

add_action('widgets_init', 'es_widget_register');

function es_widget_register()
{
  register_widget('EventSponsors');
}

class EventSponsors extends WP_Widget
{
  public function __construct()
  {
    parent::__construct(
      'es_widget',
      'Event Sponsors',
      array(
        'description' => 'Select the event/worshop sponsors to list them'
      )
    );
  }

  public function form($instance)
  {
?>
    <fieldset style="margin: 20px 0 10px;">
      <input type="checkbox" id="<?= $this->get_field_id('caelum') ?>" name="<?= $this->get_field_name('caelum') ?>" value="1" <?php checked('1', $instance['caelum']) ?>>
      <label for="<?= $this->get_field_id('caelum') ?>">Caelum</label>
    </fieldset>
    <fieldset>
      <input type="checkbox" id="<?= $this->get_field_id('casa_codigo') ?>" name="<?= $this->get_field_name('casa_codigo') ?>" value="1" <?php checked('1', $instance['casa_codigo']) ?>>
      <label for="<?= $this->get_field_id('casa_codigo') ?>">Casa do Código</label>
    </fieldset>
    <fieldset style="margin: 10px 0 20px;">
      <input type="checkbox" id="<?= $this->get_field_id('hipsters') ?>" name="<?= $this->get_field_name('hipsters') ?>" value="1" <?php checked('1', $instance['hipsters']) ?>>
      <label for="<?= $this->get_field_id('hipsters') ?>">Hipsters</label>
    </fieldset>
  <?php
  }

  public function update($new_instance, $old_instance)
  {
    // Getting the selected fields (from dashboard)
    $instance = array();
    $instance['caelum'] = !empty($new_instance['caelum']) ? strip_tags($new_instance['caelum']) : '';
    $instance['casa_codigo'] = !empty($new_instance['casa_codigo']) ? strip_tags($new_instance['casa_codigo']) : '';
    $instance['hipsters'] = !empty($new_instance['hipsters']) ? strip_tags($new_instance['hipsters']) : '';

    return $instance;
  }

  public function widget($args, $instance)
  {
  ?>
    <section class="main_sponsors">
      <h3 class="sponsors_title">Sponsorships</h3>
      <ul class="sponsors_list">
        <?php if (!empty($instance['caelum'])) : ?>
          <li><img src="<?= plugin_dir_url(__FILE__) . '../images/caelum.svg' ?>" alt="Caelum"></li>
        <?php
        endif;
        if (!empty($instance['casa_codigo'])) :
        ?>
          <li><img src="<?= plugin_dir_url(__FILE__) . '../images/cdc.svg' ?>" alt="Casa do Código"></li>
        <?php
        endif;
        if (!empty($instance['hipsters'])) :
        ?>
          <li><img src="<?= plugin_dir_url(__FILE__) . '../images/hipsters.svg' ?>" alt="Hipsters"></li>
        <?php endif; ?>
      </ul>
    </section>
<?php
  }
}
