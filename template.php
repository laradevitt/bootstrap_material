<?php

/**
 * @file
 * template.php
 */

define('JS_BOOTSTRAP_MATERIAL', 200);
 
/**
 * Preprocess html.tpl.php.
 *
 * @see bootstrap_material_js_alter()
 */
function bootstrap_material_preprocess_html(&$vars) {
  // Add class to help us style admin pages.
  if (path_is_admin(current_path())) {
    $vars['classes_array'][] = 'admin';
  }
  // Prepare to intiialize.
  drupal_add_js('(function ($){ $.material.init(); })(jQuery);', array(
    'type' => 'inline', 
    'group' => JS_BOOTSTRAP_MATERIAL, 
    'scope' => 'footer', 
    'weight' => 2
  ));
}

/**
 * Implements hook_js_alter().
 *
 * Make sure the MDB library files load last, then initialize.
 *
 * @see bootstrap_material_preprocess_html()
 */
function bootstrap_material_js_alter(&$js) { 
  
  $weight = 0;
  
  $files = array(
    'ripples.min.js',
    'material.js',
  );
  
  foreach ($files as $file) {
    $filename = path_to_theme() . '/bootstrap_material_design/js/' . $file;
    $js[$filename] = drupal_js_defaults($filename);
    $js[$filename]['group'] = JS_BOOTSTRAP_MATERIAL;
    $js[$filename]['scope'] = 'footer';
    $js[$filename]['weight'] = $weight;
    $weight++;
  }
  
  // Ensure we initialize only after files are loaded.
  foreach ($js as $key => $val) {
    if (is_int($key) && $val['group'] == JS_BOOTSTRAP_MATERIAL) {
      $js[$key]['weight'] = $weight;
      $weight++;
    }
  }
}

/**
 * Overrides theme_menu_local_tasks().
 *
 * Overrides Bootstrap module's override. Let's not turn the secondary menu 
 * into a pagination element.
 *
 * @see bootstrap_menu_local_tasks()
 */
function bootstrap_material_menu_local_tasks(&$variables) {
  $output = '';

  if (!empty($variables['primary'])) {
    $variables['primary']['#prefix'] = '<h2 class="element-invisible">' . t('Primary tabs') . '</h2>';
    $variables['primary']['#prefix'] .= '<ul class="tabs--primary nav nav-tabs">';
    $variables['primary']['#suffix'] = '</ul>';
    $output .= drupal_render($variables['primary']);
  }

  if (!empty($variables['secondary'])) {
    $variables['secondary']['#prefix'] = '<h2 class="element-invisible">' . t('Secondary tabs') . '</h2>';
    $variables['secondary']['#prefix'] .= '<ul class="tabs--secondary">';
    $variables['secondary']['#suffix'] = '</ul>';
    $output .= drupal_render($variables['secondary']);
  }

  return $output;
}

/**
 * Overrides theme_menu_local_action().
 *
 * Overrides Bootstrap module's override. All we're doing is making the action
 * link buttons bigger by removing the 'btn-xs' class.
 *
 * @see bootstrap_menu_local_action()
 */
function bootstrap_material_menu_local_action($variables) {
  $link = $variables['element']['#link'];

  $options = isset($link['localized_options']) ? $link['localized_options'] : array();

  // If the title is not HTML, sanitize it.
  if (empty($options['html'])) {
    $link['title'] = check_plain($link['title']);
  }

  $icon = _bootstrap_iconize_text($link['title']);

  // Format the action link.
  $output = '';
  if (isset($link['href'])) {
    // Turn link into a mini-button and colorize based on title.
    if ($class = _bootstrap_colorize_text($link['title'])) {
      if (!isset($options['attributes']['class'])) {
        $options['attributes']['class'] = array();
      }
      $string = is_string($options['attributes']['class']);
      if ($string) {
        $options['attributes']['class'] = explode(' ', $options['attributes']['class']);
      }
      $options['attributes']['class'][] = 'btn';
      $options['attributes']['class'][] = 'btn-' . $class;
      if ($string) {
        $options['attributes']['class'] = implode(' ', $options['attributes']['class']);
      }
    }
    // Force HTML so we can render any icon that may have been added.
    $options['html'] = !empty($options['html']) || !empty($icon) ? TRUE : FALSE;
    $output .= l($icon . $link['title'], $link['href'], $options);
  }
  else {
    $output .= $icon . $link['title'];
  }

  return $output;
}
