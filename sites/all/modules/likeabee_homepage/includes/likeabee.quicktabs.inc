<?php
/**
 * Implements hook_quicktabs_default_quicktabs().
 */
function likeabee_homepage_quicktabs_default_quicktabs {
  $items = array_merge(_qt_aboutus(), 
               _qt_events(),
               _qt_groups(),
               _qt_movies())

  return $items;
}
/*http://hakaveret.org.il/admin/build/quicktabs/about_us/export */
function _qt_aboutus() {

	$items = array();
	$quicktabs = new stdClass;
	$quicktabs->disabled = FALSE; /* Edit this to true to make a default quicktabs disabled initially */
	$quicktabs->api_version = 1;
	$quicktabs->machine_name = 'about_us';
	$quicktabs->ajax = 1;
	$quicktabs->hide_empty_tabs = 0;
	$quicktabs->default_tab = FALSE;
	$quicktabs->title = 'אודות הכוורת';
	$quicktabs->tabs = array(
/*	  0 => array(
	    'vid' => 'groups_featured_groups',
	    'display' => 'block_5',
	    'args' => '',
	    'get_displays' => 'vdisp_0',
	    'title' => 'בחירת העורך',
	    'weight' => '-100',
	    'type' => 'view',
	  ),*/
	);
	$quicktabs->style = 'default';
	$items["about_us"] = $quicktabs;
	return $items;
}
/* http://hakaveret.org.il/admin/build/quicktabs/events/export */
function _qt_events() {
	$items = array();
	$quicktabs = new stdClass;
	$quicktabs->disabled = FALSE; /* Edit this to true to make a default quicktabs disabled initially */
	$quicktabs->api_version = 1;
	$quicktabs->machine_name = 'events';
	$quicktabs->ajax = 1;
	$quicktabs->hide_empty_tabs = 0;
	$quicktabs->default_tab = FALSE;
	$quicktabs->title = 'ארועים קרובים';
	$quicktabs->tabs = array(
/*	  0 => array(
	    'vid' => 'groups_featured_groups',
	    'display' => 'block_7',
	    'args' => '',
	    'get_displays' => 'vdisp_0',
	    'title' => 'בחירת העורך',
	    'weight' => '-100',
	    'type' => 'view',
	  ),
	  1 => array(
	    'vid' => 'groups_featured_groups',
	    'display' => 'block_13',
	    'args' => '',
	    'get_displays' => 'vdisp_1',
	    'title' => 'פופולרי',
	    'weight' => '-99',
	    'type' => 'view',
	  ),
	  2 => array(
	    'vid' => 'groups_featured_groups',
	    'display' => 'block_12',
	    'args' => '',
	    'get_displays' => 'vdisp_2',
	    'title' => 'הכל-כרונולגי',
	    'weight' => '-98',
	    'type' => 'view',
	  ),*/
	);
	$quicktabs->style = 'default';
	$items["events"] = $quicktabs;
	return $items;
}
/* http://hakaveret.org.il/admin/build/quicktabs/groups/export */
function _qt_groups() {
	$items = array();
	$quicktabs = new stdClass;
	$quicktabs->disabled = FALSE; /* Edit this to true to make a default quicktabs disabled initially */
	$quicktabs->api_version = 1;
	$quicktabs->machine_name = 'groups';
	$quicktabs->ajax = 1;
	$quicktabs->hide_empty_tabs = 0;
	$quicktabs->default_tab = FALSE;
	$quicktabs->title = 'groups';
	$quicktabs->tabs = array(
	 /* 0 => array(
	    'vid' => 'groups_featured_groups',
	    'display' => 'block_2',
	    'args' => '',
	    'get_displays' => 'vdisp_0',
	    'title' => 'בחירת העורך',
	    'weight' => '-100',
	    'type' => 'view',
	  ),
	  1 => array(
	    'vid' => 'groups_featured_groups',
	    'display' => 'block_11',
	    'args' => '',
	    'get_displays' => 'vdisp_1',
	    'title' => 'פופולרי',
	    'weight' => '-99',
	    'type' => 'view',
	  ),
	  2 => array(
	    'vid' => 'groups_featured_groups',
	    'display' => 'block_10',
	    'args' => '',
	    'get_displays' => 'vdisp_2',
	    'title' => 'הכל-כרונולגי',
	    'weight' => '-98',
	    'type' => 'view',
	  ),*/
	);
	$quicktabs->style = 'default';
	$items["groups"] = $quicktabs;
	return $items;
}
/* http://hakaveret.org.il/admin/build/quicktabs/movies/export */
function _qt_movies() {
	$items = array();
	$quicktabs = new stdClass;
	$quicktabs->disabled = FALSE; /* Edit this to true to make a default quicktabs disabled initially */
	$quicktabs->api_version = 1;
	$quicktabs->machine_name = 'movies';
	$quicktabs->ajax = 1;
	$quicktabs->hide_empty_tabs = 0;
	$quicktabs->default_tab = FALSE;
	$quicktabs->title = 'סירטוני הכוורת';
	$quicktabs->tabs = array(
	 /* 0 => array(
	    'vid' => 'groups_featured_groups',
	    'display' => 'block_6',
	    'args' => '',
	    'get_displays' => 'vdisp_0',
	    'title' => 'בחירת העורך',
	    'weight' => '-100',
	    'type' => 'view',
	  ),
	  1 => array(
	    'vid' => 'groups_featured_groups',
	    'display' => 'block_8',
	    'args' => '',
	    'get_displays' => 'vdisp_1',
	    'title' => 'פופולרי',
	    'weight' => '-99',
	    'type' => 'view',
	  ),
	  2 => array(
	    'vid' => 'groups_featured_groups',
	    'display' => 'block_9',
	    'args' => '',
	    'get_displays' => 'vdisp_2',
	    'title' => 'הכל-כרונולגי',
	    'weight' => '-98',
	    'type' => 'view',
	  ),*/
	);
	$quicktabs->style = 'default';
	$items["movies"] = $quicktabs;
	return $items;
}
