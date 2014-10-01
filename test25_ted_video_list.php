<!-- Located on the test25 server at /video-list-->

<?php

$view = new view();
$view->name = 'video_list';
$view->description = '';
$view->tag = 'default';
$view->base_table = 'node';
$view->human_name = 'Video List';
$view->core = 7;
$view->api_version = '3.0';
$view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

/* Display: Master */
$handler = $view->new_display('default', 'Master', 'default');
$handler->display->display_options['title'] = 'Video List';
$handler->display->display_options['use_more_always'] = FALSE;
$handler->display->display_options['group_by'] = TRUE;
$handler->display->display_options['access']['type'] = 'perm';
$handler->display->display_options['cache']['type'] = 'none';
$handler->display->display_options['query']['type'] = 'views_query';
$handler->display->display_options['exposed_form']['type'] = 'basic';
$handler->display->display_options['pager']['type'] = 'full';
$handler->display->display_options['pager']['options']['items_per_page'] = '';
$handler->display->display_options['pager']['options']['offset'] = '0';
$handler->display->display_options['pager']['options']['id'] = '0';
$handler->display->display_options['pager']['options']['quantity'] = '9';
$handler->display->display_options['style_plugin'] = 'views_bootstrap_table_plugin_style';
$handler->display->display_options['style_options']['grouping'] = array(
  0 => array(
    'field' => 'term_node_tid',
    'rendered' => 1,
    'rendered_strip' => 0,
  ),
);
$handler->display->display_options['style_options']['columns'] = array(
  'title' => 'title',
  'term_node_tid' => 'term_node_tid',
);
$handler->display->display_options['style_options']['default'] = '-1';
$handler->display->display_options['style_options']['info'] = array(
  'title' => array(
    'sortable' => 0,
    'default_sort_order' => 'asc',
    'align' => '',
    'separator' => '',
    'empty_column' => 0,
  ),
  'term_node_tid' => array(
    'align' => '',
    'separator' => '',
    'empty_column' => 0,
  ),
);
$handler->display->display_options['style_options']['bootstrap_styles'] = array(
  'striped' => 0,
  'bordered' => 0,
  'hover' => 0,
  'condensed' => 0,
);
/* Field: Content: Title */
$handler->display->display_options['fields']['title']['id'] = 'title';
$handler->display->display_options['fields']['title']['table'] = 'node';
$handler->display->display_options['fields']['title']['field'] = 'title';
$handler->display->display_options['fields']['title']['label'] = '';
$handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
$handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
$handler->display->display_options['fields']['title']['element_label_colon'] = FALSE;
/* Field: Content: All taxonomy terms */
$handler->display->display_options['fields']['term_node_tid']['id'] = 'term_node_tid';
$handler->display->display_options['fields']['term_node_tid']['table'] = 'node';
$handler->display->display_options['fields']['term_node_tid']['field'] = 'term_node_tid';
$handler->display->display_options['fields']['term_node_tid']['label'] = '';
$handler->display->display_options['fields']['term_node_tid']['exclude'] = TRUE;
$handler->display->display_options['fields']['term_node_tid']['alter']['alter_text'] = TRUE;
$handler->display->display_options['fields']['term_node_tid']['alter']['text'] = '<b>[term_node_tid-name]</b>';
$handler->display->display_options['fields']['term_node_tid']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['term_node_tid']['vocabularies'] = array(
  'vocabulary_12' => 0,
  'vocabulary_11' => 0,
  'ebo_categories' => 0,
  'vocabulary_10' => 0,
  'vocabulary_15' => 0,
  'file_type' => 0,
  'interfaces_doc_level_1' => 0,
  'interface_doc_level_2' => 0,
  'interfaces_doc_level_3' => 0,
  'vocabulary_9' => 0,
  'vocabulary_31' => 0,
  'vocabulary_19' => 0,
  'vocabulary_23' => 0,
  'vocabulary_5' => 0,
  'product' => 0,
  'vocabulary_7' => 0,
  'vocabulary_18' => 0,
  'vocabulary_22' => 0,
  'vocabulary_32' => 0,
  'vocabulary_17' => 0,
  'vocabulary_33' => 0,
  'vertical' => 0,
  'vocabulary_27' => 0,
  'vocabulary_26' => 0,
  'vocabulary_29' => 0,
  'vocabulary_28' => 0,
  'webinar_category' => 0,
);
/* Sort criterion: Content: Post date */
$handler->display->display_options['sorts']['created']['id'] = 'created';
$handler->display->display_options['sorts']['created']['table'] = 'node';
$handler->display->display_options['sorts']['created']['field'] = 'created';
$handler->display->display_options['sorts']['created']['order'] = 'DESC';
/* Filter criterion: Content: Published */
$handler->display->display_options['filters']['status']['id'] = 'status';
$handler->display->display_options['filters']['status']['table'] = 'node';
$handler->display->display_options['filters']['status']['field'] = 'status';
$handler->display->display_options['filters']['status']['value'] = 1;
$handler->display->display_options['filters']['status']['group'] = 1;
$handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
/* Filter criterion: Content: Type */
$handler->display->display_options['filters']['type']['id'] = 'type';
$handler->display->display_options['filters']['type']['table'] = 'node';
$handler->display->display_options['filters']['type']['field'] = 'type';
$handler->display->display_options['filters']['type']['value'] = array(
  'video' => 'video',
);

/* Display: Page */
$handler = $view->new_display('page', 'Page', 'page');
$handler->display->display_options['path'] = 'video-list';
