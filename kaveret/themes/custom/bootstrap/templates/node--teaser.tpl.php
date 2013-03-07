<article id="node-<?php print $node->nid; ?>" class="span3 thumbnail <?php print $classes; ?> clearfix"<?php print $attributes; ?>>
  <div class="border">
    <div class="border">
      <div class="border">
      <?php
        // Hide comments, tags, and links now so that we can render them later.
        hide($content['comments']);
        hide($content['links']);
        hide($content['field_tags']);
        print render($content);
      ?>
      </div>
    </div>
  </div>
</article> <!-- /.node -->
