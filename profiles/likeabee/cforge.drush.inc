<?php
// $Id: variable.drush.inc,v 1.19 2010/03/25 02:48:17 weitzman Exp $

/**
 * Implementation of hook_drush_help().
 *
 * This function is called whenever a drush user calls
 * 'drush help <name-of-your-command>'
 *
 * @param
 *   A string with the help section (prepend with 'drush:')
 *
 * @return
 *   A string with the help text for your command.
 */
function cforge_drush_help($section) {
  switch ($section) {
    case 'drush:cforge-mail':
      return dt('print the email addresses of all the members, by role rid');
  }
}

/**
 * Implementation of hook_drush_command().
 *
 * In this hook, you specify which commands your
 * drush module makes available, what it does and
 * description.
 *
 * Notice how this structure closely resembles how
 * you define menu hooks.
 *
 * @return
 *   An associative array describing your command(s).
 */
function cforge_drush_command() {
  $items['cforge-mail'] = array(
    'callback' => 'drush_cforge_contact_role',
    'description' => 'print the email addresses of all the members, by role rid',
    'arguments' => array(
      'rid' => 'the role id of the members you want to list',
    ),
    'examples' => array(
      'drush cforge-mail 4' => 'print the email addresses of all committee members',
    ),
  );
  $items['cforge-reset'] = array(
    'callback' => 'drush_cforge_reset',
    'description' => 'Reset certain elements of the cforge site.',
    'arguments' => array(
      'type' => 'translations, permissions, views, blocks, menus, or all',
      'param' => '(optional) depends on above, or all',
    ),
    'examples' => array(
      'drush cforge-reset permissions 3' => 'reset permissions for trader role',
      'drush cforge-reset mails' => 'mail templates back to their localised originals defined in cforge.install',
      'drush cforge-reset blocks sidebar_first' => 'replace all the blocks in the left region',
    ),
    'options' => array(
        '--hard' => 'hard reset'
    )
  );
  return $items;
}

function drush_cforge_contact_role($rid) {
  $result = db_query("SELECT mail from {users} u LEFT JOIN {users_roles} ur ON u.uid = ur.uid WHERE ur.rid = %d", $rid);
  while ($mail = db_result($result)) $output .= $mail .', ';
  drush_print($output);
}


function drush_cforge_reset($type, $option = NULL) {
  module_load_install('cforge');
  $function = 'cforge_reset_'.$type;
  drush_print($function($option));
  if (count(batch_get())) drush_backend_batch_process();
}