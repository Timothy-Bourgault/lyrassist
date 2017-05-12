<?php

/**
 * @file
 * Template overrides as well as (pre-)process and alter hooks for the
 * illuminati theme.
 */
function illuminati_form_alter(&$form, &$form_state, $form_id) {
  if($form_id == 'search_block_form') {
    $form['search_block_form']['#attributes']['placeholder'] = t('Search...');
  }
}

function illuminati_preprocess_button(&$variables) {
  $variables['element']['#attributes']['class'] = array();
  $variables['element']['#attributes']['class'][] = 'btn';


  // Special styles for Delete/Destructive Buttons.
  if (stristr($variables['element']['#value'], 'Delete') !== FALSE) {
    $variables['element']['#attributes']['class'][] = 'alert';
  }
}

function illuminati_preprocess_block(&$variables) {
  $variables['classes_array'][] = 'card-panel';
}

/**
* Returns the HTML for a button.
*/

function illuminati_button($variables) {
  $element = $variables['element'];
  $element['#attributes']['type'] = 'submit';
  element_set_attributes($element, array('id', 'name', 'value'));

  $element['#attributes']['class'][] = 'form-' . $element['#button_type'];
  if (!empty($element['#attributes']['disabled'])) {
    $element['#attributes']['class'][] = 'disabled';
  }

  return '<input' . drupal_attributes($element['#attributes']) . ' /> ';
}

function illuminati_textarea($variables) {
  $element = $variables['element'];
  element_set_attributes($element, array('id', 'name', 'cols', 'rows'));
  _form_set_class($element, array('form-textarea', 'materialize-textarea'));

  $wrapper_attributes = array(
    'class' => array('form-textarea-wrapper'),
  );

  // Add resizable behavior.
  if (!empty($element['#resizable'])) {
    drupal_add_library('system', 'drupal.textarea');
    $wrapper_attributes['class'][] = 'resizable';
  }

  $output = '<div' . drupal_attributes($wrapper_attributes) . '>';
  $output .= '<textarea' . drupal_attributes($element['#attributes']) . '>' . check_plain($element['#value']) . '</textarea>';
  $output .= '</div>';
  return $output;
}
function illuminati_breadcrumb($variables) {
  $breadcrumb = $variables['breadcrumb'];
  if (!empty($breadcrumb)) {
    $output = '<h2 class="element-invisible">' . t('You are here') . '</h2>';
    $output .= '<nav><div class="nav-wrapper"><div class="col s12 illuminati-breadcrumbs">' . implode(' » ', $breadcrumb) . '</div></div></nav>';
    return $output;
  }
}