<?php

/*
 * render the field as an image, with a fixed size.
 * This could make better use of css with drupal_add_css, and returning an empty div with a classname
 */

class views_handler_field_cfdocs_access extends views_handler_field {

  var $open;
  var $locked;

  function construct() {
    parent::construct();
    //this is added by something else, at least usually
    $this->additional_fields['sticky'] = 'sticky';
    $this->additional_fields['nid'] = 'nid';
    $this->open = '<img src = "'.url(drupal_get_path('module', 'cforge_docs') . '/open.png').'" width = "16" /> ';
    $this->locked = '<img src = "'.url(drupal_get_path('module', 'cforge_docs') . '/locked.png').'" width = "16" /> ';
  }

  function query() {
    $this->ensure_my_table();
    $this->add_additional_fields();
  }

  function render($row) {
    $dest = 'node/'.$row->nid;
    $return = '';
    $row->sticky = $row->{$this->aliases['sticky']};
    //perhaps we should load the node and then do node_access, but this is quicker
    if ($row->sticky) {
      if (cforge_docs_access('view', $row)) {
        $return = l($this->open, $dest, array('html' => TRUE));
      }
      else {
        return $this->locked;
      }
    }
    return $return . l(t('view'), $dest);
  }
}
