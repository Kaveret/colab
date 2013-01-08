<?php
/**
 * @file
 * default_content.features.content.inc
 */

/**
 * Implements hook_content_defaults().
 */
function default_content_content_defaults() {
  $content = array();

  $content['aster_flower'] = (object) array(
    'title' => 'A beautiful flower',
    'status' => '1',
    'promote' => '0',
    'sticky' => '0',
    'type' => 'image',
    'language' => 'und',
    'created' => '1357337366',
    'comment' => '2',
    'translate' => '0',
    'machine_name' => 'aster_flower',
  );

  $content['custom_databases'] = (object) array(
    'title' => 'Database systems',
    'status' => '1',
    'promote' => '0',
    'sticky' => '0',
    'type' => 'proposition',
    'language' => '',
    'created' => '1357586518',
    'comment' => '2',
    'translate' => '0',
    'machine_name' => 'custom_databases',
    'body' => array(
      'und' => array(
        0 => array(
          'value' => '<p>Organise your data - it may be easier than you think. these days with quick and powerful tools you can turn heaps of tangled data into a useful database.</p>
',
          'summary' => NULL,
          'format' => 'editor_filtered_html',
          'safe_value' => '<p>Organise your data - it may be easier than you think. these days with quick and powerful tools you can turn heaps of tangled data into a useful database.</p>
',
          'safe_summary' => '',
        ),
      ),
    ),
  );

  $content['dickens_reader'] = (object) array(
    'title' => 'Reading aloud',
    'status' => '1',
    'promote' => '0',
    'sticky' => '0',
    'type' => 'proposition',
    'language' => '',
    'created' => '1357590012',
    'comment' => '1',
    'translate' => '0',
    'machine_name' => 'dickens_reader',
    'body' => array(
      'und' => array(
        0 => array(
          'value' => '<p>My mother&#39;s eyes aren&#39;t what they used to be and she would like someone to read Dickens to her in the evenings</p>
',
          'summary' => NULL,
          'format' => 'editor_filtered_html',
          'safe_value' => '<p>My mother&#39;s eyes aren&#39;t what they used to be and she would like someone to read Dickens to her in the evenings</p>
',
          'safe_summary' => '',
        ),
      ),
    ),
  );

  $content['drawing_pins'] = (object) array(
    'title' => 'Drawing pins',
    'status' => '1',
    'promote' => '0',
    'sticky' => '0',
    'type' => 'proposition',
    'language' => '',
    'created' => '1357586405',
    'comment' => '1',
    'translate' => '0',
    'machine_name' => 'drawing_pins',
    'body' => array(
      'und' => array(
        0 => array(
          'value' => '<p>Yes I really was a draftsman in a pin factory...</p>
',
          'summary' => NULL,
          'format' => 'editor_filtered_html',
          'safe_value' => '<p>Yes I really was a draftsman in a pin factory...</p>
',
          'safe_summary' => '',
        ),
      ),
    ),
  );

  $content['dreams_accelerator'] = (object) array(
    'exported_path' => 'dreams',
    'link' => array(
      'menu_name' => 'main-menu',
      'link_path' => 'node-name/dreams_accelerator',
      'router_path' => 'node/%',
      'link_title' => 'Dreams Accelerator',
      'options' => array(),
      'module' => 'menu',
      'hidden' => '0',
      'external' => '0',
      'has_children' => '1',
      'expanded' => '0',
      'weight' => '0',
      'identifier' => 'main-menu:node-name/dreams_accelerator',
    ),
    'title' => 'Dreams Accelerator',
    'status' => '1',
    'promote' => '0',
    'sticky' => '0',
    'type' => 'page',
    'language' => 'und',
    'created' => '1357489525',
    'comment' => '0',
    'translate' => '0',
    'machine_name' => 'dreams_accelerator',
    'body' => array(
      'und' => array(
        0 => array(
          'value' => '<p><span id="internal-source-marker_0.7626129253418111" style="font-size:15px;font-family:Arial;color:#000000;background-color:transparent;font-weight:normal;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;">Users will be able to state their dreams on their user profile using a multiple cardinality single line textfield, or perhaps a custom field which stores whether the wish is fulfilled or not!</span></p>
<p><br />
	<span style="font-size:15px;font-family:Arial;color:#000000;background-color:transparent;font-weight:normal;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;">Then on their user menu they will see a page for breaking these dreams down into achievable &lsquo;wishes&rsquo; with local currency prices they will award when the wish is marked fulfilled.</span></p>
<p><br />
	<span style="font-size:15px;font-family:Arial;color:#000000;background-color:transparent;font-weight:normal;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;">Users will browse the wishes exactly as they browse the offers.</span></p>
',
          'summary' => NULL,
          'format' => 'editor_full_html',
          'safe_value' => '<p><span id="internal-source-marker_0.7626129253418111" style="font-size:15px;font-family:Arial;color:#000000;background-color:transparent;font-weight:normal;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;">Users will be able to state their dreams on their user profile using a multiple cardinality single line textfield, or perhaps a custom field which stores whether the wish is fulfilled or not!</span></p>
<p><br />
	<span style="font-size:15px;font-family:Arial;color:#000000;background-color:transparent;font-weight:normal;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;">Then on their user menu they will see a page for breaking these dreams down into achievable &lsquo;wishes&rsquo; with local currency prices they will award when the wish is marked fulfilled.</span></p>
<p><br />
	<span style="font-size:15px;font-family:Arial;color:#000000;background-color:transparent;font-weight:normal;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;">Users will browse the wishes exactly as they browse the offers.</span></p>
',
          'safe_summary' => '',
        ),
      ),
    ),
  );

  $content['learning_centre'] = (object) array(
    'link' => array(
      'menu_name' => 'main-menu',
      'link_path' => 'node-name/learning_centre',
      'router_path' => 'node/%',
      'link_title' => 'Learning Centre',
      'options' => array(),
      'module' => 'menu',
      'hidden' => '0',
      'external' => '0',
      'has_children' => '0',
      'expanded' => '0',
      'weight' => '0',
      'identifier' => 'main-menu:node-name/learning_centre',
    ),
    'title' => 'Learning centre',
    'status' => '1',
    'promote' => '0',
    'sticky' => '0',
    'type' => 'page',
    'language' => 'und',
    'created' => '1357489418',
    'comment' => '0',
    'translate' => '0',
    'machine_name' => 'learning_centre',
    'body' => array(
      'und' => array(
        0 => array(
          'value' => '<p><span id="internal-source-marker_0.7626129253418111" style="font-size:15px;font-family:Arial;color:#000000;background-color:transparent;font-weight:normal;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;">A place for local and organisation specific knowledge to be stored. As with all generated content, pages can be liked and the authors rated for expertise. Later, the Learning centre will be networked so that books and appreciation can work between sites.</span></p>
',
          'summary' => NULL,
          'format' => 'editor_full_html',
          'safe_value' => '<p><span id="internal-source-marker_0.7626129253418111" style="font-size:15px;font-family:Arial;color:#000000;background-color:transparent;font-weight:normal;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;">A place for local and organisation specific knowledge to be stored. As with all generated content, pages can be liked and the authors rated for expertise. Later, the Learning centre will be networked so that books and appreciation can work between sites.</span></p>
',
          'safe_summary' => '',
        ),
      ),
    ),
  );

  $content['list_making_service'] = (object) array(
    'title' => 'List making services',
    'status' => '1',
    'promote' => '0',
    'sticky' => '0',
    'type' => 'proposition',
    'language' => '',
    'created' => '1357586034',
    'comment' => '2',
    'translate' => '0',
    'machine_name' => 'list_making_service',
    'body' => array(
      'und' => array(
        0 => array(
          'value' => '<p>Did it ever occur to you, that these days we use thousands of items in our every day busy lives? Have you ever tried to make a list to sort these things out, categorise them, and keep them under control?</p>
<p>Well i&#39;m the expert at this, and with me you&#39;ll never suffer from overload again - unless its an overload of lists!</p>
',
          'summary' => NULL,
          'format' => 'editor_filtered_html',
          'safe_value' => '<p>Did it ever occur to you, that these days we use thousands of items in our every day busy lives? Have you ever tried to make a list to sort these things out, categorise them, and keep them under control?</p>
<p>Well i&#39;m the expert at this, and with me you&#39;ll never suffer from overload again - unless its an overload of lists!</p>
',
          'safe_summary' => '',
        ),
      ),
    ),
  );

  $content['meeting_event'] = (object) array(
    'title' => 'Meeting',
    'status' => '1',
    'promote' => '0',
    'sticky' => '0',
    'type' => 'event',
    'language' => 'und',
    'created' => '1357485815',
    'comment' => '2',
    'translate' => '0',
    'machine_name' => 'meeting_event',
    'body' => array(
      'und' => array(
        0 => array(
          'value' => '<p>Same time, same place, same people, same old stuff.</p>
<p>This week we&#39;ll be negotiating strategy on some critical arising issues around interpersonal relationships between the group.</p>
<p>Dont&#39; forget to bring your notepads, laptops or whatever.</p>
<p>Password will be &#39;achievement&#39;</p>
<p>Simon&#39;s turn to bring the biscuits!</p>
',
          'summary' => NULL,
          'format' => 'editor_filtered_html',
          'safe_value' => '<p>Same time, same place, same people, same old stuff.</p>
<p>This week we&#39;ll be negotiating strategy on some critical arising issues around interpersonal relationships between the group.</p>
<p>Dont&#39; forget to bring your notepads, laptops or whatever.</p>
<p>Password will be &#39;achievement&#39;</p>
<p>Simon&#39;s turn to bring the biscuits!</p>
',
          'safe_summary' => '',
        ),
      ),
    ),
  );

  $content['need_paperclip_help'] = (object) array(
    'title' => 'Help with my paperclips',
    'status' => '1',
    'promote' => '0',
    'sticky' => '0',
    'type' => 'proposition',
    'language' => '',
    'created' => '1357589898',
    'comment' => '1',
    'translate' => '0',
    'machine_name' => 'need_paperclip_help',
    'body' => array(
      'und' => array(
        0 => array(
          'value' => '<p>AAArghh I&#39;m so frustrated and overwhelmed with ugly mis-shapen paperclips that I CAN&#39;T USE. Can anybody out there help, my productivity is really suffering.</p>
',
          'summary' => NULL,
          'format' => 'editor_filtered_html',
          'safe_value' => '<p>AAArghh I&#39;m so frustrated and overwhelmed with ugly mis-shapen paperclips that I CAN&#39;T USE. Can anybody out there help, my productivity is really suffering.</p>
',
          'safe_summary' => '',
        ),
      ),
    ),
  );

  $content['nesta_review'] = (object) array(
    'title' => 'NESTA more than money',
    'status' => '1',
    'promote' => '0',
    'sticky' => '0',
    'type' => 'document',
    'language' => 'und',
    'created' => '1357338028',
    'comment' => '2',
    'translate' => '0',
    'machine_name' => 'nesta_review',
    'body' => array(
      'und' => array(
        0 => array(
          'value' => 'Document surveys the field of \'more than money\' innovations.
',
          'summary' => NULL,
          'format' => NULL,
          'safe_value' => 'Document surveys the field of &#039;more than money&#039; innovations.
',
          'safe_summary' => '',
        ),
      ),
    ),
  );

  $content['new_bench'] = (object) array(
    'title' => 'New Bench to be installed on the common',
    'status' => '1',
    'promote' => '0',
    'sticky' => '0',
    'type' => 'story',
    'language' => 'und',
    'created' => '1357337576',
    'comment' => '2',
    'translate' => '0',
    'machine_name' => 'new_bench',
    'body' => array(
      'und' => array(
        0 => array(
          'value' => '<p>What do you know the city council has finally succomed to our begging and biscuits and allocated 200EUR for a bench on the north side of the common.</p>
<p>The family of recently deceased John Smith will be most relieved as they had nowhere to sit.</p>
',
          'summary' => NULL,
          'format' => 'editor_full_html',
          'safe_value' => '<p>What do you know the city council has finally succomed to our begging and biscuits and allocated 200EUR for a bench on the north side of the common.</p>
<p>The family of recently deceased John Smith will be most relieved as they had nowhere to sit.</p>
',
          'safe_summary' => '',
        ),
      ),
    ),
  );

  $content['paperclip_restoration'] = (object) array(
    'title' => 'Paperclip refurbishment',
    'status' => '1',
    'promote' => '0',
    'sticky' => '0',
    'type' => 'proposition',
    'language' => '',
    'created' => '1357586301',
    'comment' => '2',
    'translate' => '0',
    'machine_name' => 'paperclip_restoration',
    'body' => array(
      'und' => array(
        0 => array(
          'value' => '<p>Don&#39;t you just hate it when used paperclips lose their original geometry?</p>
<p>Of course it helps to be OCD, but I guarantee you&#39;ll not find a more expert, or more caring person when it comes to the work of paperclip restoration.</p>
',
          'summary' => NULL,
          'format' => 'editor_filtered_html',
          'safe_value' => '<p>Don&#39;t you just hate it when used paperclips lose their original geometry?</p>
<p>Of course it helps to be OCD, but I guarantee you&#39;ll not find a more expert, or more caring person when it comes to the work of paperclip restoration.</p>
',
          'safe_summary' => '',
        ),
      ),
    ),
  );

  $content['silver_surplus'] = (object) array(
    'title' => 'Silver Kilo',
    'status' => '1',
    'promote' => '0',
    'sticky' => '0',
    'type' => 'proposition',
    'language' => '',
    'created' => '1357586169',
    'comment' => '2',
    'translate' => '0',
    'machine_name' => 'silver_surplus',
    'body' => array(
      'und' => array(
        0 => array(
          'value' => '<p>Well I was into this whole &#39;Crash JP Morgan Buy Silver&#39; thing, but silver is&#39;n&#39;t going up these days</p>
',
          'summary' => NULL,
          'format' => 'editor_filtered_html',
          'safe_value' => '<p>Well I was into this whole &#39;Crash JP Morgan Buy Silver&#39; thing, but silver is&#39;n&#39;t going up these days</p>
',
          'safe_summary' => '',
        ),
      ),
    ),
  );

  $content['something_super'] = (object) array(
    'exported_path' => 'super-event',
    'title' => 'Something really super going on',
    'status' => '1',
    'promote' => '0',
    'sticky' => '0',
    'type' => 'event',
    'language' => 'und',
    'created' => '1357485998',
    'comment' => '2',
    'translate' => '0',
    'machine_name' => 'something_super',
    'body' => array(
      'und' => array(
        0 => array(
          'value' => '<p>everyone should attend! Its going to be really great. Be there or be square. I mean be there in the square. Bring your friends and something to drink.</p>
<p>Come before midnight!</p>
',
          'summary' => NULL,
          'format' => 'editor_filtered_html',
          'safe_value' => '<p>everyone should attend! Its going to be really great. Be there or be square. I mean be there in the square. Bring your friends and something to drink.</p>
<p>Come before midnight!</p>
',
          'safe_summary' => '',
        ),
      ),
    ),
  );

  $content['uzbekis_departure'] = (object) array(
    'title' => 'Uzbeki visitors to leave Thursday',
    'status' => '1',
    'promote' => '0',
    'sticky' => '0',
    'type' => 'story',
    'language' => 'und',
    'created' => '1357337790',
    'comment' => '2',
    'translate' => '0',
    'machine_name' => 'uzbekis_departure',
    'body' => array(
      'und' => array(
        0 => array(
          'value' => '<p>Our newly adopted family, the Pzgretzovs from Unzbekistan, will be leaving on thursday to continue their musical tour.</p>
<p>Please bring any parting gifts to The Cottage before then. Remember all gifts will have to be carried!</p>
',
          'summary' => NULL,
          'format' => 'editor_full_html',
          'safe_value' => '<p>Our newly adopted family, the Pzgretzovs from Unzbekistan, will be leaving on thursday to continue their musical tour.</p>
<p>Please bring any parting gifts to The Cottage before then. Remember all gifts will have to be carried!</p>
',
          'safe_summary' => '',
        ),
      ),
    ),
  );

return $content;
}
