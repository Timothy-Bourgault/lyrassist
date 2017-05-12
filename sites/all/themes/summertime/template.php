<?php

function summertime_preprocess_page(&$vars) {

  if (arg(0) == 'admin' && (theme_get_setting('admin_right_column') == 0) && !(arg(1) == 'structure' && arg(2) == 'block')) {
    $vars['page']['sidebar_second'] = array();
  }
  if (arg(0) == 'admin' && (theme_get_setting('admin_left_column') == 0) && !(arg(1) == 'structure' && arg(2) == 'block')) {
    $vars['page']['sidebar_first'] = array();
  }

  $vars['registration_enabled'] = variable_get('user_register', 1);

  $vars['page']['footer']['developer']['#markup'] = '<span class="developer"><strong><a href="http://pixeljets.com" title="Go to pixeljets.com">Drupal theme developed  by Pixeljets</a></strong></span>';

}

/**
 * Override or insert variables into the node template.
 */
function summertime_preprocess_node(&$variables) {
  // Change this if you want to customize $submitted variable  
  $variables['submitted'] = t('by !username on !datetime',
    array('!username' => $variables['name'], '!datetime' => $variables['date']));
}

/**
 * Override or insert variables into the comment template.
 */
function summertime_preprocess_comment(&$variables) {
  $uri = entity_uri('comment', $variables['elements']['#comment']);
  $uri['options'] += array('attributes' => array(
      'class' => 'permalink',
      'rel' => 'bookmark',
      'title' => t('Permalink'),
    ));
  $variables['permalink'] = l('#', $uri['path'], $uri['options']);
}

/**
 * Generate the HTML representing a given menu item ID.
 *
 * An implementation of theme_menu_link()
 *
 */
function phptemplate_menu_link(array $variables) {

  $element = $variables['element'];
  $sub_menu = '';

  // If an item is a LOCAL TASK, render it as a tab
  if ($element['#type'] & MENU_IS_LOCAL_TASK) {
    $element['#title'] = '<span class="tab">' . check_plain($element['#title']) . '</span>';
    $element['#options']['html'] = TRUE;
  }

  if ($element['#below']) {
    $sub_menu = drupal_render($element['#below']);
  }
  $output = l($element['#title'], $element['#href'], $element['#options']);

  return '<li' . drupal_attributes($element['#attributes']) . '>' . $output . $sub_menu . "</li>\n";
}

/**
 * Duplicate of theme_menu_local_tasks() but adds clearfix to tabs.
 */
function summertime_menu_local_tasks(&$variables) {
  $output = '';

  if (!empty($variables['primary'])) {
    $variables['primary']['#prefix'] = '<h2 class="element-invisible">' . t('Primary tabs') . '</h2>';
    $variables['primary']['#prefix'] .= '<ul class="tabs primary clearfix">';
    $variables['primary']['#suffix'] = '</ul>';
    $output .= drupal_render($variables['primary']);
  }
  if (!empty($variables['secondary'])) {
    $variables['secondary']['#prefix'] = '<h2 class="element-invisible">' . t('Secondary tabs') . '</h2>';
    $variables['secondary']['#prefix'] .= '<ul class="tabs secondary clearfix">';
    $variables['secondary']['#suffix'] = '</ul>';
    $output .= drupal_render($variables['secondary']);
  }

  return $output;
}

function summertime_menu_link(array $variables) {
  $element = $variables['element'];
  $sub_menu = '';

  if ($element['#below']) {
    $sub_menu = drupal_render($element['#below']);
  }
  $element['#localized_options']['html'] = TRUE;
  $output = l('<span>' . $element['#title'] . '</span>', $element['#href'], $element['#localized_options']);

  return '<li' . drupal_attributes($element['#attributes']) . '>' . $output . $sub_menu . "</li>\n";
}

