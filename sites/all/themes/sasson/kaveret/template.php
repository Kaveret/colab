<?php
    function kaveret_block_view_alter(&$data, $block) {
    if($block->title != '<none>') { // condition, so all block titles won't be translated
    $block->title = t($block->title);
    }
    }

