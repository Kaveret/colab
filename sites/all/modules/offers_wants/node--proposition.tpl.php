<?php

/**
 * @file node.tpl.php
 *
 * Theme implementation to display a node.
 *
 * Available variables:
 * - $title: the (sanitized) title of the node.
 * - $content: Node body or teaser depending on $teaser flag.
 * - $picture: The authors picture of the node output from
 *   theme_user_picture().
 * - $date: Formatted creation date (use $created to reformat with format_date()).
 * - $links: Themed links like "Read more", "Add new comment", etc. output from theme_links().
 * - $name: Themed username of node author output from theme_username().
 * - $node_url: Direct url of the current node.
 * - $terms: the themed list of taxonomy term links output from theme_links().
 * - $submitted: themed submission information output from
 *   theme_node_submitted().
 *
 * Other variables:
 * - $node: Full node object. Contains data that may not be safe.
 * - $type: Node type, i.e. story, page, blog, etc.
 * - $comment_count: Number of comments attached to the node.
 * - $uid: User ID of the node author.
 * - $created: Time the node was published formatted in Unix timestamp.
 * - $zebra: Outputs either "even" or "odd". Useful for zebra striping in
 *   teaser listings.
 * - $id: Position of the node. Increments each time it's output.
 *
 * Node status variables:
 * - $teaser: Flag for the teaser state.
 * - $page: Flag for the full page state.
 * - $promote: Flag for front page promotion state.
 * - $sticky: Flags for sticky post setting.
 * - $status: Flag for published status.
 * - $comment: State of comment settings for the node.
 * - $readmore: Flags true if the teaser content of the node cannot hold the
 *   main body content.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 * - $is_admin: Flags true when the current user is an administrator.
 *
 * variables specific to this module.
 * $end: whether the node owner fixed a date for node expiry (otherwise the date was automatic)
 * $want: whether this proposition is an offer or want (boolean)
 * $offers_wants_categories an array of terms keyed by link to taxonomy/term/$tid
 * $offers_wants_types an array of terms keyed by link to taxonomy/term/$tid
 * $body
 */
if ($teaser) {
  $heading = "<h3><a href=\"$node_url\">$title</a></h3>";
}
//echo '<pre>'.print_r($content, 1).'<pre>';

?>
<!--node--proposition.tpl.php-->
<style>.link-wrapper ul li{display:block} #comments{clear:both;}</style>
<div class = "<?php print $classes; ?>">
  <?php if ($teaser) print $heading; ?>
  <?php print $submitted; ?>

  <div class="right-user-block">
    <?php print $user_picture; ?>
    <div class="link-wrapper">
      <?php print render($content['links']) ?>
    </div>
  </div>
  <?php print render($body); ?>
  <hr />
  <?php print render($content['end']); ?>

  <?php if ($image) print render($image) ?>

  <?php print render($content['comments']); ?>
    
</div>
<!--node--proposition.tpl.php-->
