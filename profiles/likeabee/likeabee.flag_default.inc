flag_default<?php


function likeabee_flag_default_flags() {debug('likeabee_flag_default_flags')
// Exported flag: "Join the event".
$flags['join_event'] = array(
  'content_type' => 'node',
  'title' => 'Join the event',
  'global' => '0',
  'types' => array(
    0 => 'groups_event',
  ),
  'flag_short' => 'Join The Event',
  'flag_long' => '',
  'flag_message' => 'Join The Event',
  'unflag_short' => 'Leave The Event',
  'unflag_long' => '',
  'unflag_message' => '',
  'unflag_denied_text' => '',
  'link_type' => 'toggle',
  'roles' => array(
    'flag' => array(
      0 => '2',
    ),
    'unflag' => array(
      0 => '2',
    ),
  ),
  'weight' => 0,
  'show_on_form' => 0,
  'access_author' => '',
  'show_on_page' => 0,
  'show_on_teaser' => 0,
  'show_contextual_link' => 0,
  'i18n' => 0,
  'api_version' => 2,
);

// Exported flag: "Content Viewed".
$flags['content_viewed'] = array(
  'content_type' => 'node',
  'title' => 'Content Viewed',
  'global' => '0',
  'types' => array(
    0 => 'discussion',
    1 => 'group_s_doccuments',
    2 => 'advpoll',
  ),
  'flag_short' => 'view',
  'flag_long' => '',
  'flag_message' => '',
  'unflag_short' => 'not view',
  'unflag_long' => '',
  'unflag_message' => '',
  'unflag_denied_text' => '',
  'link_type' => 'normal',
  'roles' => array(
    'flag' => array(
      0 => '2',
      1 => '3',
    ),
    'unflag' => array(
      0 => '2',
      1 => '3',
    ),
  ),
  'weight' => 0,
  'show_on_form' => 0,
  'access_author' => 'others',
  'show_on_page' => 0,
  'show_on_teaser' => 0,
  'show_contextual_link' => 0,
  'i18n' => 0,
  'api_version' => 2,
);
return $flags;
}
