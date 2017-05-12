<?php

/**
* Implementation of THEMENAME_form_system_theme_settings_alter() function.
*/
function summertime_form_system_theme_settings_alter(&$form, &$form_state) {

  $form['tnt_container'] = array(
    '#type' => 'fieldset',
    '#title' => t('Column settings'),
    '#description' => t('Sometimes the content of admin section is much wider than the central column (especially on "views" and "theme" configuration pages), and as a result the content is cut. Here you can choose if you want the columns to be displayed in admin section, or not.'),
    '#collapsible' => TRUE,
    '#collapsed' => false,
  );

  // General Settings
  $form['tnt_container']['admin_left_column'] = array(
    '#type' => 'checkbox',
    '#title' => t('Show left column in admin section'),
    '#default_value' => theme_get_setting('admin_left_column'),
  );

  $form['tnt_container']['admin_right_column'] = array(
    '#type' => 'checkbox',
    '#title' => t('Show right column in admin section'),
    '#default_value' => theme_get_setting('admin_right_column'),
  );
}
?>
