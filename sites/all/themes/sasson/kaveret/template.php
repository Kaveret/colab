<?php
    function kaveret_block_view_alter(&$data, $block) {
    if($block->title != '<none>') { // condition, so all block titles won't be translated
    $block->title = t($block->title);
    }
    }
    function YOURTHEME_form_alter(&$form, &$form_state, $form_id) {
  if ($form_id == 'search_block_form') {
    $form['search_block_form']['#title'] = t('Search'); // Change the text on the label element
   
   
    $form['search_block_form']['#default_value'] = t('Searchdefault'); // Set a default value for the textfield
    $form['actions']['submit']['#value'] = t('GO!'); // Change the text on the submit button
  
  }
}
/*function kaveret_preprocess_page(&$vars) {

       
        if($vars['node']->type=='about_the_group_pages')
        {
                $vars['node']->title=false;
       

        }
    }*/
    

?>

