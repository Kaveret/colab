<?php

class views_handler_field_dream_state extends views_handler_field_field {

  function option_definition() {
    $options = parent::option_definition();
    $options['advanced_render'] = 1;
    return $options;
  }

  function options_form(&$form, &$form_state) {
    $form['advanced_render'] = array(
      '#title' => t('Render as button'),
      '#description' => t("If unchecked this field merely shows the 'state' of the task."),
      '#type' => 'checkbox',
      '#return_value' => 1,
      '#default_value' => $this->options['advanced_render']
    );
    parent::options_form($form, $form_state);
  }

  function query() {
    $this->ensure_my_table();
  }

  function render_item($count, $item) {debug('helloooo');
    return render($item['rendered']);
  }

  function advanced_render($row) {
    $state = $row->_field_data['nid']['entity']->wish_state[LANGUAGE_NONE][0]['value'];
    if ($output = likeabee_dreams_action_form($row->nid, $state)) {
      return drupal_render($output);
    }
    return $this->render($row);
  }

  function render($row) {
    $node = node_load($row->nid);
    $field = field_view_field('node', $node, WISH_STATE_FIELD_NAME);
    //oops this feels so wrong but I have to turn the field title off!
    $field['#label_display'] = 'hidden';
    return drupal_render($field);
  }
}