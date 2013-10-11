<?php
function isu_template_menu_preprocess_html(&$vars) {
  // Force killing IE compatibility mode
  $element = array(
    '#type' => 'html_tag',
    '#tag' => 'meta',
    '#attributes' => array(
      'http-equiv' => 'X-UA-Compatible',
      'content' => 'IE=edge,chrome=1',
    ),
  );
  
  drupal_add_html_head($element, 'meta_ie_render_engine');
  drupal_add_http_header('X-UA-Compatible', 'IE=edge,chrome=1');
}
